
<!-- uiView:  --><div data-ui-view="" class="ui-view-main ng-scope"><!-- uiView:  -->
	<div ui-view="" class="ui-view-main ng-scope"><!-- Fixed navbar -->
        <?php //include 'header.php';  ?>
        <section class="cover overlay height-70 height-270-xs">

            </section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
						 <section id="contact-info">
        <div class="center">                
            <h2>How to Reach Us?</h2>
            <p class="lead"></p>
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap">
                        </div>
                    </div>

                    <div class="col-sm-7 map-content">
                        <ul class="row">
                            <li class="col-sm-6">
                                <address>
                                    <a><h3>Head Office</h3></a>
                                    <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@housing.com</p>
                                </address>

                                
                            </li>


                            <li class="col-sm-6">
                               <address>
                                    <a><h3>Zonal Office</h3></a>
                                    <p>Celebrum It park,b3 <br>
                                    kalyani nagar, pune </p>                                
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@edbuddy.com</p>
                                </address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Drop Your Message</h2>
                <p class="lead"></p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="http://shapebootstrap.net/demo/html/corlate/sendemail.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" class="form-control">
                        </div>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
                    
				   </div>

                </div>
            </div>
    </div>
<script>
        $(document).ready(function(){
           $(".container-fluid").css("background", "black");
        });
        
      
    </script>