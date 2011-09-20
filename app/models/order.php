<?php
class Order extends AppModel {
	var $name = 'EsOrder';
	var $recursive = 4;
	var $hasOne = array (
		'OrderDetail' => array (
			'foreignKey' => 'order_id',
			'dependent'    => true
	) );
	// var $belongsTo = array ('Survey' );
	var $hasMany = array (
		'Answer' => array (
			'className' => 'Answer', 
			'foreignKey' => 'order_id', 
			'order' => 'Answer.question_id ASC', 
			'dependent' => true 
	) );
	var $parent_name = array ('Survey' );
	public $validate = array (
		'first_name' => array ('rule' => 'notEmpty', 'message' => '「氏名が入力されていません。」' ), 
		'last_name' => array ('rule' => 'notEmpty', 'message' => '「氏名が入力されていません。」' ) );
}