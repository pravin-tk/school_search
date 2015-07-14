
<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
      

    </style>
</head>
<body>
<nav  class="navbar navbar-transparent">
    	<?php include 'header.php';?>
    </nav>
<div class="container" style="margin-top: 20px; margin-bottom: 20px;">
	<div class="row panel">
		<div class="col-md-4 bg_blur ">
    	    <a href="#" class="follow_btn hidden-xs">Follow</a>
		</div>
        <div class="col-md-8  col-xs-12">
           <img src="<?php echo asset_url();?>img/school/indogobalcollege.jpg" class="img-thumbnail picture hidden-xs" />
           <img src="<?php echo asset_url();?>img/school/indogobalcollege.jpg" class="img-thumbnail visible-xs picture_mob" />
           <div class="header">
                <h1>New English School</h1>
                <h4>Bhudhwar peth , pune </h4>
                <span>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain..."</span>
           </div>
        </div>
    </div>   
    
	<div class="row nav">    
        <div class="col-md-4"></div>
        <div class="col-md-8 col-xs-12" style="margin: 0px;padding: 0px;">
            <div class="col-md-4 col-xs-4 well"><i class="fa fa-weixin fa-lg"></i> 16</div>
            <div class="col-md-4 col-xs-4 well"><i class="fa fa-heart-o fa-lg"></i> 14</div>
            <div class="col-md-4 col-xs-4 well"><i class="fa fa-thumbs-o-up fa-lg"></i> 26</div>
        </div>
    </div>
</div>
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
		width:80%;
		overflow:auto;}
		.container
		{
		width:100%;
		}
		.navbar-transparent{
		position:absolute;color:white;width:100%;
		}
		  *{
    font-family: 'Open Sans', sans-serif;
}

.well {
    margin-top:-20px;
    background-color:#007FBD;
    border:2px solid #0077B2;
    text-align:center;
    cursor:pointer;
    font-size: 25px;
    padding: 15px;
    border-radius: 0px !important;
}

.well:hover {
    margin-top:-20px;
    background-color:#0077B2;
    border:2px solid #0077B2;
    text-align:center;
    cursor:pointer;
    font-size: 25px;
    padding: 15px;
    border-radius: 0px !important;
    border-bottom : 2px solid rgba(97, 203, 255, 0.65);
}

body {
font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
font-size: 14px;
line-height: 1.42857143;
color: #fff;
background-color: #F1F1F1;
}



.bg_blur
{
    background-image:url('http://data2.whicdn.com/images/139218968/large.jpg');
    height: 300px;
    background-size: cover;
}

.follow_btn {
    text-decoration: none;
    position: absolute;
    left: 35%;
    top: 42.5%;
    width: 35%;
    height: 15%;
    background-color: #007FBE;
    padding: 10px;
    padding-top: 6px;
    color: #fff;
    text-align: center;
    font-size: 20px;
    border: 4px solid #007FBE;
}

.follow_btn:hover {
    text-decoration: none;
    position: absolute;
    left: 35%;
    top: 42.5%;
    width: 35%;
    height: 15%;
    background-color: #007FBE;
    padding: 10px;
    padding-top: 6px;
    color: #fff;
    text-align: center;
    font-size: 20px;
    border: 4px solid rgba(255, 255, 255, 0.8);
}

.header{
    color : #808080;
    margin-left:10%;
    margin-top:70px;
}

.picture{
    height:150px;
    width:150px;
    position:absolute;
    top: 75px;
    left:-75px;
}

.picture_mob{
    position: absolute;
    width: 35%;
    left: 35%;
    bottom: 70%;
}

.btn-style{
    color: #fff;
    background-color: #007FBE;
    border-color: #adadad;
    width: 33.3%;
}

.btn-style:hover {
    color: #333;
    background-color: #3D5DE0;
    border-color: #adadad;
    width: 33.3%;
   
}


@media (max-width: 767px) {
    .header{
        text-align : center;
    }
    
    
    
    .nav{
        margin-top : 30px;
    }
}
		
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
  
<script type="text/javascript">
(function() {
    $("nav .container-fluid:first").addClass("bg-purple");
});
</script>
</body>
</html>
