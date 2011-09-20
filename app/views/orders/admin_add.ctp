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

<?php echo $this->Form->create($model_name, array('action' => 'add_confirm', 'method' => 'post'))?>
<?php echo $this->Form->hidden('id');?>
<dl class="qaSet">
<dt><?php echo $this->Html->image('/images/order/img_q1.gif', array('alt'=> __('氏名', true))) ?></dt>
<dd>
<dl class="answer">
<dt>姓</dt>
<dd><?php echo $this->Form->input ( 'last_name', array ('label' => false, 'size' => 20 ) );?></dd>
<dt>名</dt>
<dd><?php echo $this->Form->input ( 'first_name', array ('label' => false, 'size' => 20 ) );?></dd>
</dl>
</dd>
<!-- / class qaSet --></dl>

<dl class="qaSet">
<dt><?php echo $this->Html->image('/images/order/img_q2.gif', array('alt'=> __('氏名（フリガナ）', true))) ?></dt>
<dd>
<dl class="answer">
<dt>セイ</dt>
<dd><?php echo $this->Form->input ( 'last_name_kana', array ('label' => false, 'size' => 20 ) );?></dd>
<dt>メイ</dt>
<dd><?php echo $this->Form->input ( 'first_name_kana', array ('label' => false, 'size' => 20 ) );?></dd>
</dl>
</dd>
<!-- / class qaSet --></dl>

<dl class="qaBigSet">
<dt><?php echo $this->Html->image('/images/order/img_q3.gif', array('alt'=> __('住所', true))) ?></dt>
<dd>
<dl class="answer">
<dt>〒</dt>
<dd>
<?php echo $this->Form->input('zip1', array ('div' => false, 'label' => false, 'size' => 8, 'maxlength' => 3 ) );?> - <?php echo $this->Form->input ('zip2', array ('div' => false, 'label' => false, 'size' => 10, 'maxlength' => 4, 'onKeyUp' => "AjaxZip3.zip2addr('data[Order][zip1]','data[Order][zip2]','data[Order][pref]','data[Order][address]');"));?>
</dd>
<dd>
<?php echo $this->Form->select('pref', $area, null, array('empty' => '都道府県を選択'));?>
</dd>
<dd><?php echo $this->Form->input('address', array('div' => false, 'label' => false, 'size' => 68));?></dd>
</dl>
</dd>
<!-- / class qaSet --></dl>

<dl class="qaSet">
<dt><?php echo $this->Html->image('/images/order/img_q4.gif', array('alt'=> __('電話番号', true))) ?></dt>
<dd>
<?php echo $this->Form->input ( 'phone1', array ('div' => false, 'label' => false, 'size' => 8, 'maxlength' => 3 ) );?> - <?php echo $this->Form->input ('phone2', array ('div' => false, 'label' => false, 'size' => 10, 'maxlength' => 4 ) );?> - <?php echo $this->Form->input ( 'phone3', array ('div' => false, 'label' => false, 'size' => 10, 'maxlength' => 4 ) );?>
<!-- / class qaSet --></dl>

<dl class="qaSet">
<dt><?php echo $this->Html->image('/images/order/img_q5.gif', array('alt'=> __('メールアドレス', true))) ?></dt>
<dd><?php echo $this->Form->input ( 'email', array ('label' => false, 'size' => 40 ) );?></dd>
<!-- / class qaSet --></dl>

<p class="alignCenter"><a href="javascript:document.forms[0].submit();"><?php echo $this->Html->image('/images/order/btn_next.gif', array('alt'=> __('次へ', true)));?></a></p>

<?php echo $this->Form->end()?>
<!-- / id content --></div>
<!-- / id pageBody --></div>

<div id="footer">
<div id="footerInner">
<p><?php echo $this->Html->image('/images/order/img_foot1.gif', array('alt'=> __('情報の入力をお願い致します。', true))) ?></p>
<!-- / id footerInner --></div>
<!-- / id footer --></div>