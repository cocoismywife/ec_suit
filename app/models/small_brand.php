<?php
class SmallBrand extends AppModel {
	var $name = 'EsSmallBrand';
	var $belongsTo = array ('BigBrand' );
	var $parent_name = array ('BigBrand' );
	
	public $validate = array ('name' => array ('rule' => 'notEmpty', 'message' => 'SubCategory Name is required' ));
}