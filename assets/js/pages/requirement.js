 $('#add_school_form')
    .find('[name="cbocity"]')
    .submit(function(e) {
        $('#add_school_form').bootstrapValidator('revalidateField', 'cbocity');
    })
    .end()    
    .bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
        },
        submitHandler: function(validator, form, submitButton) {
               $('button[type="submit"]').prop('disabled', 'false')
               $('.se-pre-con').fadeIn('fast');
               addSchool();
         },
        fields: {
                schoolName: {
                message: 'school name is not valid',
                    validators: {
                            notEmpty: {
                                    message: 'school name is required and cannot be empty'
                            },
                            stringLength: {
                                    min: 4,
                                    max: 30,
                                    message: 'school name must be more than 6 and less than 100 characters long'
                            },
                            regexp: {
                                    regexp: /^([a-zA-Z '.]*)$/,
                                    message: 'school name consist of alphabets,apostrophe, space,dot '
                            }        	
                    }
                } , 
                cbocity: {
                    validators: {
                           notEmpty: {
                                    message: 'city is required and cannot be empty'
                            }

                    }
                },
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
                                    regexp: /^([a-zA-Z ']*)$/,
                                    message: 'firsst name can only consist of alphabets,apostrophe, space '
                            }        	
                    }
                } ,   
                mobileNo: {
                message: 'mobile no. is not valid',
                    validators: {
                            notEmpty: {
                                    message: 'mobile number is required and cannot be empty'
                            },
                            stringLength: {
                                    max: 10,
                                    message: 'mobile number should be 10 digits long'
                            },
                            digits: {
                                    message: 'mobile number can consist only of digits '
                            },

                    }   
                },
//                requirement: {
//                   // message: 'not valid',
//                        validators: {
//                                notEmpty: {
//                                        message: 'details should not be empty'
//                                },
//                                stringLength: {
//                                    min: 10,
//                                    message: 'details  should more than 10 characters long.'
//                            },                        }   
//                    },
                
                }//fields
                 
    });
    
    function addSchool() {
        var id,messg,status,errors,label="";
        var formData = new FormData();
        formData.append('school', $("#schoolName").val());
        formData.append('city', $("#cbocity").val());
        formData.append('firstName', $("#firstName").val());
        formData.append('mobileNo', $("#mobileNo").val());
        formData.append('requirement', $("#requirement").val());
        $.ajax({
            type: 'POST',
            url: base_url + "save-school",
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

                      label = "danger";
                } else {

                      label = "success";
                }
                $('body,html').animate({
                        scrollTop: 0
                }, 200);
                $.bootstrapGrowl(messg, {
                            ele: 'body', // which element to append to
                            type: label, // (null, 'info', 'danger', 'success')
                            offset: {from: 'top', amount: 90}, // 'top', or 'bottom'
                            align: 'center', // ('left', 'right', or 'center')
                            width: 250, // (integer, or 'auto')
                            delay: 5000, // Time while the message will be displayed. It's not equivalent to the *demo* timeOut!
                            allow_dismiss: true, // If true then will display a cross to close the popup.
                            stackup_spacing: 10 // spacing between consecutively stacked growls.
                }); 
            },
            error: function (data) {
                $('.se-pre-con').fadeOut('fast');
                console.log(data);
            }
        });
}



/// post requirement

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
                userName: {
                message: 'Name is not valid',
                    validators: {
                            notEmpty: {
                                    message: 'Name is required and cannot be empty'
                            },
                            stringLength: {
                                    min: 3,
                                    max: 30,
                                    message: 'Name must be more than 3 and less than 30 characters long'
                            },
                            regexp: {
                                    regexp: /^([a-zA-Z ']*)$/,
                                    message: 'Name can only consist of alphabets,apostrophe, space '
                            }        	
                    }
                } ,   
                mobileNo: {
                message: 'mobile no. is not valid',
                    validators: {
                            notEmpty: {
                                    message: 'mobile number is required and cannot be empty'
                            },
                            stringLength: {
                                    max: 10,
                                    message: 'mobile number should be 10 digits long'
                            },
                            digits: {
                                        message: 'mobile number can consist only of digits '
                            },

                    }   
                },
//                requirement: {
//                   // message: 'not valid',
//                        validators: {
//                                notEmpty: {
//                                        message: 'details should not be empty'
//                                },
//                                stringLength: {
//                                    min: 10,
//                                    message: 'details  should more than 10 characters long.'
//                            },                        }   
//                    },
                
                }//fields
                 
    });
    
    function submitRequirement() {
        var id,messg,status,errors,label="";
        var formData = new FormData();
        formData.append('name', $("#userName").val());
        formData.append('mobile', $("#mobileNo").val());
        formData.append('requirement', $("#requirement").val());
        $.ajax({
            type: 'POST',
            url: base_url + "save-requirement",
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
                      label = 'danger';
                } else {
                      label = 'success';
                }
                $('body,html').animate({
                        scrollTop: 0
                }, 200);
                
                $.bootstrapGrowl(messg, {
                            ele: 'body', // which element to append to
                            type: label, // (null, 'info', 'danger', 'success')
                            offset: {from: 'top', amount: 90}, // 'top', or 'bottom'
                            align: 'center', // ('left', 'right', or 'center')
                            width: 250, // (integer, or 'auto')
                            delay: 5000, // Time while the message will be displayed. It's not equivalent to the *demo* timeOut!
                            allow_dismiss: true, // If true then will display a cross to close the popup.
                            stackup_spacing: 10 // spacing between consecutively stacked growls.
                }); 
            },
            error: function (data) {
                $('.se-pre-con').fadeOut('fast');
                console.log(data);
            }
        });
}