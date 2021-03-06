<?php
class OrdersController extends AppController {
    var $helpers = array(
        'Html', 'Xml', 'Javascript', 'Paginator', 'Ajax', 'Csv');
    var $components = array(
        'RequestHandler', 'Session');
    var $paginate = array(
        'fields' => array(
        'DISTINCT id', 'first_name', 'last_name', 'email', 'purchase_date'), 'limit' => 10, 'page' => 1, 'order' => array(
        'id' => 'desc'));
    
    function beforeFilter() {
        $this->Auth->allow('admin_add', 'admin_add_confirm', 'admin_add_survey', 'admin_add_finish');
    }
    
    function admin_all() {
        $this->log($this->modelClass);
        $this->_all();
        $this->set('navClass', '3');
    }
    
    function _all($condition = array()) {
        if ($this->Session->check('limit')) {
            $this->paginate['limit'] = $this->Session->read('limit');
        } else {
            $this->paginate['limit'] = 10;
        }
        $list = $this->paginate($this->modelClass, $condition);
        $this->set('list', $list);
        $this->log($this->paginate);
        $this->log($list);
    }
    
    function admin_view($id) {
        $currentModel = ClassRegistry::init($this->modelClass);
        $currentModel->id = $id;
        $this->data = $currentModel->read();
        $this->log($this->data);
    }
    
    function admin_page_limit() {
        $numberOfRow = $this->data['number_row'];
        if ($numberOfRow != '') {
            $this->Session->write('limit', $numberOfRow);
        }
    }
    
    function init_option() {
        $area = array(
            '北海道・東北' => array(
            '北海道' => '北海道', '青森県' => '青森県', '岩手県' => '岩手県', '秋田県' => '秋田県', '宮城県' => '宮城県', '山形県' => '山形県', '福島県' => '福島県'), '関東' => array(
            '東京都' => '東京都', '神奈川県' => '神奈川県', '埼玉県' => '埼玉県', '千葉県' => '千葉県', '茨城県' => '茨城県', '栃木県' => '栃木県', '群馬県' => '群馬県'), '甲信越・北陸' => array(
            '新潟県' => '新潟県', '富山県' => '富山県', '石川県' => '石川県', '福井県' => '福井県', '山梨県' => '山梨県', '長野県' => '長野県'), '東海' => array(
            '岐阜県' => '岐阜県', '静岡県' => '静岡県', '愛知県' => '愛知県', '三重県' => '三重県'), '近畿' => array(
            '滋賀県' => '滋賀県', '京都府' => '京都府', '大阪府' => '大阪府', '兵庫県' => '兵庫県', '奈良県' => '奈良県', '和歌山県' => '和歌山県'), '中国' => array(
            '鳥取県' => '鳥取県', '島根県' => '島根県', '岡山県' => '岡山県', '広島県' => '広島県', '山口県' => '山口県'), '四国' => array(
            '徳島県' => '徳島県', '香川県' => '香川県', '愛媛県' => '愛媛県', '高知県' => '高知県'), '九州・沖縄' => array(
            '福岡県' => '福岡県', '佐賀県' => '佐賀県', '長崎県' => '長崎県', '熊本県' => '熊本県', '大分県' => '大分県', '宮崎県' => '宮崎県', '鹿児島県' => '鹿児島県', '沖縄県' => '沖縄県'));
        $this->set('area', $area);
    }
    
    function _query($condition, $content) {
        $this->log('=========== Query Content ===========');
        $this->log($content);
        switch($condition) {
            case "order" :
                $conditions = array(
                    'OR' => array(
                    array(
                    'Order.first_name LIKE' => '%' . $content . '%'), array(
                    'Order.last_name LIKE' => '%' . $content . '%'), array(
                    'Order.first_name_kana LIKE' => '%' . $content . '%'), array(
                    'Order.last_name_kana LIKE' => '%' . $content . '%'), array(
                    'Order.address LIKE' => '%' . $content . '%'), array(
                    'Order.mobile_number LIKE' => '%' . $content . '%'), array(
                    'Order.email LIKE' => '%' . $content . '%')));
                $this->paginate[$this->modelClass] = array(
                    'conditions' => $conditions, 'recursive' => 4);
                $this->_all($conditions);
                break;
            case "fullName" :
                $this->_all(
                        array(
                            'OR' => array(
                            'Order.first_name LIKE' => '%' . $content . '%', 'Order.last_name LIKE' => '%' . $content . '%')));
                break;
            case "fullNameKana" :
                $this->_all(
                        array(
                            'OR' => array(
                            'Order.first_name_kana LIKE' => '%' . $content . '%', 'Order.last_name_kana LIKE' => '%' . $content . '%')));
                break;
            case "address" :
                $this->_all(
                        array(
                            'Order.address LIKE' => '%' . $content . '%'));
                break;
            case "mobileNumber" :
                $this->_all(
                        array(
                            'Order.mobile_number LIKE' => '%' . $content . '%'));
                break;
            case "email" :
                $this->_all(array(
                    'Order.email LIKE' => '%' . $content . '%'));
                break;
        }
    }
    
    function admin_post() {
        $currentModel = ClassRegistry::init($this->modelClass);
        $currentModel->set($this->data);
        
        $this->log("Post Data ======================>");
        $this->log($this->data);
        $order = $currentModel->save($this->data);
        if (! empty($order)) {
            // save image
            if (in_array($this->modelClass, $this->allowUploadImage)) {
                if (isset($this->data['Image']['name']['name']) && $this->data['Image']['name']['name'] != null) {
                    $imageModel = ClassRegistry::init('Image');
                    $image = $imageModel->save($this->data, false);
                    
                    $this->data['OrderDetail']['image_id'] = $imageModel->id;
                }
            }
            
            // save order detail
            $this->data['OrderDetail']['order_id'] = $currentModel->id;
            $currentModel->OrderDetail->save($this->data);
            
            // save survey answer
            if (isset($this->data['Question'])) {
                for($i = 0; $i < sizeof($this->data['Question']); $i ++) {
                    $this->data['Answer'][$i]['order_id'] = $currentModel->id;
                    $this->data['Answer'][$i]['question_id'] = $this->data['Question'][$i]['id'];
                }
                $currentModel->Answer->saveAll($this->data['Answer']);
                $this->Session->setFlash('Your post has been saved.');
            }
        }
        
        return $this->set('model', $currentModel->read());
    }
    
    function admin_add($orderId = null) {
        $currentModel = ClassRegistry::init($this->modelClass);
        $this->init_option();
        if (($orderId == null || empty($orderId)) && empty($this->data)) {
            for($i = 0, $size = sizeof(ClassRegistry::init('OrderDetail')->parent_name); $i < $size; ++ $i) {
                $parentModel = ClassRegistry::init(
                        ClassRegistry::init('OrderDetail')->parent_name[$i]);
                $parentList = $parentModel->find('list');
                $this->set('parentList' . $i, $parentList);
            }
            
            $survey = ClassRegistry::init('Survey')->findByName('Default');
            $this->set('survey', $survey);
        } else {
            if (isset($this->data[$this->modelClass]['id'])) {
                $orderId = $this->data[$this->modelClass]['id'];
                $this->log($this->data);
                $currentModel->id = $orderId;
            }
            if ($orderId == null || empty($orderId)) {
                $currentModel->set($this->data);
                
                if (! $currentModel->validates()) {
                    return;
                }
                $order = $currentModel->save($this->data);
                if (! empty($order)) {
                    // save image
                    if (in_array($this->modelClass, $this->allowUploadImage)) {
                        if (isset($this->data['Image']['name']['name']) && $this->data['Image']['name']['name'] != null) {
                            $imageModel = ClassRegistry::init('Image');
                            $image = $imageModel->save($this->data, false);
                            
                            $this->data['OrderDetail']['image_id'] = $imageModel->id;
                        }
                    }
                    
                    // save order detail
                    $this->data['OrderDetail']['order_id'] = $currentModel->id;
                    $currentModel->OrderDetail->save($this->data);
                    
                    // save survey answer
                    if (isset($this->data['Question'])) {
                        for($i = 0; $i < sizeof($this->data['Question']); $i ++) {
                            $this->data['Answer'][$i]['order_id'] = $currentModel->id;
                            $this->data['Answer'][$i]['question_id'] = $this->data['Question'][$i]['id'];
                        }
                        $currentModel->Answer->saveAll($this->data['Answer']);
                        $this->Session->setFlash('Your post has been saved.');
                    }
                }
                $this->data = $currentModel->read();
            } else {
                $order = $currentModel->read();
                $this->data[$this->modelClass]['id'] = $order[$this->modelClass]['id'];
                $this->data[$this->modelClass]['purchase_date'] = $order[$this->modelClass]['purchase_date'];
                $this->data['OrderDetail']['Fabric'] = $order['OrderDetail']['Fabric'];
            }
        }
    }
    
    function admin_add_confirm() {
        $currentModel = ClassRegistry::init($this->modelClass);
        $currentModel->id = $this->data[$this->modelClass]['id'];
        $order = $currentModel->read();
        $currentModel->set($this->data);
        
        if ($currentModel->validates()) {
            $this->data[$this->modelClass]['id'] = $order[$this->modelClass]['id'];
            $this->data[$this->modelClass]['purchase_date'] = $order[$this->modelClass]['purchase_date'];
            $this->data['OrderDetail']['Fabric'] = $order['OrderDetail']['Fabric'];
            $errors = $currentModel->invalidFields();
        } else {
            $this->data[$this->modelClass]['id'] = $order[$this->modelClass]['id'];
            $this->data[$this->modelClass]['purchase_date'] = $order[$this->modelClass]['purchase_date'];
            $this->data['OrderDetail']['Fabric'] = $order['OrderDetail']['Fabric'];
            $this->init_option();
            $this->set('validate_fail', 'fail');
            $this->render('admin_add');
            return;
        }
    }
    
    function admin_add_survey() {
        $currentModel = ClassRegistry::init($this->modelClass);
        $currentModel->id = $this->data[$this->modelClass]['id'];
        $address = join('  ', 
                array(
                    $this->data[$this->modelClass]['pref'], $this->data[$this->modelClass]['address']));
        $this->data[$this->modelClass]['address'] = $address;
        $mobile_number = join('-', 
                array(
                    $this->data[$this->modelClass]['phone1'], $this->data[$this->modelClass]['phone2'], $this->data[$this->modelClass]['phone3']));
        $this->data[$this->modelClass]['mobile_number'] = $mobile_number;
        $currentModel->save($this->data);
        
        $survey = ClassRegistry::init('Survey')->findByName('Default');
        $this->set('survey', $survey);
        $this->set('body_class', 'questionnaire');
    }
    
    function admin_add_finish() {
        $currentModel = ClassRegistry::init($this->modelClass);
        $currentModel->id = $this->data[$this->modelClass]['id'];
        
        // save survey answer
        for($i = 0; $i < sizeof($this->data['Question']); $i ++) {
            $this->data['Answer'][$i]['order_id'] = $currentModel->id;
            $this->data['Answer'][$i]['question_id'] = $this->data['Question'][$i]['id'];
        }
        $currentModel->Answer->saveAll($this->data['Answer']);
        $this->Session->setFlash('Your post has been saved.');
    }
    
    function admin_add_sample() {
        $currentModel = ClassRegistry::init($this->modelClass);
        
        if (empty($this->data)) {
            for($i = 0, $size = sizeof(ClassRegistry::init('OrderDetail')->parent_name); $i < $size; ++ $i) {
                $parentModel = ClassRegistry::init(
                        ClassRegistry::init('OrderDetail')->parent_name[$i]);
                $parentList = $parentModel->find('list');
                $this->set('parentList' . $i, $parentList);
                $this->log($parentList);
            }
            
            $survey = ClassRegistry::init('Survey')->findByName('Default');
            $this->set('survey', $survey);
            $this->log($survey);
        } else {
            $this->log($this->data);
            $order = $currentModel->save($this->data);
            if (! empty($order)) {
                // save image
                if (in_array($this->modelClass, $this->allowUploadImage)) {
                    if (isset($this->data['Image']['name']['name']) && $this->data['Image']['name']['name'] != null) {
                        $imageModel = ClassRegistry::init('Image');
                        $image = $imageModel->save($this->data, false);
                        
                        $this->data['OrderDetail']['image_id'] = $imageModel->id;
                    }
                }
                
                // save order detail
                $this->data['OrderDetail']['order_id'] = $currentModel->id;
                $currentModel->OrderDetail->save($this->data);
                
                // save survey answer
                for($i = 0; $i < sizeof($this->data['Question']); $i ++) {
                    $this->data['Answer'][$i]['order_id'] = $currentModel->id;
                    $this->data['Answer'][$i]['question_id'] = $this->data['Question'][$i]['id'];
                }
                $currentModel->Answer->saveAll($this->data['Answer']);
                $this->Session->setFlash('Your post has been saved.');
                
                $this->data = $currentModel->read();
                
                $this->render('add');
            
     //                $this->redirect(array(
            //                    'action' => 'admin_all'));
            }
        }
    }
    
    function admin_edit($id = null) {
        $currentModel = ClassRegistry::init($this->modelClass);
        $currentModel->id = $id;
        
        if (! empty($this->data)) {
            $order = $currentModel->find();
            $currentModel->save($this->data);
            
            // save order detail
            $orderDetail = $order['OrderDetail'];
            $currentModel->OrderDetail->id = $orderDetail['id'];
            $currentModel->OrderDetail->deleteAll(
                    array(
                        'OrderDetail.order_id' => $currentModel->id));
            $this->data['OrderDetail']['order_id'] = $currentModel->id;
            $this->data['OrderDetail']['image_id'] = $this->data['OrderDetail']['Image']['id'];
            $currentModel->OrderDetail->save($this->data);
            
            // save survey answer
            $currentModel->Answer->deleteAll(
                    array(
                        'Answer.order_id' => $currentModel->id));
            for($i = 0; $i < sizeof($this->data['Question']); $i ++) {
                $answerId = $this->data['Answer'][$i]['option_id'];
                if ($answerId == null || empty($answerId)) {
                    //                    unset($this->data['Answer'][$i]);
                    $this->data['Answer'][$i]['order_id'] = $currentModel->id;
                    $this->data['Answer'][$i]['question_id'] = - 1;
                    $this->data['Answer'][$i]['option_id'] = - 1;
                } else {
                    $this->data['Answer'][$i]['order_id'] = $currentModel->id;
                    $this->data['Answer'][$i]['question_id'] = $answerId;
                }
            }
            $allAnswers = $this->data['Answer'];
            $currentModel->Answer->saveAll($this->data['Answer']);
            $this->Session->setFlash('Your post has been saved.');
        } else {
            $order = $currentModel->read();
            $allAnswers = $order['Answer'];
            //            $allAnswers = ClassRegistry::init('Answer')->find('all', 
            //                    array(
            //                        'conditions' => array(
            //                        'Answer.order_id' => $id), 'order' => 'Answer.id'));
            $this->log($allAnswers);
        }
        
        for($i = 0, $size = sizeof(ClassRegistry::init('OrderDetail')->parent_name); $i < $size; ++ $i) {
            $parentModel = ClassRegistry::init(ClassRegistry::init('OrderDetail')->parent_name[$i]);
            $parentList = $parentModel->find('list');
            $this->set('parentList' . $i, $parentList);
        }
        
        $this->data = $currentModel->read();
        $survey = ClassRegistry::init('Survey')->findByName('Default');
        $this->set('survey', $survey);
        if (isset($allAnswers) && $allAnswers != null) {
            $this->data['Answer'] = $allAnswers;
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
        
        $small_tracery_id = $this->data[$this->modelClass]['small_tracery_id'];
        if ($small_tracery_id != '') {
            $smallTracery = ClassRegistry::init('SmallTracery')->findById($small_tracery_id, 
                    array(
                        'fields' => 'name'));
            $smallTraceryName = $smallTracery['SmallTracery']['name'];
            $traceryName = $smallTraceryName;
        
     //			$traceryName = join ( '、', array ($traceryName, $smallTraceryName ) );
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
        
        $this->data[$this->modelClass]['color_name'] = $colorName;
        $this->data[$this->modelClass]['tracery_name'] = $traceryName;
        $this->data[$this->modelClass]['season_name'] = $seasonName;
        $this->data[$this->modelClass]['brand_name'] = $brandName;
        
        $this->log($this->data);
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
                $this->log($parentList);
            }
        } else {
            if ($currentModel->save($this->data)) {
                $this->Session->setFlash('Your post has been saved.');
                $this->redirect(array(
                    'action' => 'admin_finish'));
            }
        }
    }
    
    function admin_export() {
        $this->layout = 'empty';
        $orders = ClassRegistry::init($this->modelClass)->find('all');
        
        $list = array();
        foreach($orders as $modelName => $order) {
            $this->log('========== Order Info ==========');
            $this->log($order);
            $newOrder = array(
                '注文ID' => $order[$this->modelClass]['id'], '氏名1' => $order[$this->modelClass]['last_name'], '氏名2' => $order[$this->modelClass]['first_name'], 'カタカナ1' => $order[$this->modelClass]['last_name_kana'], 'カタカナ2' => $order[$this->modelClass]['first_name_kana'], '郵便番号' => $order[$this->modelClass]['zip_code1'] . '-' . $order[$this->modelClass]['zip_code2'], '住所' => $order[$this->modelClass]['address'], '電話番号' => $order[$this->modelClass]['mobile_number'], 'メールアドレス' => $order[$this->modelClass]['email'], '注文日' => $order[$this->modelClass]['purchase_date'], '生地名' => isset(
                    $order['OrderDetail']['Fabric']['name']) ? $order['OrderDetail']['Fabric']['name'] : '', '生地ブランド' => isset(
                    $order['OrderDetail']['Fabric']['BigBrand']['name']) ? $order['OrderDetail']['Fabric']['BigBrand']['name'] : '', '品名' => 'スーツ', '値段' => isset(
                    $order['OrderDetail']['Fabric']['price']) ? $order['OrderDetail']['Fabric']['price'] : '', 'スタイル' => isset(
                    $order['OrderDetail']['Style']['name']) ? $order['OrderDetail']['Style']['name'] : '', '裏地' => 'SW1', '襟デザイン' => isset(
                    $order['OrderDetail']['Collar']['name']) ? $order['OrderDetail']['Collar']['name'] : '', 'ポケット' => isset(
                    $order['OrderDetail']['Pocket']['name']) ? $order['OrderDetail']['Pocket']['name'] : '', '裾' => isset(
                    $order['OrderDetail']['Hem']['name']) ? $order['OrderDetail']['Hem']['name'] : '', 'ボタン' => isset(
                    $order['OrderDetail']['Button']['name']) ? $order['OrderDetail']['Button']['name'] : '', 'ネクタイ' => isset(
                    $order['OrderDetail']['Ty']['name']) ? $order['OrderDetail']['Ty']['name'] : '', 'シャツ' => isset(
                    $order['OrderDetail']['Shirt']['name']) ? $order['OrderDetail']['Shirt']['name'] : '', '裏仕様' => isset(
                    $order['OrderDetail']['Lining']['name']) ? $order['OrderDetail']['Lining']['name'] : '');
            
            $answers = $order['Answer'];
            
            for($i = 0; $i < count($answers); $i ++) {
                if (isset($answers[$i])) {
                    $answer = $answers[$i];
                    if (isset($answer['Option']['Question']['name'])) {
                        $newOrder[$answer['Option']['Question']['name']] = isset(
                                $answer['Option']['text']) ? $answer['Option']['text'] : '';
                    }
                }
            }
            array_push($list, $newOrder);
        }
        $this->set('list', $list);
    }
    
    function admin_update_small_traceries() {
        $this->log('admin_update_small_traceries');
        $this->log($this->data);
        $this->log($this->params);
        if (! empty($this->data[$this->modelClass]['big_tracery_id'])) {
            $big_tracery_id = (int) $this->data['Fabric']['big_tracery_id'];
            $options = ClassRegistry::init('SmallTracery')->find('list', 
                    array(
                        'conditions' => array(
                        'SmallTracery.big_tracery_id' => $big_tracery_id)));
            $this->set('options', $options);
            $this->log($options);
        }
    }
    
    function admin_update_small_brands() {
        $this->log('admin_update_small_traceries');
        $this->log($this->data);
        $this->log($this->params);
        if (! empty($this->data[$this->modelClass]['big_brand_id'])) {
            $big_brand_id = (int) $this->data['Fabric']['big_brand_id'];
            $options = ClassRegistry::init('SmallBrand')->find('list', 
                    array(
                        'conditions' => array(
                        'SmallBrand.big_brand_id' => $big_brand_id)));
            $this->set('options', $options);
            $this->log($options);
        }
    }
}