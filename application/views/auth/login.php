<!DOCTYPE html>
<html >
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?=base_url()?>assets_rtl/css/bootstrap.min.css">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>assets_rtl/font-awesome/css/font-awesome.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url()?>assets_rtl/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets_rtl/css/AdminLTE.css">
  
  <!-- iCheck -->
  
  <link rel="stylesheet" href="<?=base_url()?>assets_rtl/css/styles.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <div class="logo_title">
          <h3>REPORTING SYSTEM ANDMA</h3>
        </div>
    
  </div>

  <!-- /.login-logo -->
  <div class="login-box-body">
    
    <div class="row">
      <div class="col-sm-6" style="float: left;">
        <img src="<?=base_url()?>assets_rtl/img/andma_logo.jpg" alt="" style="width:70%">
      </div>
    <div class="col-sm-6">
  


       <?php echo form_open("auth/login");?>
    
      <div class="form-group has-feedback">
         <?php echo lang('login_identity_label', 'identity');?>
         <?php 

         $data = array(
          'name'        => 'identity',
          'value'          => $this->input->post('identity'),
          'class'       => 'form-control',
         
        );

         echo form_input($data);?>
      </div>
      <div class="form-group has-feedback">
         <?php echo lang('login_password_label', 'password');?>
         <?php 
         $data=array(
          'name'=>'password',
          'value'=>$this->input->post('password'),
          'class'=>'form-control',
          'type'=>'password'

         );
         echo form_input($data);?>
      </div>
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-4 pull-right">
          <?php echo form_submit('submit', lang('login_submit_btn'),'class="btn btn-primary"');?>
        </div>
        <!-- /.col -->
      </div>
      <div id="infoMessage" class="text-danger"><?php echo $message?></div>
    <?php echo form_close();?>

<!-- <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p> -->
</div>
</div>
 </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->

</body>
</html>

<style>

  label{
    float:right;
  }

  input[type="submit"]{
    float:right;
  }
</style>