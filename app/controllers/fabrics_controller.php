<?php
class FabricsController extends AppController {
	var $helpers = array ('Html', 'Xml', 'Javascript', 'Paginator' );
	var $components = array ('RequestHandler', 'Session' );
	var $paginate = array ('fields' => array ('id', 'code', 'name' ), 'limit' => 1, 'page' => 1, 'order' => array ('id' => 'desc' ) );
	
	function admin_all() {
		$this->log ( $this->modelClass );
		$this->_all ();
		$this->set ( 'navClass', '1' );
	}
	
	function _all() {
		$list = ClassRegistry::init ( $this->modelClass )->find ( 'all', array ('fields' => array ('id', 'code', 'name' ) ) );
		$list = $this->paginate ();
		$this->set ( 'list', $list );
		$this->log ( $list );
	}
	
	function admin_view($id) {
		$currentModel = ClassRegistry::init ( $this->modelClass );
		$currentModel->id = $id;
		$this->log ( 'Id: ' . $id );
		$this->data = $currentModel->read ();
		$this->log ( $this->data );
	}
	
	function admin_input() {
		$this->set ( 'navClass', '2' );
		$currentModel = ClassRegistry::init ( $this->modelClass );
		
		for($i = 0, $size = sizeof ( $currentModel->parent_name ); $i < $size; ++ $i) {
			//foreach ( $currentModel->parent_name as $parent_name => $value ) {
			$parentModel = ClassRegistry::init ( $currentModel->parent_name [$i] );
			$parentList = $parentModel->find ( 'list' );
			$this->set ( 'parentList'.$i, $parentList );
			$this->log ( $parentList );
		}
		
		if (! empty ( $this->data )) {
			$currentModel->set ( $this->data );
			if ($currentModel->validates ()) {
				$this->render ( 'admin_confirm' );
				return;
			}
		}
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
	
	function admin_finish() {
		$this->set ( 'navClass', '2' );
	}
	
	function admin_confirm() {
		$currentModel = ClassRegistry::init ( $this->modelClass );
		$this->set ( 'navClass', '2' );
		$currentModel->validates ();
		$this->log ( $currentModel->invalidFields () );
		if ($currentModel->validates ()) {
			$this->log ( $this->data );
		} else {
			$this->requestAction ( 'input' );
		}
	}
}