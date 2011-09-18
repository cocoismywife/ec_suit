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
<select name="data[Order][pref]">
<option value="" selected="selected">都道府県を選択</option>
<optgroup label="北海道・東北">
<option value="北海道">北海道</option>
<option value="青森県">青森県</option>
<option value="岩手県">岩手県</option>
<option value="秋田県">秋田県</option>
<option value="宮城県">宮城県</option>
<option value="山形県">山形県</option>
<option value="福島県">福島県</option>
</optgroup>
<optgroup label="関東">
<option value="東京都">東京都</option>
<option value="神奈川県">神奈川県</option>
<option value="埼玉県">埼玉県</option>
<option value="千葉県">千葉県</option>
<option value="茨城県">茨城県</option>
<option value="栃木県">栃木県</option>
<option value="群馬県">群馬県</option>
</optgroup>
<optgroup label="甲信越・北陸">
<option value="新潟県">新潟県</option>
<option value="富山県">富山県</option>
<option value="石川県">石川県</option>
<option value="福井県">福井県</option>
<option value="山梨県">山梨県</option>
<option value="長野県">長野県</option>
</optgroup>
<optgroup label="東海">
<option value="岐阜県">岐阜県</option>
<option value="静岡県">静岡県</option>
<option value="愛知県">愛知県</option>
<option value="三重県">三重県</option>
</optgroup>
<optgroup label="近畿">
<option value="滋賀県">滋賀県</option>
<option value="京都府">京都府</option>
<option value="大阪府">大阪府</option>
<option value="兵庫県">兵庫県</option>
<option value="奈良県">奈良県</option>
<option value="和歌山県">和歌山県</option>
</optgroup>
<optgroup label="中国">
<option value="鳥取県">鳥取県</option>
<option value="島根県">島根県</option>
<option value="岡山県">岡山県</option>
<option value="広島県">広島県</option>
<option value="山口県">山口県</option>
</optgroup>
<optgroup label="四国">
<option value="徳島県">徳島県</option>
<option value="香川県">香川県</option>
<option value="愛媛県">愛媛県</option>
<option value="高知県">高知県</option>
</optgroup>
<optgroup label="九州・沖縄">
<option value="福岡県">福岡県</option>
<option value="佐賀県">佐賀県</option>
<option value="長崎県">長崎県</option>
<option value="熊本県">熊本県</option>
<option value="大分県">大分県</option>
<option value="宮崎県">宮崎県</option>
<option value="鹿児島県">鹿児島県</option>
<option value="沖縄県">沖縄県</option>
</optgroup>
</select>
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