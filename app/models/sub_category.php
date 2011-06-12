<?php
class SubCategory extends AppModel {
	var $name = 'EsSubCategories';
	var $belongsTo = 'Category';
	var $parent_name = array ('Category' );
	
	public $validate = array ('name' => array ('rule' => 'notEmpty', 'message' => 'SubCategory Name is required' ), 'category_id' => array ('rule' => 'notEmpty', 'message' => 'Category ID is required' ) );
}