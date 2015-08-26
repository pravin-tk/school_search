$('#detailmenubar').affix({
    offset: {
        top: $('#schoolheader').height(),
    }
});

$('.demo').slick({
	infinite: true,
	  slidesToShow: 6,
	  slidesToScroll: 6,
	  prevArrow: '<button type="button" data-role="none" class="slick-prev"><img src="'+asset_url+'img/icons/arrow_left.svg"></button>',
	  nextArrow: '<button type="button" data-role="none" class="slick-next"><img src="'+asset_url+'img/icons/arrow_right.svg"></button>',
	  autoplay: false,
	  responsive: [
		{
		breakpoint: 1024,
		settings: {
		  arrows: true,
		  slidesToShow: 3,
		  slidesToScroll: 6
		}
		},
		{
		breakpoint: 600,
		settings: {
		  arrows: true,
		  slidesToShow: 1,
		  slidesToScroll: 6
		}
		}
	]
});

$('.timelineslider').slick({
	 dots: false,
	infinite: true,
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  prevArrow: '<button type="button" data-role="none" class="slick-prev"><img src="'+asset_url+'img/icons/arrow_left.svg"></button>',
	  nextArrow: '<button type="button" data-role="none" class="slick-next"><img src="'+asset_url+'img/icons/arrow_right.svg"></button>',
	  autoplay: false,
	  responsive: [
   		{
   		breakpoint: 1024,
   		settings: {
   		  arrows: true,
   		  slidesToShow: 2,
   		  slidesToScroll: 1
   		}
   		},
   		{
   		breakpoint: 600,
   		settings: {
   		  arrows: true,
   		  slidesToShow: 1,
   		  slidesToScroll: 1
   		}
   		}
   	]
	  	  
});

//fee flipster
$('.flipster').flipster({
	start:1,
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
        },
        error: function(request, errorType, errorThrown){
        }
	});
}); 

window.onload=init;

function init(){
	document.getElementById("mask").getElementsByTagName("div")[2].onclick=function(){anim('',this)};
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
	if(!pos)
		var pos = 0;
	wrap.style.backgroundPosition = "-"+pos+"px 0";
	animace = setTimeout(function(){anim((pos+.5))}, step);
} 

$(document.body).on('change', '#standardId' ,function(){
    $.get(base_url+"/index.php/home/get_vaccant_seats/"+$("#schoolId").val()+"/"+$(this).val(),{},function(data){
    	var optiontxt =  $( "#standardId option:selected" ).text();
    	$.each(data["data"], function(index, item) {
            if(parseInt(item.vacantSeat) > 0  ){
            	$("#school-vaccant-seats-info").html(item.vacantSeat+" Available");
            	$("ul").find("[data-flip-category='" + optiontxt + "']").click();
            } else {
            	$("#school-vaccant-seats-info").html("Not Available");
            }
        });
	},'json');
});


function initialize() {
	var optiontxt =  $( "#standardId option:selected" ).text();
	$("ul").find("[data-flip-category='" + optiontxt + "']").click();
    var ulat = $("#latitude").val();
    var ulng = $("#longitude").val();
    var mapCanvas = document.getElementById('map_canvas');
    var mapOptions = {
    	center: new google.maps.LatLng(ulat, ulng),
    	zoom: 16,
    	scrollwheel: false,
    	mapTypeId: google.maps.MapTypeId.ROADMAP
    }
  	map = new google.maps.Map(mapCanvas, mapOptions);
    var marker = new google.maps.Marker({
        map: map,
        draggable: false,
        animation: google.maps.Animation.DROP,
        position: new google.maps.LatLng(ulat, ulng),
        icon: {
            path: fontawesome.markers.MAP_MARKER,
            scale: 0.6,
            strokeWeight: 0.2,
            strokeColor: 'black',
            strokeOpacity: 1,
            fillColor: '#FE7569',
            fillOpacity: 0.9
        }
    });
}
google.maps.event.addDomListener(window, 'load', initialize);

 $('#contactfrm').bootstrapValidator({
	 message: 'This value is not valid',
     feedbackIcons: {
    	 valid: 'glyphicon glyphicon-ok',
    	 invalid: 'glyphicon glyphicon-remove',
         validating: 'glyphicon glyphicon-refresh'
     },
     submitHandler: function(validator, form, submitButton) {
    	 $('button[type="submit"]').prop('disabled', 'false')
    	 	contactSubmit();
         },
         fields: {
        	 userName: {
             message: 'First name is not valid',
             validators: {
                notEmpty: {
                        message: 'Name is required and cannot be empty'
                },
                stringLength: {
                        min: 4,
                        max: 30,
                        message: 'Name must be more than 3 and less than 30 characters long'
                },
                regexp: {
                        regexp: /^[a-zA-Z\']+$/,
                        message: 'Name can only consist of alphabets,apostrophe, space '
                },
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
                digits: {
                        message: 'mobile no. can consist only of digits '
                 },

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
    }//fields
});
        
function contactSubmit() {
	var status ="";
	var messg ="";
	var id= "";
        var label ="";
	$.post(base_url+"contactus/post",
	{
	    name: $("#userName").val(),
	    mobile: $("#mobileNo").val(),
	    email: $("#emailId").val(),
	    schoolId: $("#schoolId").val(),
	},function(response){
        $.each(response, function(key, value) {
            if(key == "id")
               id = value;
            else if(key == "message")
               messg = value;
            else if(key == "status")
               status = value;

        });
        if(status == 0){
            label = "danger";
        }else if(status == 1){ //user not activated
            label = "success";
        }else{
            label = "info";
            
        }
        $.bootstrapGrowl(messg, {
            ele: 'body', // which element to append to
            type: label, // (null, 'info', 'danger', 'success')
            offset: {from: 'top', amount: 90}, // 'top', or 'bottom'
            align: 'left', // ('left', 'right', or 'center')
            width: 250, // (integer, or 'auto')
            delay: 3000, // Time while the message will be displayed. It's not equivalent to the *demo* timeOut!
            allow_dismiss: true, // If true then will display a cross to close the popup.
            stackup_spacing: 10 // spacing between consecutively stacked growls.
        }); 
    },'json'
	);
}
      
$( "#frmrateReview" ).submit(function( event ) {
    rateReviewSubmit();
    return false;
});
        
        
function rateReviewSubmit() {

    var ratingData = getRatingValue();
    var schId = $("#hdnSchid").val();
    var id,messg,status;
    var label ="";
    $.post(base_url+"post-rating-review",
        {
        schoolId: $("#hdnSchid").val(),
        userId: logged_in,
        reviewId: $("#hdnreviewid").val(),
        reviewTitle: $("#txttitle").val(),
        reviewDesc: $("#txtReview").val(),
        rating: ratingData,
        },function(response){
            $.each(response, function(key, value) {
                console.log("key:"+key+" :value="+value);
                 if(key == "id")
                    id = value;
                 else if(key == "message")
                    messg = value;
                 else if(key == "status")
                    status = value;
                if (status ==1)
                     label = "success";
                else
                     label ="danger";

            });//end each loop
            $.bootstrapGrowl(messg, {
                    ele: 'body', // which element to append to
                    type: label, // (null, 'info', 'danger', 'success')
                    offset: {from: 'top', amount: 90}, // 'top', or 'bottom'
                    align: 'center', // ('left', 'right', or 'center')
                    width: 250, // (integer, or 'auto')
                    delay: 2000, // Time while the message will be displayed. It's not equivalent to the *demo* timeOut!
                    allow_dismiss: true, // If true then will display a cross to close the popup.
                    stackup_spacing: 10 // spacing between consecutively stacked growls.
            }); 
            $("#divreviewfrm").hide();
            $("#divUserRatingReview").show();
        },'json'
    );
}
        
function getRatingValue(){
    var strSplit ="";
    var ratingData = [];
    var ratingItem = null;
    var strArray = [];
    var blnNoRating = false;
    $('#frmrateReview').find('input').each(function(x, field) {
        strSplit = field.name   ;
        strArray = strSplit.split("_");
        if(strArray[0] == "rate" && strArray[1]=="star"){
            if(field.value >0){
                if(strArray[3]>0){
                    ratingItem = {catid:strArray[2],ratevalue:field.value,id:strArray[3]};
                }else{    
                    ratingItem = {catid:strArray[2],ratevalue:field.value};
                }
                ratingData.push(ratingItem);
            }else {
                blnNoRating = true;
            }
        }
    });
    if(!blnNoRating){
        return JSON.stringify(ratingData);
    }else{
        $.bootstrapGrowl("Ratings cannot be empty!" , {
            ele: 'body', // which element to append to
            type: 'danger', // (null, 'info', 'danger', 'success')
            offset: {from: 'top', amount: 90}, // 'top', or 'bottom'
            align: 'center', // ('left', 'right', or 'center')
            width: 250, // (integer, or 'auto')
            delay: 2000, // Time while the message will be displayed. It's not equivalent to the *demo* timeOut!
            allow_dismiss: true, // If true then will display a cross to close the popup.
            stackup_spacing: 10 // spacing between consecutively stacked growls.
        }); 
    }
}
        
$(document).ready(function () {
    size_li = $("#reviewBoard .review-panel").size();
    x=4;
    $('#reviewBoard .review-panel:lt('+x+')').show();
    $('#loadMore').click(function () {
        x= (x+5 <= size_li) ? x+5 : size_li;
        $('#reviewBoard .review-panel:lt('+x+')').show();
    });
    $('#showLess').click(function () {
        x=(x-5<0) ? 4 : x-5;
        $('#reviewBoard .review-panel').not(':lt('+x+')').hide();
    });
});
function showContact() {
        	var status ="";
        	var messg ="";
        	var id= "";
                var label ="";
        	$.post(base_url+"contactus/showcontact",
        	{
        	    schoolId: $("#schoolId").val(),
        	},function(response){
                $.each(response, function(key, value) {
                    if(key == "id")
                       id = value;
                    else if(key == "message")
                       messg = value;
                    else if(key == "status")
                       status = value;

                });
               
            },'json'
        	);
        }


    $(".contact_details").slideUp();
        $("#contact_details").click(function(){
        	showContact();
            $(".contact_details").slideDown();
            $("#contact_details").hide();

    });

        
        
