<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>School Search</title>
</head>

<body id="page-top">

	<nav  class="navbar navbar-transparent">
    	<?php include 'header.php';?>
    </nav>
    <header>
       <img src="<?php echo asset_url();?>img/school/indogobalcollege.jpg" class="img-responsive" alt="Responsive image" style="width: 100%;"/>
        <div class="head-detail">
	        <div class="col-md-8"> 
	        <h2>Sadhna School</h2>
                <h4>412 , Bhekarai Nagar , Hadpsar</h4>
	        </div>
        <div class="col-md-4">
                <div class="row">
                    <div class="col-xs-12 col-md-6 text-center">
                        <h1 class="rating-num">5.1</h1>
                        <div class="rating">
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star-half-empty"></span>
                        </div>
                        <div>
                            <span class="fa fa-user"></span>125888 total votes
                        </div>
                    </div>
                </div>
        </div>
        </div> 
        
    </header>
    <aside  class="asidecategory bg-purple" id="schoolcard">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="service-box">
                        <span class="icon"><i class="fa fa-2x fa-building-o wow bounceIn marginleft" data-wow-delay=".2s"></i></span>
                        <a class="page-scroll" href="#about">Highlights</a>
                    </li>
                    <li class="service-box">
                    
                        <span class="icon"><i class="fa fa-2x fa-building-o wow bounceIn marginleft" data-wow-delay=".2s"></i></span>
                        <a class="page-scroll" href="#facility">Facility</a>
                    </li>
                    <li class="service-box">
                    	<i class="fa fa-2x fa-camera wow bounceIn marginleft" data-wow-delay=".2s"></i>
                        <a class="page-scroll" href="#gallery">Gallery</a>
                    </li>
                    <li class="service-box">
                    	<i class="fa fa-2x fa-star wow bounceIn marginleft" data-wow-delay=".2s"></i>
                        <a class="page-scroll" href="#review">Review</a>
                    </li>
                     <li class="service-box">
                    	<i class="fa fa-2x fa-inr wow bounceIn marginleft" data-wow-delay=".2s"></i>
                        <a class="page-scroll" href="#fees">Fees</a>
                    </li>
                     <li class="service-box">
                    	<i class="fa fa-2x fa-newspaper-o wow bounceIn marginleft" data-wow-delay=".2s"></i>
                        <a class="page-scroll" href="#contact">Contacts</a>
                    </li>
                     <li class="service-box" >
                    	<i class="fa fa-2x fa-share-alt wow bounceIn marginleft" data-wow-delay=".2s"></i>
                        <a class="page-scroll" href="#share">Share</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->            
	</aside>
    

	 
	<section id="about">
       
    </section>
    <section style="float: left;">
    <?php include 'timeline.php';?>
    </section>
	<section id="facility" style="float: left;">
   		<?php include 'facility.php';?>
    </section>
    <section id="gallery" style="float: left;">
    	<?php include 'gallery.php';?>
	</section>
    
	<section id="review" style="float: left;">
       <?php include 'review.php';?>
	</section>

	<section id="fees" style="float: left;">
    	<?php include 'fees.php';?>  
    </section>
	<section id="contact" style="float: left;">
       <?php include 'contact.php';?>
    </section>
    <section id="share">
    <?php include 'share.php';?>
    </section>
    <div id="footer">
        <?php include 'footer.php';?>
    </div>
    <head>
		<style type="text/css">
		section
		{
		width:100%;
		overflow:auto;}
		.container
		{
		width:100%;
		}
		.navbar-transparent{
		position:absolute;color:white;width:100%;
		}
		.container-fluid a{
		color:#fff;}
		</style>
    </head>
    <!-- jQuery -->
    <script src="<?php echo asset_url();?>js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo asset_url();?>js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo asset_url();?>js/cobox.min.js"></script>
    <script src="<?php echo asset_url();?>js/jquery.easing.min.js"></script>
    <script src="<?php echo asset_url();?>js/jquery.fittext.js"></script>
    <script src="<?php echo asset_url();?>js/wow.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.1/modernizr.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
        
    
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo asset_url();?>js/creative.js"></script>
  
</body>

</html>
