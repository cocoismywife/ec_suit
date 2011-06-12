<?php
class Attribute extends AppModel {
	var $name = 'EsAttribute';
	var $belongsTo = 'SubCategory';
	var $parent_name = array ('SubCategory');
	
	public $validate = array ('name' => array ('rule' => 'notEmpty', 'message' => 'SubCategory Name is required' ), 'sub_category_id' => array ('rule' => 'notEmpty', 'message' => 'SubCategory ID is required' ) );
}