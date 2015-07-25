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

                        <div class="row">
                            
                        </div>

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="media media-clearfix-xs media-clearfix-sm">
                                        <h4> Registration </h4>
                                        <hr/>
                <div class="media-body">
                    <form method="post"   id="profile_form" action="javascript:;" enctype="multipart/form-data">
                        <div id="profile_form_error"></div>
                <div class="form-group">
                    <label for="firstName" class="control-label">First Name</label>
                        <input type="text" pattern="^([_A-z0-9]){3,}$" maxlength="25" 
                               class="form-control" id="firstName" name="firstName" placeholder="Enter first name" value ="">
                    
                    <span class="help-block with-errors"></span>
                </div>
                <div class="form-group">
                    <label for="lastName" class="control-label">Last Name</label>
                        <input type="text" pattern="^([_A-z0-9]){3,}$" maxlength="25" 
                               class="form-control" id="lastName" name="lastName"  placeholder="Enter last name"  value="" >
                  
                    <span class="help-block with-errors"></span>
                </div>
                    <div class="form-group">
                        <label for="emailId" class="control-label">Email Id</label>
                            <input type="text"  maxlength="25" 
                                   class="form-control" id="emailId" name="emailId" value="">
                       
                        <span class="help-block with-errors"></span>
                    </div>
                    <div class="form-group">
                        <label for="mobileNo" class="control-label">Mobile No</label>
                        
                            <input type="text" pattern="^([0-9]){3,}$" maxlength="10" 
                                   class="form-control" id="mobileNo" name="mobileNo" placeholder="Enter mobile number" required value="">

                        <span class="help-block with-errors"></span>
                    </div>
                    <div class="form-group">
                        <label for="imageFile" class="control-label">Image</label>
                       
                            <input type="file"  
                                   class="form-control" id="imageFile" placeholder="Upload image" name="imageFile" required>

                        <span class="help-block with-errors"></span>
                    </div>

                    <div class="form-group">
                       
                        <input type="submit" id="profile_save" class="btn btn-primary" value="Save" />
<!--                        <input type="reset" id="btnreset" class="btn btn-default" value="Cancel"/>-->
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
    </div>
   <script src="<?php echo asset_url(); ?>js/jquery.js"></script>
    <script src="<?php echo asset_url(); ?>js/jquery.form.js"></script>
    <script src="<?php echo asset_url(); ?>js/bootstrapValidator.min.js"></script>
    <script>
        
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
     
   
</script>