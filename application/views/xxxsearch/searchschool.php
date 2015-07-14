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
        <div class="container-fluid bg-purple">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">School Search</a>
            </div>
 			<?php	 echo form_open('welcome/search'); ?>
            <div class="col-xs-6 " style="margin: 7.5px;">
            
			    <input type="text" placeholder="Search by School, Area, Location" name="searchtxt" class="form-control" id="searchtxt"/>
			    
			  </div>
            </form>
             <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="http://localhost/SchoolSearchFrontEnd/index.php/welcome">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top" style="color: black;">Refine Result</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse col-xs-6 " style="margin: 0 50px ;" id="bs-example-navbar-collapse-2" >
                <ul class="nav navbar-nav ">
                     <li class="dropdown pull-right">
			            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Type <b class="caret"></b></a>
			            <ul class="dropdown-menu">
			                <li><a href="#">Primary School</a></li>
			              	<li><a href="#">High School</a></li>
			                <li><a href="#">Secondary School</a></li>
			                <li class="divider">Senior Secondary School</li>
			            </ul>
        			</li>
                    <li>
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Type <b class="caret"></b></a>
			            <ul class="dropdown-menu">
			                <li><a href="#">Primary School</a></li>
			              	<li><a href="#">High School</a></li>
			                <li><a href="#">Secondary School</a></li>
			                <li class="divider">Senior Secondary School</li>
			            </ul>
                    </li>
                    <li>
					<a href="#" data-toggle="dropdown" class="dropdown-toggle">Board <b class="caret"></b></a>
			            <ul class="dropdown-menu">
			                <li><a href="#">Primary School</a></li>
			              	<li><a href="#">High School</a></li>
			                <li><a href="#">Secondary School</a></li>
			                <li class="divider">Senior Secondary School</li>
			            </ul>                    </li>
                    <li>
<a href="#" data-toggle="dropdown" class="dropdown-toggle">Location <b class="caret"></b></a>
			            <ul class="dropdown-menu">
			                <li><a href="#">Primary School</a></li>
			              	<li><a href="#">High School</a></li>
			                <li><a href="#">Secondary School</a></li>
			                <li class="divider">Senior Secondary School</li>
			            </ul>                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>

	<section >
	 <div class="container">
	 
        <p>Primary Schools in Hadpsar  </p>
	 
    <div class="row">
    <?php 
		for($i=0 ; $i<=10 ; $i++){
	   ?>
   
        <div class="col-xs-9">
            <h3>Sadhna School </h3>
                    <div class="col-sm-3"><img src="<?php echo asset_url();?>img/vector-school-house-28931692.jpg" class="img-responsive img-thumbnail" alt="Responsive image" /></div>
            <p>The collection of Frequently Asked Questions (FAQ) provides brief answers to many common questions related to web design and development.</p>
            <p><a href="http://localhost/SchoolSearchFrontEnd/index.php/welcome/schoolDetails" target="_blank" class="btn btn-success">Details &raquo;</a></p>
        </div>
        <?php } ?>
    </div>
</div>
	 
	</section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Download Our App Free!</h2>
                <a href="#" class="btn btn-default btn-xl wow tada">Download Now!</a>
            </div>
        </div>
    </aside>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:your-email@your-domain.com">feedback@edbuddy.com</a></p>
                </div>
            </div>
        </div>
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
