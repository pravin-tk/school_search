
<div id="content">
  <div id="carousel-example-generic" class="carousel slide cover overlay overflow-hidden margin-bottom-none height-500 height-600-lg max-height-600" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
      <div class="item active">
              <img src="<?php echo asset_url();?>img/school/architectural_main_school_building_facade.jpg" alt="First slide" class="width-100pc" style="width: 903px; height: 582px;">
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
                <h1 class="text-h1 text-overlay">Dastur High School</h1>
                <p class="text-subhead text-overlay">Sasane Nagar , Hadpsar </p>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="property-meta" id="detailmenubar">
    <ul class="nav navbar-nav">
      <a href="#overview" class="page-scroll"><li class="property-meta-item"><i class="fa fa-fw fa-building-o"></i> Overview</li></a>
      <a href="#timeline" class="page-scroll"><li class="property-meta-item"><i class="fa fa-fw fa-building wow"></i> Timeline</li></a>
      <a href="#facility" class="page-scroll"><li class="property-meta-item"><i class="fa fa-fw fa-building-o"></i> Facility</li></a>
      <a href="#gallery" class="page-scroll"><li class="property-meta-item"><i class="fa fa-fw fa-camera"></i> Gallery</li></a>
      <a href="#review" class="page-scroll"><li class="property-meta-item"><i class="fa fa-fw fa-star"></i> Review</li></a>
       <a href="#fees" class="page-scroll"><li class="property-meta-item"><i class="fa fa-fw fa-inr"></i> Fees</li></a>
      <a href="#contact" class="page-scroll"><li class="property-meta-item"><i class="fa fa-fw icon icon-toilet"></i> Contacts</li></a>
      <a href="#share" class="page-scroll"><li class="property-meta-item"><i class="fa fa-fw fa-star"></i> Share</li></a>
       <a href="#nearby" class="page-scroll"><li class="property-meta-item"><i class="fa fa-fw fa-inr"></i> Nearby</li></a>
      <a href="#facility" class="page-scroll"><li class="property-meta-item"><i class="fa fa-fw fa-heart text-pink-500"></i> 35 loved this</li></a>
    </ul>
  </div>

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
  <div class="page-section">

    <div class="container">
      <h4><i class="fa fa-fw fa-map-marker"></i> Location on map</h4>
    </div>

    <div class="panel height-600 relative">

    </div>
    
<!-- Near By -->
  <div class="bg-white">
    <div class="container">
      <h3 class="page-section-heading">Related schools</h3>

      <div class="demo">

        
       <?php for ($i=0;$i< 10 ;$i++) {?>
        <div class="item" style="width: 222px; padding-left: 15px; padding-bottom: 15px; float: left; box-sizing: border-box;">
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

      <br>
    </div>
  </div>
<!-- Near By -->
  
</div>
<?php include 'footer.php';?></body></html>