<?php
class Answer extends AppModel {
	var $name = 'EsAnswer';
	var $belongsTo = array('Option');
	var $parent_name = array ('Option' );
}