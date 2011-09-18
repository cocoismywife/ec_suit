<div id="pageBody">
<div id="content">
<?php echo $this->Form->create($model_name, array('action' => 'add_finish', 'method' => 'post'))?>
<?php echo $this->Form->hidden('id');?>
<?php echo $this->Form->input ( 'survey_id', array ('type' => 'hidden', 'value' => $survey ['Survey'] [id] ) );?>
<?php 
    for($i = 0; $i < sizeof ( $survey ['Question'] ); $i ++) {
        $optionOrder = $i + 1;
    	$question = $survey ['Question'] [$i];
    	echo $this->Form->input ( 'Question.' . $i . '.id', array ('type' => 'hidden', 'value' => $question ['id'] ) );
    	$optionClassName = 'answer';
    	echo '<dl class="';
    	if ($optionOrder == 2 || $optionOrder == 3 || $optionOrder == 5 || $optionOrder == 9 || $optionOrder == 10) {
    	    $className = 'qaBigSet';
    	    if ($optionOrder == 2) {
    	        $optionClassName = 'answer cloudA';
    	    }
    	} else {
    	    $className = 'qaSet';
    	}
    	echo $className;
    	echo '">';
    	echo '<dt>';
    	$imageName = '/images/order/img_anq' . $optionOrder . '.gif';
    	echo $this->Html->image($imageName, array('alt'=> __($question ['name'], true)));
    	echo '</dt>';
    	echo '<dd>';
    	echo '<dl class="' . $optionClassName . '">';
    	
    	$radio_option = array ();
    	for($j = 0; $j < sizeof ( $question ['Option'] ); $j ++) {
    		$option = $question ['Option'] [$j];
    		$radio_option [$option ['id']] = $option ['text'];
    	}
    	$radioHtmlText = $this->Form->radio ( 'Answer.' . $i . '.option_id', $radio_option, array ('separator' => 'zxcv', 'legend' => false, 'label' => false, 'value' => false));
    	$radioHtmlArray = split('zxcv', $radioHtmlText);
    	foreach ($radioHtmlArray as $radioHtml) {
    	    echo '<dd>' . $radioHtml . '</dd>';
    	}
    	echo '</dl>';
    	echo '</dd>';
    	echo '</dl>';
    }
?>
<p class="alignCenter"><a href="javascript:document.forms[0].submit();"><?php echo $this->Html->image('/images/order/btn_send.gif', array('alt'=> __('送信', true)));?></a></p>

<?php echo $this->Form->end()?>
<!-- / id content --></div>
<!-- / id pageBody --></div>

<div id="footer">
<div id="footerInner">
<p><?php echo $this->Html->image('/images/order/img_foot3.gif', array('alt'=> __('アンケートにご協力をお願い致します。', true))) ?></p>
<!-- / id footerInner --></div>
<!-- / id footer --></div>