            <section class="cover overlay height-70 height-270-xs"style="top: 30px;">
                <img src="<?php echo asset_url(); ?>img/school/photodune-186709-residential-street-m.jpg" alt="cover">
                <div class="overlay overlay-full overlay-bg-black bg-transparent">
                    <div class="container">
                    </div>
                </div>
                <div class="overlay overlay-bg-black">
                    <div class="v-bottom">
                        <div class="container">
                            <p class="text-overlay">Post Your Requirement . <span class="hidden-sm hidden-xs"></span></p>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container"style="margin-top: 30px;">
                <div class="row">
                    
                    <div class="col-md-9">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="media media-clearfix-xs media-clearfix-sm">
                                        <h4> Post Your Requirement </h4>
                                        <hr/>
                <div class="media-body">
                    <form method="post"   id="post_requirement_form" action="javascript:" enctype="multipart/form-data">
                        <div id="profile_form_error"></div>
                <div class="form-group">
                    <label for="firstName" class="control-label">Name</label>
                        <input type="text" pattern="^([_A-z0-9]){3,}$" maxlength="25" 
                               class="form-control" id="firstName" name="firstName" placeholder="Enter first name" value ="">
                    
                    <span class="help-block with-errors"></span>
                </div>
                    <div class="form-group">
                        <label for="mobileNo" class="control-label">Mobile No</label>
                        
                            <input type="text" pattern="^([0-9]){3,}$" maxlength="10" 
                                   class="form-control" id="mobileNo" name="mobileNo" placeholder="Enter mobile number" required value="">

                        <span class="help-block with-errors"></span>
                    </div>
                    <div class="form-group">
                        <label for="requirement" class="control-label">Requirement</label>
                        	<textarea id="requirement" name="requirement" class="form-control" rows="5" required></textarea>

                        <span class="help-block with-errors"></span>
                    </div>
                    <div class="form-group">
                       
                        <input type="submit" id="req_save" class="btn btn-primary" value="Save" />
                        <input type="button" id="btncancel" class="btn btn-default" value="Cancel"
                               onclick="location.href = '<?php echo $base_url;?>';" />
                    </div>
                    </form>
                    </div>
                    
                </div>
            </div>
        </div>
      </div>
        <div class="col-md-3">
                     
        </div>

                </div>
            </div>
        </div>
