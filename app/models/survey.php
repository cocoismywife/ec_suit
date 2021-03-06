<?php
class Survey extends AppModel {
	var $name = 'EsSurvey';
	var $recursive = 2;
	var $hasMany = array(
        'Order' => array(
            'className'     => 'Order',
            'foreignKey'    => 'survey_id',
            'order'    => 'Order.id ASC',
            'dependent' => true
        )
    );  
    var $hasAndBelongsToMany = array(
        'Question' =>
            array(
                'className'              => 'Question',
                'joinTable'              => 'questions_surveys',
                'foreignKey'             => 'survey_id',
                'associationForeignKey'  => 'question_id',
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
}