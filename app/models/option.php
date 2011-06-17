<?php
class Option extends AppModel {
	var $name = 'EsOption';
	var $belongsTo = array ('Question' );
	var $parent_name = array ('Question' );
	var $hasAndBelongsToMany = array(
        'Answer' =>
            array(
                'className'              => 'Answer',
                'joinTable'              => 'answers_options',
                'foreignKey'             => 'option_id',
                'associationForeignKey'  => 'answer_id',
                'unique'                 => true,
                'conditions'             => '',
                'fields'                 => '',
                'order'                  => '',
                'limit'                  => '',
                'offset'                 => '',
                'finderQuery'            => '',
                'deleteQuery'            => '',
                'insertQuery'            => ''
            )
    );
	
	public $validate = array ('name' => array ('rule' => 'notEmpty', 'message' => 'SubCategory Name is required' ));
}