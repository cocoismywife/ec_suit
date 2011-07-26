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
    var $allowUploadImage = array(
        'Gender', 'Style', 'Lining', 'LiningFabric', 'Collar', 'Pocket', 'Hem', 'Button', 'Ty', 'Shirt');
    var $displayModelName;
    
    function beforeFilter() {}
    
    function beforeRender() {
        Configure::write('debug', 0);
        if (isset($this->params['prefix']) && $this->params['prefix'] == 'admin') {
            if ($this->displayModelName != null) {
                $this->set('model_name', $this->displayModelName);
            } else {
                $this->set('model_name', $this->modelClass);
            }
            if (isset($this->params['isAjax']) && $this->params['isAjax']) {
                $this->layout = 'empty';
            } else if (($this->modelClass == 'Fabric' && $this->params['action'] != 'admin_export') || ($this->modelClass == 'Order' && $this->params['action'] != 'admin_add' && $this->params['action'] != 'admin_export')) {
                $this->layout = 'admin/default';
            }
        } else {
            if ($this->params['controller'] == 'users') {
                $this->layout = 'empty';
            } else {
                $this->layout = 'xml/xml';
                $this->set('root', strtolower(Inflector::pluralize($this->modelKey)));
                $this->RequestHandler->respondAs('text/xml', 
                        array(
                            'charset' => 'utf8'));
            }
        }
        $this->set('controller_name', $this->params['controller']);
    }
    
    function index() {
        $this->_all();
    }
    
    function all() {
        $this->_all();
        $this->render('index');
        return;
    }
    
    function _all() {
        $list = ClassRegistry::init($this->modelClass)->find('all');
        $this->set('list', $list);
    }
    
    function view($id = null) {
        $model = ClassRegistry::init($this->modelClass)->findById($id);
        $this->set('model', $model);
    }
    
    function admin_index() {
        $this->_all();
    }
    
    function admin_all() {
        $this->_all();
        $this->render('admin_index');
        return;
    }
    
    function admin_view($id) {
        $currentModel = ClassRegistry::init($this->modelClass);
        $currentModel->id = $id;
        $model = $currentModel->read();
        $this->set('model', $model);
    }
    
    function admin_add() {
        $currentModel = ClassRegistry::init($this->modelClass);
        
        if (empty($this->data)) {
            foreach($currentModel->parent_name as $parent_name => $value) {
                $parentModel = ClassRegistry::init($currentModel->parent_name[$parent_name]);
                $parentList = $parentModel->find('list');
                $this->set("parentList", $parentList);
                $this->log($parentList);
            }
        } else {
            if (in_array($this->modelClass, $this->allowUploadImage)) {
                if ($this->data['Image']['name']['name'] != null) {
                    $imageModel = ClassRegistry::init('Image');
                    $image = $imageModel->save($this->data, false);
                    
                    $this->data[$this->modelClass]['image_id'] = $imageModel->id;
                
     //                    $this->data[$this->modelClass]['image_id'] = '';
                }
                
                if ($this->data['ImageMirror']['name']['name'] != null) {
                    $imageMirrorModel = ClassRegistry::init('ImageMirror');
                    $imageMirror = $imageMirrorModel->save($this->data, false);
                    
                    $this->data[$this->modelClass]['image_mirror_id'] = $imageMirrorModel->id;
                }
            }
            
            if (isset($this->data['User']['password'])) {
                $this->data['User']['password'] = Security::hash($this->data['User']['password'], 
                        null, true);
            }
            if ($currentModel->save($this->data)) {
                $this->Session->setFlash('Your post has been saved.');
                $this->redirect(array(
                    'action' => 'admin_all'));
            }
        }
    }
    
    function admin_edit($id = null) {
        $currentModel = ClassRegistry::init($this->modelClass);
        $currentModel->id = $id;
        if (empty($this->data)) {
            foreach($currentModel->parent_name as $parent_name => $value) {
                $parentModel = ClassRegistry::init($currentModel->parent_name[$parent_name]);
                $parentList = $parentModel->find('list');
                $this->set("parentList", $parentList);
                $this->log($parentList);
            }
            $this->data = $currentModel->read();
        } else {
            $this->log($this->data);
            if (in_array($this->modelClass, $this->allowUploadImage)) {
                if ($this->data['Image']['name']['name'] != null) {
                    $imageModel = ClassRegistry::init('Image');
                    $image = $imageModel->save($this->data, false);
                    
                    $this->data[$this->modelClass]['image_id'] = $imageModel->id;
                
     //                    $this->data[$this->modelClass]['image_id'] = '';
                }
                
                if ($this->data['ImageMirror']['name']['name'] != null) {
                    $imageMirrorModel = ClassRegistry::init('ImageMirror');
                    $imageMirror = $imageMirrorModel->save($this->data, false);
                    
                    $this->data[$this->modelClass]['image_mirror_id'] = $imageMirrorModel->id;
                }
            }
            
            if (isset($this->data['User']['password'])) {
                $this->data['User']['password'] = Security::hash($this->data['User']['password'], 
                        null, true);
            }
            if ($currentModel->save($this->data)) {
                $this->Session->setFlash('Your post has been updated.');
                $this->redirect(array(
                    'action' => 'admin_all'));
            }
        }
    }
    
    function admin_delete($id) {
        $this->log($this->modelClass);
        if (ClassRegistry::init($this->modelClass)->delete($id)) {
            $this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
            $this->redirect(array(
                'action' => 'admin_all'));
        }
    }
    
    function download($id) {
        //		Configure::write ( 'debug', 0 );
    //		$file = ClassRegistry::init ( $this->modelClass )->findById ( $id );
    //		
    //		header ( 'Content-type: ' . $file ['MyFile'] ['type'] );
    //		header ( 'Content-length: ' . $file ['MyFile'] ['size'] ); // some people reported problems with this line (see the comments), commenting out this line helped in those cases
    //		header ( 'Content-Disposition: attachment; filename="' . $file ['MyFile'] ['name'] . '"' );
    //		echo $file ['MyFile'] ['data'];
    //		
    //		exit ();
    }
    
    function admin_query($condition = null, $content = null) {
        if ($condition == null) {
            $condition = $this->data[$this->modelClass]['query_condition'];
        }
        if ($content == null) {
            $content = $this->data[$this->modelClass]['query_content'];
        }
        if ($this->Session->check('limit')) {
            $this->paginate['limit'] = $this->Session->read('limit');
        } else {
            $this->paginate['limit'] = 5;
        }
        switch($condition) {
            case "code" :
            case "name" :
            case "price" :
                if ($this->params['controller'] == 'orders') {
                    $this->redirect(
                            array(
                                'controller' => 'fabrics', 'action' => 'query', $condition, $content));
                } else {
                    $this->set('navClass', '1');
                    $this->_query($condition, $content);
                }
                break;
            case "order" :
                if ($this->params['controller'] == 'fabrics') {
                    $this->redirect(
                            array(
                                'controller' => 'orders', 'action' => 'query', $condition, $content));
                } else {
                    $this->set('navClass', '3');
                    $this->_query($condition, $content);
                }
                break;
            case "fullName" :
            case "fullNameKana" :
            case "address" :
            case "mobileNumber" :
                if ($this->params['controller'] == 'fabrics') {
                    $this->redirect(
                            array(
                                'controller' => 'orders', 'action' => 'query', $condition, $content));
                } else {
                    $this->set('navClass', '3');
                    $this->_query($condition, $content);
                }
                break;
        }
        
        $this->render('admin_all');
        return;
    }
    
    function admin_export() {
        $this->layout = 'empty';
        $this->set('list', ClassRegistry::init($this->modelClass)->find('all'));
    }
}
