<?php
class UsersController extends AppController {
    var $helpers = array(
        'Html', 'Javascript');
    
    function index() {

    }
    
    function admin_login() {
        if (isset($this->data)) {
            if ($this->Auth->login($this->data)) {
                $this->redirect('/admin/fabrics/all');
            } else {
                $this->redirect('/users/login');
            }
        } else {
            $this->redirect('/users/login');
        }
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