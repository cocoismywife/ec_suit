<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0, minimum-scale=1.0, "/>
<title>仕立館オーダーメイドスーツAPP</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="format-detection" content="telephone=no" />
<?php echo $this->Html->css('import', null, array('media' => 'screen, print')) ?>
<?php echo $this->Html->css('print', null, array('media' => 'print')) ?>
</head>

<body>
<div id="layout">

<?php echo $content_for_layout; ?>

<div id="footer">
<div id="footerInner">
<p><?php echo $this->Html->image('/images/order/img_foot1.gif', array('alt'=> __('情報の入力をお願い致します。', true))) ?></p>
<!-- / id footerInner --></div>
<!-- / id footer --></div>
<!-- / id layout --></div>
</body>
</html>
