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
       margin-left:65px;
       float:left;
    }
   
    
    .btn-googleplus {
        margin-right:30px;
    }
/*    span.icon {
      background: url('/identity/sign-in/g-normal.png') transparent 5px 50% no-repeat;
      display: inline-block;
      vertical-align: middle;
      width: 12px;
      height: 30px;
      border-right: #2265d4 1px solid;
    }
    span.buttonText {
      display: inline-block;
      vertical-align: middle;
      padding-left: 12px;
      padding-right: 42px;
      font-size: 14px;
      font-weight: bold;
       Use the Roboto font that is loaded in the <head> 
      font-family: 'Roboto', sans-serif;
    }*/

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
                             <a onclick="googleLogin()" title="Share on Google+" id="authorize-button"
                                    class="btn btn-googleplus g-signin2"><i class="fa fa-google-plus"></i> Google+</a>
                               

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


<!--<script src="https://apis.google.com/js/client:plusone.js" type="text/javascript"></script>-->
<script>
//     var vFB = 1; //facebook
//     var vGP = 2; //google
//    //~~~~~~~~~~~~~~~ Facebook ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//  function facebookLogin() {
//    var FB = window.FB;
//    var scopes = 'email,user_likes,public_profile';
//   
//    FB.login(function(response) {
//      if (response.status === 'connected') {
//        console.log('The user has logged in!');
//        FB.api('/me',{fields: 'first_name,last_name,email,picture'}, function(response) {
//            userLoginSocial(
//                response.first_name,
//                response.last_name,
//                response.email,
//                response.picture.data.url,
//                vFB
//            )   
//        }); 
//      }
//    }, {scope: scopes});
//  }
//
//  window.fbAsyncInit = function() {
//    FB.init({
//      appId      : '711834812294128',
//      cookie     : true,
//      xfbml      : true,
//      version    : 'v2.0'
//    });
//  };
//
//  (function(d, s, id){
//     var js, fjs = d.getElementsByTagName(s)[0];
//     if (d.getElementById(id)) {return;}
//     js = d.createElement(s); js.id = id;
//     js.src = "//connect.facebook.net/en_US/sdk.js";
//     fjs.parentNode.insertBefore(js, fjs);
//   }(document, 'script', 'facebook-jssdk'));
// //~~~~~~~~~~~~~~~~~~~~~~~~ End Facebook
// 
// //~~~~~~~~~~~~~~~~~~~~ Google ~~~~~~~~~~~~~~~~~~~~~~~~
//    var gapi;
//    var firstName,lastName, email,image;
//    function googleLogin(){
//        var myParams = {
//                    'clientid' : '967464106458-ledr335a5fnc7bjbdmj8e888fbo2vi1m.apps.googleusercontent.com', //You need to set client id
//                    'cookiepolicy' : 'single_host_origin',
//                    'callback' : 'loginCallback', //callback function
//                    'approvalprompt':'force',
//                    'scope' : 'https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/plus.profile.emails.read'
//        };
//        gapi.auth.signIn(myParams);
//        gapi.load('client', function() { 
//            console.log('gapi.client loaded.');
//        });
//        gapi.client.load('plus', 'v1').then(function() {
//             console.log('gapi.client.plus loaded.');
//        })
//    }
//    
//    function loginCallback(result)
//{
//    if(result['status']['signed_in'])
//    {
//        var request = gapi.client.plus.people.get(
//        {
//            'userId': 'me'
//        });
//        request.execute(function (resp){
//            console.log(resp);
//            var email = '';
//            if(resp['emails']){
//                for(i = 0; i < resp['emails'].length; i++){
//                    if(resp['emails'][i]['type'] == 'account'){
//                        email = resp['emails'][i]['value'];
//                    }
//                }
//            }
//            if(resp['name']){
//                firstName = resp['name']['familyName'];
//                lastName = resp['name']['givenName'];
//            }
// 
//            //console.log(str);
//             userLoginSocial(
//                firstName,
//                lastName,
//                email,
//                resp['image']['url'],
//                vGP
//            ) 
//        });
// 
//    }
// 
//    }
//        
//    function onLoadCallback() {
//            gapi.client.setApiKey('967464106458-ledr335a5fnc7bjbdmj8e888fbo2vi1m.apps.googleusercontent.com'); //set your API KEY
//            gapi.client.load('plus', 'v1',function(){});//Load Google + API
//    }
//
// //~~~~~~~~~~~~~~~~~~~~~ end google ~~~~~~~~~~~~~~~~~~~
//  function userLoginSocial(fname,lname,email,pic,type) {
//            $.post(base_url+"user-login-social",
//                {
//                fname: fname,
//                lname: lname,
//                email: email,
//                pic : pic,
//                st: type
//                },function(response){
//                    $.each(response, function(key, value) {
//                      console.log( "result= "+key + " , " + value );
//                          if(key == "id")
//                             id = value;
//                          else if(key == "message")
//                             messg = value;
//                          else if(key == "loginstatus")
//                             loginstatus = value;
//                         else if(key == "status")
//                             status = value;
//                      });
//                      if(loginstatus == "1"){
//                          location.reload();
//                      }else if(loginstatus == "0"){ //user not activated
//                          $("#derr2").html(messg);
//                          $("#derr2").addClass('help-block-error');
//                      }
//                  },'json'
//            );
//
//    }
  </script>

