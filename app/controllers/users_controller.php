<?php
class UsersController extends AppController {
    var $helpers = array(
        'Html', 'Javascript');
    
    function index() {

    }
    
    function logout() {
        $this->redirect($this->Auth->logout());
    }
}