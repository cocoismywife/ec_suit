<?php
class Fabric extends AppModel {
	var $name = 'EsFabric';
	var $belongsTo = array ('Color', 'BigTracery', 'Season', 'BigBrand', 'SmallTracery', 'SmallBrand', 'Image' => array ('className' => 'Image', 'foreignKey' => 'image_id' ) );
	var $parent_name = array ('Color', 'BigTracery', 'Season', 'BigBrand', 'SmallTracery', 'SmallBrand', 'Image' );
	
	public $validate = array (
		'code' => array ('rule' => 'notEmpty', 'message' => '生地IDを正しく入力してください。' ), 
		'name' => array ('rule' => 'notEmpty', 'message' => '生地名を正しく入力してください。' ), 
		'price' => array ('rule-1' => array ('rule' => 'numeric', 'message' => '数字を入力してください。' ), 
							'rule-2' => array ('rule' => 'notEmpty', 'message' => '値段を正しく入力してください。' ) ) );
}