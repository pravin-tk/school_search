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
    .top-spacing{
        padding-top:5px;
    }
    .alert-success {
        background-color: #dff0d8;
        border-color: #d6e9c6;
        color: #3c763d;
    }
    .alert-danger {
        background-color: #f2dede;
        border-color: #ebccd1;
        color: #a94442;
    }
</style>

<!-- uiView:  --><div data-ui-view="" class="ui-view-main ng-scope"><!-- uiView:  --><div ui-view="" class="ui-view-main ng-scope"><!-- Fixed navbar -->
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
                              <input type="button" id="btncancel" class="btn btn-default" value="Cancel" onclick="location.href = '<?php echo $base_url;?>';" />  
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
        $(document).ready(function(){
           $(".container-fluid").css("background", "black");
        });
    </script>