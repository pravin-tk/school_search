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
    }

    .has-error .input-group-addon {
        background-color: #f2dede;
        border-color: #a94442;
        color: #a94442;
    }
    .form-group {
        width :65%;
    }
    .has-success .form-control {
        background: none;
    }
    
   
</style>

<!-- uiView:  --><div data-ui-view="" class="ui-view-main ng-scope"><!-- uiView:  --><div ui-view="" class="ui-view-main ng-scope"><!-- Fixed navbar -->
        <?php //include 'header.php';  ?>
        <div id="content" >
            <section class="cover overlay height-200 height-270-xs">
                <img src="<?php echo asset_url(); ?>img/school/photodune-186709-residential-street-m.jpg" alt="cover">
                <div class="overlay overlay-full overlay-bg-black bg-transparent">
                    <div class="container">
                        <h1 class="text-h1 text-overlay">School</h1>
                    </div>
                </div>
                <div class="overlay overlay-bg-black">
                    <div class="v-bottom">
                        <div class="container">
                            <p class="text-overlay">You searched for school near hadpsar. <span class="hidden-sm hidden-xs"></span></p>
                        </div>
                    </div>
                </div>
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
                                        
                                        <a href="#" style="float:right;" id="editProfile"><i class="glyphicon glyphicon-edit" ></i>Edit Profile</a>
                                        &nbsp;&nbsp; <a href="#" style="float:right;" id="changePwd"><i class="glyphicon glyphicon-edit" ></i>Change Password</a>
                                        <!--<div class="media-left"> </div>-->
                                        <hr style = "width:90%"/>
                                        <div class="media-body" id="divview" style="display:block;">
                                            <form method="post"  role="form" id="user_profile_form" action="javascript:;" >
                                                
                                                <div class="form-group">
                                                    <label for="firstName" class="control-label">First Name</label>
                                                   
                                                        <input type="text" pattern="^([_A-z0-9]){3,}$" maxlength="25" 
                                                               class="form-control" id="firstName" name="firstName" 
                                                               required value ="<?php echo $profileInfo['firstName'] ?>" disabled="disabled">
                                                    
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
                                                    
                                                    <span class="help-block with-errors"></span>
                                                </div>



                                                <div class="form-group">
                                                    <!-- <button type="submit" class="btn btn-primary"> Submit</button>-->
                                                    
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
<!--                                                    <input type="button" id="btnCancelProfile" class="btn btn-default" value="Cancel"/>-->
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

                                    <input type="text"  maxlength="8" 
                                           class="form-control" id="newPassword" name="newPassword" >

                                <span class="help-block with-errors"></span>
                            </div>

                            <div class="form-group" id="dncpwd">
                                <label for="confirmPassword" class="control-label" style = 'margin-left:-400px'>Confirm Password</label>
                                 <input type="text"  maxlength="8" 
                                   class="form-control" id="confirmPassword" name="confirmPassword" >

                                <span class="help-block with-errors"></span>
                            </div>

                            <div class="form-group">

                                <input type="submit" id="btnchangePwd" class="btn btn-primary" value="Change Password" />
<!--                                <input type="button" id="btnCancelPwd" class="btn btn-default" value="Cancel"/>-->
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
         .form-control {
        width: 65%;
    }
        
    </style>
   <script src="<?php echo asset_url(); ?>js/jquery.js"></script>
    <script src="<?php echo asset_url(); ?>js/jquery.form.js"></script>
      <script src="<?php echo asset_url(); ?>js/bootstrapValidator.min.js"></script>
    <script>
        // A $( document ).ready() block.
        $( document ).ready(function() {
                   
        });
        
        
      //  $("#edit_profile_form").on("click", "#profile_update", function () {
        function updateProfile(){    
            var formData = new FormData();
            formData.append('file', $('#edit_profile_form input[type=file]')[0].files[0]);
            formData.append('firstName', $("#firstName").val());
            formData.append('lastName', $("#lastName").val());
            formData.append('mobileNo', $("#mobileNo").val());
            $.ajax({
                type:'POST',
                url: base_url+"index.php/auth/profileUpdate",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                datatype: 'JSON',
                success:function(data) {
                    data = JSON.parse(data);
                    $.each(data, function(key, value) {
                                if(key == "id")
                                   id = value;
                                else if(key == "message")
                                   messg = value;
                                else if(key == "status")
                                   status = value;
                                else if(key == "errors")
                                   errors = value;
                             });
                            
                           // });
                            if(status == 0){
                               $("#profile_form_error").html(messg);
                               $("#profile_form_error").addClass('help-block-error');
                            }else{
                               $("#profile_form_error").html(messg);
                               $("#profile_form_error").addClass('help-block-success');
                            }
                            $('body,html').animate({
                                 scrollTop: 0
                            }, 200);
                },
                error: function(data) {
                      console.log(data);
                }
            });
       // });
        }                                      

        $("#edit_profile_form").on("click", "#btnCancelProfile", function () {
            $("#divedit").hide();
            $("#divview").show();
            $("#divchangepwd").hide();
            $('.form-group').removeClass('has-error has-feedback has-success');
            $("form#edit_profile_form").bootstrapValidator("destroy");
            $("form#edit_profile_form")[0].reset();
            $( ".help-block" ).html( "" );
        });

        $("#password_change_form").on("click", "#btnCancelPwd", function () {
            $("#divedit").hide();
            $("#divview").show();
            $("#divchangepwd").hide();
        });

        $( "#editProfile" ).click(function() {
            $("#divedit").show();
            $("#divview").hide();
            $("#divchangepwd").hide();
        });

        $( "#changePwd" ).click(function() {
            $("#divedit").hide();
            $("#divview").hide();
            $("#divchangepwd").show();
        });
        
      //  $("#password_change_form").on("click", "#btnchangePwd", function () {
      function changePassword() {
           //ajax code to update password
                $.post(base_url+"index.php/auth/updatePassword",
                        {
                        email: $("#password_change_form input[name=emailid]").val(),
                        password: $("#password_change_form input[name=newPassword]").val()
                        },function(response){
                          $.each(response, function(k, v) {
                            $.each(v, function(key, value) {
                                // console.log(key +"---"+value);
                                if(key == "id")
                                   id = value;
                                else if(key == "message")
                                   messg = value;
                                else if(key == "status")
                                   status = value;
                               else if(key == "errors")
                                   errors = value;
                             });
                             
                            });
                            $('.form-group').removeClass('has-error has-feedback has-success');
                            if(status == 0){
                               $("#pwd_form_error").html(errors);
                               $("#pwd_form_error").addClass('help-block-error');
                            }else{
                               $("#pwd_form_error").html(messg);
                               $("#pwd_form_error").addClass('help-block-success');
                            }
                            
                             $('body,html').animate({
                                    scrollTop: 0
                             }, 200);
                        },'json'
                        );
                
      }


//~~~~~~~~

    $('#password_change_form').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
            },
            submitHandler: function(validator, form, submitButton) {
                   changePassword();
                 
             },
            fields: {
                    newPassword: {
                    message: 'password is not valid',
                        validators: {
                                notEmpty: {
                                        message: 'first name is required and cannot be empty'
                                },
                                stringLength: {
                                        min: 8,
                                        max: 8,
                                        message: 'password length should be 8 characters'
                                },
                               identical: {
                                        field: 'confirmPassword',
                                        message: 'The password and its confirm are not the same'
                                },
                        },
//                       
                    },
                    confirmPassword: {
                    message: 'confirm password is not valid',
                        validators: {
                                notEmpty: {
                                        message: 'confirm password is required and cannot be empty'
                                },
                                stringLength: {
                                        min: 8,
                                        max: 8,
                                        message: 'password length should be 8 characters'
                                },
                                identical: {
                                        field: 'newPassword',
                                        message: 'The password and its confirm are not the same'
                                },
                        },
                        same: {
                                    field: 'password',
                                    message: 'Passwords do not match'
                                    }
                        }   
                    },
               
        });
     
//~~~~~~~
        $('#edit_profile_form').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
            },
            submitHandler: function(validator, form, submitButton) {
                   updateProfile();
                 
             },
            fields: {
                    firstName: {
                    message: 'First name is not valid',
                        validators: {
                                notEmpty: {
                                        message: 'first name is required and cannot be empty'
                                },
                                stringLength: {
                                        min: 6,
                                        max: 30,
                                        message: 'first name must be more than 6 and less than 30 characters long'
                                },
                                regexp: {
                                        regexp: /^[a-zA-Z\']+$/,
                                        message: 'first name can only consist of alphabets,apostrophe, space '
                        },
//                        different: {
//                                    field: 'password',
//                                    message: 'The username and password can\'t be the same as each other'
//                                    }
                        }   
                    },
                    lastName: {
                    message: 'last name is not valid',
                        validators: {
                                notEmpty: {
                                        message: 'last name is required and cannot be empty'
                                },
                                stringLength: {
                                        min: 6,
                                        max: 30,
                                        message: 'last name must be more than 6 and less than 30 characters long'
                                },
                                regexp: {
                                        regexp: /^[a-zA-Z\']+$/,
                                        message: 'last name can only consist of alphabets,apostrophe, space '
                        },
//                        different: {
//                                    field: 'password',
//                                    message: 'The username and password can\'t be the same as each other'
//                                    }
                        }   
                    },
                    mobileNo: {
                    message: 'mobile no. is not valid',
                        validators: {
                                notEmpty: {
                                        message: 'mobile no. is required and cannot be empty'
                                },
                                stringLength: {
                                        max: 10,
                                        message: 'mobile number should be 10 digits long'
                                },
                                regexp: {
                                        regexp: /^[0-9]+$/,
                                        message: 'mobile no. can consist only of digits '
                        },
//                        different: {
//                                    field: 'password',
//                                    message: 'The username and password can\'t be the same as each other'
//                                    }
                        }   
                    },
//                    emailId: {
//                            validators: {
//                                        notEmpty: {
//                                        message: 'The email address is required and can\'t be empty'
//                            },
//                                        emailAddress: {
//                                        message: 'The input is not a valid email address'
//                                           }
//                            }
//                    },
                   imageFile: {
                            validators: {
                                    notEmpty: {
                                        message: 'Image file should be uploaded'
                                },
                                    file: {
                                        extension: 'jpg,jpeg, png',
                                        type: 'image/jpg,image/jpeg, image/png',
                                        minSize: 1024 * 1024,
                                        message: 'The selected file is not valid, or the size is not large enough!'
                                    }
                            }
                    }
                    
                    }//fields
                     
        });
     
    </script>                               
    