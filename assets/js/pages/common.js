$( document ).ready(function() {
                $('.form-control .form-group').css('width', '');
               function userLogin() {
                   
                        $.post(base_url+"index.php/auth/userLogin",
                        {
                        uname: $("#logemailId").val(),
                        passwd: $("#logpasswd").val()
                        },function(response){
                          
                          $.each(response, function(key, value) {
                           console.log( "result= "+key + " , " + value );
//                            $.each(v, function(key, value) {
                                if(key == "id")
                                   id = value;
                                else if(key == "message")
                                   messg = value;
                                else if(key == "loginstatus")
                                   loginstatus = value;
                               else if(key == "status")
                                   status = value;
//                             });
                             
                            });
                            if(loginstatus == "0"){
                                $("#derr").html(messg);
                                $("#derr").addClass('help-block-error');
                            }else if(status == "0" && loginstatus == "1"){ //user not activated
                                console.log('redirect');
                                window.location.href = base_url+"activate";
                               
                            }else{
                                $.bootstrapGrowl("Logging in...", {
                                    ele: 'body', // which element to append to
                                    type: 'success', // (null, 'info', 'danger', 'success')
                                    offset: {from: 'top', amount: 200}, // 'top', or 'bottom'
                                    align: 'center', // ('left', 'right', or 'center')
                                    width: 250, // (integer, or 'auto')
                                    delay: 25000, // Time while the message will be displayed. It's not equivalent to the *demo* timeOut!
                                    allow_dismiss: true, // If true then will display a cross to close the popup.
                                    stackup_spacing: 10 // spacing between consecutively stacked growls.
                            }); 
                                location.reload();
                                
                            }
                        },'json'
                        );
                   // }
                }
           //});// lgin button click
   
          
          
        function forgotP() { 
      
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
        
        $("#alogin").click(function() {
            
            $("#divlogin").show();
            $("#divforgotp").hide();
        });
        
        $(".fa-close").click(function() {
            $("#divlogin").hide();
            $("#divforgotp").hide();
        });
           
         $('#loginfrm').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
            },
            excluded: ':disabled',   // <=== Adding the 'excluded' option
            submitHandler: function(validator, form, submitButton) {
                   $('button[type="submit"]').prop('disabled', 'false')
                     userLogin();
             },
            fields: {
                    logemailId: {
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
                    logpasswd: {
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

//end login js
$(function() {
    $('a.page-scroll').bind('click', function(event) {
    	$(".page-scroll").removeClass('active');
    	$(this).addClass('active');
        var $anchor = $(this);
       
        if($anchor.attr('href') == "#contact"){
            $(".contact_details").slideDown();
            $("#contact_details").hide();
        }
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 50
        }, 500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.property-meta',
    offset: 51
});
$("img").lazyload({
    effect : "fadeIn"
});

$(window).load(function() {
	// Animate loader off screen
	$(".se-pre-con").fadeOut("slow");
	
});


$('#myModal').on('hidden', function () {
    //console.log('yo')
})



$("#myModal").on('hidden.bs.modal', function () {
        
        //Removing the error elements from the from-group
        $('.form-group').removeClass('has-error has-feedback');
        $('.form-group').find('small.help-block').hide();
        $('.form-group').find('i.form-control-feedback').hide();

    });

//open url in a popup without refreshing parent
function popitup(url) {
    newwindow=window.open(url,'name','height=400,width=550,top=150,left=350');
    if (window.focus) {newwindow.focus()}
    return false;
}

 var vFB = 1; //facebook
 var vGP = 2; //google
 var FB = window.FB;
 var gapi;
    //~~~~~~~~~~~~~~~ Facebook ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 function facebookLogin() {
   
    var scopes = 'email,user_likes,public_profile';
   
    FB.login(function(response) {
      if (response.status === 'connected') {
        //console.log('The user has logged in!');
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
    var firstName,lastName, email,image;
    function googleLogin(){
        var myParams = {
                    'clientid' : '967464106458-ledr335a5fnc7bjbdmj8e888fbo2vi1m.apps.googleusercontent.com', //You need to set client id
                    'cookiepolicy' : 'single_host_origin',
                    'callback' : 'loginCallback', //callback function
                    'approvalprompt':'force',
                    'scope' : 'https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/plus.profile.emails.read'
        };
        gapi.auth.signIn(myParams);
        gapi.load('client', function() { 
            //console.log('gapi.client loaded.');
        });
        gapi.client.load('plus', 'v1').then(function() {
             //console.log('gapi.client.plus loaded.');
        })
    }
    
    function loginCallback(result)
{
    if(result['status']['signed_in'])
    {
        var request = gapi.client.plus.people.get(
        {
            'userId': 'me'
        });
        request.execute(function (resp){
            console.log(resp);
            var email = '';
            if(resp['emails']){
                for(i = 0; i < resp['emails'].length; i++){
                    if(resp['emails'][i]['type'] == 'account'){
                        email = resp['emails'][i]['value'];
                    }
                }
            }
            if(resp['name']){
                firstName = resp['name']['familyName'];
                lastName = resp['name']['givenName'];
            }
 
            //console.log(str);
             userLoginSocial(
                firstName,
                lastName,
                email,
                resp['image']['url'],
                vGP //google login
            ) 
        });
 
    }
 
    }
        
    function onLoadCallback() {
            gapi.client.setApiKey('967464106458-ledr335a5fnc7bjbdmj8e888fbo2vi1m.apps.googleusercontent.com'); //set your API KEY
            gapi.client.load('plus', 'v1',function(){});//Load Google + API
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

function userLogout() {
    $.post(base_url+"logout",{},function(response){
       
        $.each(response, function(key, value) {
            console.log( "result= "+key + " , " + value );
            if(key == "message")
                 messg = value; 
            else if(key == "status")
                 status = value;
        });
            if(status == "1"){
                gapi.auth.signOut();
                FB.logout(function(response) {
                     // user is now logged out
                });
                $.bootstrapGrowl(messg, {
                            ele: 'body', // which element to append to
                            type: 'success', // (null, 'info', 'danger', 'success')
                            offset: {from: 'top', amount: 90}, // 'top', or 'bottom'
                            align: 'center', // ('left', 'right', or 'center')
                            width: 250, // (integer, or 'auto')
                            delay: 25000, // Time while the message will be displayed. It's not equivalent to the *demo* timeOut!
                            allow_dismiss: true, // If true then will display a cross to close the popup.
                            stackup_spacing: 10 // spacing between consecutively stacked growls.
                }); 
                location.reload();
            }else if(status == "0"){ //user not logged out
                
            }
        },'json'
    );
    
}