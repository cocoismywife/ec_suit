<!-- start content-outer --><div id="content-outer"><!-- start content --><div id="content"><div id="page-heading"><h1>生地登録　入力</h1></div><table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table"><tr><th rowspan="3" class="sized"><?php echo $this->Html->image('/images/shared/side_shadowleft.jpg', array('width' => 20, 'height' => 300, 'alt'=> '')) ?></th><th class="topleft"></th><td id="tbl-border-top">&nbsp;</td><th class="topright"></th><th rowspan="3" class="sized"><?php echo $this->Html->image('/images/shared/side_shadowright.jpg', array('width' => 20, 'height' => 300, 'alt'=> '')) ?></th></tr><tr><td id="tbl-border-left"></td><td><!--  start content-table-inner --><div id="content-table-inner"><table border="0" width="100%" cellpadding="0" cellspacing="0"><tr valign="top"><td><!--  start step-holder --><div id="step-holder"><div class="step-no">1</div><div class="step-dark-left"><?php echo $this->Html->link('入力', array('action' => 'input'))?></div><div class="step-dark-right">&nbsp;</div><div class="step-no-off">2</div><div class="step-light-left">確認</div><div class="step-light-right">&nbsp;</div><div class="step-no-off">3</div><div class="step-light-left">完了</div><div class="step-light-round">&nbsp;</div><div class="clear"></div></div><!--  end step-holder --><?php echo $this->Form->create($model_name, array('action' => 'confirm', 'type' => 'file'))?><!-- start id-form --><table border="0" cellpadding="0" cellspacing="0"  id="id-form"><tr><th valign="top">生地ID:</th><td><?php echo $this->Form->input('code', array('label' => false, 'class' => 'inp-form'))?></td><td></td></tr><tr><th valign="top">生地名:</th><td><?php echo $this->Form->input('name', array('label' => false, 'class' => 'inp-form'))?></td><td></td></tr><tr><th valign="top">値段:</th><td>	<?php echo $this->Form->input('price', array('label' => false, 'class' => 'inp-form'))?></td><td></td></tr> <tr><th valign="top">色:</th><td>	<select  class="styledselect_form_1"><option value="">選択してください</option><option value="">紺系（ネイビー、ブルー</option><option value="">灰系（グレー、チャコール</option><option value="">茶系（ブラウン、ベージュ</option><option value="">ブラック</option><option value="">その他</option></select></td><td></td></tr><tr><th valign="top">柄:</th><td>	<select  class="styledselect_form_1"><option value="">大カテゴリ</option><option value="">無地</option><option value="">ストライプ</option><option value="">ウインドウペン・チェック</option><option value="">その他</option></select><br /><select class="styledselect_form_1"><option value="">小カテゴリ</option><option value="">無地</option><option value="">ストライプ　細いストライプ</option><option value="">ストライプ　太いストライプ</option><option value="">ストライプ　柄ストライプ</option><option value="">ストライプ　その他</option><option value="">ウインドウペン・チェック　ウインドウペン</option><option value="">ウインドウペン・チェック　チェック</option><option value="">ウインドウペン・チェック　その他</option><option value="">その他　織り柄</option><option value="">その他　その他</option></select></td><td></td></tr> <tr><th valign="top">季節:</th><td>	<select  class="styledselect_form_1"><option value="">選択してください</option><option value="">春夏</option><option value="">秋冬</option></select></td><td></td></tr> <tr><th valign="top">ブランド:</th><td>	<select  class="styledselect_form_1"><option value="">大カテゴリ</option><option value="">日本製</option><option value="">イタリア製</option><option value="">イギリス製</option><option value="">その他</option></select><br /><select  class="styledselect_form_1"><option value="">小カテゴリ</option><option value="">大同毛織</option><option value="">御幸毛織</option><option value="">CANONICO</option><option value="">Ermenegildo Zegna</option><option value="">Loro Piana</option><option value="">その他</option><option value="">Dormeuil</option><option value="">Dunhill</option><option value="">Scabal</option><option value="">Taylor &amp; Lodge</option><option value="">Hardy Amies</option><option value="">その他</option></select></td><td></td></tr> <tr><td></td></tr><tr><th valign="top">備考:</th><td><?php echo $this->Form->textarea('remark', array('class' => 'form-textarea'))?></td><td></td></tr><tr><th>生地画像:</th><td><input type="file" class="file_1" /></td><td><div class="bubble-left"></div><div class="bubble-inner">JPEG, GIF 5MB max per image</div><div class="bubble-right"></div></td></tr><tr><th>&nbsp;</th><td valign="top"><?php echo $this->Form->submit('', array('class' => 'form-conf'))?></td><td></td></tr></table><!-- end id-form  --><?php echo $this->Form->end()?></td><td><!--  start related-activities --><!-- end related-activities --></td></tr><tr><td><img src="images/shared/blank.gif" width="695" height="1" alt="blank" /></td><td></td></tr></table><div class="clear"></div></div><!--  end content-table-inner  --></td><td id="tbl-border-right"></td></tr><tr><th class="sized bottomleft"></th><td id="tbl-border-bottom">&nbsp;</td><th class="sized bottomright"></th></tr></table><div class="clear">&nbsp;</div></div><!--  end content --><div class="clear">&nbsp;</div></div><!--  end content-outer -->