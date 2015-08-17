<style>
    .form-group {
        width :55%;
    }
    .form-control {
        width :455px;
    }
    .has-success .form-control {
        background: none;
    }
    
    .top-spacing{
        padding-top:5px;
    }
    .has-feedback {
    position: none;
    }
    
    .alert-danger {
        color: #a94442;
        background-color: #f2dede;
        border-color: #BD362F;
        width :70%;
    }
    </style>


<section class="cover overlay height-70 height-270-xs"style="top: 30px;">
                
              
            </section>
            <div class="container"style="margin-top: 30px;">
                <div class="row">
                   
                    <div class="col-md-9">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                     <div class="alert alert-danger" role="alert">
                                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                    <span class="sr-only">Error:</span>
                                    Sorry ! We do not have schools listed in this area. Please post your requirement.
                                    </div>
                                    <div class="media media-clearfix-xs media-clearfix-sm">
                                    <h4> Post requirement </h4>
                                    <hr/>
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
  <script>
        $(document).ready(function(){
           $(".container-fluid").css("background", "black");
        });
    </script>
        