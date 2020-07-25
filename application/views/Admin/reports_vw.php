<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2020.2.617/styles/kendo.default-v2.min.css" />
<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2020.2.617/styles/kendo.rtl.min.css" />
<link rel="stylesheet" href="https://unpkg.com/persian-datepicker@1.2.0/dist/css/persian-datepicker.min.css">

<section id="container-fluid" class="">
  <section id="main-content">
    <section class="wrapper site-min-height">
      <div class="row">
        <div class="col-sm-12">
          <section class="panel">
            <header class="panel-heading">
             <?= $this->lang->line('table_title');?>
              <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
              </span>
              <?php $this->load->view('flash');?>
            </header>
        <!--  Search Start -->
            <div class="container pt">
            <div class="row">
              <form  id="filterForm" method="post" action="" onsubmit="return filterSubmit();">
             <div class="col-sm-3">
             <label for=""><?=$this->lang->line('date')?></label>
             <input  type="text" class="form-control example1" name="date" id="search_date">
             </div>
             <!--  Search by province -->
             <div class="col-sm-3">
             <label for=""><?=$this->lang->line('province')?></label>
            <select name="province" id="search_province" class="form-control province_class">
              <option value="" ><?=$this->lang->line('select_title')?></option>
              <?php foreach ($provinces as $value) {?>
              <option value="<?=$value['ProvinceCode']?>"><?=$value['ProvinceDrName']?></option>
              <?php } ?>
            </select>
             </div>
            <div class="col-sm-3">
           <label for=""><?=$this->lang->line('district')?></label>
            <select name="distric" id="search_district" class="form-control district_class">
            <option value=""></option>
            </select>
            </div>
            <div class="col-sm-3">
             <label for=""><?=$this->lang->line('kinds_disaster')?></label>
            <select name="kinds_disaster" id="search_disaster" class="form-control">
             <option value >--<?=$this->lang->line('select_title');?></option>
              <option value="سیلاب">سیلاب</option>
              <option value=" باران های سنگین"> باران های سنگین</option>
              <option value="لغزش زمین">لغزش زمین</option>
               <option value="سرما شدید">سرما شدید</option>
            </select>
             </div>
             <div class="col-sm-3" style="margin-top:10px;">
             <button class="btn btn-success" type="submit"><?=$this->lang->line('search')?></button>
             <button class="btn btn-primary" onclick="resetFilter()"><?=$this->lang->line('reset');?></button>
             </div>  
             
             </form>
            </div>
           
            </div>

            <!-- End Search -->
            <!-- <a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Trigger modal</a> -->
            <!-- MODAL Add Reports  -->

             <div class="modal fade" id="ASSIGN_USER_MODAL" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
                <h4 class="modal-title">
                 <?=$this->lang->line('modal_title')?>
                </h4>
                </div>

                <form action="<?=site_url('Admin/add_report')?>"  role="form" method="post" enctype="multipart/form-data" id = "userForm">
                  <div class="modal-body">
                  <input type="hidden" name="Id" id="Id">
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=""><?=$this->lang->line('province')?></label>
                            <select name="province" id="province" class="form-control province_class">
                              <option value="" ><?=$this->lang->line('select_title')?></option>
                              <?php foreach ($provinces as $value) {?>
                              <option value="<?=$value['ProvinceCode']?>"><?=$value['ProvinceDrName']?></option>
                              <?php } ?>
                            </select>
                            
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=""><?=$this->lang->line('district')?></label>
                            <select name="distric" id="district" class="form-control district_class">
                              <option value=""></option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=""><?=$this->lang->line('village');?></label>
                            <select name="village" id="village" class="form-control village_class">
                              <option value=""></option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=""><?=$this->lang->line('kinds_disaster');?></label>
                            <select name="Kinds_Disaster" id="Kinds_Disaster" class="form-control">
                              <option value >--<?=$this->lang->line('select_title');?></option>
                              <option value="سیلاب">سیلاب</option>
                              <option value=" باران های سنگین"> باران های سنگین</option>
                              <option value="لغزش زمین">لغزش زمین</option>
                              <option value="سرما شدید">سرما شدید</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" "><?=$this->lang->line('date');?></label>
                            <input type="text" name="date" id="date" class="form-control example1">
                          </div>
                          
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" "><?=$this->lang->line('Naturalmartyr') ;?></label>
                            <input type="text" name="Naturalmartyr" id="Naturalmartyr" class="form-control">
                          </div>
                          
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" "><?=$this->lang->line('Unnatural');?></label>
                            <input type="text" name="Unnatural" id="Unnatural" class="form-control">
                          </div>
                          
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" "><?=$this->lang->line('Naturalinjured');?></label>
                            <input type="text" name="Naturalinjured" id="Naturalinjured" class="form-control">
                          </div>
                          
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" "> <?=$this->lang->line('Unnaturalinjured')?></label>
                            <input type="number" name="Unnaturalinjured" id="Unnaturalinjured" class="form-control">
                          </div>
                          
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" "><?=$this->lang->line('Female')?></label>
                            <input type="number" name="Female" id="Female" class="form-control">
                          </div>
                          
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" "><?=$this->lang->line('Male')?></label>
                            <input type="number" name="Male" id="Male" class="form-control">
                          </div>
                          
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" "><?=$this->lang->line('Child');?></label>
                            <input type="number" name="Child" id="Child" class="form-control">
                          </div>
                          
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" "><?=$this->lang->line('Totaldamage');?></label>
                            <input type="number" name="Totaldamage" id="Totaldamage" class="form-control">
                          </div>
                          
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" "><?=$this->lang->line('Partialdamage');?></label>
                            <input type="number" name="Partialdamage" id="Partialdamage" class="form-control">
                          </div>
                          
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" "><?=$this->lang->line('Mosques');?></label>
                            <input type="number" name="Mosques" id="Mosques" class="form-control">
                          </div>
                          
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" "><?=$this->lang->line('Office');?></label>
                            <input type="number" name="Office" id="Office" class="form-control" min="0">
                          </div>
                          
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" "><?=$this->lang->line('Trees');?></label>
                            <input type="number" name="Trees" id="Trees" class="form-control">
                          </div>
                          
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" "><?=$this->lang->line('Livestock');?></label>
                            <input type="number" name="Livestock" id="Livestock" class="form-control">
                          </div>
                          
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" "><?=$this->lang->line('Agriculturalland');?></label>
                            <input type="number" name="Agriculturalland" id="Agriculturalland" class="form-control">
                          </div>
                          
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" "><?=$this->lang->line('Bridge');?></label>
                            <input type="number" name="Bridge" id="Bridge" class="form-control">
                          </div>
                          
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" "><?=$this->lang->line('Road');?></label>
                            <input type="number" name="Road" id="Road" class="form-control">
                          </div>
                          
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" "><?=$this->lang->line('Displaced');?></label>
                            <input type="number" name="Displaced" id="Displaced" class="form-control">
                          </div>
                          
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" "><?=$this->lang->line('Regressive');?></label>
                            <input type="number" name="Regressive" id="Regressive" class="form-control">
                          </div>
                          
                        </div>
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label for=" "><?=$this->lang->line('Info')?></label>
                            <textarea name="Info" id="Info" class="form-control"></textarea>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-success update" type="submit" id="update_btn"> <?=$this->lang->line('save_btn');?></button>
                    <button data-dismiss="modal" class="btn btn-danger empty" type="button"><?=$this->lang->line('close_btn');?></button>
                  </div>
                </form>
              </div>
            </div>
          </div>

            <!-- End Modal Reports -->

<!-- Detail Modal -->
<div class="modal fade" id="Detail_Modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title"><?=$this->lang->line('detail_modal')?></h4>
      </div>
      <div class="modal-body">
        <div class="row">

        <div class="col-sm-3">
         <span ><?=$this->lang->line('Naturalmartyr') ;?></span><hr>   
         <span><?=$this->lang->line('Unnatural');?></span><hr>
        </div>

        <div class="col-sm-3">
         <span id="ids"></span><hr>
         <span class="text-danger" id="unnatural_data"></span><hr>
        </div>

        <div class="col-sm-3">
        <span><?=$this->lang->line('Naturalinjured');?></span><hr> 
         <span><?=$this->lang->line('Unnaturalinjured')?></span><hr>
        </div>
        
        <div class="col-sm-3">
        <span id="natural_injured"></span><hr>
         <span id="unnatural_injured"></span><hr>
        </div>
        </div>
        <div class="row">
        <div class="col-sm-3">
        <span><?=$this->lang->line('Male');?></span><hr> 
         <span><?=$this->lang->line('Female')?></span><hr>
        </div>

        <div class="col-sm-3">
        <span id="male_hurted"></span><hr>
         <span id="female_hurted"></span><hr>
        </div>

        <div class="col-sm-3">
        <span><?=$this->lang->line('Child');?></span><hr> 
         <span><?=$this->lang->line('Totaldamage')?></span><hr>
        </div>


        <div class="col-sm-3">
        <span id="child"></span><hr>
         <span id="totaldamage"></span><hr>
        </div>
        </div>
        <!-- 3rd row -->
        <div class="row">
        <div class="col-sm-3">
        <span><?=$this->lang->line('Partialdamage');?></span><hr> 
         <span><?=$this->lang->line('Mosques')?></span><hr>
        </div>

        <div class="col-sm-3">
        <span id="partial_damage"></span><hr>
         <span id="mosques"></span><hr>
        </div>


        <div class="col-sm-3">
        <span><?=$this->lang->line('Office');?></span><hr> 
         <span><?=$this->lang->line('Trees')?></span><hr>
        </div>


        <div class="col-sm-3">
        <span id="office"></span><hr>
         <span id="trees"></span><hr>
        </div>
        </div>
        <!-- end 3rd row -->


        <!-- 4th row -->

        <div class="row">
        <div class="col-sm-3">
        <span><?=$this->lang->line('Livestock');?></span><hr> 
         <span><?=$this->lang->line('Agriculturalland')?></span><hr>
        </div>

        <div class="col-sm-3">
        <span id="live_stock"></span><hr>
         <span id="agriculturalland"></span><hr>
        </div>


        <div class="col-sm-3">
        <span><?=$this->lang->line('Bridge');?></span><hr> 
         <span><?=$this->lang->line('Road')?></span><hr>
        </div>


        <div class="col-sm-3">
        <span id="bridge"></span><hr>
         <span id="road"></span><hr>
        </div>
        </div>
        <!-- End 4th row -->

        <!-- 5th row -->
        <div class="row">
        <div class="col-sm-3">
        <span><?=$this->lang->line('Regressive');?></span><hr> 
         <span><?=$this->lang->line('Displaced')?></span><hr>
        </div>

        <div class="col-sm-3">
        <span id="regressive"></span><hr>
         <span id="displaced"></span><hr>
        </div>


        <div class="col-sm-3">
        <span><?=$this->lang->line('Info');?></span><hr> 
         
        </div>

        <div class="col-sm-3">
        <span id="info"></span><hr>
        </div>
        </div>

        <!-- End 5th row -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

<!-- End Detail Modal -->

      <div class="panel-body">
        <div class="row" style="margin-top: 5px;">
      <div class="col-lg-12">
      <div>
     <a href="<?=base_url('Admin/ExportExcel')?>" id="form-data" class="btn btn-primary export_report" style="background-color:#f58634"><?=$this->lang->line('export')?></a>
    </div>
      <div id="user_grid"></div>
      </div>
      </div>
  </div>
</section>
</div>
</div>
</section>
</section>

</section>

<script src="https://unpkg.com/persian-date@1.1.0/dist/persian-date.min.js"></script>
<script src="https://unpkg.com/persian-datepicker@1.2.0/dist/js/persian-datepicker.min.js"></script>

<script src="https://kendo.cdn.telerik.com/2020.2.617/js/kendo.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>
<script type="text/javascript"> 

function user_list(keyword){

var province = $('#search_province').val();
var distric = $('#search_district').val();
var kinds_disaster=$('#search_disaster').val();
var date = $('#search_date').val();
var base_url = "<?php echo base_url() ?>";
var url_export_qco_cfp = "<?php echo base_url()."Admin/ExportExcel/" ?>?province=" +province+"&distric="+distric+"&kinds_disaster="+kinds_disaster+"&date"+date;
$(".export_report").attr("href", url_export_qco_cfp);

$('#user_grid').kendoGrid({
dataSource:{
transport:{
read:{
url:"<?=base_url()?>Admin/fetch_report_list",
dataType:'json',
data:{
  province:province,distric:distric,kinds_disaster:kinds_disaster,date:date
}
},
},
schema:{
total:"total",
data:"data",
},
pageSize:10,
pageSizes:true,
serverPaging:true,
},
toolbar:[
{ name: "<?=$this->lang->line('add_new')?>" }
],
columns:[
  
{field:'ProvinceDrName',title:'<?=$this->lang->line('province')?>',width:"100px;",attributes:{class:"province_name"}},
{field:'DistrictDrName',title:'<?=$this->lang->line('district')?>', width:"100px",attributes:{class:"district_name"}},
{field:'VillageDrName',title:'<?=$this->lang->line('village')?>',width:"100px",attributes:{class:"village_name"}},
{field: 'Kinds_Disaster',title:'<?=$this->lang->line('kinds_disaster')?>',width:"100px" ,attributes:{class:"disaster_type"}},
{field: 'Date',title:'تاریخ حادثه', width:"100px",attributes:{class:"date"}},                           
{field: 'Naturalmartyr',title:'<?=$this->lang->line('Naturalmartyr')?>', width:"100px",attributes:{class:"natural_martyr"}},
{field:'Unnatural',hidden:true,attributes:{class:"Unnatural"}},
{field:'Naturalinjured',hidden:true,attributes:{class:"Naturalinjured"}},
{field:'Unnaturalinjured',hidden:true,attributes:{class:"Unnaturalinjured"}},
{field:'Male',hidden:true,attributes:{class:"Male"}},
{field:'Female',hidden:true,attributes:{class:"Female"}},
{field:'Child',hidden:true,attributes:{class:"Child"}},
{field:'Totaldamage',hidden:true,attributes:{class:"Totaldamage"}},
{field:'Partialdamage',hidden:true,attributes:{class:"Partialdamage"}},
{field:'Mosques',hidden:true,attributes:{class:"Mosques"}},
{field:'Office',hidden:true,attributes:{class:"Office"}},
{field:'Trees',hidden:true,attributes:{class:"Trees"}},
{field:'Livestock',hidden:true,attributes:{class:"Livestock"}},
{field:'Agriculturalland',hidden:true,attributes:{class:"Agriculturalland"}},
{field:'Road',hidden:true,attributes:{class:"Road"}},
{field:'Bridge',hidden:true,attributes:{class:"Bridge"}},
{field:'Displaced',hidden:true,attributes:{class:"Displaced"}},
{field:'Regressive',hidden:true,attributes:{class:"Regressive"}},
{field:'Info',hidden:true,attributes:{class:"Info"}},
{field:'ProvinceCode',hidden:true,attributes:{class:"provinceCode"}},
{field:'DistricCode',hidden:true,attributes:{class:"DistricCode"}},
{field:'VillageCode',hidden:true,attributes:{class:"VillageCode"}},

{command: ["<?=$this->lang->line('edit')?>","<?=$this->lang->line('destroy')?>","<?=$this->lang->line('Detail')?>"], title: "ACTION", width: "150px"},
//  {field:'Id',title:'VIEW',width:'80px',template:"<a href='<?=base_url()?>Admin/viewdevice/#=Id#' class='btn btn-info',id='detail'>DETAIL</a>"},
{field:'Id',title:"",hidden:true,attributes:{class:"id"}},
],
scrollable:true,
pageable:true,
sortable:true,
selectable:true,
pageable:{
pageSizes:[10,20,25,50],
buttonCount:5,
refresh:true
},
});
 }
user_list();

//  Show Add Report Modal
$(document).ready(function($){
 
  $('.k-button-icontext').on('click',function(){

  // $('.modal-title').empty().text('');
  $('#userForm').find(':input').val('');
  $('label.error').empty();
 
  $('#ASSIGN_USER_MODAL').modal('show')
  
});



//  Edit Modal;
$('body').on('click','.k-grid-اصلاح',function(){

  
  
   var  row = $(this).closest('tr');
   var Id = row.find('td.id').text();
   var province_code=row.find('td.provinceCode').text();

   var district_code = row.find('td.DistricCode').text();

   var village_code= row.find('td.VillageCode').text();
  
   var disasterType = row.find('td.disaster_type').text();
   var date = row.find('td.date').text();
   var naturalmarytr= row.find('td.natural_martyr').text();
   var Unnatural= row.find('td.Unnatural').text();
   $('.update').text('<?=$this->lang->line('update_btn')?>');
   var Naturalinjured= row.find('td.Naturalinjured').text();
   var Unnaturalinjured= row.find('td.Unnaturalinjured').text();
   var Male= row.find('td.Male').text();
   var Female= row.find('td.Female').text();
   var Child= row.find('td.Child').text();
   var Totaldamage= row.find('td.Totaldamage').text();
   var Partialdamage= row.find('td.Partialdamage').text();
   var Mosques= row.find('td.Mosques').text();
   var Office= row.find('td.Office').text();
   var Trees= row.find('td.Trees').text();
   var Livestock= row.find('td.Livestock').text();
   var Agriculturalland= row.find('td.Agriculturalland').text();
   var Road= row.find('td.Road').text();
   var Bridge= row.find('td.Bridge').text();
   var Displaced= row.find('td.Displaced').text();
   var Regressive= row.find('td.Regressive').text();
   var Info= row.find('td.Info').text();
   
   $('#Id').val(Id)
   $('#province').val(province_code)
   $('#district option:selected').val(district_code)
   $('#village').val(village_code)
   $('#date').val(date)
   $('#Kinds_Disaster').val(disasterType);
   $('#Naturalmartyr').val(naturalmarytr);
   $('#Unnatural').val(Unnatural);
   $('#Naturalinjured').val(Naturalinjured)
   $('#Unnaturalinjured').val(Unnaturalinjured)
   $('#Male').val(Male)
   $('#Female').val(Female)
   $('#Child').val(Child)
   $('#Totaldamage').val(Totaldamage)
   $('#Partialdamage').val(Partialdamage)
   $('#Mosques').val(Mosques)
   $('#Office').val(Office)
   $('#Trees').val(Trees)
   $('#Livestock').val(Livestock)
   $('#Agriculturalland').val(Agriculturalland)
   $('#Road').val(Road)
   $('#Bridge').val(Bridge)
   $('#Displaced').val(Displaced)
   $('#Regressive').val(Regressive)
   $('#Info').val(Info)

   $('#province').trigger('change');

  //  $('#district').trigger('change');
   $('#ASSIGN_USER_MODAL').modal('show')
  
})
  $('.province_class').on('change',function(){

       var province_code = $(this).val();

        if( province_code != ''){

          $.ajax({
            
            url : "<?php echo base_url('Admin/fetch_distric') ?>",
            type: "POST",

            data :{province_code:province_code},

          
            success: function (data){

          $('.district_class').html(data);

          $('.village_class').html('<option>--لطفا انتخاب نمائید</option>')
         

            },
            error :function (){
              console.log('erro.....')
            }

          })
        }

        else {

           $('.district_class').html('<option>--لطفا انتخاب نمائید</option>');
           $('.village_class').html('<option>--لطفا انتخاب نمائید</option>')
        }

  });

  $('.district_class').on('change',function(){

       var distric_code = $(this).val();

       if(distric_code != ''){

        $.ajax({

          url : "<?php echo base_url('Admin/fetch_village');?>",
          type : "POST",
          data : { distric_code :distric_code},

          success:function (data){
              console.log(data)
             $('.village_class').html(data);
          }
        })
       }
  });

  // Detail
$('body').on('click','.k-grid-تفصیل',function(){

  var row = $(this).closest('tr')
   var Id = row.find('td.id').text();
   var Unnatural= row.find('td.Unnatural').text();
   $('#ids').html(Id);
   $('#unnatural_data').html(Unnatural)
   var Naturalinjured =row.find('td.Naturalinjured').text();
   $('#natural_injured').html(Naturalinjured);
   var Unnaturalinjured = row.find('td.Unnaturalinjured').text();
   $('#unnatural_injured').html(Unnaturalinjured);
   var Male =row.find('td.Male').text();
   var Female =row.find('td.Female').text();
   $('#male_hurted').html(Male);
   $('#female_hurted').html(Female);

   var Child= row.find('td.Child').text();
   $('#child').html(Child);
   var Totaldamage= row.find('td.Totaldamage').text();
   var Partialdamage= row.find('td.Partialdamage').text();
   var Mosques= row.find('td.Mosques').text();
   var Office= row.find('td.Office').text();
   var Trees= row.find('td.Trees').text();
   var Livestock= row.find('td.Livestock').text();
   var Agriculturalland= row.find('td.Agriculturalland').text();
   var Road= row.find('td.Road').text();
   var Bridge= row.find('td.Bridge').text();
   var Displaced= row.find('td.Displaced').text();
   var Regressive= row.find('td.Regressive').text();
   var Info= row.find('td.Info').text();
   $('#totaldamage').html(Totaldamage);
   $('#partial_damage').html(Partialdamage);
   $('#mosques').html(Mosques);
   $('#office').html(Office);
   $('#trees').html(Trees);
   $('#live_stock').html(Livestock);
   $('#agriculturalland').html(Agriculturalland);
   $('#road').html(Road);
   $('#bridge').html(Bridge);
   $('#displaced').html(Displaced);
   $('#regressive').html(Regressive);
   $('#info').html(Info);

  $('#Detail_Modal').modal('show');
});

//  Delete records

$('body').on('click','.k-grid-هذف',function(){

   var row = $(this).closest('tr');
   var Id = row.find('td.id').text();

   bootbox.confirm({
    message: "<?=$this->lang->line('delete_msg')?>",
    buttons: {
        confirm: {
            label: '<?=$this->lang->line('Yes')?>',
            className: 'btn-success'
        },
        cancel: {
            label: '<?=$this->lang->line('No')?>',
            className: 'btn-danger'
        }
    },
         // AJAX Request
            callback: function (result) {
            if(result){
            $.ajax({
              url: '<?php echo base_url('Admin/delete_record')?>',
              type: 'POST',
              data: { Id:Id },
              success: function(response){
               

                // Removing row from HTML Table
                  if(response == 1){
                       $(this).closest('tr').css('background','tomato');
                      $(this).closest('tr').fadeOut(800,function(){
                      $(this).remove();      
                      
            });

          
            }
            else{
              window.location.reload()

            }

           }
         });

        }
    }

});

})

});

</script>

<script type="text/javascript">
  $(document).ready(function($) {
  
    $(".example1").pDatepicker({
      format: 'YYYY/MM/DD',
    });
  });

  function filterSubmit(){

user_list();
return false;
}

function resetFilter(){
$('#filterForm').find('input[type=text], select').val('');
user_list();
// return false;
}
</script>

<!--  Search by Province and district -->



<!-- End Search by province and distric -->





<style>

.k-grid th{
  text-align:right;
  font-wight:bold;
}
.k-grid td{
  text-align:right;
  border:none;
}

.k-grid-header .k-header>.k-link {
  
  font-weight:bold;

} 

footer, .k-grid-header, .k-grid-toolbar, .k-grouping-header {
    color: #656565;
    background-color: #3e4095;
}
.k-grid th {
    text-align: right;
    font-wight: bold;
    color:#ffff;
}

.k-pager-wrap {
    border-color: rgba(0,0,0,.08);
    color: #ffff;
    background-color: #3e4095;
}
.k-button{
  background-image: linear-gradient(#f58634,#f58634) !important;
}
.k-grid a {
    /* color: inherit; */
    text-decoration: none;
    color: white;
}

.panel-heading {
    border-color: #eff2f7;
    font-size: 16px;
    font-weight: 300;
    background-color: #3e4095;
    color: white;
}

.month-grid-box .header {
    position: relative;
}

#form-data{
  position: absolute;
    float: left;
    margin-top: 10px;
    /* z-index: 1; */
    z-index: 999;
    left: 0px;
    top: 0px;
    margin-left: 2rem;
}
}


</style>