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
    if ($("#latitude").val() == "" || $("#longitude").val() == "") {
        $("#schbox").addClass('has-error');
        $("#schbox").focus();
    } else if( $("#standardId").val() == "") {
        $("#cboStd").addClass('has-error');
        $("#cboStd").focus();
    } else {

        $("#cboStd").removeClass('has-error');
        $("#cboStd").addClass('has-error');
        $("#searchform").submit();
    }
});

// A $( document ).ready() block.
$(document).ready(function () {
    $("#cboStd").css("display", "block");
});

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
            scrollTop: $($anchor.attr('href')).offset().top - 50
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
