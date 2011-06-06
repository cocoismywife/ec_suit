<?php
class AttributesController extends AppController {
	var $helpers = array ('Html', 'Xml' );
	var $components = array ('RequestHandler', 'Session' );
	
	function view($category_id = null, $sub_category_id = null, $attribute_id = null) {
		if ($attribute_id != null) {
			$model = $this->Attribute->find ( 'all', array ('conditions' => array ('Attribute.sub_category_id = ' => $sub_category_id, 'Attribute.id = ' => $attribute_id ) ) );
		} elseif ($sub_category_id != null) {
			$model = $this->Attribute->find ( 'all', array ('conditions' => array ('Attribute.sub_category_id = ' => $sub_category_id ) ) );
		} else {
			$model = array ();
		}
		$this->set ( 'model', $model );
	}
}