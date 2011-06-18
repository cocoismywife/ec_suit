<?php
class Option extends AppModel {
	var $name = 'EsOption';
	var $belongsTo = array ('Question' );
	var $parent_name = array ('Question' );
	
	var $hasMany = array (
		'Answer' => array (
			'className' => 'Answer', 
			'foreignKey' => 'option_id', 
			'order' => 'Answer.id ASC', 
			'dependent' => true 
	) );
	
	public $validate = array ('name' => array ('rule' => 'notEmpty', 'message' => 'SubCategory Name is required' ) );
}