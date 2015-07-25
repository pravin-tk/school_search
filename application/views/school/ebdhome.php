<style>

</style>
<?php
	$standard = "";
	if (isset ( $standards ))
		foreach ( $standards as $key => $value )
			$standard = $value;
	
	?>
<div class="container" style="width: 100%;">
    <div class="row">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
<!--                 <ol class="carousel-indicators"> -->
<!--                     <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li> -->
<!--                     <li data-target="#carousel-example-generic" data-slide-to="1"></li> -->
<!--                     <li data-target="#carousel-example-generic" data-slide-to="2"></li> -->
<!--                 </ol> -->
                <div class="carousel-inner " id="homeslider">
                    <div class="item active">
                        <img src="<?php echo asset_url();?>img/header4.png"
						  class="" style="width:100%;height: 80%;" alt="First slide">
                        
                    </div>
                    <div class="item">
                        <img src="<?php echo asset_url();?>img/header4.png" alt="Slider"
							class="" style="width:100%;height: 80%;">
                        
                    </div>
                    <div class="item">
                        <img src="<?php echo asset_url();?>img/header4.png" alt="Slider"
							 class="" style=" width:100%;height: 80%;">
<!--                         <div class="carousel-caption"> -->
<!--                             <h3> -->
<!--                                 Third slide</h3> -->
<!--                             <p> -->
<!--                                 Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->
<!--                         </div> -->
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span></a><a class="right carousel-control"
                        href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right">
                        </span></a>
                        
            </div>
            <div class="main-text overlaysearch text-center" style="display: inline-block;" >
                    <h1 class="searchheading">
                        Search School
                    </h1>
                  	<form name="searchform" id="searchform"  class="" action="<?php echo base_url();?>index.php/home/search" method="post">
						<div class="form-group form-div">
							<div class="col-lg-3 selectContainer">
								<select class="selectpicker form-control" id="cboStd" name="standardId">
									<option value="">--Select--</option>
		                                     
		                           	<?php  foreach ($standard as $key=>$value) { ?>
		                            <option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
		                            <?php  } ?>
						  		</select>
							</div>
		
							<div class="col-lg-3">
								<input type="hidden" id="latitude" name="latitude" value="" /> 
								<input type="hidden" id="longitude" name="longitude" value="" /> 
								<input type="hidden" id="address" name="address" value="" /> 
								<input  id="schbox" type="text"
									placeholder="Search by School, Area, Location" name="searchtxt"
									class="form-control">
							</div>
		                    <div class="col-lg-3">
		                    	<input type="button" value="Find Out " class="btn btn-clear btn-sm btn-min-block"  id="sch" />
		                    </div>
	                    </div>
                    </form>
                    
            </div>
            
          
    </div>
<style>
    
    
    .has-success .form-control {
    background: none repeat scroll 0 0;
}
    
</style>
<div id="carousel-example-generic"
	class="carousel slide cover overlay overflow-hidden max-height-600 cover-navbar-large-top margin-none"
	data-ride="carousel">
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<img src="<?php echo asset_url();?>img/header4.png" alt="Slider"
				class="width-100pc" style="width: 1279px; height: 856px;">
		</div>
		<div class="item">
			<img src="<?php echo asset_url();?>img/header2.jpg" alt="Slider"
				class="width-100pc" style="width: 1279px; height: 856px;">
		</div>
		<div class="item">
			<img src="<?php echo asset_url();?>img/header3.jpeg" alt="Slider"
				class="width-100pc" style="width: 1279px; height: 856px;">
		</div>
	</div>
	<div class="overlay overlay-bg-black">
		<div class="container v-top">
			<div class="text-center col-lg-12" style="display: inline-block;">
				<form name="searchform" id="searchform"  action="<?php echo base_url();?>search" method="post">
					<div class="form-group">
						<div class="col-lg-3 selectContainer">
							<select class="selectpicker form-control" id="standardId" name="standardId" data-toggle="tooltip" data-placement="top" >
								<option value="">--Select--</option>
	                                     
	                           	<?php  foreach ($standard as $key=>$value) { ?>
	                            <option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
	                            <?php  } ?>
					  		</select>
						</div>
	
						<div class="col-lg-3">
							<input type="hidden" id="latitude" name="latitude" value="" /> 
							<input type="hidden" id="longitude" name="longitude" value="" /> 
							<input type="hidden" id="address" name="address" value="" /> 
							<input style="float: left; width: 450px;" id="schbox" type="text"
								placeholder="Search by School, Area, Location" name="searchtxt"
								class="form-control">
						</div>
					<input type="button" value="Find Out " class="btn btn-primary btn-xl page-scroll" id="sch" />
					</div>
				</form>
			</div>
		</div>
	</div>

	<a class="left carousel-control" href="" role="button"
		data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"
		aria-hidden="true"></span> <span class="sr-only">Previous</span>
	</a> <a class="right carousel-control" href="" role="button"
		data-slide="next"> <span class="glyphicon glyphicon-chevron-right"
		aria-hidden="true"></span> <span class="sr-only">Next</span>
	</a>
</div>
<div id="push">
</div>

                  
<div id="content" class="ng-scope">
<!-- 	<aside class="bg-purple" class="asidecategory"> -->
<!--             <div class="row"> -->
<!--                 <div class="col-lg-2 col-md-6 text-center"> -->
<!--                     <div class="service-box"> -->
<!--                         <i class="fa fa-4x fa-diamond wow bounceIn "></i> -->
<!--                         <a class="btn btn-clear btn-sm btn-min-block" href="http://www.jquery2dotnet.com/">Login</a> -->
                        
<!-- <!--                         <p class="text-muted">Our templates are updated regularly so they don't break.</p>
                    </div>--> 
<!--                 </div> -->
<!--                 <div class="col-lg-2 col-md-6 text-center"> -->
<!--                     <div class="service-box"> -->
<!--                         <i class="fa fa-4x fa-paper-plane wow bounceIn " data-wow-delay=".1s"></i> -->
<!--                         <h5>Primary Schools</h5> -->
<!--                     </div> -->
<!--                 </div> -->
<!--                 <div class="col-lg-2 col-md-6 text-center"> -->
<!--                     <div class="service-box"> -->
<!--                         <i class="fa fa-4x fa-newspaper-o wow bounceIn " data-wow-delay=".2s"></i> -->
<!--                         <h5>Secondary Schools</h5> -->
<!--                     </div> -->
<!--                 </div> -->
<!--                 <div class="col-lg-2 col-md-6 text-center"> -->
<!--                     <div class="service-box"> -->
<!--                         <i class="fa fa-4x fa-heart wow bounceIn " data-wow-delay=".3s"></i> -->
<!--                         <h5>High Schools</h5> -->
<!--                     </div> -->
<!--                 </div> -->
<!--                  <div class="col-lg-2 col-md-6 text-center"> -->
<!--                     <div class="service-box"> -->
<!--                         <i class="fa fa-4x fa-newspaper-o wow bounceIn " data-wow-delay=".2s"></i> -->
<!--                         <h5>Secondary High</h5> -->
<!--                     </div> -->
<!--                 </div> -->
<!--                 <div class="col-lg-2 col-md-6 text-center"> -->
<!--                     <div class="service-box"> -->
<!--                         <i class="fa fa-4x fa-heart wow bounceIn " data-wow-delay=".3s"></i> -->
<!--                         <h5>Colleges</h5> -->
<!--                     </div> -->
<!--                 </div> -->
<!--             </div> -->
<!-- 	 </aside> -->
	<div class="bg-white">
		<div class="container">

			<div class="page-section">
				<div class="text-center">
					<i class="fa fa-home fa-5x text-grey-300"></i>
					<h1 class="text-h2">Looking for a School?</h1>
					<hr>
					<p class="lead">Check out the top schools.</p>
				</div>
				<br>
				

				<!-- // END .owl-basic -->

			</div>

			<div class="page-section">
				<section class="row gridalicious" id="slicktest"
					data-toggle="gridalicious" data-width="300">
        		<?php for ($i=0;$i<2;$i++) { ?>
        		<div class="galcolumn" id="item0sSqCX"
						style="width: 32.9059829059829%; padding-left: 15px; padding-bottom: 15px; float: left; box-sizing: border-box;">
						<div class="panel panel-default relative"
							style="margin-bottom: 15px; zoom: 1; opacity: 1;">
							<div
								class="ribbon-heading h4 inline absolute left margin-none ribbon-primary">State</div>
							<div class="cover hover overlay margin-none"
								style="height: 245px;">
								<div class="overlay overlay-full overlay-bg-black"
									style="height: 245px;">
									<div class="v-center">
										<h5 class="text-h4 margin-v-0-10 text-overlay text-uppercase">Shanti
											Niketan High School</h5>
										<p class="text-h5">
											<span class="fa fa-fw fa-star text-primary"></span> <span
												class="fa fa-fw fa-star text-primary"></span> <span
												class="fa fa-fw fa-star text-primary"></span> <span
												class="fa fa-fw fa-star-o text-white"></span> <span
												class="fa fa-fw fa-star-o text-white"></span>
										</p>
									</div>
								</div>
								<a u class="overlay overlay-full overlay-bg-black overlay-hover"
									href="schooldetailsTest" style="height: 245px;"> <span
									class="v-center"> <span class="btn btn-circle btn-white"><i
											class="fa fa-eye"></i></span>
								</span>
								</a> <a ui-sref="front.property" href="schooldetailsTest"> <img
									src="<?php echo asset_url();?>img/vector-school-house-28931692.jpg"
									alt="location" class="img-responsive"
									style="width: 100%; height: auto; display: block; margin-left: auto; margin-right: auto;">
								</a>
							</div>
						</div>
					</div>
					<div class="galcolumn" id="item2sSqCX"
						style="width: 32.9059829059829%; padding-left: 15px; padding-bottom: 15px; float: left; box-sizing: border-box;">
						<div class="panel panel-default relative"
							style="margin-bottom: 15px; zoom: 1; opacity: 1;">
							<div
								class="ribbon-heading h4 inline absolute left margin-none ribbon-primary">State</div>
							<div class="cover hover overlay margin-none"
								style="height: 246px;">
								<div class="overlay overlay-bg-black">
									<div class="v-bottom">
										<h5 class="text-h5 text-overlay margin-v-0-10 text-uppercase">Nagarwal
											Junior School</h5>
										<p class="text-h5">
											<span class="fa fa-fw fa-star text-yellow-800"></span> <span
												class="fa fa-fw fa-star text-yellow-800"></span> <span
												class="fa fa-fw fa-star text-yellow-800"></span> <span
												class="fa fa-fw fa-star-o text-white"></span> <span
												class="fa fa-fw fa-star-o text-white"></span>
										</p>
									</div>
								</div>
								<a class="overlay overlay-full overlay-bg-black overlay-hover"
									href="schooldetailsTest" style="height: 246px;"> <span
									class="v-center"> <span class="btn btn-circle btn-white"><i
											class="fa fa-eye"></i></span>
								</span>
								</a> <a href="schooldetailsTest"> <img
									src="<?php echo asset_url();?>img/vector-school-house-28931692.jpg"
									alt="location" class="img-responsive"
									style="width: 100%; height: auto; display: block; margin-left: auto; margin-right: auto;">
								</a>
							</div>
						</div>
					</div>
          <?php } ?>
          
          
          <div id="clearsSqCX"
						style="clear: both; height: 0px; width: 0px; display: block;"></div>
				</section>
				<br>

				<div class="page-header text-center">
					<i class="fa fa-comments-o fa-5x text-grey-300"></i>
					<h3 class="text-h2">What our customers say</h3>
				</div>

				<div class="row">
        <?php for ($i=0;$i<3;$i++) {?>
          <div class="col-md-4">
						<div class="media">
							<div class="media-left">
								<img src="<?php echo asset_url();?>img/users/guy-6.jpg"
									alt="People" class="img-circle media-object">
							</div>
							<div class="media-body">
								<p>eddbuddy helps me to search best school for me .</p>
								<p>
									<strong>contact <span class="text-muted">@
											eddbuddy.com</span></strong>
								</p>
							</div>
						</div>
					</div>
          <?php } ?>
          
        </div>
			</div>

		</div>
		<!-- // END .container -->

	</div>
    
    <script src="<?php echo asset_url(); ?>js/bootstrap.min.js"></script>
    <script>
        $( document ).ready(function() {
            
          //  $('[data-toggle="tooltip"]').tooltip()
//            $('#searchform').bootstrapValidator({
//            message: 'This value is not valid',
//            feedbackIcons: {
//                    valid: 'glyphicon glyphicon-ok',
//                    invalid: 'glyphicon glyphicon-remove',
//                    validating: 'glyphicon glyphicon-refresh'
//            },
//            submitHandler: function(validator, form, submitButton) {
//                   $('button[type="submit"]').prop('disabled', 'false')
//                    searchSch();
//             },
//            fields: {
//                    standardId: {
//                    message: 'Select  standard ',
//                        validators: {
//                                notEmpty: {
//                                        message: 'Standard cannot be empty.'
//                                },
//                                
//                        }   
//                    },
//                    schbox: {
//                    message: 'Select  location from dropdown ',
//                        validators: {
//                                notEmpty: {
//                                        message: 'Location cannot be empty.'
//                                },
//                                
//                        }   
//                    },
//                    
//            }//fields
//                     
//        }).on('error.field.bv', function(e, data) {
//            data.bv.disableSubmitButtons(true); // disable submit buttons on errors
//      
//        }).on('status.field.bv', function(e, data) {
//            data.bv.disableSubmitButtons(false); // enable submit buttons on valid
//        
//        });
//         $('button[type="submit"]').prop('disabled', 'true');
//     




//    $("#searchform").validate({
//        rules: {
//            standardId: {required: true},
//            //example5: {required: true}
//        },
//        messages: {
//            example5: "Just check the box<h5 class='text-error'>You aren't going to read the EULA</h5>"
//        },
//        tooltip_options: {
//            standardId: {trigger:'focus'},
//            //example5: {placement:'right',html:true}
//        },
//    });
     }); // end doc ready

          </script>
