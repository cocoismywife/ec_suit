<?php
class Category extends AppModel {
	var $name = 'EsCategories';
	var $validate = array ('CATEGORY_NAME' => array ('rule' => 'notEmpty' ) );
}