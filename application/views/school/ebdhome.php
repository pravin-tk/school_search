<style>
    .extra-search-div{
        display:inline-block;
    }
    @media screen and (max-width:1000px){
        .extra-search-div{
            display:none;
        }
        .row [class*="col-"]{
            padding-bottom: 5px;
        }
        .row .col-md-12{
            
            width: 100%;
        }
        .row .col-md-8{
            
            width: 100%;
        }
        .row .col-md-8 .col-md-3{
            float:left;
            width: 20%;
        }
        .row .col-md-8 .col-md-6{
            float:left;
            width: 60%;
        }
    }
    @media screen and (max-width:600px){
        .extra-search-div{
            display:none;
        }
        .row [class*="col-"]{
            padding-bottom: 5px;
        }
        .row .col-md-12{
            
            width: 100%;
        }
        .row .col-md-8{
            
            width: 100%;
        }
        .row .col-md-8 .col-md-3{
            width: 100%;
        }
        .row .col-md-8 .col-md-6{
            width: 100%;
        }
    }
    .alert-danger {
    background-color: #f2dede;
    border-color: #ebccd1;
    color: #a94442;
    }
    .homecategory{
    font-weight:900;
/*     color:#26a69a; */
        color:#fff;
        background: #26a69a;
    
    width:100%;
    overflow:hidden;
    }
    .border.active{
    background: #00796B;
    font-weight:900;
    color:#fff;
	    a{
	    color:#fff;
	    }
    }
    .border.active a{
    color:#fff;
    }
    .border a{
    color:#fff;
    }
    .center{
    margin:10px;
    margin-right: auto;
 	margin-left: auto;
 	display: block;
 	}
 	
 	.border{
 	border-right:solid 1px;
    border-color: #fff;
    }
  
</style>
<div class="container" style="width: 100%;padding-left: 0px;padding-right: 0;">
    <div class="row">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner " id="homeslider">
                    <div class="item active">
                        <img src="<?php echo asset_url();?>img/header4.png"
						  class="" style="width:100%;height: 80%;" alt="First slide">
                        
                    </div>
                    <div class="item">
                        <img src="<?php echo asset_url();?>img/school/home_bg_image.png" alt="Slider"
							class="" style="width:100%;height: 80%;">
                        
                    </div>
                    <div class="item">
                        <img src="<?php echo asset_url();?>img/header6.jpg" alt="Slider"
							 class="" style=" width:100%;height: 80%;">

                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span></a><a class="right carousel-control"
                        href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right">
                        </span></a>
                        
            </div>
            <div class="main-text overlaysearch text-center col-md-12" style="display: inline-block;" id="globalSearch">
                    <h1 class="searchheading">
                        Search School
                    </h1>
                  <form name="searchform" id="searchform"  class="" action="<?php echo base_url();?>index.php/home/search" method="post">
                      <input type="text" id="notify_message" value="" style="display:none" />
                      <div class="col-md-2 extra-search-div">&nbsp;</div>
                      <div class="form-group col-md-8">
                            <div class="col-md-3 selectContainer">
                                <select class="selectpicker form-control" id="cboStd" name="standardId" required>
                                        <option value="">--Select Standard--</option>
                                        <?php  
                                        if(isset($standardlist))
                                            foreach ($standardlist as $key=>$value) { ?>
                                            <option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                                            <?php  } ?>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <input type="hidden" id="latitude" name="latitude" value="" /> 
                                <input type="hidden" id="longitude" name="longitude" value="" /> 
                                <input type="hidden" id="address" name="address" value="" />
                                <div> 
                                <input  id="schbox" type="text"  required
                                        placeholder="Search by City Area, Location" name="searchtxt"
                                        class="form-control "style="width: 71%;float: left;">
                                </div>
                                <div>        
                                 <input type="button" value="&#xf002;" class="btn btn-clear btn-sm btn-min-block"  id="sch" style="font-weight:900;font-family: FontAwesome;"/>
                                </div>        
                            </div>
<!--                         <div class="col-md-3" > -->
<!--                         </div> -->
                        </div>
                        <div class="col-md-2 extra-search-div">&nbsp;</div>
                    </form>
                    
            </div>
            
          
    </div>
        <!-- /.container-fluid -->
</div>
<div id="push">
</div>

<div class="homecategory" style="">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="col-md-12"style="padding-left: 0px;padding-right: 0px;">
                    <div class="col-md-3 border text-center">
                    	<div>
                        <span class="icon"><i class="fa fa-3x fa-comment-o center" ></i></span>
                        <a href="#clearsSqCX"  class="page-scroll center">Reviews</a>
                        </div>
                    </div>
                    <div class="col-md-3 border text-center">
                    
                        <span class="icon"><i class="fa fa-3x fa-question center " ></i></span>
                        <a class="page-scroll center" href="#">How We Collect Data ?</a>
                    </div>
                    <div class="col-md-3 border text-center">
                    	<span class="icon"><i class="fa fa-3x fa-lock center" ></i></span>
                        <a class="page-scroll center" href="#">Blog</a>
                    </div>
                    <div class="col-md-3 border text-center">
                    	<span class="icon"><i class="fa fa-3x fa-list center" ></i></span>
                        <a class="page-scroll center" href="<?php echo $base_url; ?>list-your-school">List Your School</a>
                    </div>
            </div>
            <!-- /.navbar-collapse -->
</div>
             
<div id="content" class="ng-scope">

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
        		<?php 
                     
                       
                        if(isset($topschools)) 
                            foreach ($topschools as $key =>$school) { 
                                  $id = $school['schoolId'];
                                  $cityname =   preg_replace('/[^A-Za-z0-9\-]/', '', strtolower(str_replace(" ","-",$school['cityName']))); 
                                  $localityname = preg_replace('/[^A-Za-z0-9\-]/', '', strtolower(str_replace(" ","-",$school['localityName']))); 
                                  $schoolname = preg_replace('/[^A-Za-z0-9\-]/', '', strtolower(str_replace(" ","-",$school['name']))); 
                                  $urllink =   $base_url.$cityname."/".$localityname."/".$schoolname."-".$id."/detail";
                                        
                            ?>
        		<div class="galcolumn" id="item0sSqCX"
			style="width: 32.9059829059829%; padding-left: 15px; padding-bottom: 15px; float: left; box-sizing: border-box;">
			<div class="panel panel-default relative" style="margin-bottom: 15px; zoom: 1; opacity: 1;">
				<div class="ribbon-heading h4 inline absolute left margin-none ribbon-primary"><?php echo $school['cityName'] ?></div>
					<div class="cover hover overlay margin-none" style="height: 245px;">
						<div class="overlay overlay-full overlay-bg-black" style="height: 245px;">
                                <div class="v-center">
                                    <h5 class="text-h4 margin-v-0-10 text-overlay text-uppercase">
                                        <?php echo $school['name'] ?> </h5>
                                                <p> <?php echo $school['localityName'] ?></p>
                                                            <p class="text-h5">
                                                              <?php for($j=1;$j <= $school['rating'];$j++){ ?>
                                                                    <span class="fa fa-fw fa-star text-primary"></span>
                                                              <?php } ?>
                                                               <?php for($k=$j;$k<= 5;$k++){ ?>
                                                    <span class="fa fa-fw fa-star-o text-white"></span>
                                                              <?php } ?>    


                                                            </p>
                                                    </div>
                                            </div>
                                            <a u class="overlay overlay-full overlay-bg-black overlay-hover"
                                               href="<?php echo $urllink;?>" style="height: 245px;"> <span
                                                    class="v-center"> <span class="btn btn-circle btn-white"><i
                                                                    class="fa fa-eye"></i></span>
                                            </span>
                                            </a> 
                                    <?php if ($school['homeImage'] == ""){ ?>
                                  <a ui-sref="front.property" href="<?php echo $urllink;?>"> <img
                                          src="<?php echo asset_url();?>img/vector-school-house-28931692.jpg"
                                          alt="location" class="img-responsive"
                                          style="width: 100%; height: auto; display: block; margin-left: auto; margin-right: auto;">
                                  </a> <?php } else {?>
                                     <a ui-sref="front.property" href="<?php echo $urllink;?>"> <img
                                          src="<?php echo asset_url();?>img/<?php echo $school['homeImage']?>"
                                          alt="location" class="img-responsive"
                                          style="width: 100%; height: auto; display: block; margin-left: auto; margin-right: auto;">
                                  </a> <?php }?> 
                                    </div>
						</div>
					</div>
             
          <?php } ?>
          
          
          <div id="clearsSqCX" style="clear: both; height: 0px; width: 0px; display: block;"></div>
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
									<strong>Amruta Selamonkar. <span class="text-muted">@
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
