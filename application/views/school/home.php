<!DOCTYPE html>
<!-- saved from url=(0068)http://real-estate.aws.ipv4.ro/angular/index.html#/front/home-slider -->
<html lang="en"  class="st-effect-rxs-1 hide-sidebar ls-bottom-footer-fixed"><head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>School Search</title>

<body class="breakpoint-1024">
  <!-- uiView:  --><div  class="ui-view-main "><!-- uiView:  -->
  <div class="ui-view-main ng-scope"><!-- Fixed navbar -->
<?php include 'header.php';?>

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
		          <select class="selectpicker form-control ">
						    <optgroup label="Day School" >
						      <option>Day School</option>
						    </optgroup>
						    <optgroup label="Nursery">
						      <option>Nursery</option>
						    </optgroup>
						  </select>
				</div>
				<form action="http://localhost/school/index.php/welcome/search">
				  <div class="col-lg-3">
		            <input type="text" placeholder="Search by School, Area, Location" name="searchtxt" class="form-control" id="searchtxt" >
		          </div>
		          <input type="submit" value="Find Out " class="btn btn-primary btn-xl page-scroll"/>
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
  <!-- // END .bg-white -->

  <section class="footer-section">
    <div class="container">
      <div class="row">
        <div class="col-xs-6 col-md-2">
          <h4>Corporate</h4>
          <ul class="list-unstyled">
            <li><a href="">About the company</a></li>
            <li><a href="">Our Mission</a></li>
            <li><a href="">Our People</a></li>
            <li><a href="">Career</a></li>
            <li><a href="">Contact Us</a></li>
          </ul>
        </div>
        <div class="col-xs-6 col-md-2">
          <h4>Media</h4>
          <ul class="list-unstyled">
            <li><a href="">Advertise with Us</a></li>
            <li><a href="">Partners</a></li>
            <li><a href="">Media Room</a></li>
            <li><a href="">Licensing</a></li>
          </ul>
        </div>
		<div class="col-xs-6 col-md-2">
          <h4>Policies</h4>
          <ul class="list-unstyled">
            <li><a href="">How We Rate Schools</a></li>
            <li><a href="">School Review Guidelines</a></li>
            <li><a href="">Terms Of Use</a></li>
            <li><a href="">Privacy and Policies</a></li>
          </ul>
        </div>        <div class="col-xs-12 col-md-4">
          <div class="panel bg-transparent margin-none">
            <div class="panel-body">
              <div class="form-group form-control-default">
                <label for="email">Email:</label>
                <input id="email" class="form-control" type="text" placeholder="Your email address ..">
              </div>
              <div class="form-group">
                <button class="btn btn-pink-500">Subscribe</button>
              </div>

              <small class="help-block">* We will never sell your email</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>
<!-- // END #content -->
<script type="text/javascript">

					
</script>
<?php include 'footer.php';?>