<div id="pageBody">
<div id="content">
<dl class="qaSet">
<dt><?php echo $this->Html->image('/images/order/img_check1.gif', array('alt'=> __('購入日', true))) ?></dt>
<dd><?php echo date('Y年m月d日',  strtotime($this->data[$model_name]['purchase_date']));?></dd>
<!-- / class qaSet --></dl>

<dl class="qaSet">
<dt><?php echo $this->Html->image('/images/order/img_check2.gif', array('alt'=> __('品名', true))) ?></dt>
<dd>スーツ</dd>
<!-- / class qaSet --></dl>

<dl class="qaSet">
<dt><?php echo $this->Html->image('/images/order/img_check3.gif', array('alt'=> __('生地ブランド', true))) ?></dt>
<dd><?php echo join(array($this->data['OrderDetail']['Fabric']['BigBrand']['name'], '&nbsp;&nbsp;', $this->data['OrderDetail']['Fabric']['SmallBrand']['name'])); ?></dd>
<!-- / class qaSet --></dl>

<dl class="qaSet">
<dt><?php echo $this->Html->image('/images/order/img_check4.gif', array('alt'=> __('値段', true))) ?></dt>
<dd><?php echo $this->data['OrderDetail']['Fabric']['price']?>円</dd>
<!-- / class qaSet --></dl>

<h1><?php echo $this->Html->image('/images/order/bh_form.gif', array('alt'=> __('お客様情報入力', true))) ?></h1>

<?php echo $this->Form->create($model_name, array('action' => 'add_survey', 'method' => 'post'))?>
<?php echo $this->Form->hidden('id');?>
<?php echo $this->Form->hidden('last_name');?>
<?php echo $this->Form->hidden('first_name');?>
<?php echo $this->Form->hidden('last_name_kana');?>
<?php echo $this->Form->hidden('first_name_kana');?>
<?php echo $this->Form->hidden('zip1');?>
<?php echo $this->Form->hidden('zip2');?>
<?php echo $this->Form->hidden('pref');?>
<?php echo $this->Form->hidden('address');?>
<?php echo $this->Form->hidden('phone1');?>
<?php echo $this->Form->hidden('phone2');?>
<?php echo $this->Form->hidden('phone3');?>
<?php echo $this->Form->hidden('email');?>
<dl class="qaSet">
<dt><?php echo $this->Html->image('/images/order/img_q1.gif', array('alt'=> __('氏名', true))) ?></dt>
<dd><?php echo join(array($this->data[$model_name]['last_name'], '&nbsp;&nbsp;', $this->data[$model_name]['first_name'])); ?></dd>
<!-- / class qaSet --></dl>

<dl class="qaSet">
<dt><?php echo $this->Html->image('/images/order/img_q2.gif', array('alt'=> __('氏名（フリガナ）', true))) ?></dt>
<dd><?php echo join(array($this->data[$model_name]['last_name_kana'], '&nbsp;&nbsp;', $this->data[$model_name]['first_name_kana'])); ?></dd>
<!-- / class qaSet --></dl>

<dl class="qaBigSet">
<dt><?php echo $this->Html->image('/images/order/img_q3.gif', array('alt'=> __('住所', true))) ?></dt>
<dd>〒<?php echo $this->data[$model_name]['zip1'];?>-<?php echo $this->data[$model_name]['zip2'];?>　<?php echo $this->data[$model_name]['pref'];?><br />
<?php echo $this->data[$model_name]['address'];?></dd>
<!-- / class qaSet --></dl>

<dl class="qaSet">
<dt><?php echo $this->Html->image('/images/order/img_q4.gif', array('alt'=> __('電話番号', true))) ?></dt>
<dd><?php echo $this->data[$model_name]['phone1'];?> - <?php echo $this->data[$model_name]['phone2'];?> - <?php echo $this->data[$model_name]['phone3'];?></dd>
<!-- / class qaSet --></dl>

<dl class="qaSet">
<dt><?php echo $this->Html->image('/images/order/img_q5.gif', array('alt'=> __('メールアドレス', true))) ?></dt>
<dd><?php echo $this->data[$model_name]['email'];?></dd>
<!-- / class qaSet --></dl>

<div id="nav">
<p id="btnBack"><a href="javascript:document.forms[1].submit();"><?php echo $this->Html->image('/images/order/btn_back.gif', array('alt'=> __('修正する', true)));?></a></p>
<p id="btnNext"><a href="javascript:document.forms[0].submit();"><?php echo $this->Html->image('/images/order/btn_next.gif', array('alt'=> __('次へ', true)));?></a></p>
<!-- / id nav --></div>

<?php echo $this->Form->end()?>
<!-- / id content --></div>
<!-- / id pageBody --></div>

<?php echo $this->Form->create($model_name, array('action' => 'add', 'method' => 'post'))?>
<?php echo $this->Form->hidden('id');?>
<?php echo $this->Form->hidden('purchase_date');?>
<?php echo $this->Form->hidden('OrderDetail.Fabric.BigBrand.name');?>
<?php echo $this->Form->hidden('OrderDetail.Fabric.SmallBrand.name');?>
<?php echo $this->Form->hidden('OrderDetail.Fabric.price');?>
<?php echo $this->Form->hidden('last_name');?>
<?php echo $this->Form->hidden('first_name');?>
<?php echo $this->Form->hidden('last_name_kana');?>
<?php echo $this->Form->hidden('first_name_kana');?>
<?php echo $this->Form->hidden('zip1');?>
<?php echo $this->Form->hidden('zip2');?>
<?php echo $this->Form->hidden('pref');?>
<?php echo $this->Form->hidden('address');?>
<?php echo $this->Form->hidden('phone1');?>
<?php echo $this->Form->hidden('phone2');?>
<?php echo $this->Form->hidden('phone3');?>
<?php echo $this->Form->hidden('email');?>
<?php echo $this->Form->end()?>

<div id="footer">
<div id="footerInner">
<p><?php echo $this->Html->image('/images/order/img_foot2.gif', array('alt'=> __('情報の確認をお願い致します。', true))) ?></p>
<!-- / id footerInner --></div>
<!-- / id footer --></div>