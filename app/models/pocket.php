<?php
class Pocket extends AppModel {
    var $name = 'EsPocket';
    
    var $belongsTo = array(
        'Image' => array(
        'className' => 'Image', 'foreignKey' => 'image_id'), 'ImageMirror' => array(
        'className' => 'ImageMirror', 'foreignKey' => 'image_mirror_id'));
    var $parent_name = array(
        'Image','ImageMirror');
}