<?php
class Category extends AppModel {
	var $name = 'EsCategories';
	
	var $validate = array ('name' => array ('rule' => 'notEmpty', 'message' => 'Category Name is required' ) );
}