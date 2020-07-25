


<section id="container-fluid" class="">
     <section id="main-content">
      <section class="wrapper site-min-height">
         <section class="panel panel-primary">
         <header class="panel-heading">
         <?php echo lang('change_password_heading_dari');?>
          </header>
         
            <div class="panel-body">
               
            <div class="row">
            
            <div class="col-sm-4">
           
            
            
            </div>

            <div class="col-sm-4">
            
            <?php echo form_open("Admin/change_password");?>

<p>
<?php echo lang('change_password_old_password_label_dari', 'old_password');?> <br />
<?php echo form_input($old_password);?>
</p>
<p>
<label for="new_password"><?php echo sprintf(lang('change_password_new_password_label_dari'), $min_password_length);?></label> <br />
<?php echo form_input($new_password);?>
</p>
<p>
<?php echo lang('change_password_new_password_confirm_label_dari', 'new_password_confirm');?> <br />
<?php echo form_input($new_password_confirm);?>
</p>
<?php echo form_input($user_id);?>
<p><?php echo form_submit('submit', lang('change_password_submit_btn'),'class="btn btn-primary"');?></p>


</ <?php echo form_close();?>

 </div>
            
            
            
            
            </div>




            </div>
          
         </section>
    
    
     
      </section>
    </section>
</section>

