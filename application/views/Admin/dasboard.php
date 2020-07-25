<?php
$method = $this->router->fetch_method();


?>
<section id="container" class="">
   
    <!--main content start-->
   <section id="main-content">
          <section class="wrapper site-min-height">
              <!-- page start-->
              <div class="row state-overview">
                  <div class="col-lg-2 col-sm-6">
                      <section class="panel">
                          <div class="symbol terques">
                              <!-- <i class="fa fa-user"></i> -->
                              <img src="<?=base_url()?>assets_rtl/img/natural_maytr.png" alt="" >
                          </div>
                          <div class="value">
                              <h1 class="count"><?php echo $natural_mytr[0]->Naturalmartyr?></h1>
                              <p><?=$this->lang->line('Naturalmartyr')?></p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-2 col-sm-6">
                      <section class="panel">
                          <div class="symbol red">
                          <img src="<?=base_url()?>assets_rtl/img/unnatural_maytr.png" alt="" >
                          </div>
                          <div class="value ">
                              <h1 class=" count2 text-danger"><?=$unatural[0]->Unnatural?></h1>
                              <p><?=$this->lang->line('Unnatural')?></p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-2 col-sm-6">
                      <section class="panel">
                          <div class="symbol yellow">
                          <img src="<?=base_url()?>assets_rtl/img/natural_injured.png" alt="" >
                          </div>
                          <div class="value">
                              <h1 class=" count3 "><?=$natural_injured[0]->Naturalinjured?></h1>
                              <p><?=$this->lang->line('Naturalinjured')?></p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-2 col-sm-6">
                      <section class="panel">
                          <div class="symbol blue">
                          <img src="<?=base_url()?>assets_rtl/img/unnatural_maytr.png" alt="" >
                          </div>
                          <div class="value">
                              <h1 class=" count4 text-danger" >
                              <?=$unnatural_injured[0]->Unnaturalinjured?>
                                </h1>
                              <p class="text-danger"><?=$this->lang->line('Unnaturalinjured')?></p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-2 col-sm-6">
                      <section class="panel">
                          <div class="symbol blue">
                          <img src="<?=base_url()?>assets_rtl/img/unnatural_maytr.png" alt="" >
                          </div>
                          <div class="value">
                              <h1 class=" count4">
                              <?=$Male[0]->Male?>
                               </h1>
                              <p><?=$this->lang->line('Male')?></p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-2 col-sm-6">
                      <section class="panel">
                          <div class="symbol blue">
                          <img src="<?=base_url()?>assets_rtl/img/unnatural_maytr.png" alt="" >
                          </div>
                          <div class="value">
                              <h1 class=" count4"><?=$Female[0]->Female?></h1>
                              <p><?=$this->lang->line('Female')?></p>
                          </div>
                      </section>
                  </div>
                  
              </div>

              <div class="row state-overview">
              <div class="col-lg-2 col-sm-6">
                      <section class="panel">
                          <div class="symbol blue">
                          <img src="<?=base_url()?>assets_rtl/img/unnatural_maytr.png" alt="" >
                          </div>
                          <div class="value">
                              <h1 class=" count4"><?=$Child[0]->Child?></h1>
                              <p><?=$this->lang->line('Child')?></p>
                          </div>
                      </section>
                  </div>

                  <div class="col-lg-2 col-sm-6">
                      <section class="panel">
                          <div class="symbol blue">
                          <img src="<?=base_url()?>assets_rtl/img/totaldamage.png" alt="" >
                          </div>
                          <div class="value">
                              <h1 class=" count4"><?=$totaldamage[0]->Totaldamage?></h1>
                              <p><?=$this->lang->line('Totaldamage')?></p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-2 col-sm-6">
                      <section class="panel">
                          <div class="symbol blue">
                          <img src="<?=base_url()?>assets_rtl/img/partialdamage.png" alt="" >
                          </div>
                          <div class="value">
                              <h1 class=" count4"><?=$partialdamage[0]->Partialdamage?></h1>
                              <p><?=$this->lang->line('Partialdamage')?></p>
                          </div>
                      </section>
                  </div>

                  <div class="col-lg-2 col-sm-6">
                      <section class="panel">
                          <div class="symbol blue">
                          <img src="<?=base_url()?>assets_rtl/img/school.png" alt="" >
                          </div>
                          <div class="value">
                              <h1 class=" count4"><?=$office[0]->Office?></h1>
                              <p><?=$this->lang->line('Office')?></p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-2 col-sm-6">
                      <section class="panel">
                          <div class="symbol blue">
                          <img src="<?=base_url()?>assets_rtl/img/mosques.png" alt="" >
                          </div>
                          <div class="value">
                              <h1 class=" count4"><?=$mosques[0]->Mosques?></h1>
                              <p><?=$this->lang->line('Mosques')?></p>
                          </div>
                      </section>
                  </div>
                  
                  <div class="col-lg-2 col-sm-6">
                      <section class="panel">
                          <div class="symbol blue">
                          <img src="<?=base_url()?>assets_rtl/img/bridge.png" alt="" >
                          </div>
                          <div class="value">
                              <h1 class=" count4"><?=$bridge[0]->Bridge?></h1>
                              <p><?=$this->lang->line('Bridge')?></p>
                          </div>
                      </section>
                  </div>

                  <div class="col-lg-2 col-sm-6">
                      <section class="panel">
                          <div class="symbol blue">
                          <img src="<?=base_url()?>assets_rtl/img/road.png" alt="" >
                          </div>
                          <div class="value">
                              <h1 class=" count4"><?=$road[0]->Road?></h1>
                              <p><?=$this->lang->line('Road')?></p>
                          </div>
                      </section>
                  </div>

                  <div class="col-lg-2 col-sm-6">
                      <section class="panel">
                          <div class="symbol blue">
                          <img src="<?=base_url()?>assets_rtl/img/agricultureland.png" alt="" > 
                          </div>
                          <div class="value">
                              <h1 class=" count4"><?=$agriculturalland[0]->Agriculturalland?></h1>
                              <p><?=$this->lang->line('Agriculturalland')?></p>
                          </div>
                      </section>
                  </div>

                  <div class="col-lg-2 col-sm-6">
                      <section class="panel">
                          <div class="symbol blue">
                          <img src="<?=base_url()?>assets_rtl/img/livestock.png" alt="" >
                          </div>
                          <div class="value">
                              <h1 class=" count4"><?=$livestock[0]->Livestock?></h1>
                              <p><?=$this->lang->line('Livestock')?></p>
                          </div>
                      </section>
                  </div>

                  <div class="col-lg-2 col-sm-6">
                      <section class="panel">
                          <div class="symbol blue">
                          <img src="<?=base_url()?>assets_rtl/img/unnatural_maytr.png" alt="" >
                          </div>
                          <div class="value">
                              <h1 class=" count4"><?=$regressive[0]->Regressive?></h1>
                              <p><?=$this->lang->line('Regressive')?></p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-2 col-sm-6">
                      <section class="panel">
                          <div class="symbol blue">
                          <img src="<?=base_url()?>assets_rtl/img/unnatural_maytr.png" alt="" >
                          </div>
                          <div class="value">
                              <h1 class=" count4"><?=$displaced[0]->Displaced?></h1>
                              <p><?=$this->lang->line('Displaced')?></p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-2 col-sm-6">
                      <section class="panel">
                          <div class="symbol blue">
                          <img src="<?=base_url()?>assets_rtl/img/agricultureland.png" alt="" > 
                          </div>
                          <div class="value">
                              <h1 class=" count4"><?=$trees[0]->Trees?></h1>
                              <p><?=$this->lang->line('Trees')?></p>
                          </div>
                      </section>
                  </div>
              </div>
              
             
              
          </section>
      </section>
    <!--main content end-->
    <!--footer start-->
     <footer class="site-footer">
        <div class="text-center">
            2020 &copy; SRMS by ANDMA.
            <a href="#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
</section>



<style>

.state-overview .terques{
    background-color:#ffff;
}
.state-overview .red {
    /* background: #ff6c60; */
    background:#ffff;
}

.state-overview .yellow{
    background:#ffff;

}

.state-overview .blue {
    background: #ffff;
}

.state-overview .value h1, .state-overview .value p {
    margin: 0;
    padding: 0;
    color: #f38426;
}
</style>