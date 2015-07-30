$('#detailmenubar').affix({
    offset: {
        top: $('#schoolheader').height(),
    }

});
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
$('.timelineslider').slick({
adaptiveHeight: true,
//centerMode: true,
//centerPadding: '50px',
slidesToShow: 3,
asNavFor: '.slider-nav',

responsive: [
{
  breakpoint: 1024,
  settings: {
    arrows: true,
    centerMode: true,
    slidesToShow: 3
  }
},
{
  breakpoint: 600,
  settings: {
    arrows: true,
    centerMode: true,
    slidesToShow: 1
  }
}
]


});
$('.slider-nav').slick({
slidesToShow: 10,
slidesToScroll: 1,
asNavFor: '.timelineslider',
dots: true,
centerMode: true,
focusOnSelect: true
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
//
//360
