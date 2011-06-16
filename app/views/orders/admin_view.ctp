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

<?php echo $this->Form->create()?>
<!-- start id-form -->
<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
<tr>
<th valign="top">生地ID:</th>
<td><?php echo $this->Form->input('code', array('label' => false, 'class' => 'inp-form', 'readonly' => true))?></td>
<td></td>
</tr>
<tr>
<th valign="top">生地名:</th>
<td><?php echo $this->Form->input('name', array('label' => false, 'class' => 'inp-form', 'readonly' => true))?></td>
<td>
</td>
</tr>
<tr>
<th valign="top">値段:</th>
<td>	
<?php echo $this->Form->input('price', array('label' => false, 'class' => 'inp-form', 'readonly' => true))?>
</td>
<td></td>
</tr>
<tr>
<th valign="top">色:</th>
<td>	
<?php echo $this->Form->input('color_name', array('label' => false, 'class' => 'inp-form', 'readonly' => true))?>
</td>
<td></td>
</tr>
<tr>
<th valign="top">柄:</th>
<td>	
<?php echo $this->Form->input('tracery_name', array('label' => false, 'class' => 'inp-form', 'readonly' => true))?>
</td>
<td></td>
</tr> 
<tr>
<th valign="top">季節:</th>
<td>	
<?php echo $this->Form->input('season_name', array('label' => false, 'class' => 'inp-form', 'readonly' => true))?>
</td>
<td></td>
</tr> 
<tr>
<th valign="top">ブランド:</th>
<td>	
<?php echo $this->Form->input('brand_name', array('label' => false, 'class' => 'inp-form', 'readonly' => true))?>
</td>
<td></td>
</tr> 
<tr>
<td></td>
</tr>
<tr>
<th valign="top">備考:</th>
<td><?php echo $this->Form->textarea('remark', array('class' => 'form-textarea', 'readonly' => true))?></td>
<td></td>
</tr>
<tr>
<th>生地画像:</th>
<td colspan="2"><img src="images/cloth/cloth01.jpg" /></td>
</tr>
<tr>
<th>&nbsp;</th>
<td valign="top">
<?php echo $this->Html->link($this->Form->button('', array('class' => 'form-del')), array('action' => 'delete', $this->data[$model_name]['id']), array('title' => '削除する', 'escape' => false), 'この生地を削除しますか?')?>
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