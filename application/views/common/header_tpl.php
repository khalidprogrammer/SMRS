 
<!--  Start Header  -->

 <header class="header white-bg">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="fa fa-bars"></span>
            </button>

            <!--logo start-->
            <a href="index-2.html" class="logo"><img   src="<?=base_url()?>assets_rtl/img/andma_logo.jpg" alt="" style="width:3rem"><?php echo $this->lang->line('logo_title'); ?></span></a>
            <!--logo end-->
            <div class="horizontal-menu navbar-collapse collapse ">
                <ul class="nav navbar-nav">
                    <li><a href="<?=base_url()?>"><?=$this->lang->line('dashboard');?></a></li>
                    
                   
                    <li class="dropdown">
                        <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"> <?=$this->lang->line('new_report');?>

                       <b class="fa fa-angle-down"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?=base_url()?>Admin/Reports">
                          <?=$this->lang->line('add_report');?> <i class="fa fa-plus"></i></a> </li>
                            
                        </ul>
                    </li>
                    <li><a href="<?=base_url()?>Admin/add_maps"><?=$this->lang->line('add_maps')?></a></li>
                    <li><a href="<?=base_url()?>Admin/natural_disaster"><?=$this->lang->line('natural_disaster')?></a></li>
                </ul>

            </div>
            <div class="top-nav ">
                <ul class="nav pull-right top-menu">
                   <li><a href="<?=base_url('Admin/change_password')?>" class="password"><?php echo $this->lang->line('change_passowrd')?></a></li>
                   <!-- <a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Trigger modal</a> -->
                            
                            <li><a href="<?=base_url('Auth/logout')?>"><?=$this->lang->line('logout')?></a></li>
                    <!-- user login dropdown start-->
                    <!-- <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="<?=base_url()?>assets_rtl/img/andma_logo.jpg" style="width:2rem">
                            <span class="username">ANDMA</span>
                            <b class="caret"></b>
                        </a>
                      
                    </li> -->
                    <!-- user login dropdown end -->
                </ul>
            </div>

        </div>
        
    </header>
