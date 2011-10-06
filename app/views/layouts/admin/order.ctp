<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0, minimum-scale=1.0, "/>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="format-detection" content="telephone=no" />
<title>仕立館オーダーメイドスーツAPP</title>
<script src="http://ajaxzip3.googlecode.com/svn/trunk/ajaxzip3/ajaxzip3.js" charset="UTF-8"></script>
<?php echo $this->Javascript->link(array('jquery/jquery-1.6.2.min'), true) ?>
<?php echo $this->Javascript->link(array('jquery/jquery-ui-1.8.16.custom.dialog.min'), true) ?>
<?php echo $this->Html->css('import', null, array('media' => 'screen, print')) ?>
<?php echo $this->Html->css('print', null, array('media' => 'print')) ?>
<?php echo $this->Html->css('themes/ui-darkness/jquery-ui-1.8.16.custom', null, array('media' => 'screen')) ?>
</head>

<body class="<?php
if (isset($body_class)) 
echo $body_class;
?>">
<div id="layout">

<?php echo $content_for_layout; ?>

<!-- / id layout --></div>
</body>
</html>
