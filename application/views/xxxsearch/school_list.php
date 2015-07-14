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

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <?php include 'header.php';?>
        <!-- /.container-fluid -->
        <div class="container-fluid" >
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
                     <li class="dropdown">
				  		<select id="boardtypeselectbox" multiple="multiple">
						    <option value="cbse">CBSE</option>
						    <option value="state">STATE</option>
						    <option value="igce">IGCE</option>
						    <option value="icse">ICSE</option>
						</select>
        			</li>
                    <li>
			            <select id="mediumselectbox" multiple="multiple">
						    <option value="english">English</option>
						    <option value="hindi">Hindi</option>
						    <option value="marathi">Marathi</option>
						    <option value="others">Others</option>
						</select>
                    </li>
                    <li>
			            <select id="schooltypeselectbox" multiple="multiple">
						    <option value="boys">Boys</option>
						    <option value="girls">Girls</option>
						    <option value="co-education">Co-Education</option>
						</select>
					 </li>
					  
                 </ul> 
            </div> 
            
            <div id="cbp-vm1" >
			 <div class="cbp-vm-options">
		      <a href="#" class="cbp-vm-icon cbp-vm-grid " data-view="cbp-vm-view-grid">Grid View</a>
	        	<a href="#" class="cbp-vm-icon cbp-vm-list cbp-vm-selected" data-view="cbp-vm-view-list">List View</a>
	        	<span><a id="cd-cart-trigger" class="" href="#0"><i class="fa fa-2x fa-heart" data-wow-delay=".2s" ></i></a></span>
	        	
			 </div>
			</div>
            
            <!-- /.navbar-collapse -->
        </div> 
        
     </nav>
        <div class="row">
	        <div style="margin:10% 5%;">
				<div class="col-md-6 well well-sm">
	            		You searched for Schools In Hadpsar
	    		</div>
			</div>
    	</div>

	<div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-list">
	
	<ul class="col-lg-10">
	<?php 		for($i=0 ; $i<=4 ; $i++){
	?>
		<li>
			<a class="cbp-vm-image" href="#"><img src="<?php echo asset_url();?>img/school/architectural_main_school_building_facade.jpg" class="img-responsive img-thumbnail" alt="Responsive image" /></a>
			<div class="cbp-vm-title">
				<a href="http://localhost/SchoolSearchFrontEnd/index.php/welcome/schoolDetailsTest">Sadhana Elementary School</a>
				<h6 >Trimurti vihar , Hadpsar , Malwadi</h6>
				<div style="width:50%;" class="floatleft">
				 <span class="bold">Board</span><br/><span>CBSE</span>
				</div>
				<div style="width:50%;" class="floatleft">
				 <span class="bold">Annual Fee </span><br/><span>10 Thousand</span>
				</div>
				<div style="width:50%;" class="floatleft">
				 <span class="bold">Medium </span><br/><span>English</span>
				</div>
				<div style="width:50%;" class="floatleft">
				 <span class="bold">School Category </span><br/><span>none</span>
				</div>
			</div>
			<div class="cbp-vm-details" >
				 <span class="badge text-center">3</span>
				 <div>Our Rating</div>
			</div>
			<div class="cbp-vm-favourite">
 					<ul style="border:none;">
						<li><i class="fa fa-2x fa-heart-o wow bounceIn marginleft" data-wow-delay=".2s"></i><br/></li>
						<li><i class="fa fa-2x fa-share-alt wow bounceIn marginleft" data-wow-delay=".2s"></i><br/></li>
						<li><a href="#myModal" data-toggle="modal"><i class="fa fa-2x fa-phone wow bounceIn marginleft" data-wow-delay=".2s"></i></a></li>
					</ul>	
 			</div>	
		</li>

		<li >
			<a class="cbp-vm-image" href="#""><img src="<?php echo asset_url();?>img/vector-school-house-28931692.jpg" class="img-responsive img-thumbnail" alt="Responsive image" /></a>
			<div class="cbp-vm-title">
				<a href="http://localhost/SchoolSearchFrontEnd/index.php/welcome/schoolDetails">Dastur High School</a>
				<h6 >Trimurti vihar , Hadpsar , Malwadi</h6>
				<div style="width:50%;" class="floatleft">
				 <span class="bold">Board</span><br/><span>CBSE</span>
				</div>
				<div style="width:50%;" class="floatleft">
				 <span class="bold">Annual Fee </span><br/><span>10 Thousand</span>
				</div>
				<div style="width:50%;" class="floatleft">
				 <span class="bold">Medium </span><br/><span>English</span>
				</div>
				<div style="width:50%;" class="floatleft">
				 <span class="bold">School Category </span><br/><span>none</span>
				</div>
				
			</div>
			<div class="cbp-vm-details" style="">
				 <span class="badge text-center">3</span>
				 <div>Our Rating</div>
			</div>
			<div class="cbp-vm-favourite">
 						<ul style="border:none;">
						<li><i class="fa fa-2x  wow bounceIn marginleft fa-heart" data-wow-delay=".2s"></i><br/></li>
						<li><i class="fa fa-2x fa-share-alt wow bounceIn marginleft" data-wow-delay=".2s"></i><br/></li>
						<li><a href="#myModal" data-toggle="modal"><i class="fa fa-2x fa-phone wow bounceIn marginleft" data-wow-delay=".2s"></i></a></li>
						</ul>	
 			</div>	
		</li>
	<?php }?>	
	</ul>
	    <div id="shortlisted" class="col-lg-2"style="margin-left: 10px;">
	    <div class="well well-sm">
	    <a href="#myModal" data-toggle="modal"><i class="fa fa-1x fa-heart wow bounceIn" data-wow-delay=".2s"></i>Shortlisted (<span id="shotlistcount">3</span>)</a>
	    </div>
	    <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center"><strong>Near By  Schools </strong></h4>
                </div>
                <div class="panel-body">
					<a href="">R .R Shinde junior College</a>
					<a href="">Bhekarai mata Vidyalay</a>
					<a href="">Sonai English Medium School</a>
					<a href="">Sprindel Convent School</a>
					<a href="">High Schools in hadpsar</a>
					</div>
            </div>
	    </div>
	
    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Contact </h4>
                </div>
                <div class="modal-body">
                     <h4>Address</h4>
                        <div>
                        2217 Malwadi Hadpsar<br />
                        Pune MH<br />
                        #020 - 26981288<br />
                        sadhanaschool@gmail.com<br />
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
</div>
    

    <div id="cd-cart">
		<h2>Favourites</h2>
		<ul class="cd-cart-items">
			<li>
				<span class="cd-qty"></span> Sadhna Vidyalay
				<div class="cd-price">Hadpsar pune</div>
				<a href="#0" class="cd-item-remove cd-img-replace">Remove</a>
			</li>

			<li>
				<span class="cd-qty"></span> Dastur High School
				<div class="cd-price">Camp , Pune</div>
				<a href="#0" class="cd-item-remove cd-img-replace">Remove</a>
			</li>

			<li>
				<span class="cd-qty"></span> Singhgad English school
				<div class="cd-price">Sinhgad </div>
				<a href="#0" class="cd-item-remove cd-img-replace">Remove</a>
			</li>
		</ul> <!-- cd-cart-items -->

		
		<a href="#0" class="checkout-btn">Close</a>
		
		<p class="cd-go-to-cart"><a href="#0"></a></p>
	</div> <!-- cd-cart -->
    <div id="contact">
        <?php include 'footer.php';?>
    </div>
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
    <script src="<?php echo asset_url();?>js/classie.js"></script>
    <script src="<?php echo asset_url();?>js/favorite.js"></script>
        <script src="<?php echo asset_url();?>js/bootstrap-multiselect.js"></script>
    
    <script type="text/javascript">


    (function() {
        $("nav .container-fluid:first").addClass("bg-purple");
    	$("#cbp-vm li .fa-heart-o").click(function(ev){
        	$( this ).removeClass( "fa-heart-o" ).addClass( "fa-heart" );
			ev.preventDefault();
        	
        	})
        $("#cbp-vm li .fa-heart").click(function(ev){
        	$( this ).removeClass( "fa-heart" ).addClass( "fa-heart-o" );
			ev.preventDefault();
        	
        	})
    	var container = document.getElementById( 'cbp-vm1' ),
    		optionSwitch = Array.prototype.slice.call( container.querySelectorAll( 'div.cbp-vm-options > a' ) );

    	function init() {
    		optionSwitch.forEach( function( el, i ) {
    			el.addEventListener( 'click', function( ev ) {
    				ev.preventDefault();
    				_switch( this );
    			}, false );
    		} );
    	}

    	function _switch( opt ) {
    		// remove other view classes and any any selected option
    			    	var container1 = document.getElementById( 'cbp-vm' );
    		optionSwitch.forEach(function(el) {    			
    			classie.remove( container, el.getAttribute( 'data-view' ) );
    			classie.remove( el, 'cbp-vm-selected' );
    			classie.remove( container1, el.getAttribute( 'data-view' ) );
    			    		});
    		// add the view class for this option
    		//classie.add( container, opt.getAttribute( 'data-view' ) );
    		classie.add( container1, opt.getAttribute( 'data-view' ) );
    		
    		// this option stays selected
    		classie.add( opt, 'cbp-vm-selected' );
    	}

    	init();

    })();
    
    </script>

</body>

</html>
