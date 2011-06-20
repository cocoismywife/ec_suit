<?php
class Style extends AppModel {
	var $name = 'EsStyle';
	var $belongsTo = array ('Image' => array ('className' => 'Image', 'foreignKey' => 'image_id' ) );
	var $parent_name = array ('Image' );
	var $validate = array ('name' => array ('rule' => 'notEmpty', 'message' => 'Style Name is required' ) );
}