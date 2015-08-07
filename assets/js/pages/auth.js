  
      $("#profile_form").on("click", "#btnreset", function () {
          $('.form-group').removeClass('has-error has-feedback has-success');
          $('small').text('');
          $('#profile_save').prop('disabled',false);
       });    

        function addProfile() {
            var id,messg,status,errors;
            var formData = new FormData();
            formData.append('file', $('#profile_form input[type=file]')[0].files[0]);
            formData.append('firstName', $("#firstName").val());
            formData.append('lastName', $("#lastName").val());
            formData.append('mobileNo', $("#mobileNo").val());
            formData.append('email', $("#emailId").val());
            $.ajax({
                type: 'POST',
                url: base_url + "index.php/auth/profileSave",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                datatype: 'JSON',
                success: function (data) {
                    data = JSON.parse(data);

                    $.each(data, function (key, value) {
                        //console.log(key +"-------"+value);
                        if (key == "id")
                            id = value;
                        else if (key == "message")
                            messg = value;
                        else if (key == "status")
                            status = value;
                        else if (key == "errors")
                           errors = value;
                    });

                    // });
                    $('.form-group').removeClass('has-error has-feedback has-success');
                    if (status == 0) {
                        $("#profile_form_error").html(messg+" "+errors);
                        $("#profile_form_error").addClass('help-block-error');
                        $("#profile_form_error").removeClass('help-block-success');
                    } else {
                        $("#profile_form_error").html(messg);
                        $("#profile_form_error").addClass('help-block-success');
                        $("#profile_form_error").removeClass('help-block-error');
                    }
                    $('body,html').animate({
                            scrollTop: 0
                    }, 200);
                },
                error: function (data) {
                    console.log(data);
                }
            });
    }


    $('#profile_form').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
            },
            submitHandler: function(validator, form, submitButton) {
                   $('button[type="submit"]').prop('disabled', 'false')
                    addProfile();
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
                                        min: 0,
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
                                        regexp: /^d{10}$/,
                                        message: 'mobile no. can consist only of digits '
                        },
//                        different: {
//                                    field: 'password',
//                                    message: 'The username and password can\'t be the same as each other'
//                                    }
                        }   
                    },
                    emailId: {
                            validators: {
                                        notEmpty: {
                                        message: 'The email address is required and can\'t be empty'
                            },
                                        emailAddress: {
                                        message: 'The input is not a valid email address'
                                           }
                            }
                    },
                   imageFile: {
                            validators: {
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
    
     
    $('#post_requirement_form').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
        },
        submitHandler: function(validator, form, submitButton) {
               $('button[type="submit"]').prop('disabled', 'false')
               $('.se-pre-con').fadeIn('fast');
               submitRequirement();
         },
        fields: {
                firstName: {
                message: 'First name is not valid',
                    validators: {
                            notEmpty: {
                                    message: 'first name is required and cannot be empty'
                            },
                            stringLength: {
                                    min: 4,
                                    max: 30,
                                    message: 'first name must be more than 6 and less than 30 characters long'
                            },
                            regexp: {
                                    regexp: /^[a-zA-Z\']+$/,
                                    message: 'first name can only consist of alphabets,apostrophe, space '
                            }        	
                    }
                } ,   
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
                                    regexp: /^d{10}$/,
                                    message: 'mobile no. can consist only of digits '
                    },
//                    different: {
//                                field: 'password',
//                                message: 'The username and password can\'t be the same as each other'
//                                }
                    }   
                },
                requirement: {
                   // message: 'not valid',
                        validators: {
                                notEmpty: {
                                        message: 'Requirement should no empty'
                                },
                                stringLength: {
                                    min: 3,
                                    message: 'Requirement  should be 10 digits long'
                            },                        }   
                    },
                
                }//fields
                 
    });
    function submitRequirement() {
        var id,messg,status,errors;
        var formData = new FormData();
        formData.append('firstName', $("#firstName").val());
        formData.append('mobileNo', $("#mobileNo").val());
        formData.append('requirement', $("#requirement").val());
        $.ajax({
            type: 'POST',
            url: base_url + "index.php/home/addRequirement",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            datatype: 'JSON',
            success: function (data) {
                $('.se-pre-con').fadeOut('fast');
                data = JSON.parse(data);

                $.each(data, function (key, value) {
                    //console.log(key +"-------"+value);
                    if (key == "id")
                        id = value;
                    else if (key == "message")
                        messg = value;
                    else if (key == "status")
                        status = value;
                    else if (key == "errors")
                       errors = value;
                });

                // });
                $('.form-group').removeClass('has-error has-feedback has-success');
                if (status == 0) {
                    $("#profile_form_error").html(messg+" "+errors);
                    $("#profile_form_error").addClass('help-block-error');
                    $("#profile_form_error").removeClass('help-block-success');
                } else {
                    $("#profile_form_error").html(messg);
                    $("#profile_form_error").addClass('help-block-success');
                    $("#profile_form_error").removeClass('help-block-error');
                }
                $('body,html').animate({
                        scrollTop: 0
                }, 200);
            },
            error: function (data) {
                $('.se-pre-con').fadeOut('fast');
                console.log(data);
            }
        });
}

   