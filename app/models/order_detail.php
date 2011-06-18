<?php
class OrderDetail extends AppModel {
	var $name = 'EsOrderDetail';
	var $belongsTo = array ('Gender', 'Style', 'Fabric', 'Collar', 'Pocket', 'Hem', 'Button', 'Ty', 'Shirt' );
	var $parent_name = array ('Gender', 'Style', 'Fabric', 'Collar', 'Pocket', 'Hem', 'Button', 'Ty', 'Shirt' );
}