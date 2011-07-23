<?php
class BigTraceriesController extends AppController {
    var $helpers = array(
        'Html', 'Xml');
    var $components = array(
        'RequestHandler', 'Session');
    
    function view($category_id = null, $sub_category_id = null) {
        if ($sub_category_id != null) {
            $model = $this->SubCategory->find('all', 
                    array(
                        'conditions' => array(
                        'SubCategory.category_id = ' => $category_id, 'SubCategory.id =' => $sub_category_id)));
        } else {
            $model = $this->SubCategory->find('all', 
                    array(
                        'conditions' => array(
                        'SubCategory.category_id = ' => $category_id)));
        }
        $this->set('model', $model);
    }
}