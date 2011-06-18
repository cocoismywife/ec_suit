<?php
class Order extends AppModel {
	var $name = 'EsOrder';
	var $recursive = 4;
	var $hasOne = array (
		'OrderDetail' => array (
			'foreignKey' => 'order_id' 
	) );
	// var $belongsTo = array ('Survey' );
	var $hasMany = array (
		'Answer' => array (
			'className' => 'Answer', 
			'foreignKey' => 'order_id', 
			'order' => 'Answer.id ASC', 
			'dependent' => true 
	) );
	var $parent_name = array ('Survey' );
}