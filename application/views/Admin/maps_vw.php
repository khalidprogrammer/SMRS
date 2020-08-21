<section id="container-fluid" class="">
	<section id="main-content">
		<section class="wrapper site-min-height">
			<div class="row">
				<div class="well">
					<div class=" pull-right">
							<a href="#" id="list" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-th-list">
							</span></a> <a href="#" id="grid" class="btn btn-primary btn-sm"><span
						class="glyphicon glyphicon-th"></span></a>
					</div>
					<a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Add Map</a>
				</div>
				<div class="col-sm-3 sidebar">
					<div class="side-menu">
						<div class="panel-group" role="tablist" aria-multiselectable="true">
							<div class="section-title">
								<h3><?=$this->lang->line('search_map')?></h3>
							</div>

							<div class="form-group">
								<label for=""><?=$this->lang->line('type_search')?></label>
								<select name="" id="field_select" class="form-control" >
									<option value="All">All</option>
									<option value="Yearly">Yearly</option>
									<option value="Quaterly">Quaterly</option>
									<option value="Monthly">Monthly</option>
									<option value="Weekly">Weekly</option>
								</select>
							</div>

							<div class="form-group" id="year_field">
								<label for=""><?=$this->lang->line('year')?></label>
								<select name="year" id="year" class="form-control">
									<option value="">Select Yearly</option>
									<option value="">1390</option>
									<option value="">1391</option>
									<option value="">1392</option>
									<option value="">1393</option>
									<option value="">1394</option>
									<option value="">1395</option>
								</select>
							</div>

							<div class="form-group" id="month_field">
								<label for=""><?=$this->lang->line('month')?></label>
								<select name="" id="month" class="form-control">
									<option value="">Select Month</option>
									<option value="">Hamal </option>
									<option value="">Sowr  </option>
									<option value="">Jowzaa </option>
									<option value="">Sarataan </option>
								</select>
							</div>

							<div class="form-group" id="quater_field">
								<label for=""><?=$this->lang->line('quater')?></label>
								<select name="" id="Quater" class="form-control">
									<option value="">Select Quater</option>
								<option value="">Q1</option>
								<option value="">Q2</option>
								<option value="">Q3</option>
								<option value="">Q4</option>
								</select>
								
							</div>

							<div class="form-group" id="week_field">
								<label for=""><?=$this->lang->line('week')?></label>
								<select name="" id="week" class="form-control">
									<option value="">Select Week</option>
									<option value="">Week 1</option>
									<option value="">Week 2</option>
									<option value="">Weekl 3</option>
									<option value="">Weekl 4</option>
								</select>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">Search</button>
							</div>



						</div>
					</div>
					
				</div>
		
				<div class="col-sm-9">
					<div id="products" class="row list-group">
					<div class="item  col-xs-12 col-lg-4">
						<div class="thumbnail">
							<img class="group list-group-image" src="<?=base_url()?>assets_rtl/img/maps_immap.png"  alt="" />
							<div class="caption">
								<h4 class="group inner list-group-item-heading">
								Product title</h4>
								<p class="group inner list-group-item-text">
								  <span>Published Date:</span> 20/20/2020
								</p>
								<div class="row">
									
									<div class="col-xs-12 col-md-12">
										<a class="btn btn-success" href="<?=base_url()?>Admin/detail_map">Detail</a>
										<a class="btn btn-primary" href="#1">Download</a>
									</div>
									
								</div>
							</div>
						</div>
					</div>
					<div class="item col-xs-12 col-lg-4">
						<div class="thumbnail">
							<img class="group list-group-image" src="<?=base_url()?>assets_rtl/img/maps_immap.png"  alt="" />
							<div class="caption">
								<h4 class="group inner list-group-item-heading">
								Product title</h4>
								<p class="group inner list-group-item-text">
								  <span>Published Date:</span> 20/20/2020
								</p>
								<div class="row">
									
									<div class="col-xs-12 col-md-12">
										<a class="btn btn-success" href="#1">Detail</a>
										<a class="btn btn-primary" href="#1">Download</a>
									</div>
									
								</div>
							</div>
						</div>
					</div>

					<div class="item  col-xs-12 col-lg-4">
						<div class="thumbnail">
							<img class="group list-group-image" src="<?=base_url()?>assets_rtl/img/maps_immap.png"  alt="" />
							<div class="caption">
								<h4 class="group inner list-group-item-heading">
								Product title</h4>
								<p class="group inner list-group-item-text">
								  <span>Published Date:</span> 20/20/2020
								</p>
								<div class="row">
									
									<div class="col-xs-12 col-md-12">
										<a class="btn btn-success" href="#1">Detail</a>
										<a class="btn btn-primary" href="#1">Download</a>
									</div>
									
								</div>
							</div>
						</div>
					</div>
					<div class="item  col-xs-12 col-lg-4">
						<div class="thumbnail">
							<img class="group list-group-image" src="<?=base_url()?>assets_rtl/img/maps_immap.png"  alt="" />
							<div class="caption">
								<h4 class="group inner list-group-item-heading">
								Product title</h4>
								<p class="group inner list-group-item-text">
								  <span>Published Date:</span> 20/20/2020
								</p>
								<div class="row">
									
									<div class="col-xs-12 col-md-12">
										<a class="btn btn-success" href="#1">Detail</a>
										<a class="btn btn-primary" href="#1">Download</a>
									</div>
									
								</div>
							</div>
						</div>
					</div>
					<div class="item  col-xs-12 col-lg-4">
						<div class="thumbnail">
							<img class="group list-group-image" src="<?=base_url()?>assets_rtl/img/maps_immap.png"  alt="" />
							<div class="caption">
								<h4 class="group inner list-group-item-heading">
								Product title</h4>
								<p class="group inner list-group-item-text">
								  <span>Published Date:</span> 20/20/2020
								</p>
								<div class="row">
									
									<div class="col-xs-12 col-md-12">
										<a class="btn btn-success" href="#1">Detail</a>
										<a class="btn btn-primary" href="#1">Download</a>
									</div>
									
								</div>
							</div>
						</div>
					</div>
					<div class="item  col-xs-12 col-lg-4">
						<div class="thumbnail">
							<img class="group list-group-image" src="<?=base_url()?>assets_rtl/img/maps_immap.png"  alt="" />
							<div class="caption">
								<h4 class="group inner list-group-item-heading">
								Product title</h4>
								<p class="group inner list-group-item-text">
								  <span>Published Date:</span> 20/20/2020
								</p>
								<div class="row">
									
									<div class="col-xs-12 col-md-12">
										<a class="btn btn-success" href="#1">Detail</a>
										<a class="btn btn-primary" href="#1">Download</a>
									</div>
									
								</div>
							</div>
						</div>
					</div>
					<div class="item  col-xs-12 col-lg-4">
						<div class="thumbnail">
							<img class="group list-group-image" src="<?=base_url()?>assets_rtl/img/maps_immap.png"  alt="" />
							<div class="caption">
								<h4 class="group inner list-group-item-heading">
								Product title</h4>
								<p class="group inner list-group-item-text">
								  <span>Published Date:</span> 20/20/2020
								</p>
								<div class="row">
									
									<div class="col-xs-12 col-md-12">
										<a class="btn btn-success" href="#1">Detail</a>
										<a class="btn btn-primary" href="#1">Download</a>
									</div>
									
								</div>
							</div>
						</div>
					</div>
					<div class="item  col-xs-12 col-lg-4">
						<div class="thumbnail">
							<img class="group list-group-image" src="<?=base_url()?>assets_rtl/img/maps_immap.png"  alt="" />
							<div class="caption">
								<h4 class="group inner list-group-item-heading">
								Product title</h4>
								<p class="group inner list-group-item-text">
								  <span>Published Date:</span> 20/20/2020
								</p>
								<div class="row">
									
									<div class="col-xs-12 col-md-12">
										<a class="btn btn-success" href="#1">Detail</a>
										<a class="btn btn-primary" href="#1">Download</a>
									</div>
									
								</div>
							</div>
						</div>
					</div>
					<div class="item  col-xs-12 col-lg-4">
						<div class="thumbnail">
							<img class="group list-group-image" src="<?=base_url()?>assets_rtl/img/maps_immap.png"  alt="" />
							<div class="caption">
								<h4 class="group inner list-group-item-heading">
								Product title</h4>
								<p class="group inner list-group-item-text">
								  <span>Published Date:</span> 20/20/2020
								</p>
								<div class="row">
									
									<div class="col-xs-12 col-md-12">
										<a class="btn btn-success" href="#1">Detail</a>
										<a class="btn btn-primary" href="#1">Download</a>
									</div>
									
								</div>
							</div>
						</div>
					</div>


					
				</div>
				</div>
			</div>
			
		</section>
	</section>
</section>

<div class="modal fade" id="modal-id">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Modal title</h4>
			</div>
			<div class="modal-body">
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<style>
	
	.sidebar{
		background: #fff;
	}
	.well{
		background:#3e4095;
	}
	
</style>


<script>

		$('#year_field').hide();
		$('#month_field').hide();
		$('#quater_field').hide();
		$('#week_field').hide();


	$('#field_select').on('change',function(){

		if($(this).val()== "All"){
			$('#year_field').show();
		$('#month_field').show();
		$('#quater_field').show();
		$('#week_field').show();
		}

		if($(this).val()== "Yearly"){

			$('#year_field').show();
			$('#month_field').hide();
			$('#quater_field').hide();
			$('#week_field').hide();
		}
		 if($(this).val()=="Quaterly"){
			$('#quater_field').show();
			$('#month_field').show();
			$('#year_field').hide();
			$('#week_field').hide();
		}

		 if($(this).val()=="Monthly"){
            
			$('#month_field').show();
			$('#year_field').hide();
			$('#quater_field').hide();
		    $('#week_field').hide();

		}

		 if($(this).val()== "Weekly"){
			$('#week_field').show();
		$('#year_field').hide();
		$('#month_field').hide();
		$('#quater_field').hide();
		
		}

		


	});

	$('#field_select').trigger('change');
</script>
