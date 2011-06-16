<?php
class Order extends AppModel {
	var $name = 'EsOrder';
	var $belongsTo = array ('Gender', 'Style', 'Fabric', 'Collar', 'Pocket', 'Hem', 'Button', 'Ty', 'Shirt' );
	var $parent_name = array ('Gender', 'Style', 'Fabric', 'Collar', 'Pocket', 'Hem', 'Button', 'Ty', 'Shirt' );
}