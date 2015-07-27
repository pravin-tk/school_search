        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center"><strong>Contacts </strong></h3>
                </div>
                <div class="panel-body">
                <div class="container">
    <div class="row">
        <div class="col-md-6">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header">Contact us</legend>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="fname" name="name" type="text" placeholder="First Name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="lname" name="name" type="text" placeholder="Last Name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
        </div>
        <div class="col-md-6">
        <div id="map_canvas" style="width:100%; height:100% "></div>
        <div class="panel panel-default">
                    <div class="text-center header">Our Office</div>
                    <div class="panel-body text-center">
                        <h4>Address</h4>
                        <div style="width: 30%;margin-left:30%;" class="text-center">
                        <?php 
                        echo "<br/>". $contactInfo['address'] . "<br/>";

                        if(isset($contactInfo['contacts'][0])){ echo $contactInfo['contacts'][0]['mobileNo']."<br/>".$contactInfo['contacts'][0]['email'];?><br />
                        <?php } ?>
                        </div>
                        <hr />
                        <div id="map1" class="map">
                        </div>
                    </div>
         </div>
         <div class="text-center center-block">
            <br />
                <a href="https://www.facebook.com/bootsnipp"><i id="social" class="fa fa-facebook-square fa-3x social-fb"></i></a>
	            <a href="https://twitter.com/bootsnipp"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
	            <a href="https://plus.google.com/+Bootsnipp-page"><i id="social" class="fa fa-google-plus-square fa-3x social-gp"></i></a>
	            <a href="mailto:bootsnipp@gmail.com"><i id="social" class="fa fa-envelope-square fa-3x social-em"></i></a>
		</div>
        </div>
    </div>
</div>



                </div>
            </div>
        </div>
