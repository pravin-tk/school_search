<?php ?>

<style>
    #map-canvas {
        width: 90%;
        height: 350px;
        margin-top:1%;
        margin-bottom:2%;
        position :absolute;
    }

    .has-error .form-control {
        border-color: #a94442;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
        background: #efefef; 
    }

    .has-error .input-group-addon {
        background-color: #f2dede;
        border-color: #a94442;
        color: #a94442;
    }
    
    .input-group .form-control {
    float: left;
    margin-bottom: 0;
    position: relative;
    width: 50%;
    z-index: 2;
}

    .has-error .form-control {
        border-color: #a94442;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
        background: #efefef; 
        width:50%;
    }

    .has-error .input-group-addon {
        background-color: #f2dede;
        border-color: #a94442;
        color: #a94442;
    }
    .form-group {
        width :65%;
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
    
   
</style>

<!-- uiView:  --><div data-ui-view="" class="ui-view-main ng-scope"><!-- uiView:  --><div ui-view="" class="ui-view-main ng-scope"><!-- Fixed navbar -->
        <?php //include 'header.php';  ?>
        <div id="content" >
            <section class="cover overlay height-70 height-270-xs">

            </section>

            <div class="container">
                <div class="row">
                   
                    <div class="col-md-9">

                        <!-- Map end -->
                        <div id="schresult">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="media media-clearfix-xs media-clearfix-sm">
                                        <h4> Profile </h4>
                                        
                                        <hr style = "width:90%"/>
                                        <div class="media-body" id="divview" style="display:block;">
                                            <form method="post"  role="form" id="user_profile_form" action="javascript:;" >
                                                
                                                <div class="form-group">
                                                    <label for="firstName" class="control-label">First Name</label>
                                                   
                                                        <input type="text" pattern="^([_A-z0-9]){3,}$" maxlength="25" 
                                                               class="form-control" id="firstName" name="firstName" 
                                                               required value ="<?php echo $profileInfo['firstName'] ?>" >
                                                    
                                                    <span class="help-block with-errors"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="lastName" class="control-label">Last Name</label>
                                                   
                                                        <input type="text" pattern="^([_A-z0-9]){3,}$" maxlength="25" 
                                                               class="form-control" id="lastName" name="lastName"  
                                                               disabled="disabled" value="<?php echo $profileInfo['lastName'] ?>" >
                                                    
                                                    <span class="help-block with-errors"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="emailId" class="control-label">Email Id</label>
                                                    
                                                        <input type="text"  maxlength="25" 
                                                               class="form-control" id="emailId"
                                                               name="emailId" disabled="disabled" value="<?php echo $profileInfo['email'] ?>">
                                                    
                                                    <span class="help-block with-errors"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="mobileNo" class="control-label">Mobile No</label>
                                                    
                                                        <input type="text" pattern="^([0-9]){3,}$" maxlength="10" 
                                                               class="form-control" id="mobileNo" name="mobileNo" 
                                                               disabled="disabled" value="<?php echo $profileInfo['mobile'] ?>">
                                                   
                                                    <span class="help-block with-errors"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="imageFile" class="control-label">Image</label>
                                                   
                                                        <input type="file"  
                                                               class="form-control" id="imageFile" placeholder="Upload image" name="imageFile" required>
                                                     <?php if($profileInfo['image']!="" && $profileInfo['image']!= null){ ?>
                                                         <img src="<?php echo $profileInfo['image'] ?>" />
                                                        <?php }?>
                                                    <span class="help-block with-errors"></span>
                                                </div>



                                                <div class="form-group">
                                                     <input type="button" id="editProfile" class="btn btn-primary" value="Edit Profile"/>
                                                    <input type="button" id="changePwd" class="btn btn-primary" value="Change Password"/>
                                                     <input type="button" id="btncancel" class="btn btn-default" value="Cancel"
                               onclick="location.href = '<?php echo $base_url;?>';" />
                                                   
                                                </div>
                                            </form>
                                        </div>

                                        <div class="media-body" id="divedit" style="display:none" >
                                            <form method="post"  role="form" id="edit_profile_form" action="javascript:;" enctype="multipart/form-data">
                                                <div id="profile_form_error"></div>
                                                <div class="form-group">
                                                    <label for="firstName" class="control-label">First Name</label>
                                                        <input type="text"  maxlength="25" 
                                                               class="form-control" id="firstName" name="firstName" placeholder="Enter first name"  value ="<?php echo $profileInfo['firstName'] ?>">
                                                   
                                                    <span class="help-block with-errors"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="lastName" class="control-label">Last Name</label>
                                                    <input type="text"  maxlength="25" 
                                                               class="form-control" id="lastName" name="lastName"  placeholder="Enter last name"  value="<?php echo $profileInfo['lastName'] ?>" >
                                                   
                                                    <span class="help-block with-errors"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="emailId" class="control-label">Email Id</label>
                                                        <input type="text"  maxlength="25" 
                                                               class="form-control" id="emailId" name="emailId" disabled ="disabled"
                                                               value="<?php echo $profileInfo['email'] ?>">
                                                  
                                                    <span class="help-block with-errors"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="mobileNo" class="control-label">Mobile No</label>
                                                   
                                                        <input type="text"  maxlength="10" 
                                                               class="form-control" id="mobileNo" name="mobileNo" placeholder="Enter mobile number"  value="<?php echo $profileInfo['mobile'] ?>">
                                                  
                                                    <span class="help-block with-errors"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="imageFile" class="control-label">Image</label>
                                                    
                                                        <input type="file"  
                                                               class="form-control" id="imageFile" placeholder="Upload image" name="imageFile" required>
                                                        <?php if($profileInfo['image']!="" && $profileInfo['image']!= null){ ?>
                                                         <img src="<?php echo $profileInfo['image'] ?>" />
                                                        <?php }?>
                                                   
                                                    <span class="help-block with-errors"></span>
                                                </div>



                                                <div class="form-group">
                                                
                                                    <input type="submit" id="profile_update" class="btn btn-primary" value="Update" />
                                                  <!--<input type="button" id="changePwd" class="btn btn-primary" value="Change Password"/>-->
                                         <input type="button" id="btncancel" class="btn btn-default" value="Cancel"/> 
                                                </div>
                                            </form>
                                        </div>

                    <div class="media-body" id="divchangepwd" style="display:none;">
                        <form method="post"  role="form" id="password_change_form" action="javascript:;" >
                            <div id ="pwd_form_error"></div>
                            <input type="hidden" name='emailid' id='emailid' value ='<?php echo $profileInfo['email'] ?>' />
                            <input type="hidden" name='newpwd' id='newpwd' value ='' />
                            <div class="form-group" id="dnpwd">
                                <label for="newPassword" class="control-label">New Password</label>

                                    <input type="password"  maxlength="8" 
                                           class="form-control" id="newPassword" name="newPassword" >

                                <span class="help-block with-errors"></span>
                            </div>

                            <div class="form-group" id="dncpwd">
                                <label for="confirmPassword" class="control-label" style = 'margin-left:-400px'>Confirm Password</label>
                                 <input type="password"  maxlength="8" 
                                   class="form-control" id="confirmPassword" name="confirmPassword" >

                                <span class="help-block with-errors"></span>
                            </div>

                            <div class="form-group">

                                <input type="submit" id="btnchangePwd" class="btn btn-primary" value="Change Password" />
 <input type="button" id="btncancel" class="btn btn-default" value="Cancel" />
                            </div>
                        </form>
                    </div>

                                        <div class="pull-right">

                                        </div>
                                        <h4 class="media-heading margin-v-0-10">

                                        </h4>


                                    </div>
                                </div>
                            </div>
                        </div>   </div>

                </div>
            </div>
        </div>
    </div>
    <style>
/*         .form-control {
        width: 65%;
    }*/
        
    </style>
<script>
        $(document).ready(function(){
           $(".container-fluid").css("background", "black");
        });
        
         $("#edit_profile_form").on("click", "#btncancel", function () {
             
            $("#divedit").hide();
            $("#divview").show();
            $("#divchangepwd").hide();
            $('.form-group').removeClass('has-error has-feedback has-success');
            $("form#edit_profile_form").bootstrapValidator("destroy");
            $("form#edit_profile_form")[0].reset();
            $( ".help-block" ).html( "" );
        });
        
         $("#password_change_form").on("click", "#btncancel", function () {
             
            $("#divedit").hide();
            $("#divview").show();
            $("#divchangepwd").hide();
            $('.form-group').removeClass('has-error has-feedback has-success');
            $("form#edit_profile_form").bootstrapValidator("destroy");
            $("form#edit_profile_form")[0].reset();
            $( ".help-block" ).html( "" );
        });
    </script>