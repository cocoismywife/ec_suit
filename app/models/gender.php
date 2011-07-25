<?php
class Gender extends AppModel {
    var $name = 'EsGenders';
    
    var $validate = array(
        'name' => array(
        'rule' => 'notEmpty', 'message' => 'Gender Name is required'));
    var $belongsTo = array(
        'Image' => array(
        'className' => 'Image', 'foreignKey' => 'image_id'), 'ImageMirror' => array(
        'className' => 'Image', 'foreignKey' => 'image_mirror_id'));
    var $parent_name = array(
        'Image', 'ImageMirror');
}