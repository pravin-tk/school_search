<!-- Modal -->
<style>
    .modal-backdrop {
        z-index: 0;
    }

   #myModal .modal-dialog {
        margin: 30px auto;
        width: 400px;
        margin-top:100px;
    }
    #divlogin_1 .form-control{
        width:109%;
    }
    #afb {
       padding-left:12px;
    }
    
</style>

<?php if (isset($userId) && $userId < 1) { ?>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document" >
            <div class="modal-content" id="divlogin" style="display:block">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <h4 class="modal-title" id="myModalLabel">Login</h4>
                    <div id="response"></div>
                    
                </div>
                <form  method="post" id="loginfrm">
                    <div class="modal-body" >
                       
                   
                        <!-- Login -->
                        <div class="panel panel-default" id="divlogin_1" style="text-align:center;">
                            <div class="panel-body">
                               <div id="derr2"></div> 
                               <a id="afb"onclick="facebookLogin()" title="Share on Facebook"  
                                class="btn btn-facebook" id="afb" ><i class="fa fa-facebook"></i> Facebook</a>
<!--                                <a onclick="" title="Share on Google+" 
                                    class="btn btn-googleplus"><i class="fa fa-google-plus"></i> Google+</a>-->
                                    
                                    <button class="btn btn-googleplus"
                                        data-scope="https://www.googleapis.com/auth/plus.login"
                                        data-clientid="967464106458-ledr335a5fnc7bjbdmj8e888fbo2vi1m.apps.googleusercontent.com"
                                        data-callback="onSignInCallback"
                                        data-theme="dark"
                                        data-cookiepolicy="single_host_origin"><i class="fa fa-google-plus"></i> Google+
                                    </button>
                                    <!-- Textarea for outputting data -->
                                    <div id="response" class="hide">
                                      <textarea id="responseContainer" style="width:100%; height:150px"></textarea>
                                    </div>
                                  

                            </div>
                        </div>
                        <h4 style="text-align:center;">OR</h4>
                         <div class="panel panel-default" id="divlogin_1">
                            <div class="panel-body">
                                <div id="derr"></div>

                                <div class="form-group" style ="margin-bottom:50px;">
                                    <div class="col-md-10 col-md-offset-1">
                                        <input id="logemailId" name="logemailId" type="text" placeholder="your email" maxlength="25" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-10 col-md-offset-1">
                                        <input id="logpasswd" name="logpasswd" type="password" placeholder="your password" maxlength="30" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary btn-sm" id= "btnpost" value ="Submit" >
                          <label><a href="#" class="forgot_password" style ="color:#26a69a;" >Forgot Password?</a></label>
                    </div></div> </form>
            </div><!-- end login -->
            <!-- forgot  password -->
            <div class="modal-content" id="divforgotp" style="display:none">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Forgot Password</h4>
                </div><form  method="post" id="frmpwd">
                    <div class="modal-body">
                        <!-- forgot password -->
                        <div class="panel panel-default" id="divlogin_1">
                            <div class="panel-body">
                               <div id="dpwerr" class="help-block"></div>

                                <div class="form-group" style ="margin-bottom:50px;">
                                    <div class="col-md-10 col-md-offset-1">
                                      <input type="text" class="form-control" placeholder="EMAIL" id="temail" name="temail" />
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary btn-sm" id= "btnpost" value ="Submit" >
                          <label><a href="#" class="alogin" style ="color:#26a69a;" >Login</a></label>
                    </div></div> </form>
            </div><!-- end login -->
            <!-- end forgot password -->
        </div>
    </div>
<?php } ?>
<script src="https://apis.google.com/js/platform.js" async defer></script>

<script>
    //~~~~~~~~~~~~~~~ Facebook ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
  function facebookLogin() {
    var FB = window.FB;
    var scopes = 'email,user_likes,public_profile';
    var vFB =1;
    FB.login(function(response) {
      if (response.status === 'connected') {
        console.log('The user has logged in!');
        FB.api('/me',{fields: 'first_name,last_name,email,picture'}, function(response) {
            userLoginSocial(
                response.first_name,
                response.last_name,
                response.email,
                response.picture.data.url,
                vFB
            )   
        }); 
          
      
      }
    }, {scope: scopes});
  }

  window.fbAsyncInit = function() {
    FB.init({
      appId      : '711834812294128',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.0'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
 //~~~~~~~~~~~~~~~~~~~~~~~~ End Facebook
 
 //~~~~~~~~~~~~~~~~~~~~ Google ~~~~~~~~~~~~~~~~~~~~~~~~
 
    var clientId = '967464106458-ledr335a5fnc7bjbdmj8e888fbo2vi1m.apps.googleusercontent.com';
    var apiKey = 'AIzaSyAkhFinwaOSkS1JAcY8CO5JNmnUYz6e3r0';

 (function() {
         var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
         po.src = 'https://apis.google.com/js/client:plusone.js?onload=signinCallback';
         var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
      })();
      function signinCallback(authResult) {
          console.log(authResult)
            if (authResult['status']['signed_in']) {
                    document.getElementById('signinButton').setAttribute('style', 'display: none');
                        makeAPICall();
            } else {
                console.log('Sign-in state: ' + authResult['error']);
            }
      }
            function makeAPICall(){
            gapi.client.load('plus', 'v1', function() {
              var request = gapi.client.plus.people.get({
                'userId': 'me'
              });
              request.execute(function (resp){
                console.log(resp);
                if(resp.id){
                  console.log('ID: ' + resp.id);
                }
                if(resp.displayName){
                  console.log('Display Name: ' + resp.displayName);
                }
                if(resp.image && resp.image.url){
                  console.log('Image URL: ' + resp.image.url);
                }
                if(resp.url){
                  console.log('Profile URL: ' + resp.url);
                }
              });
           });
      }

 //~~~~~~~~~~~~~~~~~~~~~ end google ~~~~~~~~~~~~~~~~~~~
  function userLoginSocial(fname,lname,email,pic,type) {
            $.post(base_url+"user-login-social",
                {
                fname: fname,
                lname: lname,
                email: email,
                pic : pic,
                st: type
                },function(response){
                    $.each(response, function(key, value) {
                      console.log( "result= "+key + " , " + value );
                          if(key == "id")
                             id = value;
                          else if(key == "message")
                             messg = value;
                          else if(key == "loginstatus")
                             loginstatus = value;
                         else if(key == "status")
                             status = value;
                      });
                      if(loginstatus == "1"){
                          location.reload();
                      }else if(loginstatus == "0"){ //user not activated
                          $("#derr2").html(messg);
                          $("#derr2").addClass('help-block-error');
                      }
                  },'json'
            );

    }
  </script>

