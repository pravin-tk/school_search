<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>School Search</title>

    <!-- Bootstrap Core CSS -->
   <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>css/bootstrap.min.css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>font-awesome/css/font-awesome.min.css">

    <!-- Plugin CSS -->
   <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>css/animate.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="" type="text/css">
   <link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>css/creative.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <?php// include 'search/header.php';?>
        <?php echo $template['partials']['header'];
    </nav>

    <header class="mainpageheader">
        <div class="header-content">
            <div class="header-content-inner">
                <h2>School Search</h2>
                <hr/>
				<!--  <form name="searchform" id="searchForm" action="welcome/search" onsubmit="return validatesearch();">-->
				<?php	 echo form_open('welcome/search'); ?>
				<div class="col-lg-2">
				  <select class="selectpicker form-control "style="float: left;">
				    <optgroup label="Day School" >
				      <option>Day School</option>
				    </optgroup>
				    <optgroup label="Nursery">
				      <option>Nursery</option>
				    </optgroup>
				  </select>
				 </div>
                    <input style="float: left;" type="text" placeholder="Search by School, Area, Location" name="searchtxt" class="form-control" id="searchtxt" >
                    <br/>
                    <input type="submit" value="Find Out " class="btn btn-primary btn-xl page-scroll"/>
                </form>
            </div>
           </div> 
    </header>
    <aside class="bg-purple" class="asidecategory">
            <div class="row">
                <div class="col-lg-2 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-diamond wow bounceIn "></i>
                        <h5>Pre Schools</h5>
<!--                         <p class="text-muted">Our templates are updated regularly so they don't break.</p>
 -->                    </div>
                </div>
                <div class="col-lg-2 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane wow bounceIn " data-wow-delay=".1s"></i>
                        <h5>Primary Schools</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o wow bounceIn " data-wow-delay=".2s"></i>
                        <h5>Secondary Schools</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart wow bounceIn " data-wow-delay=".3s"></i>
                        <h5>High Schools</h5>
                    </div>
                </div>
                 <div class="col-lg-2 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o wow bounceIn " data-wow-delay=".2s"></i>
                        <h5>Secondary High</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart wow bounceIn " data-wow-delay=".3s"></i>
                        <h5>Colleges</h5>
                    </div>
                </div>
            </div>
	</aside>
    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Who We Are!</h2>
                    <hr class="light">
                    <p class="text-faded">edbuddy is a non-profit organization with profiles of more than 200,000 preK-12 schools – public, public charter and private – and over one million reviews from parents, teachers and students sharing information about the schools they know best. We also have thousands of articles, worksheets, and videos to help parents encourage and support learning at home. Our new personalized education guide, GreatKids, helps parents see how their children are doing, support their learning, and find great education resources.!</p>
                    <a href="#" class="btn btn-default btn-xl">Get Started!</a>
                </div>
            </div>
        </div>
    </section>
<br/>
    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="<?php echo asset_url();?>img/portfolio/1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="<?php echo asset_url();?>img/portfolio/2.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="<?php echo asset_url();?>img/portfolio/3.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="<?php echo asset_url();?>img/portfolio/4.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="<?php echo asset_url();?>img/portfolio/5.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="<?php echo asset_url();?>img/portfolio/6.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <?php //include 'search/footer.php';?>
        <?php echo $template['partials']['footer'];
    </section>

    <!-- jQuery -->
    <script src="<?php echo asset_url();?>js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo asset_url();?>js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo asset_url();?>js/jquery.easing.min.js"></script>
    <script src="<?php echo asset_url();?>js/jquery.fittext.js"></script>
    <script src="<?php echo asset_url();?>js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo asset_url();?>js/creative.js"></script>

</body>

</html>
