<!-- start content-outer -->
<div id="content-outer">
<!-- start content -->
<div id="content">


<div id="page-heading"><h1>注文詳細</h1></div>


<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
<th rowspan="3" class="sized"><?php echo $this->Html->image('/images/shared/side_shadowleft.jpg', array('width' => 20, 'height' => 300, 'alt'=> '')) ?></th>
<th class="topleft"></th>
<td id="tbl-border-top">&nbsp;</td>
<th class="topright"></th>
<th rowspan="3" class="sized"><?php echo $this->Html->image('/images/shared/side_shadowright.jpg', array('width' => 20, 'height' => 300, 'alt'=> '')) ?></th>
</tr>
<tr>
<td id="tbl-border-left"></td>
<td>
<!--  start content-table-inner -->
<div id="content-table-inner">
<h2 class="mhOrder">お客様情報</h2>
<table border="0" width="100%" cellpadding="0" cellspacing="0">
<tr valign="top">
<td>

<?php echo $this->Form->create()?>
<!-- start id-form -->
<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
<tr>
<th valign="top">氏名:</th>
<td>
<?php echo $this->Form->input('name', array('label' => false, 'class' => 'inp-form', 'value' => $this->data[$model_name]['last_name'] . ' ' . $this->data[$model_name]['first_name'], 'readonly' => true)); ?>
</td>
<td></td>
</tr>
<tr>
<th valign="top">氏名（フリガナ）:</th>
<td>
<?php echo $this->Form->input('name', array('label' => false, 'class' => 'inp-form', 'value' => $this->data[$model_name]['last_name_kana'] . ' ' . $this->data[$model_name]['first_name_kana'], 'readonly' => true)); ?>
</td>
<td></td>
</tr>
<tr>
<th valign="top">住所:</th>
<td><?php echo $this->Form->textarea('address', array('class' => 'form-textarea-address', 'readonly' => true)); ?></td>
<td>
</td>
</tr>
<tr>
<th valign="top">電話番号:</th>
<td><?php echo $this->Form->input('mobile_number', array('label' => false, 'class' => 'inp-form', 'readonly' => true)); ?></td>
<td></td>
</tr>
<tr>
<th valign="top">メールアドレス:</th>
<td><?php echo $this->Form->input('email', array('label' => false, 'class' => 'inp-form', 'readonly' => true)); ?></td>
<td></td>
</tr> 
<tr>
<td></td>
</tr>
</table>
<!-- end id-form  -->

</td>
<td>

<!--  start related-activities -->

<!-- end related-activities -->

</td>
</tr>
<tr>
<td><img src="images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
<td></td>
</tr>
</table>

<h2 class="mhOrder">スーツ情報</h2>
<table border="0" width="50%" cellpadding="0" cellspacing="0">
<tr valign="top">
<td>

<!-- start id-form -->
<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
<tr>
<th valign="top">注文日:</th>
<td><?php echo $this->Form->input('purchase_date', array('label' => false, 'class' => 'inp-form', 'type' => 'text', 'value' => isset($this->data[$model_name]['purchase_date']) ? date('Y.m.d', strtotime($this->data[$model_name]['purchase_date'])) : '', 'readonly' => true)); ?></td>
<td></td>
</tr>
<tr>
<th valign="top">生地:</th>
<td><?php echo $this->Form->input('OrderDetail.Fabric.name', array('label' => false, 'class' => 'inp-form', 'readonly' => true)); ?></td>
<td></td>
</tr>
<tr>
<th valign="top">生地ブランド:</th>
<td><?php echo $this->Form->input('brand', array('label' => false, 'class' => 'inp-form', 'value' => join(array($this->data['OrderDetail']['Fabric']['BigBrand']['name'], $this->data['OrderDetail']['Fabric']['SmallBrand']['name']), ' '), 'readonly' => true)); ?></td>
<td></td>
</tr>
<tr>
<th valign="top">品名:</th>
<td>	
<input type="text" class="inp-form" value="スーツ" readonly="readonly" />
</td>
<td></td>
</tr>
<tr>
<th valign="top">値段:</th>
<td><?php echo $this->Form->input('OrderDetail.Fabric.price', array('label' => false, 'class' => 'inp-form', 'readonly' => true)); ?></td>
<td></td>
</tr> 
<tr>
<th valign="top">スタイル:</th>
<td><?php echo $this->Form->input('OrderDetail.Style.name', array('label' => false, 'class' => 'inp-form', 'readonly' => true)); ?></td>
<td></td>
</tr> 
<tr>
<th valign="top">裏地:</th>
<td>
<input type="text" class="inp-form" value="SW1" readonly="readonly" />
</td>
<td></td>
</tr> 
<tr>
<th valign="top">襟デザイン:</th>
<td><?php echo $this->Form->input('OrderDetail.Collar.name', array('label' => false, 'class' => 'inp-form', 'readonly' => true)); ?></td>
<td></td>
</tr> 
<tr>
<th valign="top">ポケット:</th>
<td><?php echo $this->Form->input('OrderDetail.Pocket.name', array('label' => false, 'class' => 'inp-form', 'readonly' => true)); ?></td>
<td></td>
</tr> 
<tr>
<th valign="top">裾:</th>
<td><?php echo $this->Form->input('OrderDetail.Hem.name', array('label' => false, 'class' => 'inp-form', 'readonly' => true)); ?></td>
<td></td>
</tr> 
<tr>
<th valign="top">ボタン:</th>
<td><?php echo $this->Form->input('OrderDetail.Button.name', array('label' => false, 'class' => 'inp-form', 'readonly' => true)); ?></td>
<td></td>
</tr> 
<tr>
<th valign="top">ネクタイ:</th>
<td><?php echo $this->Form->input('OrderDetail.Ty.name', array('label' => false, 'class' => 'inp-form', 'readonly' => true)); ?></td>
<td></td>
</tr> 
<tr>
<th valign="top">シャツ:</th>
<td><?php echo $this->Form->input('OrderDetail.Shirt.name', array('label' => false, 'class' => 'inp-form', 'readonly' => true)); ?></td>
<td></td>
</tr> 
<tr>
<th valign="top">裏仕様:</th>
<td>	
<input type="text" class="inp-form" value="レギュラー" readonly="readonly" />
</td>
<td></td>
</tr> 
<tr>
<td></td>
</tr>
</table>
<!-- end id-form  -->

</td>
<td>
<p style="margin-left: -300px; border: #999999 solid 1px;"><img src="images/suit/suit.jpg" /></p>
<!--  start related-activities -->

<!-- end related-activities -->

</td>
</tr>
<tr>
<td><img src="images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
<td></td>
</tr>
</table>

<h2 class="mhOrder">アンケート</h2>
<table border="0" width="100%" cellpadding="0" cellspacing="0">
<tr valign="top">
<td>

<!-- start id-form -->
<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
<?php for ($i = 0; $i < sizeof($this->data['Answer']); $i++) {?>
<tr>
<th valign="top"><?php echo $this->data['Answer'][$i]['Option']['Question']['name']?>:</th>
<td>
<?php echo $this->Form->input('Answer.'.$i.'.Option.text', array('label' => false, 'class' => 'inp-form', 'readonly' => true));?>
</td>
<td></td>
</tr>
<?php } ?>
<tr>
<th>&nbsp;</th>
<td valign="top">
<a href="javascript:void(0)" onclick="window.print();"><input type="button" value="" class="btn-print" /></a>
</td>
<td></td>
</tr>
</table>
<!-- end id-form  -->
<?php echo $this->Form->end()?>
</td>
<td>

<!--  start related-activities -->

<!-- end related-activities -->

</td>
</tr>
<tr>
<td><img src="images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
<td></td>
</tr>
</table>
<div class="clear"></div>


</div>
<!--  end content-table-inner  -->
</td>
<td id="tbl-border-right"></td>
</tr>
<tr>
<th class="sized bottomleft"></th>
<td id="tbl-border-bottom"></td>
<th class="sized bottomright"></th>
</tr>
</table>















<div class="clear">&nbsp;</div>

</div>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div>
<!--  end content-outer -->