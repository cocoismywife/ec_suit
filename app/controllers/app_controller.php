<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * This is a placeholder class.
 * Create the same file in app/app_controller.php
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.cake.libs.controller
 * @link http://book.cakephp.org/view/957/The-App-Controller
 */
class AppController extends Controller {
	function beforeRender() {
		Configure::write ( 'debug', 0 );
		if (array_key_exists ( 'prefix', $this->params ) && $this->params ['prefix'] == 'admin') {
			$this->set ( 'model_name', $this->modelClass );
		} else {
			$this->layout = 'xml/xml';
			$this->set ( 'root', strtolower ( Inflector::pluralize ( $this->modelKey ) ) );
			$this->RequestHandler->respondAs ( 'text/xml', array ('charset' => 'utf8' ) );
		}
	}
	
	function index() {
		$this->_all ();
	}
	
	function all() {
		$this->_all ();
	}
	
	function _all() {
		$list = ClassRegistry::init ( $this->modelClass )->find ( 'all' );
		$this->set ( 'list', $list );
		$this->log ( $list );
	}
	
	function view($id = null) {
		$model = ClassRegistry::init ( $this->modelClass )->findById ( $id );
		$this->set ( 'model', $model );
	}
	
	function admin_index() {
		$this->_all ();
	}
	
	function admin_all() {
		$this->log ( $this->modelClass );
		$this->_all ();
	}
	
	function admin_view($id) {
		ClassRegistry::init ( $this->modelClass )->id = $id;
		$this->set ( 'model', ClassRegistry::init ( $this->modelClass )->read () );
	}
	
	function admin_add() {
		if (! empty ( $this->data )) {
			if (ClassRegistry::init ( $this->modelClass )->save ( $this->data )) {
				$this->Session->setFlash ( 'Your post has been saved.' );
				$this->redirect ( array ('action' => 'admin_all' ) );
			}
		}
	}
	
	function admin_edit($id = null) {
		ClassRegistry::init ( $this->modelClass )->id = $id;
		if (empty ( $this->data )) {
			$this->data = ClassRegistry::init ( $this->modelClass )->read ();
		} else {
			if (ClassRegistry::init ( $this->modelClass )->save ( $this->data )) {
				$this->Session->setFlash ( 'Your post has been updated.' );
				$this->redirect ( array ('action' => 'admin_all' ) );
			}
		}
	}
	
	function admin_delete($id) {
		$this->log ( $this->modelClass );
		if (ClassRegistry::init ( $this->modelClass )->delete ( $id )) {
			$this->Session->setFlash ( 'The post with id: ' . $id . ' has been deleted.' );
			$this->redirect ( array ('action' => 'admin_all' ) );
		}
	}
}
