<?php
class UsersController extends AppController {
    var $helpers = array(
        'Html', 'Javascript');
    var $components = array(
        'Session', 'Auth');
    
    function beforeFilter() {
        $this->Auth->autoRedirect = false;
    }
    
    function index() {

    }
    
    function login() {
        if (isset($this->data)) {
            if ($this->Auth->login($this->data)) {
                $this->redirect('/admin/fabrics/all');
            }
        }
    }
    
    function logout() {
        $this->redirect($this->Auth->logout());
    }
}