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
    </style>


<section class="cover overlay height-70 height-270-xs"style="top: 30px;">
                
              
            </section>
            <div class="container"style="margin-top: 30px;">
                <div class="row">
                    
                    <div class="col-md-9">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="media media-clearfix-xs media-clearfix-sm">
                                        <h4> List Your School </h4>
                                        <hr/>
                <div class="media-body">
                    <form method="post"   id="add_school_form" action="javascript:" enctype="multipart/form-data">
                        <div id="profile_form_error"></div>
                <div class="form-group">
                    <label for="schoolName" class="control-label">School Name</label>
                        <input type="text"  maxlength="100" 
                               class="form-control" id="schoolName" name="schoolName" placeholder="Enter school name" value ="">
                    
                    <span class="help-block with-errors"></span>
                </div>  
                <div class="form-group">
                    <label for="cbocity" class="control-label">School City</label>
                    <select id="cbocity" class="form-control" name="cbocity">
                        <option value="" >Select city</option>
                         <option value="1" >Mumbai</option>
                          <option value="2" >Pune</option>
                          <option value="3" >Nagpur</option>
                    </select>
                    
                    <span class="help-block with-errors"></span>
                </div>
                <div class="form-group">
                    <label for="firstName" class="control-label">Your Name</label>
                        <input type="text"  maxlength="50" 
                               class="form-control" id="firstName" name="firstName" placeholder="Enter your name" value ="">
                    
                    <span class="help-block with-errors"></span>
                </div>
                    <div class="form-group">
                        <label for="mobileNo" class="control-label">Mobile No</label>
                        
                            <input type="text" pattern="^([0-9]){3,}$" maxlength="10" 
                                   class="form-control" id="mobileNo" name="mobileNo" placeholder="Enter mobile number" required value="">

                        <span class="help-block with-errors"></span>
                    </div>
                    <div class="form-group">
                        <label for="requirement" class="control-label">Details</label>
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
  <script>
        $(document).ready(function(){
           $(".container-fluid").css("background", "black");
        });
    </script>
        