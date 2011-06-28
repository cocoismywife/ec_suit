<?php
class Button extends AppModel {
	var $name = 'EsButton';
	
	var $belongsTo = array ('Image' => array ('className' => 'Image', 'foreignKey' => 'image_id' ) );
	var $parent_name = array ('Image' );
}