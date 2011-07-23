<?php
class SmallBrandsController extends AppController {
    var $helpers = array(
        'Html', 'Xml', 'Ajax');
    var $components = array(
        'RequestHandler', 'Session');
    
    function view($big_brand_id = null, $small_brand_id = null) {
        if ($small_brand_id != null) {
            $model = ClassRegistry::init($this->modelClass)->find('all', 
                    array(
                        'conditions' => array(
                        'SmallBrand.big_brand_id' => $big_brand_id, 'SmallBrand.id =' => $small_brand_id)));
        } else {
            $model = ClassRegistry::init($this->modelClass)->find('all', 
                    array(
                        'conditions' => array(
                        'SmallBrand.big_brand_id' => $big_brand_id)));
        }
        $this->set('model', $model);
    }
}