<style>
    .contact-wrap{
        width:300px;
    }
    
    .alert-success {
        background-color: #dff0d8;
        border-color: #d6e9c6;
        color: #3c763d;
    }
    .alert-danger {
        background-color: #f2dede;
        border-color: #ebccd1;
        color: #a94442;
    }
</style>
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
                                <div class="media media-clearfix-xs media-clearfix-sm">
<!--                                    <h4> Post requirement </h4>
                                    <hr/>-->
                                    <div class="media-body">
                                        <form method="post"   id="post_requirement_form"  enctype="multipart/form-data">
                                            <div id="profile_form_error"></div>
                                            <div class="form-group">
                                                <label for="firstName" class="control-label">Your Name</label>
                                                <input type="text"  maxlength="100" 
                                                       class="form-control" id="userName" name="userName" placeholder="Your name" value ="">

                                                <span class="help-block with-errors"></span>
                                            </div> 

                                            <div class="form-group">
                                                <label for="mobileNo" class="control-label">Your Mobile no.</label>

                                                <input type="text"  maxlength="10" 
                                                       class="form-control" id="mobileNo" name="mobileNo" placeholder="Your mobile number" required value="">

                                                <span class="help-block with-errors"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="requirement" class="control-label">Requirement</label>
                                                <textarea id="requirement" name="requirement" class="form-control" rows="5" placeholder="Your requirement description"></textarea>

                                                <span class="help-block with-errors"></span>
                                            </div>
                                            <div class="form-group">

                                                <input type="submit" id="req_save" class="btn btn-primary" value="Save" />
                                                <input type="button" id="btncancel" class="btn btn-default" value="Cancel"
                                                       onclick="location.href = '<?php echo $base_url; ?>';" />
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div><!--/.row-->
                        </div><!--/.container-->
                    </section><!--/#contact-page-->

                </div>

            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $(".container-fluid").css("background", "black");
        });


    </script>