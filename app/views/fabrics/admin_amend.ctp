<<script type="text/javascript">
<!--
	function amend_fabric() {
		$('#FabricSaveForm').attr('action', '/ec_suits/admin/fabrics/amend').submit();;
	}
//-->
</script>
<!-- start content-outer -->
<div id="content-outer">
<!-- start content -->
<div id="content">


<div id="page-heading"><h1>生地登録　編集</h1></div> 


<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
<th rowspan="3" class="sized"><?php echo $this->Html->image('/images/shared/side_shadowleft.jpg', array('width' => 20, 'height' => 300, 'alt'=> '')) ?></th>
<td id="tbl-border-top">&nbsp;</td>
<th class="topright"></th>
<th rowspan="3" class="sized"><?php echo $this->Html->image('/images/shared/side_shadowright.jpg', array('width' => 20, 'height' => 300, 'alt'=> '')) ?></th>
<tr>
<td id="tbl-border-left"></td>
<td>
<!--  start content-table-inner -->
<div id="content-table-inner">

<table border="0" width="100%" cellpadding="0" cellspacing="0">
<tr valign="top">
<td>


<!--  start step-holder -->
<div id="step-holder">
<div class="step-no">1</div>
<div class="step-dark-left">修正</div> 
<div class="step-dark-right">&nbsp;</div>
<div class="step-no-off">2</div>
<div class="step-light-left">確認</div>
<div class="step-light-right">&nbsp;</div>
<div class="step-no-off">3</div>
<div class="step-light-left">完了</div>
<div class="step-light-round">&nbsp;</div>
<div class="clear"></div>
</div>
<!--  end step-holder -->

<?php echo $this->Form->create($model_name, array('action' => 'amend', 'type' => 'file'))?>
<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
<tr>
<th valign="top">生地ID:</th>
<td><?php echo $this->Form->input('code', array('label' => false, 'class' => 'inp-form'))?></td>
</tr>
<tr>
<th valign="top">生地名:</th>
<td><?php echo $this->Form->input('name', array('label' => false, 'class' => 'inp-form'))?></td>
</td>
</tr>
<tr>
<th valign="top">値段:</th>
<td>	
<?php echo $this->Form->input('price', array('label' => false, 'class' => 'inp-form'))?>
<td></td>
</tr><tr>
<th valign="top">色:</th>
<td>
<td></td>
</tr>
<tr>
<th valign="top">柄:</th>
<td>
<?php 
<td></td>
</tr> 
<tr>
<th valign="top">季節:</th>
<td>	
<?php echo $this->Form->input('season_id', array('label'=>false, 'type'=>'select', 'empty'=>'選択してください', 'options'=>$parentList2, 'class'=>'styledselect_form_1') );?>
<td></td>
</tr> 
<tr>
<th valign="top">ブランド:</th>
<td>
<td></td>
</tr> 
<tr>

<td></td>
</tr>
<tr>
<th valign="top">備考:</th>
<td><?php echo $this->Form->textarea('remark', array('class' => 'form-textarea'))?></td>
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
<th>&nbsp;</th>
<td valign="top">
<?php
	echo $this->Form->submit('', array('class' => 'form-conf'));
?>
</td>
<td></td>
</tr>
</table>
<!-- end id-form  -->
<?php echo $this->Form->end()?>
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