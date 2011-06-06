<?php
class Attribute extends AppModel {
	var $name = 'EsAttribute';
	
	public $validate = array ('sub_category_id' => array ('rule' => 'notEmpty', 'message' => 'SubCategory ID is required' ) );
}