<?php
class Hem extends AppModel {
	var $name = 'EsHem';
	
	var $belongsTo = array ('Image' => array ('className' => 'Image', 'foreignKey' => 'image_id' ) );
	var $parent_name = array ('Image' );
}