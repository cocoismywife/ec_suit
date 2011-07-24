<?php
class User extends AppModel {
    var $name = 'EsUsers';
    
    var $validate = array(
        'username' => array(
        'rule' => 'notEmpty', 'message' => 'User Name is required'), 'password' => array(
        'rule' => 'notEmpty', 'message' => 'Password is required'));

}