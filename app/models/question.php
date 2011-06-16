<?php
class Question extends AppModel {
	var $name = 'EsQuestion';
	var $validate = array ('name' => array ('rule' => 'notEmpty', 'message' => 'Question Name is required' ) );
    var $hasMany = array(
        'Option' => array(
            'className'     => 'Option',
            'foreignKey'    => 'question_id',
            'order'    => 'Option.id ASC',
            'dependent' => true
        )
    );  
	
	var $hasAndBelongsToMany = array(
        'Survey' =>
            array(
                'className'              => 'Survey',
                'joinTable'              => 'questions_surveys',
                'foreignKey'             => 'question_id',
                'associationForeignKey'  => 'survey_id',
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