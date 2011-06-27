<?php
class OrdersController extends AppController {
	var $helpers = array ('Html', 'Xml', 'Javascript', 'Paginator', 'Ajax' );
	var $components = array ('RequestHandler', 'Session' );
	var $paginate = array ('fields' => array ('id', 'first_name', 'last_name', 'email', 'purchase_date' ), 'limit' => 5, 'page' => 1, 'order' => array ('id' => 'desc' ) );
	
	function admin_all() {
		$this->log ( $this->modelClass );
		$this->_all ();
		$this->set ( 'navClass', '3' );
	}
	
	function _all($condition = array()) {
		//		$list = ClassRegistry::init ( $this->modelClass )->find ( 'all', array ('fields' => array ('id', 'code', 'name' ) ) );
		if ($this->Session->check ( 'limit' )) {
			$this->paginate ['limit'] = $this->Session->read ( 'limit' );
		} else {
			$this->paginate ['limit'] = 5;
		}
		$list = $this->paginate ( $this->modelClass, $condition );
		$this->set ( 'list', $list );
		$this->log ( $this->paginate );
		$this->log ( $list );
	}
	
	function admin_view($id) {
		$currentModel = ClassRegistry::init ( $this->modelClass );
		$currentModel->id = $id;
		$this->data = $currentModel->read ();
		//		$this->get_name_of_select ();
		$this->log ( $this->data );
	}
	
	function admin_page_limit() {
		$numberOfRow = $this->data ['number_row'];
		if ($numberOfRow != '') {
			$this->Session->write ( 'limit', $numberOfRow );
		}
	}
	
	function _query($condition, $content) {
		switch ($condition) {
			case "full_name" :
			case "full_name_kana" :
			case "address" :
				$this->_all ( array ('Order.address LIKE' => '%' . $content . '%' ) );
				break;
			case "mobile_number" :
			case "email" :
		}
	}
	
	function admin_query($condition = null, $content = null) {
		$this->log ( 'Order' );
		$this->log ( $this->data );
		if (null == $condition) {
			$condition = $this->data [$this->modelClass] ['query_condition'];
		}
		if (null == $content) {
			$content = $this->data [$this->modelClass] ['query_content'];
		}
		$this->_query ( $condition, $content );
	}
	
	function admin_price_range($price) {
	}
	
	function admin_add() {
		$currentModel = ClassRegistry::init ( $this->modelClass );
		
		if (empty ( $this->data )) {
			for($i = 0, $size = sizeof ( ClassRegistry::init ( 'OrderDetail' )->parent_name ); $i < $size; ++ $i) {
				$parentModel = ClassRegistry::init ( ClassRegistry::init ( 'OrderDetail' )->parent_name [$i] );
				$parentList = $parentModel->find ( 'list' );
				$this->set ( 'parentList' . $i, $parentList );
				$this->log ( $parentList );
			}
			
			$survey = ClassRegistry::init ( 'Survey' )->findByName ( 'Default' );
			$this->set ( 'survey', $survey );
			$this->log ( $survey );
		} else {
			$this->log ( $this->data );
			$order = $currentModel->save ( $this->data );
			if (! empty ( $order )) {
				// save order detail
				$this->data ['OrderDetail'] ['order_id'] = $currentModel->id;
				$currentModel->OrderDetail->save ( $this->data );
				
				// save survey answer
				for($i = 0; $i < sizeof ( $this->data ['Question'] ); $i ++) {
					$this->data ['Answer'] [$i] ['order_id'] = $currentModel->id;
					$this->data ['Answer'] [$i] ['question_id'] = $this->data ['Question'] [$i] ['id'];
				}
				$currentModel->Answer->saveAll ( $this->data ['Answer'] );
				$this->Session->setFlash ( 'Your post has been saved.' );
				
				$this->log ( $this->data );
				
				$this->redirect ( array ('action' => 'admin_all' ) );
			}
		}
	}
	
	function get_name_of_select() {
		$color_id = $this->data [$this->modelClass] ['color_id'];
		$color = ClassRegistry::init ( 'Color' )->findById ( $color_id, array ('fields' => 'name' ) );
		$colorName = $color ['Color'] ['name'];
		
		$big_tracery_id = $this->data [$this->modelClass] ['big_tracery_id'];
		$bigTracery = ClassRegistry::init ( 'BigTracery' )->findById ( $big_tracery_id, array ('fields' => 'name' ) );
		$traceryName = $bigTracery ['BigTracery'] ['name'];
		
		$small_tracery_id = $this->data [$this->modelClass] ['small_tracery_id'];
		if ($small_tracery_id != '') {
			$smallTracery = ClassRegistry::init ( 'SmallTracery' )->findById ( $small_tracery_id, array ('fields' => 'name' ) );
			$smallTraceryName = $smallTracery ['SmallTracery'] ['name'];
			$traceryName = $smallTraceryName;
		
		//			$traceryName = join ( '、', array ($traceryName, $smallTraceryName ) );
		}
		
		$season_id = $this->data [$this->modelClass] ['season_id'];
		$season = ClassRegistry::init ( 'Season' )->findById ( $season_id, array ('fields' => 'name' ) );
		$seasonName = $season ['Season'] ['name'];
		
		$big_brand_id = $this->data [$this->modelClass] ['big_brand_id'];
		$bigBrand = ClassRegistry::init ( 'BigBrand' )->findById ( $this->data [$this->modelClass] ['big_brand_id'], array ('fields' => 'name' ) );
		$brandName = $bigBrand ['BigBrand'] ['name'];
		
		$small_brand_id = $this->data [$this->modelClass] ['small_brand_id'];
		if ($small_brand_id != '') {
			$smallBrand = ClassRegistry::init ( 'SmallBrand' )->findById ( $this->data [$this->modelClass] ['small_brand_id'], array ('fields' => 'name' ) );
			$smallBrandName = $smallBrand ['SmallBrand'] ['name'];
			$brandName = $smallBrandName;
		
		//			$brandName = join ( '、', array ($brandName, $smallBrandName ) );
		}
		
		$this->data [$this->modelClass] ['color_name'] = $colorName;
		$this->data [$this->modelClass] ['tracery_name'] = $traceryName;
		$this->data [$this->modelClass] ['season_name'] = $seasonName;
		$this->data [$this->modelClass] ['brand_name'] = $brandName;
		
		$this->log ( $this->data );
	}
	
	function admin_confirm() {
		$currentModel = ClassRegistry::init ( $this->modelClass );
		$this->set ( 'navClass', '2' );
		
		$this->get_name_of_select ();
	}
	
	function admin_finish() {
		$this->set ( 'navClass', '2' );
	}
	
	function admin_save() {
		$currentModel = ClassRegistry::init ( $this->modelClass );
		
		if (empty ( $this->data )) {
			foreach ( $currentModel->parent_name as $parent_name => $value ) {
				$parentModel = ClassRegistry::init ( $currentModel->parent_name [$parent_name] );
				$parentList = $parentModel->find ( 'list' );
				$this->set ( "parentList", $parentList );
				$this->log ( $parentList );
			}
		} else {
			if ($currentModel->save ( $this->data )) {
				$this->Session->setFlash ( 'Your post has been saved.' );
				$this->redirect ( array ('action' => 'admin_finish' ) );
			}
		}
	}
	
	function admin_update_small_traceries() {
		$this->log ( 'admin_update_small_traceries' );
		$this->log ( $this->data );
		$this->log ( $this->params );
		if (! empty ( $this->data [$this->modelClass] ['big_tracery_id'] )) {
			$big_tracery_id = ( int ) $this->data ['Fabric'] ['big_tracery_id'];
			$options = ClassRegistry::init ( 'SmallTracery' )->find ( 'list', array ('conditions' => array ('SmallTracery.big_tracery_id' => $big_tracery_id ) ) );
			$this->set ( 'options', $options );
			$this->log ( $options );
		}
	}
	
	function admin_update_small_brands() {
		$this->log ( 'admin_update_small_traceries' );
		$this->log ( $this->data );
		$this->log ( $this->params );
		if (! empty ( $this->data [$this->modelClass] ['big_brand_id'] )) {
			$big_brand_id = ( int ) $this->data ['Fabric'] ['big_brand_id'];
			$options = ClassRegistry::init ( 'SmallBrand' )->find ( 'list', array ('conditions' => array ('SmallBrand.big_brand_id' => $big_brand_id ) ) );
			$this->set ( 'options', $options );
			$this->log ( $options );
		}
	}
}