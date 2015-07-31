<?php 
//$basicInfo
//$otherInfo




?>
<div id="content">
  <div id="carousel-example-generic" class="carousel slide cover overlay overflow-hidden margin-bottom-none height-500 height-600-lg max-height-600" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
      <div class="item active">
          <?php if($basicInfo['homeImage'] == ""){?>
        <img src="<?php echo asset_url();?>img/school/architectural_main_school_building_facade.jpg" alt="First slide" class="width-100pc" style="width: 903px; height: 582px;">
          <?php }else{?>
        <img src="<?php echo $basicInfo['homeImage'];?>" alt="First slide" class="width-100pc" style="height: 500px;">
          <?php }?>
  </div>
  <div class="item ">
        <img src="<?php echo asset_url();?>img/school/schoolbus.jpg" alt="Second slide" class="width-100pc" style="height: 500px;">
  </div>
  <div class="item ">
     <img src="<?php echo asset_url();?>img/school/hillschool.jpg" alt="Third slide" class="width-100pc" style="height: 500px;">
  </div>
    </div>
    <div class="overlay overlay-bg-black overlay-full-xs">
      <div class="v-bottom v-top-xs">
        <div class="container">
          <div class="page-section">
            <div class="text-h5 text-overlay">
              <span class="fa fa-fw fa-star text-yellow-800"></span>
              <span class="fa fa-fw fa-star text-yellow-800"></span>
              <span class="fa fa-fw fa-star text-yellow-800"></span>
              <span class="fa fa-fw fa-star text-yellow-800"></span>
              <span class="fa fa-fw fa-star-o"></span>
            </div>
                <h1 class="text-h1 text-overlay"><?php echo $basicInfo['name'];?></h1>
                <p class="text-subhead text-overlay"><?php echo $basicInfo['streetName'];?>,<?php echo $basicInfo['localityName'];?>,<?php echo $basicInfo['cityName'];?></p>
          </div>
        </div>
      </div>
    </div>

  </div>
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="" data-toggle="sidebar-menu" class="toggle pull-left visible-xs"><i class="fa fa-bars"></i></a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="main-nav1">
	  <div class="property-meta" >
	    <ul >
	      <li class="property-meta-item "><a href="#overview" class="page-scroll" > <i class="fa fa-fw fa-building-o"></i> Overview</a></li>
	      <li class="property-meta-item"><a href="#timeline" class="page-scroll"><i class="fa fa-fw fa-building wow"></i> Timeline</a></li>
	      <li class="property-meta-item"><a href="#facility" class="page-scroll"><i class="fa fa-fw fa-building-o"></i> Facility</a></li>
	      <li class="property-meta-item"><a href="#gallery" class="page-scroll"><i class="fa fa-fw fa-camera"></i> Gallery</a></li>
	      <li class="property-meta-item "><a href="#review" ><i class="fa fa-fw fa-star"></i> Review </li></a>
	      <li class="property-meta-item"> <a href="#fees" class="page-scroll"><i class="fa fa-fw fa-inr"></i> Fees</a></li>
	      <li class="property-meta-item"><a href="#contact" class="page-scroll"><i class="fa fa-fw icon icon-toilet"></i> Contacts</a></li>
	      <li class="property-meta-item"><a href="#share" class="page-scroll"><i class="fa fa-fw fa-star"></i> Share</a></li>
	       <li class="property-meta-item"><a href="#nearby" class="page-scroll"><i class="fa fa-fw fa-inr"></i> Nearby</a></li>
	      <li class="property-meta-item"><a href="#facility" class="page-scroll"><i class="fa fa-fw fa-heart text-pink-500"></i> 35 loved this</a></li>
	    </ul>
	  </div>
	  </div>
	</div>  
</nav>
	<section id="overview">
		<?php include 'pages/overview.php';?>
	</section>  
        <section id="timeline"> 
                <?php include 'pages/timeline.php';?>
	</section> 
  	<section id="gallery"> 
                <?php include 'pages/gallery.php';?>
	</section> 
	<section id="facility">
		<?php include 'pages/facility.php';?>
	</section>
	<section id="review">
                <?php include 'pages/review.php';?>
   	</section>
        <section id="comments">
                <?php include 'pages/comments.php';?>
        </section>
    
  </div>

  <section id="fees">
    	<?php include 'pages/fees.php';?>
	</section>
	<section id="contact">
    	<?php include 'pages/contact.php';?>
	</section>
	<section id="share">
    	<?php include 'pages/share.php';?>
	</section>
    
<!-- Near By -->
  


<div id="ascrail2002" class="nicescroll-rails" style="width: 5px; z-index: auto; cursor: default; position: absolute; top: 0px; left: 1274px; height: 85px; display: none; opacity: 0;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; border: 0px; border-radius: 5px; background-color: rgb(22, 174, 159); background-clip: padding-box;"></div></div><div id="ascrail2006" class="nicescroll-rails" style="width: 5px; z-index: 99; cursor: default; position: absolute; top: 50px; left: 660px; height: 562px; display: none; opacity: 0;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; border: 0px; border-radius: 5px; background-color: rgb(22, 174, 159); background-clip: padding-box;"></div></div><div id="ascrail2010" class="nicescroll-rails" style="width: 5px; z-index: 99; cursor: default; position: absolute; top: 50px; left: 954px; height: 562px; opacity: 0;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 168px; border: 0px; border-radius: 5px; background-color: rgb(22, 174, 159); background-clip: padding-box;"></div></div><div id="ascrail2013" class="nicescroll-rails" style="width: 5px; z-index: 99; cursor: default; position: absolute; top: 50px; left: 954px; height: 562px; display: none; opacity: 0;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; border: 0px; border-radius: 5px; background-color: rgb(22, 174, 159); background-clip: padding-box;"></div></div><div id="ascrail2016" class="nicescroll-rails" style="width: 5px; z-index: 99; cursor: default; position: absolute; top: 50px; left: 1274px; height: 562px; display: none; opacity: 0;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; border: 0px; border-radius: 5px; background-color: rgb(22, 174, 159); background-clip: padding-box;"></div></div><div id="ascrail2020" class="nicescroll-rails" style="width: 5px; z-index: 99; cursor: default; position: absolute; top: 50px; left: 954px; height: 562px; opacity: 0;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 180px; border: 0px; border-radius: 5px; background-color: rgb(22, 174, 159); background-clip: padding-box;"></div></div><div id="ascrail2024" class="nicescroll-rails" style="width: 5px; z-index: 99; cursor: default; position: absolute; top: 50px; left: 954px; height: 562px; display: none; opacity: 0;"><div style="position: relative; top: 0px; float: right; width: 5px; height: 0px; border: 0px; border-radius: 5px; background-color: rgb(22, 174, 159); background-clip: padding-box;"></div></div><span role="status" aria-live="polite" class="select2-hidden-accessible"></span></body></html>