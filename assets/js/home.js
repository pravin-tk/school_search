//login.js

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


//end login js



var cookie_domain = 'edbuddy.in';
var d = new Date();
d.setTime(d.getTime()+(1*24*60*60*1000));
var expires = "expires="+d.toGMTString();  

google.maps.event.addDomListener(window, 'load', function () {
    var places = new google.maps.places.Autocomplete(document.getElementById('schbox'));
    google.maps.event.addListener(places, 'place_changed', function () {
        var place = places.getPlace();
        var address = place.formatted_address;
        var latitude = place.geometry.location.A;
        var longitude = place.geometry.location.F;
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
        
       
    });
});

$("#sch").click(function () {
//function searchSch() {
    
    if( $("#standardId").val() == "") {
        $("#addClass").addClass('has-error');
        $("#addClass").focus();
    }else if ($("#latitude").val() == "" || $("#longitude").val() == "") {
        $("#schbox").addClass('has-error');
         $("#schbox").removeClass('has-success');
        $("#schbox").focus();
    } else { 

        $("#standardId").removeClass('has-error');
        $("#schbox").addClass('has-error');
        $("#searchform").submit();
    }
//}
});

// A $( document ).ready() block.
$(document).ready(function () {
    $("#cboStd").css("display", "block");
});

//$('.detailmenubar').affix({
//    offset: {
//        top: 100,
//    }
//
//})
$('#detailmenubar').affix({
    offset: {
        top: $('#schoolheader').height(),
    }

})

$("#frmSch").affix({
    offset: {
        top: 200,
    }
})
$("#search_header").affix({
    offset: {
        top: 200,
    }
})

$().timelinr({
		autoPlayDirection: 'forward',
		startAt: 4 ,
		prevButton: '#prev',
		 nextButton: '#next',
      arrowKeys: 'false',
      // value: true/false, default to false
      startAt: 1,
      // value: integer, default to 1 (first)
      autoPlay: 'false',
      // value: true | false, default to false
      autoPlayDirection: 'forward',
      // value: forward | backward, default to forward
      autoPlayPause: 2000
})

$(".fa-heart-o").click(function (ev) {
    $(this).removeClass("fa-heart-o").addClass("fa-heart");
    ev.preventDefault();

})
$(".fa-heart").click(function (ev) {
    $(this).removeClass("fa-heart").addClass("fa-heart-o");
    ev.preventDefault();

})


$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - $("#detailmenubar").height()
        }, 500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-fixed-top',
    offset: 51
})
//nearby slick
$('.demo').slick({
        	infinite: true,
        	  slidesToShow: 6,
        	  slidesToScroll: 6,
        	  prevArrow: '<button type="button" data-role="none" class="slick-prev">Previous</button>',
        	  nextArrow: '<button type="button" data-role="none" class="slick-next">Next</button>',
        	  autoplay: true,
        	  autoplaySpeed: 3000,
        	  centerMode: false,
        	  centerPadding: '50px'
        	  
        	  	  
 });


//fee flipster

$('.flipster').flipster({
	enableMousewheel:false,
	enableNav:true,
	enableNavButtons:true,
	style:'carousel', // Switch between 'coverflow' or 'carousel' display styles
	});

$('#homeslider').height($( window ).height()-200);


//Rating 
$('#rateusfrm').submit(function () {
	 return false;
	});
$("#rateUs").click(function(){
	  var rating_data = [];
	  var ajax_data=[];
	  ajax_data.push(schooldata);
	  
  	var rating = $("#rateusfrm").serializeArray();
  	
	jQuery.each(rating, function(index, itemData) {
            rate = {catid : itemData.name,rating:itemData.value};
            rating_data.push(rate);
			});
	  var schooldata ={schoolId : $("#schoolId").val(),userId:$("#schoolId").val(),ratings:rating_data};
    
    $.ajax({
        type: "post",
        url: base_url+"/index.php/home/rateSchool",
        dataType: "json",
        data: schooldata,
        success: function(data){
                  console.log('success') 
                  alert('success');                       
                  },
                error: function(request, errorType, errorThrown){
                }
      });
}); 


window.onload=init;

function init(){
document.getElementById("mask").getElementsByTagName("div")[2]
.onclick=function(){anim('',this)};
anim();
}

var animace;
function anim(pos,t){
  var step = 20;
  var wrap = document.getElementById("wrapper");
  if(t){
    if(t.className=="remote stop"){
      clearTimeout(animace);
      t.className="remote play";
      return false;
    }else{
      var position = (wrap.style.backgroundPosition.split(' '));
      var horiz = (position[0].replace(/[^0-9.]*/g, ''));
      animace = setTimeout(function(){anim((horiz*1))}, step);
      t.className="remote stop";
      return false;
    }
  }
  if(!pos)var pos = 0;
  wrap.style.backgroundPosition = "-"+pos+"px 0";
  animace = setTimeout(function(){anim((pos+.5))}, step);
} 
