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
//                                    notEmpty: {
//                                        message: 'Image file should be uploaded'
//                                },
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
     
    //    $("#activate_user").on("click", "#btnchangePwd", function () {
    function activateProfile() {
                $.post(base_url + "index.php/auth/activateProfile",
                        {
                            email: $("#activate_profile_form input[name=emailid]").val(),
                            password: $("#activate_profile_form input[name=newPassword]").val()
                        }, function (response) {
                        $.each(response, function (key, value) {
                       // $.each(v, function (key, value) {
                             //console.log(key +"---"+value);
                            if (key == "id")
                                id = value;
                            else if (key == "message")
                                messg = value;
                            else if (key == "status")
                                status = value;
                            else if (key == "errors")
                                errors = value;
                        //});

                    });
                    if (status == 0) {
                        $("#pwd_form_error").html(errors);
                        $("#pwd_form_error").addClass('help-block-error');
                    } else {
                        $("#pwd_form_error").html(messg);
                        $("#pwd_form_error").addClass('help-block-success');
                    }
                }, 'json'
                        );

            
    }
    
    $('#activate_profile_form').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
            },
            submitHandler: function(validator, form, submitButton) {
                   activateProfile();
                 
             },
            fields: {
                    newPassword: {
                    message: 'password is not valid',
                        validators: {
                                notEmpty: {
                                        message: 'new password required and cannot be empty'
                                },
                                stringLength: {
                                        min: 8,
                                        max: 8,
                                        message: 'password length should be 8 characters'
                                },
                               
                        },
//                       
                    },
                    
            },
               
        });