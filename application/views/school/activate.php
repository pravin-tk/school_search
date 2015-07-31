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

    .form-group .form-control {
       
        width: 250px;
        
    }
   
</style>

<!-- uiView:  --><div data-ui-view="" class="ui-view-main ng-scope"><!-- uiView:  --><div ui-view="" class="ui-view-main ng-scope"><!-- Fixed navbar -->
        <?php //include 'header.php';  ?>
        <div id="content" >
            <section class="cover overlay height-70 height-70-xs"></section>

            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                        </div>
                        <!-- Map end -->
                        <div id="schresult">
                           

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="media media-clearfix-xs media-clearfix-sm">
                                        <h4> Activate Profile </h4>
                                        <hr style = "width:100%"/>


                                        <div class="media-body" id="divchangepwd" style="display:block;">
                                            <form method="post"  role="form" id="activate_profile_form" action="javascript:;" >
                                                <div id ="pwd_form_error"></div>
                                                <input type="hidden" name='emailid' id='emailid' value ='<?php echo $emailId1; ?>' />
                                                <input type="hidden" name='oldPwd' id='newpwd' value ='' />
                                                <div class="form-group" id="dnpwd">
                                                    <label for="newPassword" class="control-label">New Password</label>
                                                   
                                                        <input type="text"  maxlength="8" 
                                                               class="form-control" id="newPassword" name="newPassword" >
                                                  
                                                    <!--                                                    <label class="control-label">Password Strength</label>-->
                                                    <div class="col-sm-6" id="example-progress-bar-container">
                                                    </div>
                                                    <span class="help-block with-errors"></span>
                                                </div>

                                               
                                                <div class="form-group">

                                                    <input type="submit" id="btnchangePwd" class="btn btn-primary" value="Change Password" />
                                                    <input type="button" id="btnCancelPwd" class="btn btn-default" value="Cancel"/>
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
                        </div>   </div><div class="col-md-3">
                        
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        // A $( document ).ready() block.
        
//
//    //    $("#activate_user").on("click", "#btnchangePwd", function () {
//    function activateProfile() {
//                $.post(base_url + "index.php/auth/activateProfile",
//                        {
//                            email: $("#activate_profile_form input[name=emailid]").val(),
//                            password: $("#activate_profile_form input[name=newPassword]").val()
//                        }, function (response) {
//                        $.each(response, function (key, value) {
//                       // $.each(v, function (key, value) {
//                             //console.log(key +"---"+value);
//                            if (key == "id")
//                                id = value;
//                            else if (key == "message")
//                                messg = value;
//                            else if (key == "status")
//                                status = value;
//                            else if (key == "errors")
//                                errors = value;
//                        //});
//
//                    });
//                    if (status == 0) {
//                        $("#pwd_form_error").html(errors);
//                        $("#pwd_form_error").addClass('help-block-error');
//                    } else {
//                        $("#pwd_form_error").html(messg);
//                        $("#pwd_form_error").addClass('help-block-success');
//                    }
//                }, 'json'
//                        );
//
//            
//    }
//    
//    $('#activate_profile_form').bootstrapValidator({
//            message: 'This value is not valid',
//            feedbackIcons: {
//                    valid: 'glyphicon glyphicon-ok',
//                    invalid: 'glyphicon glyphicon-remove',
//                    validating: 'glyphicon glyphicon-refresh'
//            },
//            submitHandler: function(validator, form, submitButton) {
//                   activateProfile();
//                 
//             },
//            fields: {
//                    newPassword: {
//                    message: 'password is not valid',
//                        validators: {
//                                notEmpty: {
//                                        message: 'new password required and cannot be empty'
//                                },
//                                stringLength: {
//                                        min: 8,
//                                        max: 8,
//                                        message: 'password length should be 8 characters'
//                                },
//                               
//                        },
////                       
//                    },
//                    
//            },
//               
//        });



    </script>                               
