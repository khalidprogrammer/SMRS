<div class="container">

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
        <img src="http://localhost/ACL/assets_rtl/img/andma_logo.png" alt="">
        
      </div>
    <div class="col-sm-6">
   <div id="infoMessage" class="text-danger"></div>


       <form action="http://localhost/ACL/en/auth/login" method="post" accept-charset="utf-8">
    
      <div class="form-group has-feedback">
         <label for="identity">Email/Username:</label>         <input type="text" name="identity" value="" class="form-control">
      </div>
      <div class="form-group has-feedback">
         <label for="password">Password:</label>         <input type="password" name="password" value="" class="form-control">
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
             <label for="remember">Remember Me:</label>  
             <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" name="remember" value="1" id="remember" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <input type="submit" name="submit" value="Login" class="btn btn-primary">
        </div>
        <!-- /.col -->
      </div>
    </form>
<p><a href="forgot_password">Forgot your password?</a></p>
</div>
</div>
 </div>
  <!-- /.login-box-body -->
</div>


</div>