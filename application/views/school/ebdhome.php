 <?php

 
 foreach ($standards as $key=>$value)
         $standard =    $value;  
 
  ?>
<div id="carousel-example-generic" class="carousel slide cover overlay overflow-hidden max-height-600 cover-navbar-large-top margin-none" data-ride="carousel">
<!--   <ol class="carousel-indicators"> -->
<!--     <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li> -->
<!--     <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li> -->
<!--     <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li> -->
<!--   </ol> -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo asset_url();?>img/header4.png" alt="Slider" class="width-100pc" style="width: 1279px; height: 856px;">
    </div>
    <div class="item">
      <img src="<?php echo asset_url();?>img/header2.jpg" alt="Slider" class="width-100pc" style="width: 1279px; height: 856px;">
    </div>
    <div class="item">
      <img src="<?php echo asset_url();?>img/header3.jpeg" alt="Slider" class="width-100pc" style="width: 1279px; height: 856px;">
    </div>
  </div>
    <div class="overlay overlay-bg-black">
		  <div class="container v-top">
		      <div class="text-center col-lg-12" style="display:inline-block;">
		       <div class="col-lg-3">
                            <form name="searchform" id="searchform" action="index.php/home/search" method="post">
		          <select class="selectpicker form-control "style="float: left;" id="cboStd">
                                      <option value="">--Select--</option>
                                     
                                    <?php  foreach ($standard as $key=>$value) { ?>
                                             <option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                                    <?php  } ?>
<!--				    <optgroup label="Day School" >
				      <option>Day School</option>
				    </optgroup>
				    <optgroup label="Nursery">
				      <option>Nursery</option>
				    </optgroup>-->
				  </select>
				</div>
				
				  <div class="col-lg-3">
		            <!--<input type="text" placeholder="Search by School, Area, Location" name="searchtxt" class="form-control" id="searchtxt" >-->
                              <input type="hidden" id="latitude" name ="latitude" value="" />
                                <input type="hidden" id="longitude" name ="longitude" value="" />
                                <input type="hidden" id="address" name ="address" value="" />
                    <input style="float: left;width:450px;" id="schbox" type="text" 
                           placeholder="Search by School, Area, Location" 
                           name="searchtxt" class="form-control"  >
		          </div>
		          <!--<input type="submit" value="Find Out " class="btn btn-primary btn-xl page-scroll"/>-->
                                     <input type="button" value="Find Out " class="btn btn-primary btn-xl page-scroll" id="sch"/>
		        </form>
		          </div>
		    </div>
	</div>

  <a class="left carousel-control" href="" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
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
<div class="slider demo">
<?php for ($i=0 ; $i<10;$i++) { ?>
          <div class="item" style="width: 32.9059829059829%; padding-left: 15px; padding-bottom: 15px; float: left; box-sizing: border-box;">
            <div class="panel panel-default relative">
              <div class="ribbon-heading text-h5 ribbon-default inline margin-none left absolute">State</div>
              <div class="cover hover overlay margin-none" style="height: 147px;">
                <img src="<?php echo asset_url();?>img/vector-school-house-28931692.jpg" alt="location" class="img-responsive">
                <a  class="overlay overlay-full overlay-bg-black overlay-hover" href="schooldetailsTest" style="height: 147px;">
                  <span class="v-center">
                        <span class="btn btn-circle btn-white"><i class="fa fa-eye"></i></span>
                  </span>
                </a>
              </div>
              <div class="panel-body">
                <h4 class="margin-v-0-5">R.R Shinde Junior College</h4>
                <p class="small">
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                  <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                </p>
                <p>R.R.Shinde junior college.</p>
                <span class="label label-grey-100">Medium : English</span>
                <i class="small fa fa-fw icon-user-1" data-toggle="tooltip" ></i>
                <a  class="btn btn-primary btn-circle absolute bottom right" href="schooldetailsTest"></a>
              </div>
            </div>
          </div>
          <?php } ?>
</div>
        
       
        <!-- // END .owl-basic -->

      </div>

      <div class="page-section">
        <section class="row gridalicious" id="slicktest" data-toggle="gridalicious" data-width="300">
        <?php for ($i=0;$i<2;$i++) { ?>
        <div class="galcolumn" id="item0sSqCX" style="width: 32.9059829059829%; padding-left: 15px; padding-bottom: 15px; float: left; box-sizing: border-box;">
        <div class="panel panel-default relative" style="margin-bottom: 15px; zoom: 1; opacity: 1;">
            <div class="ribbon-heading h4 inline absolute left margin-none ribbon-primary">State</div>
            <div class="cover hover overlay margin-none" style="height: 245px;">
              <div class="overlay overlay-full overlay-bg-black" style="height: 245px;">
                <div class="v-center">
                  <h5 class="text-h4 margin-v-0-10 text-overlay text-uppercase">Shanti Niketan High School</h5>
                  <p class="text-h5">
                    <span class="fa fa-fw fa-star text-primary"></span>
                    <span class="fa fa-fw fa-star text-primary"></span>
                    <span class="fa fa-fw fa-star text-primary"></span>
                    <span class="fa fa-fw fa-star-o text-white"></span>
                    <span class="fa fa-fw fa-star-o text-white"></span>
                  </p>
                </div>
              </div>
              <a u class="overlay overlay-full overlay-bg-black overlay-hover" href="schooldetailsTest" style="height: 245px;">
                <span class="v-center">
                    <span class="btn btn-circle btn-white"><i class="fa fa-eye"></i></span>
                </span>
              </a>
              <a ui-sref="front.property" href="schooldetailsTest">
                <img src="<?php echo asset_url();?>img/vector-school-house-28931692.jpg" alt="location" class="img-responsive" style="width: 100%; height: auto; display: block; margin-left: auto; margin-right: auto;">
              </a>
            </div>
          </div>
          </div>
          <div class="galcolumn" id="item2sSqCX" style="width: 32.9059829059829%; padding-left: 15px; padding-bottom: 15px; float: left; box-sizing: border-box;">
           <div class="panel panel-default relative" style="margin-bottom: 15px; zoom: 1; opacity: 1;">
            <div class="ribbon-heading h4 inline absolute left margin-none ribbon-primary">State</div>
            <div class="cover hover overlay margin-none" style="height: 246px;">
              <div class="overlay overlay-bg-black">
                <div class="v-bottom">
                  <h5 class="text-h5 text-overlay margin-v-0-10 text-uppercase">Nagarwal Junior School</h5>
                  <p class="text-h5">
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-white"></span>
                    <span class="fa fa-fw fa-star-o text-white"></span>
                  </p>
                </div>
              </div>
              <a class="overlay overlay-full overlay-bg-black overlay-hover" href="schooldetailsTest" style="height: 246px;">
                <span class="v-center">
                    <span class="btn btn-circle btn-white"><i class="fa fa-eye"></i></span>
                </span>
              </a>
              <a href="schooldetailsTest">
                <img src="<?php echo asset_url();?>img/vector-school-house-28931692.jpg" alt="location" class="img-responsive" style="width: 100%; height: auto; display: block; margin-left: auto; margin-right: auto;">
              </a>
            </div>
          </div>
          </div>
          <?php } ?>
          
          
          <div id="clearsSqCX" style="clear: both; height: 0px; width: 0px; display: block;"></div></section>
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
                <img src="<?php echo asset_url();?>img/users/guy-6.jpg" alt="People" class="img-circle media-object">
              </div>
              <div class="media-body">
                <p>eddbuddy helps me to search best school for me .</p>
                <p>
                  <strong>Amruta Selamonkar. <span class="text-muted">@ eddbuddy.com</span></strong>
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
    
  