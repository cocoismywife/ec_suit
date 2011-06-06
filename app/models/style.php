<?php
class Style extends AppModel {
	var $name = 'EsStyle';
	public $validate = array ('id' => array ('rule' => 'notEmpty', 'message' => 'Style ID is required' ) );
}