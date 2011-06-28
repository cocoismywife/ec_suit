<?php
class SmallTraceriesController extends AppController {
	var $helpers = array ('Html', 'Xml', 'Ajax' );
	var $components = array ('RequestHandler', 'Session' );
	
	function view($big_tracery_id = null, $small_tracery_id = null) {
		if ($small_tracery_id != null) {
			$model = ClassRegistry::init ( $this->modelClass )->find ( 'all', array ('conditions' => array ('SmallTracery.big_tracery_id' => $big_tracery_id, 'SmallTracery.id = ' => $small_tracery_id ) ) );
		} else {
			$model = ClassRegistry::init ( $this->modelClass )->find ( 'all', array ('conditions' => array ('SmallTracery.big_tracery_id' => $big_tracery_id ) ) );
		}
		$this->set ( 'model', $model );
	}
}