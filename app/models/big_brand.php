<?php
class BigBrand extends AppModel {
	var $name = 'EsBigBrand';
	
	public $validate = array ('name' => array ('rule' => 'notEmpty', 'message' => 'SubCategory Name is required' ), 'category_id' => array ('rule' => 'notEmpty', 'message' => 'Category ID is required' ) );
}