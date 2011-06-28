<?php
class Ty extends AppModel {
	var $name = 'EsTie';
	
	var $belongsTo = array ('Image' => array ('className' => 'Image', 'foreignKey' => 'image_id' ) );
	var $parent_name = array ('Image' );
}