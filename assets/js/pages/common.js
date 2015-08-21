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
        
        $(".alogin").click(function() {
            
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
    console.log('yo')
})



$("#myModal").on('hidden.bs.modal', function () {
        console.log("HEY u");
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