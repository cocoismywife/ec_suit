<!-- start content-outer --> <div id="content-outer"> <!-- start content --> <div id="content">  <!--  start page-heading --> <div id="page-heading"> <h1>注文一覧</h1> </div> <!-- end page-heading -->  <table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table"> <tr> <th rowspan="3" class="sized"><?php echo $this->Html->image('/images/shared/side_shadowleft.jpg', array('width' => 20, 'height' => 300, 'alt'=> '')) ?></th><th class="topleft"></th> <td id="tbl-border-top">&nbsp;</td> <th class="topright"></th> <th rowspan="3" class="sized"><?php echo $this->Html->image('/images/shared/side_shadowright.jpg', array('width' => 20, 'height' => 300, 'alt'=> '')) ?></th> </tr> <tr> <td id="tbl-border-left"></td> <td> <!--  start content-table-inner ...................................................................... START --> <div id="content-table-inner">  <!--  start table-content  --> <div id="table-content">		 <!--  start product-table ..................................................................................... --> <form id="mainform" action=""> <table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table"> <tr> <th width="" class="table-header-repeat line-left minwidth-1"><a href="">注文番号</a>	</th> <th width="" class="table-header-repeat line-left minwidth-1"><a href="">氏名</a></th> <th width="" class="table-header-repeat line-left"><a href="">メールアドレス</a></th> <th width="" class="table-header-repeat line-left"><a href="">商品名</a></th> <th width="" class="table-header-repeat line-left"><a href="">注文日</a></th> <th width="" class="table-header-options line-left"><a href="">Options</a></th> </tr> <?php 	foreach ($list as $item) {		echo $this->Html->tableCells(array(array(			$item[$model_name]['id'],			$item[$model_name]['first_name'].' '.$item[$model_name]['last_name'],			$item[$model_name]['email'],			'スーツ',			date('Y.j.j', $item[$model_name]['purcharse_date']),			$this->Html->link('', array('action' => 'view', $item[$model_name]['id']), array('title' => '詳細を見る', 'class' => 'icon-1 info-tooltip')).			$this->Html->link('', array('action' => 'delete', $item[$model_name]['id']), array('title' => '削除する', 'class' => 'icon-2 info-tooltip'), 'この注文を削除しますか?')		)), null, array('class'=>'alternate-row'));	}?><tr> <td>00025218</td> <td>テスト太郎</td> <td><a href="">george@mainevent.co.za</a></td> <td>スーツ</td> <td class="options-width">2011.5.30</td> <td class="options-width"> <a href="order_detail.html" title="詳細を見る" class="icon-1 info-tooltip"></a> <a href="" title="削除する" class="icon-2 info-tooltip"></a></td> </tr> <tr class="alternate-row"> <td>00025218</td> <td>テスト太郎</td> <td><a href="">george@mainevent.co.za</a></td> <td>スーツ</td> <td class="options-width">2011.5.30</td> <td class="options-width"> <a href="order_detail.html" title="詳細を見る" class="icon-1 info-tooltip"></a> <a href="" title="削除する" class="icon-2 info-tooltip"></a></td> </tr> <tr> <td>00025218</td> <td>テスト太郎</td> <td><a href="">george@mainevent.co.za</a></td> <td>スーツ</td> <td class="options-width">2011.5.30</td> <td class="options-width"> <a href="order_detail.html" title="詳細を見る" class="icon-1 info-tooltip"></a> <a href="" title="削除する" class="icon-2 info-tooltip"></a></td> </tr> <tr class="alternate-row"> <td>00025218</td> <td>テスト太郎</td> <td><a href="">george@mainevent.co.za</a></td> <td>スーツ</td> <td class="options-width">2011.5.30</td> <td class="options-width"> <a href="order_detail.html" title="詳細を見る" class="icon-1 info-tooltip"></a> <a href="" title="削除する" class="icon-2 info-tooltip"></a></td> </tr> <tr> <td>00025218</td> <td>テスト太郎</td> <td><a href="">george@mainevent.co.za</a></td> <td>スーツ</td> <td class="options-width">2011.5.30</td> <td class="options-width"> <a href="order_detail.html" title="詳細を見る" class="icon-1 info-tooltip"></a> <a href="" title="削除する" class="icon-2 info-tooltip"></a></td> </tr> <tr class="alternate-row"> <td>00025218</td> <td>テスト太郎</td> <td><a href="">george@mainevent.co.za</a></td> <td>スーツ</td> <td class="options-width">2011.5.30</td> <td class="options-width"> <a href="order_detail.html" title="詳細を見る" class="icon-1 info-tooltip"></a> <a href="" title="削除する" class="icon-2 info-tooltip"></a></td> </tr> </table> <!--  end product-table................................... --> </form> </div> <!--  end content-table  -->  <!--  start actions-box ............................................... --> <div id="actions-box"> <a href="" class="action-slider"></a> <div id="actions-box-slider"> <a href="" class="action-edit">CSV書き出し</a> </div> <div class="clear"></div> </div> <!-- end actions-box........... -->  <!--  start paging..................................................... --> <table border="0" cellpadding="0" cellspacing="0" id="paging-table"> <tr> <td> <?php	$prevTenPage = $this->Paginator->current() - 10 < 1 ? 1 : $this->Paginator->current() - 10;	if ($this->Paginator->current() == 1) {		echo $this->Html->tag('span', '', array('class' => 'page-far-left'));	} else {		echo $this->Html->link('', array('action' => '', 'page' => $prevTenPage ), array('class' => 'page-far-left'));	}	echo $this->Paginator->prev ( '', array ('escape' => false, 'class' => 'page-left' ) )?><div id="page-info">Page <strong><?php echo $this->Paginator->current()?></strong> / <?php echo $this->params['paging'][$model_name]['pageCount']?></div><?php	echo $this->Paginator->next ( '', array ('escape' => false, 'class' => 'page-right' ) );	$nextTenPage = $this->Paginator->current() + 10 > $this->params['paging'][$model_name]['pageCount'] ? $this->params['paging'][$model_name]['pageCount'] : $this->Paginator->current() + 10;	if ($this->Paginator->current() == $this->params['paging'][$model_name]['pageCount']) {		echo $this->Html->tag('span', '', array('class' => 'page-far-right'));	} else {		echo $this->Html->link('', array('action' => '', 'page' => $nextTenPage ), array('class' => 'page-far-right'));	}?></td> <td> <?php $valueList = array('5'=>5, '10'=>10, '20'=>20);echo $this->Form->input('number_row', array('id' => 'number_row', 'label'=>false, 'type'=>'select', 'empty'=>'Number of rows', 'options'=>$valueList, 'class'=>'styledselect_pages') );echo $this->Ajax->observeField('number_row', array('url' => 'page_limit'));?> </td> </tr> </table> <!--  end paging................ -->  <div class="clear"></div>  </div> <!--  end content-table-inner ............................................END  --> </td> <td id="tbl-border-right"></td> </tr> <tr> <th class="sized bottomleft"></th> <td id="tbl-border-bottom">&nbsp;</td> <th class="sized bottomright"></th> </tr> </table> <div class="clear">&nbsp;</div>  </div> <!--  end content --> <div class="clear">&nbsp;</div> </div> <!--  end content-outer........................................................END --> 