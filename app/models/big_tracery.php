<?php
class BigTracery extends AppModel {
	var $name = 'EsBigTracery';
	
	public $validate = array ('name' => array ('rule' => 'notEmpty', 'message' => 'SubCategory Name is required' ), 'category_id' => array ('rule' => 'notEmpty', 'message' => 'Category ID is required' ) );
}