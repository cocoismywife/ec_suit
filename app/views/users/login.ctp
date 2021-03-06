<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>仕立館</title>
<?php echo $this->Html->css('screen', null, array('media' => 'screen', 'title' => 'default')) ?>x
<!--  jquery core -->
<?php echo $this->Javascript->link(array('jquery/jquery-1.4.2.min'), true) ?>

<!-- Custom jquery scripts -->
<?php echo $this->Javascript->link(array('jquery/custom_jquery'), true) ?>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<?php echo $this->Javascript->link(array('jquery/jquery.pngFix.pack'), true) ?>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
</head>
<body id="login-bg"> 
 
<!-- Start: login-holder -->
<div id="login-holder">

	<!-- start logo -->
	<div id="logo-login">
		<?php echo $this->Html->image('/images/shared/logo.png', array('alt'=> '')); ?>
	</div>
	<!-- end logo -->
	
	<div class="clear"></div>
	
	<!--  start loginbox ................................................................................. -->
	<div id="loginbox">
	
	<!--  start login-inner -->
	<div id="login-inner">
		<?php 
		    echo $this->Session->flash('auth');
		    echo $this->Form->create($model_name)?>
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th>Username</th>
			<td><?php echo $this->Form->input('username', array('label' => false, 'class' => 'login-inp'))?></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><?php echo $this->Form->input('password', array('label' => false, 'class' => 'login-inp', 'onfocus' => 'this.value=""'))?></td>
		</tr>
		<tr>
			<th></th>
			<td valign="top"><input type="checkbox" class="checkbox-size" id="login-check" /><label for="login-check">パスワードを記録する</label></td>
		</tr>
		<tr>
			<th></th>
			<td><?php echo $this->Form->submit('', array('class' => 'submit-login'))?></td>
		</tr>
		</table>
		<?php echo $this->Form->end()?>
	</div>
 	<!--  end login-inner -->
	<div class="clear"></div>
	
 </div>
 <!--  end loginbox -->
 
	<!--  start forgotbox ................................................................................... -->
	<div id="forgotbox">
		<div id="forgotbox-text">Please send us your email and we'll reset your password.</div>
		<!--  start forgot-inner -->
		<div id="forgot-inner">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th>Email address:</th>
			<td><input type="text" value=""   class="login-inp" /></td>
		</tr>
		<tr>
			<th> </th>
			<td><input type="button" class="submit-login"  /></td>
		</tr>
		</table>
		</div>
		<!--  end forgot-inner -->
		<div class="clear"></div>
		<a href="" class="back-login">Back to login</a>
	</div>
	<!--  end forgotbox -->

</div>
<!-- End: login-holder -->
</body>
</html>