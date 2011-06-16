<?php
class Option extends AppModel {
	var $name = 'EsOption';
	var $belongsTo = array ('Question' );
	var $parent_name = array ('Question' );
	
	public $validate = array ('name' => array ('rule' => 'notEmpty', 'message' => 'SubCategory Name is required' ));
}