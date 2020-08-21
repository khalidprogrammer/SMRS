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
              <img src="<?=base_url()?>assets_rtl/img/icons/dead.png" alt="" >
            </div>
            <div class="value">
              <h1 class="count"><?php echo $natural_mytr[0]->Naturalmartyr?></h1>
              <p><?=$this->lang->line('Naturalmartyr')?></p>
            </div>
          </section>
        </div>
        <div class="col-lg-2 col-sm-6">
          <section class="panel">
            <div class="symbol yellow">
              <img src="<?=base_url()?>assets_rtl/img/icons/injured.png" alt="" >
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
              <img src="<?=base_url()?>assets_rtl/img/icons/maale.png" alt="" >
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
              <img src="<?=base_url()?>assets_rtl/img/icons/female.png" alt="" >
            </div>
            <div class="value">
              <h1 class=" count4"><?=$Female[0]->Female?></h1>
              <p><?=$this->lang->line('Female')?></p>
            </div>
          </section>
        </div>
        <div class="col-lg-2 col-sm-6">
          <section class="panel">
            <div class="symbol blue">
              <img src="<?=base_url()?>assets_rtl/img/icons/children.png" alt="" >
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
              <img src="<?=base_url()?>assets_rtl/img/icons/house_destroyed.png" alt="" >
            </div>
            <div class="value">
              <h1 class=" count4"><?=$totaldamage[0]->Totaldamage?></h1>
              <p><?=$this->lang->line('Totaldamage')?></p>
            </div>
          </section>
        </div>
      </div>
      <div class="row state-overview">
        <div class="col-lg-2 col-sm-6">
          <section class="panel">
            <div class="symbol blue">
              <img src="<?=base_url()?>assets_rtl/img/icons/partial.png" alt="" >
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
              <img src="<?=base_url()?>assets_rtl/img/icons/office.png" alt="" >
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
              <img src="<?=base_url()?>assets_rtl/img/icons/mosque.png" alt="" >
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
              <img src="<?=base_url()?>assets_rtl/img/icons/bridge.png" alt="" >
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
              <img src="<?=base_url()?>assets_rtl/img/icons/road.png" alt="" >
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
              <img src="<?=base_url()?>assets_rtl/img/icons/Agriculture.png" alt="" >
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
              <img src="<?=base_url()?>assets_rtl/img/icons/livestock.png" alt="" >
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
              <img src="<?=base_url()?>assets_rtl/img/icons/displaced.png" alt="" >
            </div>
            <div class="value">
              <h1 class=" count4"><?=$displaced[0]->Displaced?></h1>
              <p><?=$this->lang->line('Displaced')?></p>
            </div>
          </section>
        </div>
      </div>
      <div class="row state-overview">
        <div class="col-sm-6">
          
          <div id="NumMFChart" dir="ltr" style="width: 650px;"></div>
          
        </div>
        <div class="col-sm-6">
          
          <section class="panel">
            <header class="panel-heading">
              <?= $this->lang->line('table_title_chart');?>
              <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
              </span>
              
            </header>
            <div class="table-scrollable">
              <table id= "NumMF" class="table table-striped table-hover table-bordered">
                <thead>
                  <tr>
                    <!-- <td colspan="2"><?=lang('MaleFemale')?></td> -->
                  </tr>
                  <tr>
                    <td><?=$this->lang->line('Naturalmartyr')?></td>
                    <td><?=$this->lang->line('Naturalinjured')?></td>
                    <td><?=$this->lang->line('Male')?></td>
                    <td><?=$this->lang->line('Female')?></td>
                    <td><?=$this->lang->line('Child')?></td>
                    <td><?=$this->lang->line('Totaldamage')?></td>
                    <td><?=$this->lang->line('Office')?></td>
                    <td><?=$this->lang->line('Mosques')?></td>
                    <td><?=$this->lang->line('Bridge')?></td>
                    <td><?=$this->lang->line('Road')?></td>
                    <td><?=$this->lang->line('Livestock')?></td>
                    <td><?=$this->lang->line('Agriculturalland')?></td>
                  </tr>
                </thead>
                <tbody>
                  
                </tbody>
              </table>
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
img{
width:40px !important;
}
</style>
<!-- Charts JS -->
<script>
var MaleFemale;
TotalMF = "total";
$.ajax({
url:"<?=site_url('Admin/NumMaleFemaleData')?>",
type: "POST",
success:function(response){
var data = JSON.parse(response);
if(data != ""){
MaleFemale = "";
NumMaleFemaleData(data)
FillNumMFTable(data)
}
}
})
function FillNumMFTable(data)
{
$("#NumMF tbody").empty();
var i, currentElem;
tblRow = "<tr>";
  for( i = 0; i < data.length; i++) {
  currentElem = data[i];
  tblRow += "<td>" + currentElem[1] + "</td>"
  }
tblRow +="</tr>";
$(tblRow).appendTo("#NumMF tbody");
}
</script>
<!-- <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script> -->
<!-- <script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>  -->
<script src="<?=base_url()?>assets_rtl/highcharts/highcharts.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets_rtl/highcharts/highcharts-3d.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets_rtl/jquery.serializejson.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets_rtl/highcharts/exporting.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets_rtl/numberofmalefemale.js" type="text/javascript"></script>