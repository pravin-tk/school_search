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
	  //autoplaySpeed: 3000,
	  //centerMode: true,
	  //centerPadding: '50px'
	  responsive: [
		{
		breakpoint: 1024,
		settings: {
		  arrows: true,
		 // centerMode: true,
		  slidesToShow: 3
		}
		},
		{
		breakpoint: 600,
		settings: {
		  arrows: true,
		 // centerMode: true,
		  slidesToShow: 1
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
	  //autoplaySpeed: 3000,
	  //centerMode: false,
	  //centerPadding: '50px'
	  
	  	  
});
//$('.timelineslider').slick({
//adaptiveHeight: true,
////centerMode: true,
////centerPadding: '50px',
//slidesToShow: 3,
//asNavFor: '.slider-nav',
//
//responsive: [
//{
//  breakpoint: 1024,
//  settings: {
//    arrows: true,
//    centerMode: true,
//    slidesToShow: 3
//  }
//},
//{
//  breakpoint: 600,
//  settings: {
//    arrows: true,
//    centerMode: true,
//    slidesToShow: 1
//  }
//}
//]
//
//
//});
//$('.slider-nav').slick({
//slidesToShow: 3,
//slidesToScroll: 1,
//asNavFor: '.timelineslider',
//dots: true,
//centerMode: true,
//focusOnSelect: true
//});

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
	document.getElementById("mask").getElementsByTagName("div")[2].onclick=function(){anim('',this)};
	//anim();
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
		if(data["data"][0].vacantSeat > 0){
			$("#school-vaccant-seats-info").html(data["data"][0].vacantSeat+" Available");
		}
	},'json');
});


function initialize() {
    var ulat = $("#latitude").val();
    var ulng = $("#longitude").val();
    var mapCanvas = document.getElementById('map_canvas');
    var mapOptions = {
      center: new google.maps.LatLng(ulat, ulng),
      zoom: 16,
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
