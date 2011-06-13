<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>仕立館</title>
<?php echo $this->Html->css('screen', null, array('media' => 'screen', 'title' => 'default')) ?>
<!--[if IE]>
<?php echo $this->Html->css('pro_dropline_ie', null, array('media' => 'screen')) ?>
<![endif]-->

<!--  jquery core -->
<?php echo $javascript->link(array('jquery/jquery-1.4.1.min'), true) ?>

<!--  checkbox styling script -->
<?php echo $javascript->link(array('jquery/ui.core', 'jquery/ui.checkbox', 'jquery/jquery.bind'), true) ?>
<script type="text/javascript">
$(function(){
$('input').checkBox();
$('#toggle-all').click(function(){
$('#toggle-all').toggleClass('toggle-checked');
$('#mainform input[type=checkbox]').checkBox('toggle');
return false;
});
});
</script>  

<![if !IE 7]>

<!--  styled select box script version 1 -->
<?php echo $javascript->link(array('jquery/jquery.selectbox-0.5'), true) ?>
<script type="text/javascript">
$(document).ready(function() {
$('.styledselect').selectbox({ inputClass: "selectbox_styled" });
});
</script>


<![endif]>

<!--  styled select box script version 2 --> 
<?php echo $javascript->link(array('jquery/jquery.selectbox-0.5_style_2'), true) ?>
<script type="text/javascript">
$(document).ready(function() {
$('.styledselect_form_1').selectbox({ inputClass: "styledselect_form_1" });
$('.styledselect_form_2').selectbox({ inputClass: "styledselect_form_2" });
});
</script>

<!--  styled select box script version 3 --> 
<?php echo $javascript->link(array('jquery/jquery.selectbox-0.5_style_2'), true) ?>
<script type="text/javascript">
$(document).ready(function() {
$('.styledselect_pages').selectbox({ inputClass: "styledselect_pages" });
});
</script>

<!--  styled file upload script --> 
<?php echo $javascript->link(array('jquery/jquery.filestyle'), true) ?>
<script type="text/javascript" charset="utf-8">
$(function() {
$("input.file_1").filestyle({ 
image: "images/forms/choose-file.gif",
imageheight : 21,
imagewidth : 78,
width : 310
});
});
</script>

<!-- Custom jquery scripts -->
<?php echo $javascript->link(array('jquery/custom_jquery'), true) ?>

<!-- Tooltips -->
<?php echo $javascript->link(array('jquery/jquery.tooltip', 'jquery/jquery.dimensions'), true) ?>
<script type="text/javascript">
$(function() {
$('a.info-tooltip ').tooltip({
track: true,
delay: 0,
fixPNG: true, 
showURL: false,
showBody: " - ",
top: -35,
left: 5
});
});
</script> 


<!--  date picker script -->
<?php echo $this->Html->css('datePicker') ?>
<?php echo $javascript->link(array('jquery/date', 'jquery/jquery.datePicker'), true) ?>
<script type="text/javascript" charset="utf-8">
$(function()
{

// initialise the "Select date" link
$('#date-pick')
.datePicker(
// associate the link with a date picker
{
createButton:false,
startDate:'01/01/2005',
endDate:'31/12/2020'
}
).bind(
// when the link is clicked display the date picker
'click',
function()
{
updateSelects($(this).dpGetSelected()[0]);
$(this).dpDisplay();
return false;
}
).bind(
// when a date is selected update the SELECTs
'dateSelected',
function(e, selectedDate, $td, state)
{
updateSelects(selectedDate);
}
).bind(
'dpClosed',
function(e, selected)
{
updateSelects(selected[0]);
}
);

var updateSelects = function (selectedDate)
{
var selectedDate = new Date(selectedDate);
$('#d option[value=' + selectedDate.getDate() + ']').attr('selected', 'selected');
$('#m option[value=' + (selectedDate.getMonth()+1) + ']').attr('selected', 'selected');
$('#y option[value=' + (selectedDate.getFullYear()) + ']').attr('selected', 'selected');
}
// listen for when the selects are changed and update the picker
$('#d, #m, #y')
.bind(
'change',
function()
{
var d = new Date(
$('#y').val(),
$('#m').val()-1,
$('#d').val()
);
$('#date-pick').dpSetSelected(d.asString());
}
);

// default the position of the selects to today
var today = new Date();
updateSelects(today.getTime());

// and update the datePicker to reflect it...
$('#d').trigger('change');
});
</script>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<?php echo $javascript->link(array('jquery/jquery.pngFix.pack'), true) ?>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
</head>
<body> 
<!-- Start: page-top-outer -->
<div id="page-top-outer">    

<!-- Start: page-top -->
<div id="page-top">

<!-- start logo -->
<div id="logo">
<a href="list.html"><?php echo $this->Html->image('/images/shared/logo.png', array('alt'=> __('仕立館', true), 'border' => '0', 'height' => 40, 'width' => 116)) ?></a>
</div>
<!-- end logo -->

<!--  start top-search -->
<div id="top-search">
<table border="0" cellpadding="0" cellspacing="0">
<tr>
<td><input type="text" value="Search" onblur="if (this.value=='') { this.value='Search'; }" onfocus="if (this.value=='Search') { this.value=''; }" class="top-search-inp" /></td>
<td>

<select  class="styledselect">
<option value="">選択してください</option>
<option value="">生地</option>
<option value="">注文</option>
</select> 

</td>
<td>
<?php echo $form->submit('/images/shared/top_search_btn.gif'); ?>
</td>
</tr>
</table>
</div>
<!--  end top-search -->
<div class="clear"></div>

</div>
<!-- End: page-top -->

</div>
<!-- End: page-top-outer -->

<div class="clear">&nbsp;</div>

<!--  start nav-outer-repeat................................................................................................. START -->
<div class="nav-outer-repeat"> 
<!--  start nav-outer -->
<div class="nav-outer"> 

<!-- start nav-right -->
<div id="nav-right">

<!--  start account-content -->	
<div class="account-content">
<div class="account-drop-inner">
<a href="list.html" id="acc-settings">Settings</a>
<div class="clear">&nbsp;</div>
<div class="acc-line">&nbsp;</div>
<a href="list.html" id="acc-details">Personal details </a>
<div class="clear">&nbsp;</div>
<div class="acc-line">&nbsp;</div>
<a href="list.html" id="acc-project">Project details</a>
<div class="clear">&nbsp;</div>
<div class="acc-line">&nbsp;</div>
<a href="list.html" id="acc-inbox">Inbox</a>
<div class="clear">&nbsp;</div>
<div class="acc-line">&nbsp;</div>
<a href="list.html" id="acc-stats">Statistics</a> 
</div>
</div>
<!--  end account-content -->

</div>
<!-- end nav-right -->


<!--  start nav -->
<div class="nav">
<div class="table">

<ul class="<?php echo $navClass == '1' ? 'current' : 'select' ?>"><li><?php echo $this->Html->link('<b>生地一覧</b><!--[if IE 7]><!-->', array('action' => 'all'), array('escape' => false));?><!--<![endif]-->
</li>
</ul>

<div class="nav-divider">&nbsp;</div>

<ul class="<?php echo $navClass == '2' ? 'current' : 'select' ?>"><li><?php echo $this->Html->link('<b>生地登録</b><!--[if IE 7]><!-->', array('action' => 'input'), array('escape' => false));?><!--<![endif]-->
<!--[if lte IE 6]><table><tr><td><![endif]-->
<!--[if lte IE 6]></td></tr></table></a><![endif]-->
</li>
</ul>

<div class="nav-divider">&nbsp;</div>

<ul class="select"><li><a href="order.html"><b>注文一覧</b><!--[if IE 7]><!--></a><!--<![endif]-->
<!--[if lte IE 6]><table><tr><td><![endif]-->
<!--[if lte IE 6]></td></tr></table></a><![endif]-->
</li>
</ul>

<div class="nav-divider">&nbsp;</div>

<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
<!--  start nav -->

</div>
<div class="clear"></div>
<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->

<div class="clear"></div>

	<?php echo $content_for_layout; ?>

<div class="clear">&nbsp;</div>

<!-- start footer -->         
<div id="footer">
<!--  start footer-left -->
<div id="footer-left">

&copy; Copyright. All rights reserved.</div>
<!--  end footer-left -->
<div class="clear">&nbsp;</div>
</div>
<!-- end footer -->

</body>
</html>