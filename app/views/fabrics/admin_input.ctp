<!-- start content-outer --><div id="content-outer"><!-- start content --><div id="content"><div id="page-heading"><h1>生地登録　入力</h1></div><table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table"><tr><th rowspan="3" class="sized"><?php echo $this->Html->image('/images/shared/side_shadowleft.jpg', array('width' => 20, 'height' => 300, 'alt'=> '')) ?></th><th class="topleft"></th><td id="tbl-border-top">&nbsp;</td><th class="topright"></th><th rowspan="3" class="sized"><?php echo $this->Html->image('/images/shared/side_shadowright.jpg', array('width' => 20, 'height' => 300, 'alt'=> '')) ?></th></tr><tr><td id="tbl-border-left"></td><td><!--  start content-table-inner --><div id="content-table-inner"><table border="0" width="100%" cellpadding="0" cellspacing="0"><tr valign="top"><td><!--  start step-holder --><div id="step-holder"><div class="step-no">1</div><div class="step-dark-left"><?php echo $this->Html->link('入力', array('action' => 'input'))?></div><div class="step-dark-right">&nbsp;</div><div class="step-no-off">2</div><div class="step-light-left">確認</div><div class="step-light-right">&nbsp;</div><div class="step-no-off">3</div><div class="step-light-left">完了</div><div class="step-light-round">&nbsp;</div><div class="clear"></div></div><!--  end step-holder --><?php echo $this->Form->create($model_name, array('action' => 'input', 'type' => 'file'))?><!-- start id-form --><table border="0" cellpadding="0" cellspacing="0"  id="id-form"><tr><th valign="top">生地ID:</th><td><?php echo $this->Form->input('code', array('label' => false, 'class' => 'inp-form'))?></td><td></td></tr><tr><th valign="top">生地名:</th><td><?php echo $this->Form->input('name', array('label' => false, 'class' => 'inp-form'))?></td><td></td></tr><tr><th valign="top">値段:</th><td>	<?php echo $this->Form->input('price', array('label' => false, 'class' => 'inp-form'))?></td><td></td></tr> <tr><th valign="top">色:</th><td><?php echo $this->Form->input('color_id', array('label'=>false, 'type'=>'select', 'empty'=>'選択してください', 'options'=>$parentList0, 'class'=>'styledselect_form_1') );?></td><td></td></tr><tr><th valign="top">柄:</th><td><?php echo $this->Form->input('big_tracery_id', array('id' => 'big_tracery_id', 'label'=>false, 'type'=>'select', 'empty'=>'大カテゴリ', 'options'=>$parentList1, 'class'=>'styledselect_form_1') );echo '<br />';$options = array('url' => 'update_small_traceries','update' => 'small_tracery_id','complete' => '$("#small_tracery_id_input").remove();$("#small_tracery_id_container").remove();$("#small_tracery_id").selectbox({ inputClass: "styledselect_form_1" });');echo $ajax->observeField('big_tracery_id', $options);echo $this->Form->input('small_tracery_id', array('id' => 'small_tracery_id', 'label'=>false, 'type'=>'select', 'empty'=>'小カテゴリ', 'class'=>'styledselect_form_1') );?></td><td></td></tr> <tr><th valign="top">季節:</th><td>	<?php echo $this->Form->input('season_id', array('label'=>false, 'type'=>'select', 'empty'=>'選択してください', 'options'=>$parentList2, 'class'=>'styledselect_form_1') );?></td><td></td></tr> <tr><th valign="top">ブランド:</th><td><?phpecho $this->Form->input('big_brand_id', array('id' => 'big_brand_id', 'label'=>false, 'type'=>'select', 'empty'=>'大カテゴリ', 'options'=>$parentList3, 'class'=>'styledselect_form_1') );echo '<br />';$options = array('url' => 'update_small_brands','update' => 'small_brand_id','complete' => '$("#small_brand_id_input").remove();$("#small_brand_id_container").remove();$("#small_brand_id").selectbox({ inputClass: "styledselect_form_1" });');echo $ajax->observeField('big_brand_id', $options);echo $this->Form->input('small_brand_id', array('id' => 'small_brand_id', 'label'=>false, 'type'=>'select', 'empty'=>'小カテゴリ', 'class'=>'styledselect_form_1') );?></td><td></td></tr> <tr><td></td></tr><tr><th valign="top">備考:</th><td><?php echo $this->Form->textarea('remark', array('class' => 'form-textarea'))?></td><td></td></tr><tr><th>生地画像:</th><td><?php echo $this->Form->input('Image.name', array('type' => 'file', 'label' => false, 'error' => 'Choose a image', 'class' => 'file_1'));?></td><td><div class="bubble-left"></div><div class="bubble-inner">JPEG, GIF 5MB max per image</div><div class="bubble-right"></div></td></tr><tr><th>&nbsp;</th><td valign="top"><?php echo $this->Form->submit('', array('class' => 'form-conf'))?></td><td></td></tr></table><!-- end id-form  --><?php echo $this->Form->end()?></td><td><!--  start related-activities --><!-- end related-activities --></td></tr><tr><td><img src="images/shared/blank.gif" width="695" height="1" alt="blank" /></td><td></td></tr></table><div class="clear"></div></div><!--  end content-table-inner  --></td><td id="tbl-border-right"></td></tr><tr><th class="sized bottomleft"></th><td id="tbl-border-bottom">&nbsp;</td><th class="sized bottomright"></th></tr></table><div class="clear">&nbsp;</div></div><!--  end content --><div class="clear">&nbsp;</div></div><!--  end content-outer -->