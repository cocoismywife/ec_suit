<?php
class LiningFabric extends AppModel {
    var $name = 'EsLiningFabrics';
    
    var $validate = array(
        'name' => array(
        'rule' => 'notEmpty', 'message' => 'Lining Fabric Name is required'));
    var $belongsTo = array(
        'Image' => array(
        'className' => 'Image', 'foreignKey' => 'image_id'), 'ImageMirror' => array(
        'className' => 'Image', 'foreignKey' => 'image_mirror_id'));
    var $parent_name = array(
        'Image', 'ImageMirror');
}