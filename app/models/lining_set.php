<?php
class LiningSet extends AppModel {
    var $name = 'EsLiningSets';
    var $recursive = 2;
    var $validate = array(
        'name' => array(
        'rule' => 'notEmpty', 'message' => 'Lining Fabric Name is required'));
    var $belongsTo = array(
        'Lining', 'LiningFabric', 'Image' => array(
        'className' => 'Image', 'foreignKey' => 'image_id'));
    var $parent_name = array(
        'Lining', 'LiningFabric', 'Image');
}