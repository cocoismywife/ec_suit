<?php
class Lining extends AppModel {
	var $name = 'EsLining';
	
	var $belongsTo = array ('Image' => array ('className' => 'Image', 'foreignKey' => 'image_id' ) );
	var $parent_name = array ('Image' );
}