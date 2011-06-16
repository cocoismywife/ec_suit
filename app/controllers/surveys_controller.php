<?php
class SurveysController extends AppController {
	var $helpers = array ('Html', 'Xml' );
	var $components = array ('RequestHandler', 'Session' );
	
	function admin_all() {
		$this->log ( $this->modelClass );
		$this->_all ();
	}
	
	function admin_add_question() {
		$currentModel = ClassRegistry::init ( $this->modelClass );
		
		if (empty ( $this->data )) {
			$list = $currentModel->find ( 'list' );
			$this->set ( 'list', $list );
			
			$questions = ClassRegistry::init ( 'Question' )->find ( 'list' );
			$this->set ( 'questions', $questions );
		} else {
			$this->log ( $this->data );
//			$currentModel->id = $this->data [$this->modelClass] ['id'];
//			$this->data = $currentModel->read ();
			
			if ($currentModel->save ( $this->data, false )) {
				$this->Session->setFlash ( 'Your post has been saved.' );
				$this->redirect ( array ('action' => 'admin_all' ) );
			}
		}
	}

}