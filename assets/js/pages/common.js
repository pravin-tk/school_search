

$( document ).ready(function() {
                $('.form-control .form-group').css('width', '');
               function userLogin() {
                   
                        $.post(base_url+"index.php/auth/userLogin",
                        {
                        uname: $("#tusername").val(),
                        passwd: $("#tpassword").val()
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
                               //window.location.href=strip_hash(referer);
                            }else{
                                location.reload();
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


//end login js


$(window).load(function() {
	// Animate loader off screen
	$(".se-pre-con").fadeOut("slow");;
});
var cookie_domain = 'edbuddy.in';
var d = new Date();
d.setTime(d.getTime()+(1*24*60*60*1000));
var expires = "expires="+d.toGMTString();

google.maps.event.addDomListener(window, 'load', function () {
    var places = new google.maps.places.Autocomplete(document.getElementById('schbox'));
    console.log('189');
    google.maps.event.addListener(places, 'place_changed', function () {
        var place = places.getPlace();
        var address = place.formatted_address;
        var latitude = place.geometry.location.lat();//place.geometry.location.A;
        var longitude = place.geometry.location.lng();//place.geometry.location.F;
        var i = latitude+","+longitude;
        var a = address;
        var mesg = "Address: " + address;
        mesg += "\nLatitude: " + latitude;
        mesg += "\nLongitude: " + longitude;
        $("#latitude").val(latitude);
        $("#longitude").val(longitude);
        $("#address").val(address);
        //$.cookie("ebdsearchgeocode",latitude+","+longitude,{expires:60*60*24*30,path:"/",domain:cookie_domain});
	//$.cookie("ebdsearchgeoloc",address,{expires:60*60*24*30,path:"/",domain:cookie_domain});    
        document.cookie="ebdsearchgeocode="+i+";expires="+expires+"; path=/;domain=edbuddy.in";
        document.cookie="ebdsearchgeoloc="+a+";expires="+expires+"; path=/;domain=edbuddy.in";
        console.log(mesg);
       
    });
});
//login.js

