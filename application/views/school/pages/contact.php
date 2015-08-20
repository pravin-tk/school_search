

<div class="col-md-12">
  	<div class="panel panel-default">
      	<div class="panel-heading">
          	<h3 class="text-center"><strong>Contacts </strong></h3>
      	</div>
        <div class="panel-body">
        	<div class="container">
			    <div class="row">
			        <div class="col-md-6">
                                    <?php if(isset($contactInfo)){ ?>
                                <div class="panel panel-default">
                                    <div class="panel-body text-left">
                                        <div class="panel-heading">
                                                <h3 class="default-contact infra-heading" style="border-bottom: 1px solid #e2e9e6;">
                                                        <strong><?php echo $contactInfo['name'];?></strong>
                                                        <span class="locality-box-label"> <?php echo $contactInfo['address'];?></span>
                                                </h3>
                                        </div>
                                     	<a id="contact_details">Click Here For Contact Details</a>
                                        <div class="text-left panel-body contact_details">
                                        <?php for ($i = 0; $i < count($contactInfo['contacts']); $i++){?>
                                        <div class="col-md-6">
                                                <div><?php echo $contactInfo['contacts'][$i]['name']?></div>
                                                <div><?php echo $contactInfo['contacts'][$i]['mobileNo']?></div>
                                                <div><?php echo $contactInfo['contacts'][$i]['email']?></div>
                                        </div>
                                        <?php }?>
                                        </div>
                            </div>
                                    </div><?php }?>
			        	<div class="panel panel-default" id="divcontact">
                                        
                                         
		                    	<div class="panel-heading" style="border-bottom: 1px solid #e2e9e6;">
		                        	<h3 class="text-center infra-heading"><strong>Contact Us</strong></h3>
		                        </div>
                                        <div id="derr"></div>
                                        <form class="form-horizontal" method="post" id="contactfrm">
		                        <div class="panel-body">
                                            
			                        <div class="form-group">
			                            <div class="col-md-10 col-md-offset-1">
                                                        <input id="userName" name="userName" type="text" placeholder="your names" maxlength="30" class="form-control">
			                            </div>
			                        </div>
			
			                        <div class="form-group">
			                            <div class="col-md-10 col-md-offset-1">
			                                <input id="emailId" name="emailId" type="text" placeholder="your email" maxlength="25" class="form-control">
			                            </div>
			                        </div>
			
			                        <div class="form-group">
			                            <div class="col-md-10 col-md-offset-1">
			                                <input id="mobileNo" name="mobileNo" type="text" placeholder="your mobile" maxlength="10" class="form-control">
			                            </div>
			                        </div>
			
			                        <div class="form-group">
			                            <div class="col-md-12 text-center">
                                                        <input type="submit" class="btn btn-primary btn-sm" id= "btnpost" value ="Submit" >
			                            </div>
			                        </div> 
			                  	</div></form>
		                  
		               
		                </div>
			        </div>
			        <div class="col-md-6">
			        	<input type="hidden" id="latitude" value="<?php if(isset($contactInfo))echo $contactInfo['latitude'];?>"/>
			        	<input type="hidden" id="longitude" value="<?php if(isset($contactInfo)) echo $contactInfo['longitude'];?>"/>
			        	<div class="row" style="padding-bottom: 20px;">
			        		<div class="panel panel-default" style="padding-bottom: 20px;">
				        		<div class="panel-heading" style="border-bottom: 1px solid #e2e9e6;">
				        			<h3 class="text-center infra-heading"><strong>Location On Map</strong></h3>
			        			</div>
			        			<div class="panel-body">
			        			<div id="map_canvas" style="min-height:311px;margin-bottom:5px;"></div>
			        			<div class="text-center center-block">
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
       	</div>
   	</div>
</div>
