<?php
class FabricsController extends AppController {
    var $helpers = array(
        'Html', 'Xml', 'Javascript', 'Paginator', 'Ajax', 'Csv');
    var $components = array(
        'RequestHandler', 'Session');
    var $paginate = array(
        'fields' => array(
        'id', 'code', 'name'), 'limit' => 10, 'page' => 1, 'order' => array(
        'id' => 'desc'));
    
    function admin_all() {
        $this->_all();
        $this->set('navClass', '1');
    }
    
    function _all($condition = array()) {
        if ($this->Session->check('limit')) {
            $this->paginate['limit'] = $this->Session->read('limit');
        } else {
            $this->paginate['limit'] = 10;
        }
        $list = $this->paginate(null, $condition);
        $this->log('========== log');
        $this->log($list);
        $this->set('list', $list);
    }
    
    function admin_view($id) {
        $currentModel = ClassRegistry::init($this->modelClass);
        $currentModel->id = $id;
        $this->data = $currentModel->read();
        $this->get_name_of_select();
        $this->render('admin_view');
        return;
    }
    
    function admin_page_limit() {
        $numberOfRow = $this->data['number_row'];
        if ($numberOfRow != '') {
            $this->Session->write('limit', $numberOfRow);
        }
    }
    
    function _query($condition, $content) {
        switch($condition) {
            case "code" :
                $this->_all(array(
                    'Fabric.code LIKE' => '%' . $content . '%'));
                break;
            case "name" :
                $this->_all(array(
                    'Fabric.name LIKE' => '%' . $content . '%'));
                break;
            case "price" :
                break;
        }
        return;
    }
    
    function admin_input() {
        $this->set('navClass', '2');
        $currentModel = ClassRegistry::init($this->modelClass);
        
        $this->init_combox_list($currentModel);
        
        if (! empty($this->data)) {
            if (! empty($this->data['Image'])) {
                $imageModel = ClassRegistry::init('Image');
                if (isset($this->data[$this->modelClass]['image_id']) && $this->data[$this->modelClass]['image_id'] != null) {
                    $imageModel->delete($this->data[$this->modelClass]['image_id']);
                }
                $imageModel->set($this->data);
                
                if ($imageModel->validates()) {
                    $image = $imageModel->save($this->data);
                } else {
                    return;
                }
                
                $this->data[$this->modelClass]['image_id'] = $imageModel->id;
                $image = $imageModel->findById($imageModel->id);
                $this->data['Image'] = $image['Image'];
            }
            
            $currentModel->set($this->data);
            if ($currentModel->validates()) {
                $this->get_name_of_select();
                $this->render('admin_confirm');
                return;
            }
        
        }
    }
    
    function get_name_of_select() {
        $color_id = $this->data[$this->modelClass]['color_id'];
        $color = ClassRegistry::init('Color')->findById($color_id, 
                array(
                    'fields' => 'name'));
        $colorName = $color['Color']['name'];
        
        $big_tracery_id = $this->data[$this->modelClass]['big_tracery_id'];
        $bigTracery = ClassRegistry::init('BigTracery')->findById($big_tracery_id, 
                array(
                    'fields' => 'name'));
        $traceryName = $bigTracery['BigTracery']['name'];
        
        if (isset($this->data[$this->modelClass]['small_tracery_id'])) {
            $small_tracery_id = $this->data[$this->modelClass]['small_tracery_id'];
            if ($small_tracery_id != '') {
                $smallTracery = ClassRegistry::init('SmallTracery')->findById($small_tracery_id, 
                        array(
                            'fields' => 'name'));
                $smallTraceryName = $smallTracery['SmallTracery']['name'];
                $traceryName = $smallTraceryName;
            
     //			$traceryName = join ( '、', array ($traceryName, $smallTraceryName ) );
            }
        }
        
        $season_id = $this->data[$this->modelClass]['season_id'];
        $season = ClassRegistry::init('Season')->findById($season_id, 
                array(
                    'fields' => 'name'));
        $seasonName = $season['Season']['name'];
        
        $big_brand_id = $this->data[$this->modelClass]['big_brand_id'];
        $bigBrand = ClassRegistry::init('BigBrand')->findById(
                $this->data[$this->modelClass]['big_brand_id'], 
                array(
                    'fields' => 'name'));
        $brandName = $bigBrand['BigBrand']['name'];
        
        if (isset($this->data[$this->modelClass]['small_brand_id'])) {
            $small_brand_id = $this->data[$this->modelClass]['small_brand_id'];
            if ($small_brand_id != '') {
                $smallBrand = ClassRegistry::init('SmallBrand')->findById(
                        $this->data[$this->modelClass]['small_brand_id'], 
                        array(
                            'fields' => 'name'));
                $smallBrandName = $smallBrand['SmallBrand']['name'];
                $brandName = $smallBrandName;
            
     //			$brandName = join ( '、', array ($brandName, $smallBrandName ) );
            }
        }
        
        $this->data[$this->modelClass]['color_name'] = $colorName;
        $this->data[$this->modelClass]['tracery_name'] = $traceryName;
        $this->data[$this->modelClass]['season_name'] = $seasonName;
        $this->data[$this->modelClass]['brand_name'] = $brandName;
    }
    
    function admin_confirm() {
        $currentModel = ClassRegistry::init($this->modelClass);
        $this->set('navClass', '2');
        
        $this->get_name_of_select();
    }
    
    function admin_finish() {
        $this->set('navClass', '2');
    }
    
    function admin_save() {
        $currentModel = ClassRegistry::init($this->modelClass);
        
        if (empty($this->data)) {
            foreach($currentModel->parent_name as $parent_name => $value) {
                $parentModel = ClassRegistry::init($currentModel->parent_name[$parent_name]);
                $parentList = $parentModel->find('list');
                $this->set("parentList", $parentList);
            }
        } else {
            if ($currentModel->save($this->data)) {
                $this->Session->setFlash('Your post has been saved.');
                $this->redirect(array(
                    'action' => 'admin_finish'));
            }
        }
    }
    
    function admin_amend() {
        $this->set('navClass', '2');
        $currentModel = ClassRegistry::init($this->modelClass);
        
        $this->init_combox_list($currentModel);
        
        if (! empty($this->data)) {
            $imageModel = ClassRegistry::init('Image');
            if (isset($this->data[$this->modelClass]['redirect']) && $this->data[$this->modelClass]['redirect'] == '1') {
                if ($this->data['Image']['name']['name'] != null) {
                    if (isset($this->data[$this->modelClass]['image_id']) && $this->data[$this->modelClass]['image_id'] != null) {
                        $imageModel->delete($this->data[$this->modelClass]['image_id']);
                    }
                    
                    $imageModel->set($this->data);
                    
                    if ($imageModel->validates()) {
                        $image = $imageModel->save($this->data);
                        $this->data['Image'] = $image;
                        $this->data[$this->modelClass]['image_id'] = $imageModel->id;
                    }
                }
            }
            if (isset($this->data[$this->modelClass]['image_id']) && $this->data[$this->modelClass]['image_id'] != null) {
                $image = $imageModel->findById($this->data[$this->modelClass]['image_id']);
                $this->data['Image'] = $image['Image'];
            }
            
            //			$currentModel->set ( $this->data );
            if ($currentModel->validates() && isset(
                    $this->data[$this->modelClass]['redirect']) && $this->data[$this->modelClass]['redirect'] == 1) {
                $this->get_name_of_select();
                $this->render('admin_confirm');
                return;
            } else {
                $this->data[$this->modelClass]['redirect'] = '1';
                return;
            }
        }
    }
    
    function admin_export() {
        $this->layout = 'empty';
        $fabrics = ClassRegistry::init($this->modelClass)->find('all');
        
        $list = array();
        foreach($fabrics as $modelName => $fabric) {
            $this->log('========== Order Info ==========');
            $this->log($fabric);
            $newFabric = array(
                '生地ID' => $fabric[$this->modelClass]['id'], '生地Code' => $fabric[$this->modelClass]['code'], '生地名' => $fabric[$this->modelClass]['name'], '値段' => $fabric[$this->modelClass]['price'], '色コード' => $fabric['Color']['name'], '柄カテゴリID1' => $fabric['BigTracery']['name'], '柄カテゴリID2' => ($fabric['SmallTracery']['name'] == null ? $fabric['BigTracery']['name'] : $fabric['SmallTracery']['name']), '季節' => $fabric['Season']['name'], 'ブランドカテゴリID1' => $fabric['BigBrand']['name'], 'ブランドカテゴリID2' => ($fabric['SmallBrand']['name'] == null ? $fabric['BigBrand']['name'] : $fabric['SmallBrand']['name']), '備考' => $fabric[$this->modelClass]['remark']);
            array_push($list, $newFabric);
        }
        $this->set('list', $list);
    }
    
    function init_combox_list($currentModel) {
        for($i = 0, $size = sizeof($currentModel->parent_name); $i < $size; ++ $i) {
            $parentModel = ClassRegistry::init($currentModel->parent_name[$i]);
            $parentList = $parentModel->find('list');
            $this->set('parentList' . $i, $parentList);
        }
        
        if (! empty($this->data[$this->modelClass]['big_tracery_id'])) {
            $big_tracery_id = (int) $this->data[$this->modelClass]['big_tracery_id'];
            $options = ClassRegistry::init('SmallTracery')->find('list', 
                    array(
                        'conditions' => array(
                        'SmallTracery.big_tracery_id' => $big_tracery_id)));
            $this->set('smallTraceryList', $options);
        }
        
        if (! empty($this->data[$this->modelClass]['big_brand_id'])) {
            $big_brand_id = (int) $this->data[$this->modelClass]['big_brand_id'];
            $options = ClassRegistry::init('SmallBrand')->find('list', 
                    array(
                        'conditions' => array(
                        'SmallBrand.big_brand_id' => $big_brand_id)));
            $this->set('smallBrandList', $options);
        }
    }
    
    function admin_update_small_traceries() {
        if (! empty($this->data[$this->modelClass]['big_tracery_id'])) {
            $big_tracery_id = (int) $this->data[$this->modelClass]['big_tracery_id'];
            $options = ClassRegistry::init('SmallTracery')->find('list', 
                    array(
                        'conditions' => array(
                        'SmallTracery.big_tracery_id' => $big_tracery_id)));
            $this->set('options', $options);
        }
    }
    
    function admin_update_small_brands() {
        if (! empty($this->data[$this->modelClass]['big_brand_id'])) {
            $big_brand_id = (int) $this->data[$this->modelClass]['big_brand_id'];
            $options = ClassRegistry::init('SmallBrand')->find('list', 
                    array(
                        'conditions' => array(
                        'SmallBrand.big_brand_id' => $big_brand_id)));
            $this->set('options', $options);
        }
    }
    
    function query($categoryType, $categoryId, $subcategoryId = null) {
        Configure::write('debug', 2);
        switch($categoryType) {
            case 'color' :
                $model = ClassRegistry::init($this->modelClass)->find('all', 
                        array(
                            'conditions' => array(
                            'color_id' => $categoryId)));
                break;
            case 'tracery' :
                $model = array();
                if ($subcategoryId != null) {
                    $model = ClassRegistry::init($this->modelClass)->find('all', 
                            array(
                                'conditions' => array(
                                'Fabric.big_tracery_id' => $categoryId, 'Fabric.small_tracery_id' => $subcategoryId, 'Fabric.public' => 1)));
                } else {
                    $model = ClassRegistry::init($this->modelClass)->find('all', 
                            array(
                                'conditions' => array(
                                'Fabric.big_tracery_id' => $categoryId, 'Fabric.public' => 1)));
                }
                break;
            case 'price' :
                // (1, '５０，０００円以下', '５０，０００円以下'),
                // (2, '５０，００１円～７５，０００円', '５０，００１円～７５，０００円'),
                // (3, '７５，００１円～１００，０００円', '７５，００１円～１００，０００円'),
                // (4, '１００，００１円以上', '１００，００１円以上');
                $conditions = null;
                switch($categoryId) {
                    case 1 :
                        $conditions = array(
                            'price <=' => 50000);
                        break;
                    case 2 :
                        $conditions = array(
                            'and' => array(
                            'price >' => 50000, 'price <=' => 75000));
                        break;
                    case 3 :
                        $conditions = array(
                            'and' => array(
                            'price >' => 75000, 'price <=' => 100000));
                        break;
                    case 3 :
                        $conditions = array(
                            'price >' => 100000);
                        break;
                }
                $model = ClassRegistry::init($this->modelClass)->find('all', 
                        array(
                            'conditions' => $conditions));
                break;
            case 'season' :
                $model = ClassRegistry::init($this->modelClass)->find('all', 
                        array(
                            'conditions' => array(
                            'season_id' => $categoryId)));
                break;
            case 'brand' :
                $model = array();
                if ($subcategoryId != null) {
                    $model = ClassRegistry::init($this->modelClass)->find('all', 
                            array(
                                'conditions' => array(
                                'Fabric.big_brand_id' => $categoryId, 'Fabric.small_brand_id' => $subcategoryId)));
                } else {
                    $model = ClassRegistry::init($this->modelClass)->find('all', 
                            array(
                                'conditions' => array(
                                'Fabric.big_brand_id' => $categoryId)));
                }
                break;
        }
        $this->set('model', $model);
    }
}