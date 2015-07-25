<style>
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
    .forgot_password {
        font-size:10px;
        padding-left: 12px;
    }
    
    .help-block-success {
        color: #00994C ;
        display: block;
        margin-left: 15px;
        margin-bottom: 3px;
        margin-top: 3px;
    }
    
    .help-block-error {
        color: #D00000 ;
        display: block;
        margin-left: 15px;
        margin-bottom: 3px;
        margin-top: 3px;
    }
    
    .form-control {
       width:'';
    }
</style>
<script type="text/javascript">
        var logged_in = null;
        var url = '<?php echo $base_url;?>';
        function readCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for(var i=0;i < ca.length;i++) {
                    var c = ca[i];
                    while (c.charAt(0)==' ') c = c.substring(1,c.length);
                    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
            }
            return null;
        }
        logged_in = readCookie('ebduserid');
        logged_in_as = readCookie('ebdusername');
        logged_pic = readCookie('ebdmypic');
        
</script>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="" data-toggle="sidebar-menu" class="toggle pull-left visible-xs"><i class="fa fa-bars"></i></a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand"  href="<?php echo $home_url;?>"> EdBuddy</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="main-nav">
<!--        <form class="navbar-form navbar-left margin-none ng-pristine ng-valid">
          <div class="search-1">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-search"></i></span>
              <input type="text" class="form-control form-control-w-150" placeholder="Search ..">
            </div>
          </div>
        </form>-->
        <ul class="nav navbar-nav navbar-right">
            <!-- Login -->
            <script>
            
                if(logged_in == null) { //not logged in
                    var public_data = '<li class="dropdown">';
                    public_data += '<a href="#" class="dropdown-toggle" data-toggle="dropdown" id="alogin">';
                    public_data += '<i class="fa fa-fw fa-lock"></i> Login</a>';
                    public_data += '<div class="dropdown-menu dropdown-size-280" id="divlogin">';
                    public_data += '<div id="derr" class="help-block"></div>';
                    public_data += '<form class="ng-pristine ng-valid" id = "flogin">';
                    public_data += '<div class="form-group" id="divname">';
                    //public_data += '<div class="input-group">';
                    //public_data += '<span class="input-group-addon"><i class="fa fa-user"></i></span>';
                    public_data += '<input type="text" class="form-control" placeholder="EMAIL" id="tusername" name="tusername" />';
                    public_data += '</div>'; //</div>
                    public_data += '<div class="form-group" id="divpwd">';
                    //public_data += '<div class="input-group">';
                    //public_data += '<span class="input-group-addon"><i class="fa fa-shield"></i></span>';
                    public_data += '<input type="password" class="form-control" placeholder="PASSWORD" id="tpassword" name="tpassword" >';
                    public_data += '</div>'; //</div>
                    public_data += '<div class="text-center">';
                    public_data += '<input type="submit" name="blogin" id="blogin" value="Login" class="btn btn-primary" />';
                    public_data += '<a href="#" class="forgot_password" >Forgot Password?</a></label>'; 
                    public_data += '</div></form></div>';
                    public_data += '<div class="dropdown-menu dropdown-size-280" id="divforgotp" style="display:none">';
                    public_data += '<div id="dpwerr" class="help-block"></div>';
                    public_data += '<form class="ng-pristine ng-valid" id="frmpwd">';
                    public_data += '<div class="form-group" id="divfpwd">';
                    //public_data += '<div class="input-group">';
                    //public_data += '<span class="input-group-addon"><i class="fa fa-user"></i></span>';
                    public_data += '<input type="text" class="form-control" placeholder="EMAIL" id="temail" name="temail" />';
                    public_data += '</div>'; //</div>
                    public_data += '<div class="text-center">';
                    public_data += '<input type="submit" name="btnfpwd" id="btnfpwd" value="Submit" class="btn btn-primary" />';
                    public_data += '</div>';
                    public_data += '</form></div>';
                    public_data += '</li>';
                    document.write(public_data);
              }
              if(logged_in == null) { // not logged in
                var public_data = '<li class="dropdown">';
                    public_data += '<a href="<?php echo $base_url; ?>signup" target="_blank" >';
                    public_data += '<i class="fa fa-fw fa-plus"></i> Sign Up</a>';
                    public_data += '<div class="dropdown-menu dropdown-size-280"></div>'
                    public_data += '</li>';
                    document.write(public_data);
              }  
             
             
              if(logged_in != null) { // logged in
                    var private_data = '<li class="dropdown user">';
                    private_data += '<a href="#" class="dropdown-toggle" data-toggle="dropdown">';
                    private_data += '<img src="'+logged_pic+'" alt="" class="img-circle"> '+logged_in_as+'<span class="caret"></span></a>'; 
                    private_data += '<ul class="dropdown-menu" role="menu">';
                    private_data += '<li><a href="<?php echo $base_url; ?>user-profile"><i class="fa fa-user"></i>Profile</a></li>';
//                    private_data += '<li><a href="#"><i class="fa fa-wrench"></i>Settings</a></li>';
                    private_data += '<li><a href="<?php echo $base_url; ?>logout"><i class="fa fa-sign-out"></i>Logout</a></li>';
                    private_data += '</ul></li>';
                    document.write(private_data);
              }
           </script>   
          <!-- // END login -->
         
          <!-- // END user -->
        </ul>
      </div>
      <!-- /.navbar-collapse -->

    </div>
  </nav>
\
<script src="<?php echo asset_url(); ?>js/bootstrapValidator.min.js"></script>
<script>
             $( document ).ready(function() {
                $('.form-control .form-group').css('width', '');
               function userLogin() {
//                   var id,messg,status;
//                    if($("#tusername").val() == ""){
//                        //alert('username cannot be empty');
//                        $("#divname").addClass('has-error');
//                        $("#divpwd").removeClass('has-error');
//                    }else if($("#tpassword").val() == ""){
//                        //alert('password cannot be empty');
//                        $("#divname").removeClass('has-error');
//                        $("#divpwd").addClass('has-error');
//                    }else {
//                        $("#divpwd").removeClass('has-error');
//                        $("#divname").removeClass('has-error');
                        $.post(base_url+"index.php/auth/userLogin",
                        {
                        uname: $("#tusername").val(),
                        passwd: $("#tpassword").val()
                        },function(response){
                          $.each(response, function(k, v) {
                         //  console.log( "result= "+k + " , " + v );
                            $.each(v, function(key, value) {
                                if(key == "id")
                                   id = value;
                                else if(key == "message")
                                   messg = value;
                                else if(key == "status")
                                   status = value;
                             });
                             
                            });
                            if(status == 0){
                                $("#derr").html(messg);
                                $("#derr").addClass('help-block-error');
                            }else{
                                //console.log('reload')
                                window.location.reload();
                            }
                        },'json'
                        );
                   // }
                }
           //});// lgin button click
           
        $("#alogin").click(function() {
            $("#divlogin").show();
            });
          
          
        function forgotP() { 
        //$("#btnfpwd").click (function() {  
//            var id,messg,status;
//            if($("#temail").val() == ""){
//                $("#divfpwd").addClass('has-error');
//            }else {
//                $("#divpwd").removeClass('has-error');
                $.post(base_url+"index.php/auth/forgot_password",
                {
                    email: $("#temail").val()
                },function(response){
                    $.each(response, function(key, value) {
                        //console.log(value)
                        if(key == "id")
                           id = value;
                        else if(key == "message")
                           messg = value;
                        else if(key == "status")
                           status = value;
                    });
                   
                    if(status == 0){
                        $("#dpwerr").html(messg);
                        $("#dpwerr").addClass('help-block-error');
                        $("#dpwerr").removeClass('help-block-success');
                    }else{
                        $("#dpwerr").addClass('help-block-success');
                        $("#dpwerr").removeClass('help-block-error');
                        $("#dpwerr").html(messg);
                    }
                },'json'
                );
            //}
        //});
    }
           
        $(".forgot_password").click(function() {
            $("#divlogin").hide();
            $("#divforgotp").show();
        });
           
         $('#flogin').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
            },
            submitHandler: function(validator, form, submitButton) {
                   $('button[type="submit"]').prop('disabled', 'false')
                    userLogin();
             },
            fields: {
                    tusername: {
                    message: 'Email Id is not valid',
                        validators: {
                                notEmpty: {
                                        message: 'Email Id is required and cannot be empty'
                                },
                                emailAddress: {
                                        message: 'The input is not a valid email address'
                                },
                        }   
                    },
                    password: {
                    message: 'password is not valid',
                        validators: {
                                notEmpty: {
                                        message: 'Password is required and cannot be empty'
                                },
                        }   
                    },
                   
            }//fields
                     
        }).on('error.field.bv', function(e, data) {
            data.bv.disableSubmitButtons(true); // disable submit buttons on errors
      
        }).on('status.field.bv', function(e, data) {
            data.bv.disableSubmitButtons(false); // enable submit buttons on valid
        
         });
      
      
      $('#frmpwd').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
            },
            submitHandler: function(validator, form, submitButton) {
                   $('button[type="submit"]').prop('disabled', 'false')
                    forgotP();
             },
            fields: {
                    temail: {
                    message: 'Email Id is not valid',
                        validators: {
                                notEmpty: {
                                        message: 'Email Id is required and cannot be empty'
                                },
                                emailAddress: {
                                        message: 'The input is not a valid email address'
                                },
                        }   
                    },
                    
            }//fields
                     
        }).on('error.field.bv', function(e, data) {
            data.bv.disableSubmitButtons(true); // disable submit buttons on errors
      
        }).on('status.field.bv', function(e, data) {
            data.bv.disableSubmitButtons(false); // enable submit buttons on valid
        
         });
         $('button[type="submit"]').prop('disabled', 'true');
      }); // end doc ready
          </script>