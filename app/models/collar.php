<?php
class Collar extends AppModel {
	var $name = 'EsCollar';
	
	var $belongsTo = array ('Image' => array ('className' => 'Image', 'foreignKey' => 'image_id' ) );
	var $parent_name = array ('Image' );
}