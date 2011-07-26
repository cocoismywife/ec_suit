<?php
class LiningSetsController extends AppController {
    var $helpers = array(
        'Html', 'Xml');
    var $components = array(
        'RequestHandler', 'Session');
    
    function view($lining_id = null, $lining_fabric_id = null) {
        $this->log($lining_id);
        $this->log($lining_fabric_id);
        if (null != $lining_id && null != $lining_fabric_id) {
            $model = ClassRegistry::init($this->modelClass)->find('all', 
                    array(
                        'conditions' => array(
                        'LiningSet.lining_id' => $lining_id, 'LiningSet.lining_fabric_id =' => $lining_fabric_id)));
            $this->set('model', $model);
        }
    }
}