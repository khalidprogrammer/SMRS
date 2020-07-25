<!DOCTYPE html>
<html >
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>AdminLTE 2 | Log in</title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- Bootstrap 3.3.6 -->
		<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?=base_url()?>assets_rtl/css/bootstrap-rtl.min.css">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="<?=base_url()?>assets/css/ionicons.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="<?=base_url()?>assets/css/AdminLTE.min.css">
		<link rel="stylesheet" href="<?=base_url()?>assets_rtl/css/AdminLTE-rtl.min.css">
		<!-- iCheck -->
		<link rel="stylesheet" href="<?=base_url()?>assets/plugins/iCheck/square/blue.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
			input#identity {
			width: 100%;
			padding: 4px;
			}
		</style>
	</head>
	<body class="hold-transition login-page">
		<div class="login-box">
			<div class="panel panel-primary">
			<div class="panel-heading"><?php echo lang('forgot_password_heading');?></div>
             <div class="panel-body">
			<p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>
			<div id="infoMessage"><?php echo $message;?></div>
			<?php echo form_open("auth/forgot_password");?>
			<p>
			<label for="identity"><?php echo (($type=='email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label));?></label> <br />
			<?php echo form_input($identity);?>
			</p>
			<p><?php echo form_submit('submit', lang('forgot_password_submit_btn'),'class="btn btn-primary"');?></p>
			<?php echo form_close();?>
			
			</div>
		</div>
	</div>
		
		<script src="<?=base_url()?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
		<!-- Bootstrap 3.3.6 -->
		<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
		<!-- iCheck -->
		<script src="<?=base_url()?>assets/plugins/iCheck/icheck.min.js"></script>
		<script>
		$(function () {
		$('input').iCheck({
		checkboxClass: 'icheckbox_square-blue',
		radioClass: 'iradio_square-blue',
		increaseArea: '20%' // optional
		});
		});
		</script>
	</body>
</html>
