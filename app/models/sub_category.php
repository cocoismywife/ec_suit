<?php
class SubCategory extends AppModel {
	var $name = 'EsSubCategories';
	
	public $validate = array ('category_id' => array ('rule' => 'notEmpty', 'message' => 'Category ID is required' ) );
}
?>
