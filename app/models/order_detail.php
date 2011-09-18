<?php
class OrderDetail extends AppModel {
    var $name = 'EsOrderDetail';
    var $belongsTo = array(
        'Gender', 'Style', 'Fabric', 'LiningFabric', 'Collar', 'Pocket', 'Hem', 'Button', 'Ty', 'Shirt', 'Lining', 'LiningFabric', 'Image');
    var $parent_name = array(
        'Gender', 'Style', 'Fabric', 'LiningFabric', 'Collar', 'Pocket', 'Hem', 'Button', 'Ty', 'Shirt', 'Lining', 'LiningFabric');
}