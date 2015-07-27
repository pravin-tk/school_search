<form style="position:absolute;top: 5px;left:150px;z-index:7000;" action="<?php echo base_url();?>index.php/home/search" method="post">	
	<div class="form-group">
		<div class="col-lg-7 selectContainer">
			<select class="selectpicker form-control" id="cboStd" name="standardId">
				<option value="">--Select--</option>
                <?php  foreach ($standard as $key=>$value) { ?>
           		<option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
               	<?php  } ?>
	  		</select>
		</div>
		
		<div class="col-lg-5">
			<h5 class="text-white">400 Available</h5>
		</div>
   	</div>
</form>
<div id="wrap">
<div id="schoolheader" class="cover overlay overflow-hidden margin-bottom-none height-400 height-500-lg max-height-500" >
        <div id="pan">
	      <div id="wrapper"></div>
	      <div id="mask">
		<div class="bac"></div>
		<div class="logo"></div>
		<div class="remote stop"></div>
	      </div>
	    </div> 
    <div class="overlay overlay-bg-black overlay-full-xs">
      <div class="v-bottom v-top-xs">
        <div class="container">
            <div class="text-h5 text-overlay">
              <span class="fa fa-fw fa-star text-yellow-800"></span>
              <span class="fa fa-fw fa-star text-yellow-800"></span>
              <span class="fa fa-fw fa-star text-yellow-800"></span>
              <span class="fa fa-fw fa-star text-yellow-800"></span>
              <span class="fa fa-fw fa-star-o"></span>
            </div>
            <div class="col-lg-12">
               <div class="col-lg-4">
                  <h1 class="text-h1 text-overlay"><?php echo $basicInfo['name'];?></h1>
                  <p class="text-subhead text-overlay"><?php echo $basicInfo['streetName'];?>,<?php echo $basicInfo['localityName'];?>,<?php echo $basicInfo['cityName'];?></p>
          	   </div>
<!--           	   <div class="col-lg-6"> -->
<!--                   <h3 class="text-center text-h3 text-overlay">Seats Available</h3> -->
<!--                   <p class="text-subhead text-overlay"> -->
<!--         		</p> -->
<!--           	   </div> -->
          	   <div style="float: right">                
          	     <h4 class="text-h4 text-overlay"><img alt="360 view " src="<?php  echo asset_url();?>img/icons/360.png?>"></h4>
          	   </div>
          	</div>
          	<div >
                <p class="text-subhead text-overlay"></p>
          	</div>
        </div>
      </div>
    </div>

  </div>

  
<!-- Fixed navbar -->
<nav class="navbar navbar-default" role="navigation" id="detailmenubar">
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
	   	  <li class="property-meta-item ">
	   	  <a href="#overview" class="page-scroll" > <?php echo $basicInfo['name'];?> </a>
	   	     <p class="text-subhead text-overlay"><?php echo $basicInfo['localityName'];?>,<?php echo $basicInfo['cityName'];?></p>
	   	  </li>
	      <li class="property-meta-item "><a href="#overview" class="page-scroll" > <i class="fa fa-fw fa-building-o"></i> Overview</a></li>
	      <li class="property-meta-item"><a href="#navtimeline" class="page-scroll"><i class="fa fa-fw fa-building wow"></i> 360 view</a></li>
	      <li class="property-meta-item"><a href="#facility" class="page-scroll"><i class="fa fa-fw fa-building-o"></i> Facility</a></li>
	      <li class="property-meta-item"><a href="#gallery" class="page-scroll"><i class="fa fa-fw fa-camera"></i> Gallery</a></li>
	      <li class="property-meta-item "><a href="#review" class="page-scroll"><i class="fa fa-fw fa-star"></i> Review </li></a>
	      <li class="property-meta-item"> <a href="#fees" class="page-scroll"><i class="fa fa-fw fa-inr"></i> Fees</a></li>
	      <li class="property-meta-item"><a href="#contact" class="page-scroll"><i class="fa fa-fw icon icon-toilet"></i> Contacts</a></li>
	       <li class="property-meta-item"><a href="#nearby" class="page-scroll"><i class="fa fa-fw fa-inr"></i> Nearby</a></li>
<!-- 	      <li class="property-meta-item"><a href=""><i class="fa fa-fw fa-heart text-pink-500"></i> 35 loved this</a></li> -->
	    </ul>
	  </div>
	  </div>
	</div>  
</nav>
  
<!-- Begin page content -->
<div class="divider" id="overview"></div>
  <div class="row">
		<?php include 'pages/overview.php';?>
</div>

<div class="divider"></div>
  <div class="row">
		<?php include 'pages/timeline.php';?>
</div>

<div class="divider" id="facility"></div>
  <div class="row">
		<?php include 'pages/facility.php';?>
</div>

<div class="divider" id="gallery"></div>
  <div class="row">
		<?php include 'pages/gallery.php';?>
</div>

<div class="divider" id="review"></div>
<div class="row">
  <?php include 'pages/review.php';?>
</div>

<div class="divider" id="comments"></div>
<div class="row">
  <?php include 'pages/comments.php';?>
  
</div><!--/row-->

<div class="divider" id="fees"></div>  
<div class="row">
  
  <?php include 'pages/fees.php';?>

</div>
    
<div class="divider" id="contact"></div>
<div class="row">
  <?php include 'pages/contact.php';?>
</div>


<div class="divider" id="nearby"></div>
<div class="row">
  <?php include 'pages/nearby.php';?>
</div>


</div><!--/wrap-->



<ul class="nav pull-right scroll-top">
  <li><a href="#" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
</ul>


