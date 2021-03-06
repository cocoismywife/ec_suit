<!-- start content-outer -->
<div id="content-outer">
<!-- start content -->
<div id="content">

<div id="page-heading"><h1>登録生地　詳細</h1></div>

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

<table border="0" width="100%" cellpadding="0" cellspacing="0">
<tr valign="top">
<td>

<?php echo $this->Form->create($model_name, array('action' => 'amend', 'type' => 'file'))?>
<?php echo $this->Form->hidden('amendInView');?>
<?php echo $this->Form->hidden('redirect', array('value' => 1));?>

<!-- start id-form -->
<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
<tr>
<th valign="top">生地ID:</th>
<td><?php echo $this->Form->input('code', array('label' => false, 'class' => 'inp-form'))?></td><td></td>
</tr>
<tr>
<th valign="top">生地名:</th>
<td><?php echo $this->Form->input('name', array('label' => false, 'class' => 'inp-form'))?></td><td>
</td>
</tr>
<tr>
<th valign="top">値段:</th>
<td>	
<?php echo $this->Form->input('price', array('label' => false, 'class' => 'inp-form'))?></td>
<td></td>
</tr><tr>
<th valign="top">色:</th>
<td><?php echo $this->Form->input('color_id', array('label'=>false, 'type'=>'select', 'empty'=>'選択してください', 'options'=>$parentList0, 'class'=>'styledselect_form_1') );?></td>
<td></td>
</tr>
<tr>
<th valign="top">柄:</th>
<td>
<?php echo $this->Form->input('big_tracery_id', array('id' => 'big_tracery_id', 'label'=>false, 'type'=>'select', 'empty'=>'大カテゴリ', 'options'=>$parentList1, 'class'=>'styledselect_form_1') );echo '<br />';$options = array('url' => 'update_small_traceries','update' => 'small_tracery_id','complete' => '$("#small_tracery_id_input").remove();$("#small_tracery_id_container").remove();$("#small_tracery_id").selectbox({ inputClass: "styledselect_form_1" });');echo $ajax->observeField('big_tracery_id', $options);echo $this->Form->input('small_tracery_id', array('id' => 'small_tracery_id', 'label'=>false, 'type'=>'select', 'empty'=>'小カテゴリ', 'options'=>$smallTraceryList, 'class'=>'styledselect_form_1') );?></td><td></td>
<td></td>
</tr> 
<tr>
<th valign="top">季節:</th>
<td>	
<?php echo $this->Form->input('season_id', array('label'=>false, 'type'=>'select', 'empty'=>'選択してください', 'options'=>$parentList2, 'class'=>'styledselect_form_1') );?></td>
<td></td>
</tr> 
<tr>
<th valign="top">ブランド:</th>
<td><?phpecho $this->Form->input('big_brand_id', array('id' => 'big_brand_id', 'label'=>false, 'type'=>'select', 'empty'=>'大カテゴリ', 'options'=>$parentList3, 'class'=>'styledselect_form_1') );echo '<br />';$options = array('url' => 'update_small_brands','update' => 'small_brand_id','complete' => '$("#small_brand_id_input").remove();$("#small_brand_id_container").remove();$("#small_brand_id").selectbox({ inputClass: "styledselect_form_1" });');echo $ajax->observeField('big_brand_id', $options);echo $this->Form->input('small_brand_id', array('id' => 'small_brand_id', 'label'=>false, 'type'=>'select', 'empty'=>'小カテゴリ', 'options'=>$smallBrandList, 'class'=>'styledselect_form_1') );?></td>
<td></td>
</tr> 
<tr>
<td></td>
</tr>
<tr>
<th valign="top">備考:</th>
<td><?php echo $this->Form->textarea('remark', array('class' => 'form-textarea'))?></td><td></td>
</tr>
<tr>
<th>生地画像:</th>
<td colspan="2">
<?php echo $this->Html->image('/'.$this->data['Image']['path'].'/'.$this->data['Image']['name'], array('width' => 180, 'height' => 180)); ?>
<?php echo $this->Form->input('image_id', array('type' => 'hidden'))?>
<?php echo $this->Form->input('Fabric.redirect', array('type' => 'hidden'))?>
</td>
</tr>
<tr>
<th> </th>
<td><?php echo $this->Form->input('Image.name', array('type' => 'file', 'label' => false, 'class' => 'file_1'));?></td>
<td>
<div class="bubble-left"></div>
<div class="bubble-inner">JPEG, GIF 5MB max per image</div>
<div class="bubble-right"></div>
</td>
</tr>
<tr>
<th valign="top">公開フラグ:</th>
<td><?php echo $this->Form->checkbox('public', array('id' => 'public', 'value' => '1', 'checked' => ($this->data['Fabric']['public'] == 1 ? true : false)));?></td>
<td></td>
</tr>
<tr>
<th>&nbsp;</th>
<td valign="top">
<?php
    echo $this->Html->link($this->Form->button('', array('class' => 'form-del')), array('action' => 'delete', $this->data[$model_name]['id']), array('title' => '削除する', 'escape' => false), 'この生地を削除しますか?');
    echo $this->Form->submit('', array('div' => false, 'class' => 'form-conf'));
?>
</td>
<td></td>
</tr>
</table>
<!-- end id-form  -->
<?php echo $this->Form->end()?></td>
<td>

<!--  start related-activities -->

<!-- end related-activities -->

</td>
</tr>
<tr>
<td><?php echo $this->Html->image('/images/shared/blank.gif', array('width' => 695, 'height' => 1, 'alt' => 'blank'))?></td>
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
<td id="tbl-border-bottom">&nbsp;</td>
<th class="sized bottomright"></th>
</tr>
</table>
<div class="clear">&nbsp;</div>
</div>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div>
<!--  end content-outer -->