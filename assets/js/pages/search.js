var map;
var dataArr = null;
var mapLoaded = 0;
function viewMap(){
	$("#mav-view-layout").show();
	$("#list-searchresult").hide();
	$("#list-button").removeClass("active");
	$("#map-button").addClass("active");
//	if(mapLoaded == 0){
//   		initialize();
//   		mapLoaded = 1;
//	}
}
function hideMap(){
	$("#mav-view-layout").hide();
	$("#list-searchresult").show();
	$("#map-button").removeClass("active");
	$("#list-button").addClass("active");
	scrollTopLink("search-list-row");
}
function filterResults() {
  	var boardType = "";
    var schoolType = "";
    var mediumType = "";
    var categoryType = "";
    var activityType = "";
    var infraType = "";
    var safetyType = "";
    var classificationType = "";
    var board_count = 0;
    var category_count = 0;
    var classification_count = 0;
    var medium_count = 0;
    
    $(".show-item-count").hide();
    
    $('input[name="schoolboardcheckbox"]:checked').each(function() { 
		if(boardType == ""){
			boardType = $(this).val();
		} else {
			boardType += "," + $(this).val();
		}
		board_count = parseInt(board_count) + 1;
   	});
    if(board_count > 0){
    	$("#board-count").html(board_count).show();
    }
    $('input[name="schoolmediumcheckbox"]:checked').each(function() { 
		if(mediumType == ""){
			mediumType = $(this).val();
		} else {
			mediumType += "," + $(this).val();
		}
		medium_count = parseInt(medium_count) + 1;
   	});
    if(medium_count > 0){
    	$("#medium-count").html(medium_count).show();
    }
    $('input[name="schoolcategorycheckbox"]:checked').each(function() { 
		if(categoryType == ""){
			categoryType = $(this).val();
		} else {
			categoryType += "," + $(this).val();
		}
		category_count = parseInt(category_count) + 1;
   	});
    if(category_count > 0){
    	$("#category-count").html(category_count).show();
    }
    $('input[name="schoolclassificationcheckbox"]:checked').each(function() { 
		if(classificationType == ""){
			classificationType = $(this).val();
		} else {
			classificationType += "," + $(this).val();
		}
		classification_count = parseInt(classification_count) + 1;
   	});
    if(classification_count > 0){
    	$("#classification-count").html(classification_count).show();
    }
    $('#sortFields option:selected').each(function() {
        schoolType += $(this).val() + ",";
	});
   
    $.post(base_url+"index.php/home/schoolJSON",
    	{
        	latitude: $("#latitude").val(),
        	longitude: $("#longitude").val(),
        	standardId: $("#standardId").val(),
        	boardId: boardType,
        	mediumId: mediumType,
        	typeId: schoolType,
        	safetyId: safetyType,
        	infraId: infraType,
        	activityId: activityType,
        	classificationId: classificationType,
        	categoryId: categoryType
        },function(response){
        	$("#schresult").html(response.html);
        	$("#schresult-map").html(response.htmlmap);
        	scrollTopLink("search-list-row");
        	$(".nav .summary-list").html(dataArr.length);
        	dataArr = response.jsondata;
        	sortMarkers("");
        	updateSortListedSchools();
        },
        'json'
    );
}

function sortSchool(sortFilter) {
	var boardType = "";
    var schoolType = "";
    var mediumType = "";
    var categoryType = "";
    var activityType = "";
    var infraType = "";
    var safetyType = "";
    var classificationType = "";
    var classFee = "random";
    var rating = "random";
    var distance = "random";
    var seats = "random";
    
	$("#"+sortFilter+"-button").addClass("active");
	sortMarkers(sortFilter);
	if (sortFilter == "classFee") {
		if (parseInt($("#"+sortFilter).val()) == 0 || $("#"+sortFilter).val() == "") {
			$("#"+sortFilter+"-button").html("Fees <i class='fa fa-sort-amount-asc'></i>");
			$("#"+sortFilter).val("1");
			classFee = "asc";
		} else if (parseInt($("#"+sortFilter).val()) == 1) {
			$("#"+sortFilter+"-button").html("Fees <i class='fa fa-sort-amount-desc'></i>");
			$("#"+sortFilter).val("0");
			classFee = "desc";
		}
	} else if(sortFilter == "distance") {
		if (parseInt($("#"+sortFilter).val()) == 0 || $("#"+sortFilter).val() == "") {
			$("#"+sortFilter+"-button").html("Distance <i class='fa fa-sort-amount-asc'></i>");
			$("#"+sortFilter).val("1");
			distance = "asc";
		} else if (parseInt($("#"+sortFilter).val()) == 1) {
			$("#"+sortFilter+"-button").html("Distance <i class='fa fa-sort-amount-desc'></i>");
			$("#"+sortFilter).val("0");
			distance = "desc";
		}
	} else if(sortFilter == "rating") {
		if (parseInt($("#"+sortFilter).val()) == 0 || $("#"+sortFilter).val() == "") {
			$("#"+sortFilter+"-button").html("Rating <i class='fa fa-sort-amount-asc'></i>");
			$("#"+sortFilter).val("1");
			rating = "asc";
		} else if (parseInt($("#"+sortFilter).val()) == 1) {
			$("#"+sortFilter+"-button").html("Rating <i class='fa fa-sort-amount-desc'></i>");
			$("#"+sortFilter).val("0");
			rating = "desc";
		}
	} else if(sortFilter == "seats") {
		if (parseInt($("#"+sortFilter).val()) == 0 || $("#"+sortFilter).val() == "") {
			$("#"+sortFilter+"-button").html("Seats <i class='fa fa-sort-amount-asc'></i>");
			$("#"+sortFilter).val("1");
			seats = "asc";
		} else if (parseInt($("#"+sortFilter).val()) == 1) {
			$("#"+sortFilter+"-button").html("Seats <i class='fa fa-sort-amount-desc'></i>");
			$("#"+sortFilter).val("0");
			seats = "desc";
		}
	}
	
    $('input[name="schoolboardcheckbox"]:checked').each(function() { 
		if(boardType == ""){
			boardType = $(this).val();
		} else {
			boardType += "," + $(this).val();
		}
   	});
    $('input[name="schoolmediumcheckbox"]:checked').each(function() { 
		if(mediumType == ""){
			mediumType = $(this).val();
		} else {
			mediumType += "," + $(this).val();
		}
   	});
    $('input[name="schoolcategorycheckbox"]:checked').each(function() { 
		if(categoryType == ""){
			categoryType = $(this).val();
		} else {
			categoryType += "," + $(this).val();
		}
   	});
    $('input[name="schoolclassificationcheckbox"]:checked').each(function() { 
		if(classificationType == ""){
			classificationType = $(this).val();
		} else {
			classificationType += "," + $(this).val();
		}
   	});
   
    $.post(base_url+"index.php/home/schoolJSON",
    	{
        	latitude: $("#latitude").val(),
        	longitude: $("#longitude").val(),
        	standardId: $("#standardId").val(),
        	boardId: boardType,
        	mediumId: mediumType,
        	typeId: schoolType,
        	safetyId: safetyType,
        	infraId: infraType,
        	activityId: activityType,
        	classificationId: classificationType,
        	categoryId: categoryType,
        	classFee: classFee,
        	distance: distance,
        	rating: rating,
        	seats: seats	
        },function(response){
        	$("#schresult").html(response.html);
        	$("#schresult-map").html(response.htmlmap);
        	scrollTopLink("search-list-row");
        	updateSortListedSchools();
        },
        'json'
    );
}

$('input:checkbox').click(function(){
	//filterResults();
});

function clearSortFields(){
	$("#classFee").val("");
	$("#distance").val("");
	$("#rating").val("");
	$("#seats").val("");
	$("#classFee-button").html("Fees <i class='fa fa-sort-amount-asc'></i>").removeClass("active");
	$("#rating-button").html("Rating <i class='fa fa-sort-amount-asc'></i>").removeClass("active");
	$("#distance-button").html("Distance <i class='fa fa-sort-amount-asc'></i>").removeClass("active");
	$("#seats-button").html("Seats <i class='fa fa-sort-amount-asc'></i>").removeClass("active");
}

function sortClear(){
	//$('input:checkbox').removeAttr('checked');
	clearSortFields();
	filterResults();
	scrollTopLink("schresult");
}

function moreFilters(){
	$("#moreFilters-panel").show();
	$("#moreFilters").html("<a href='javascript:lessFilters()' class='btn btn-link'><i class='fa fa-fw fa-ellipsis-h'></i> Less filters</a>");
}

function lessFilters(){
	$("#moreFilters-panel").hide();
	$("#moreFilters").html("<a href='javascript:moreFilters()' class='btn btn-link'><i class='fa fa-fw fa-ellipsis-h'></i> More filters</a>");
}

function resetFilters(){
	$('input:checkbox').removeAttr('checked');
	filterResults();
	scrollTopLink("search-list-row");
	$(".show-item-count").hide();
}
function scrollTopLink(id){
	$('html,body').animate({
	    scrollTop: ($("."+id).offset().top - 120)
	    }, 'slow'
	);
}
function scrollTopLinkMap(id){
	verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
	element = $('#'+id);
	offset = element.offset();
	offsetTop = offset.top;
	$('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
}

$(document.body).on('click', '.icon-heart-list' ,function(){
	$("#sortList").html("");
	$("#sortListRight").html("");
	var item_id = $(this).attr('id');
	var olditems = item_id.split("-");
	var myClass = $("#"+item_id+" i").attr("class");
	if(myClass == "fa fa-heart"){
		$("#"+item_id).html("<i class='fa fa-heart-o'></i>");
		$("#sortlistedmaphearts-"+olditems[1]).html("<i class='fa fa-heart-o'></i>");
	} else {
		$("#"+item_id).html("<i class='fa fa-heart'></i>");
		$("#sortlistedmaphearts-"+olditems[1]).html("<i class='fa fa-heart'></i>");
	}
	var sort_listed_cookie = "";
	var sortCount = 0;
	$('.icon-heart-list').each(function() { 
		var item_id_new = $(this).attr('id');
		var items = item_id_new.split("-");
		var myClassNew = $("#"+item_id_new+" i").attr("class");
		if(myClassNew == "fa fa-heart"){
			sortCount++;
			if(sort_listed_cookie == ""){
				sort_listed_cookie = items[1];
			} else {
				sort_listed_cookie += "," + items[1];
			}
			addSortListedSchools(items[1]);
		}
  	});
	$.cookie("sortListedSchools",sort_listed_cookie, { expires: 180, path: '/' });
	$(".nav .summary").html(sortCount);
});
$(document.body).on('click', '.sort-listed-map-schools' ,function(){
	$("#sortList").html("");
	$("#sortListRight").html("");
	var item_id = $(this).attr('id');
	var olditems = item_id.split("-");
	var myClass = $("#"+item_id+" i").attr("class");
	if(myClass == "fa fa-heart"){
		$("#"+item_id).html("<i class='fa fa-heart-o'></i>");
		$("#iconheartlist-"+olditems[1]).html("<i class='fa fa-heart-o'></i>");
	} else {
		$("#"+item_id).html("<i class='fa fa-heart'></i>");
		$("#iconheartlist-"+olditems[1]).html("<i class='fa fa-heart'></i>");
	}
	var sort_listed_cookie = "";
	var sortCount = 0;
	$('.sort-listed-map-schools').each(function() { 
		var item_id_new = $(this).attr('id');
		var items = item_id_new.split("-");
		var myClassNew = $("#"+item_id_new+" i").attr("class");
		if(myClassNew == "fa fa-heart"){
			sortCount++;
			if(sort_listed_cookie == ""){
				sort_listed_cookie = items[1];
			} else {
				sort_listed_cookie += "," + items[1];
			}
			addSortListedSchools(items[1]);
		}
  	});
	$.cookie("sortListedSchools",sort_listed_cookie, { expires: 180, path: '/' });
	$(".nav .summary").html(sortCount);
});

function addSortListedSchools(id){
	if (typeof $("#map-search-result-"+id) != "undefined" && typeof $("#map-search-result-"+id).html() != "undefined") {
		var html = $("#map-search-result-"+id).html();
		var html = "<div class='panel panel-default' id=sort-map-search-result-"+id+"'>"+html+"</div>";
		$("#sortList").append(html);
		$("#sortListRight").append(html);
	}
}

function updateSortListedSchools(){
	$("#sortList").html("");
	$("#sortListRight").html("");
	var sortCount = 0;
	if (typeof $.cookie('sortListedSchools') === "undefined") {
		$.cookie("sortListedSchools","", { expires: 180, path: '/' });
	}
	if($.cookie('sortListedSchools') != "") {
		var school_ids = $.cookie('sortListedSchools').split(",");
		for(var i=0; i < school_ids.length; i++){
			$("#iconheartlist-"+school_ids[i]).html("<i class='fa fa-heart'></i>");
			$("#sortlistedmaphearts-"+school_ids[i]).html("<i class='fa fa-heart'></i>");
			if (typeof $("#map-search-result-"+school_ids[i]) != "undefined" && typeof $("#map-search-result-"+school_ids[i]).html() != "undefined") {
				addSortListedSchools(school_ids[i]);
				sortCount++;
			}
		}
		$(".nav .summary").html(sortCount);
	}
}

function componentToHex(c) {
    var hex = c.toString(16);
    return hex.length == 1 ? "0" + hex : hex;
}

function rgbToHex(r, g, b) {
    return "#" + componentToHex(r) + componentToHex(g) + componentToHex(b);
}

function getColourTemp(maxVal, minVal, actual) {
    var midVal = (maxVal - minVal)/2;
    var rangeVal = (maxVal - minVal);
    var onethirdVal = rangeVal/3;
    var midVal1 = onethirdVal;
    var midVal2 = 2*onethirdVal;
    var intR;
    var intG;
    var intB = Math.round(0);
    if(actual < midVal1){
    	intR = 255;
    	intG = 0;
        intB = Math.round(255 * ((actual - minVal) / onethirdVal));
    }else if(actual >= midVal1 && actual < midVal2){
    	intR = Math.round(255 * ((midVal2 - actual) / onethirdVal));
    	intG = 255;
        intB = 0;
    }else if(actual >= midVal2 && actual <= maxVal){
    	intR = 0;
    	intG = Math.round(255 * ((maxVal - actual) / onethirdVal));
        intB = 255;
    }
    return rgbToHex(intR, intG, intB);
}

function Legend(controlDiv, map) {
	  controlDiv.style.padding = '5px';
	  var controlUI = document.createElement('DIV');
	  controlUI.style.backgroundColor = 'white';
	  controlUI.style.borderStyle = 'solid';
	  controlUI.style.borderWidth = '1px';
	  controlUI.title = 'Legend';
	  controlDiv.appendChild(controlUI);
	  var controlText = document.createElement('DIV');
	  controlText.style.fontFamily = 'Arial,sans-serif';
	  controlText.style.fontSize = '12px';
	  controlText.style.paddingLeft = '4px';
	  controlText.style.paddingRight = '4px';
	  controlText.innerHTML = '<div id="legend" class="legend">'
			  			     +'<div>Low</div><div>'
		  					 +'<img alt="" src="'+asset_url+'img/vertical-gradient.png">'
		  					 +'</div> <div>High</div></div>';
	  controlUI.appendChild(controlText);
}

function sortMarkers(sortitem){
	for (var i = 0; i < markers.length; i++) {
	    markers[i].setMap(null);
	}
	markers = [];
	var minColor = 0;
	var maxColor = 0;
	$.each(dataArr, function(key, item) 
	{
		if(sortitem == "classFee"){
		   if(minColor > item.totalFee){
				minColor = item.totalFee;
		   }
		   if(maxColor < item.totalFee){
				maxColor = item.totalFee;
		   }
		}else if(sortitem == "distance"){
			if(minColor > item.distance){
				minColor = parseInt(parseFloat(item.distance)*10000);
		   }
		   if(maxColor < item.distance){
				maxColor = parseInt(parseFloat(item.distance)*10000);
		   }
		}else if(sortitem == "rating"){
			if(minColor > item.rating){
				minColor = parseInt(parseFloat(item.rating)*1000);
		   }
		   if(maxColor < item.rating){
				maxColor = parseInt(parseFloat(item.rating)*1000);
		   }
		}else if(sortitem == "seats"){
			if(minColor > item.seats){
				minColor = item.seats;
		   }
		   if(maxColor < item.seats){
				maxColor = item.seats;
		   }
		}
	});
	$.each(dataArr, function(key, item) 
	{	
			actualColor = 0;
			if(sortitem == "classFee"){
				actualColor = item.totalFee;
			}else if(sortitem == "distance"){
				actualColor = parseInt(parseFloat(item.distance)*1000);
			}else if(sortitem == "rating"){
				actualColor = parseInt(parseFloat(item.rating)*1000);
			}else if(sortitem == "seats"){
				actualColor = item.seats;
			}
			if (sortitem != null && sortitem.length > 0) {
	  		var hexMarkerColor = getColourTemp(parseInt(maxColor),parseInt(minColor),parseInt(actualColor));
			} else {
			var hexMarkerColor = '#FE7569';
			}
			var marker_url = base_url+"index.php/home/schoolDetail/"+item.schoolId+"/"+$("#standardId").val();
        var marker = new google.maps.Marker({
            map: map,
            draggable: false,
            url: marker_url,
            position: new google.maps.LatLng(item.latitude, item.longitude),
            icon: {
                path: fontawesome.markers.MAP_MARKER,
                scale: 0.6,
                strokeWeight: 0.2,
                strokeColor: 'black',
                strokeOpacity: 1,
                fillColor: hexMarkerColor,
                fillOpacity: 0.9
            }
        });
        var school_img = "";
        if (item.logo=="") {
        	school_img =  "<img src='"+asset_url+"img/vector-school-house-28931692.jpg' style='width:50px;height:50px;'>";
    	} else {
    		school_img =  "<img src='"+item.logo+"' style='width:50px;height:50px;'>";
    	}
        var schoolText = item.name;
        var localityText = item.localityName; 
        var schoolBoards = item.boardName+","+item.mediums;
        var schoolFeeMarker = "";
        if (item.totalFee > 1000) {
        	schoolFeeMarker = item.totalFee/1000;
        	schoolFeeMarker = Math.round(schoolFeeMarker*100)/100;
        	schoolFeeMarker = schoolFeeMarker+"K PA";
        } else {
        	schoolFeeMarker = item.totalFee+" PA";
        }
        var infoContent = "<div id='infobox' style='width: 300px;'>"
                +"<div id='infobox-text' style='color: #000000; text-align: center;width:300px;'>"
                +"<span id='ins-drag'>"
                +"<div id='schoolimg' style='float: left; width:90px;'>"+school_img+"</div>"
                +"<div id='schooltext' style='float: right;width:210px;'>"
                +"<div class='school-name-text-marker'>"
                +schoolText
                +"</div>"
                +"<div class='street-locality-marker'>"
                +localityText
                +"</div>"
                +"<div class='street-locality-marker'>"
                +"<span class='label-100'>"
                +schoolBoards
                +"</span>"
                +"</div>"
                +"<div class='school-fee-marker'>"
                +"<span class='fee label-100'><i class='fa fa-rupee'></i> "
                +schoolFeeMarker
                +"</span>"
                +"</div>"
                +"</div>"
                +"</span> "
                +"<span id='err-text' style='font-weight: bold;'></span>"
                +"</div></div>";
		var infowindow = new google.maps.InfoWindow();
        google.maps.event.addListener(marker,'mouseover', (function(marker,infoContent,infowindow){ 
            return function() {
                infowindow.setContent(infoContent);
                infowindow.open(map,marker);
            };
        })(marker,infoContent,infowindow)); 
        google.maps.event.addListener(marker, 'mouseout', function() {
            infowindow.close(map,marker);
        });
        google.maps.event.addListener(marker, 'click', function() { 
        	window.open(this.url, '_blank');
        });
        markers.push(marker);
	});
}


$('.toggle-event:checked').each(function () {
	addToCompare($(this).val());
});

function addToCompare(){
	$('.toggle-event:checked').each(function () {
		var schoolId =$(this).val();
		 $(json).each(function(index, data){
		        if(data.schoolId == schoolId )
		            {
		        	var html ="<li style='width:25%;padding-left: 15px; padding-bottom: 15px; float: left; box-sizing: border-box;'>"+
		        	"<div class='galcolumn' id='item0ZgvPF' >"+
		        	"<div class='panel panel-default relative' style='margin-bottom: 15px; zoom: 1; opacity: 1;'>"+
		        	"<div class='ribbon-heading ribbon-primary inline absolute left margin-none'>CBSE</div>"+
		            "<div class='cover hover overlay margin-none' style='height: 133px;'>";
		            if(data.logo){
		            html = html+  "<img src='"+data.logo+"' alt='location' class='img-responsive' style='width: 100%; height: auto; display: block; margin-left: auto; margin-right: auto;'>";	
		            }else{
		            	html= html+	            "<img src='"+asset_url+"img/vector-school-house-28931692.jpg' alt='location' class='img-responsive' style='width: auto; height: auto; display: block; margin-left: auto; margin-right: auto;'>";
		            	
		            }
		            html=html+
		            "<a class='overlay overlay-full overlay-bg-black overlay-hover' href='' style='height: 133px;'>"+
		            "<span class='v-center'>"+
		            "<span class='btn btn-circle btn-white'><i class='fa fa-eye'></i></span></span></a>"+
		            "</div>"+
		            "<div class='panel-body'>"+
		            "<h4 class='margin-v-0-5 text-wrap'>"+data.name+"</h4>"+
		            "<p class='small'>"+
		            "<span class='fa fa-fw fa-star text-yellow-800'></span>"+
		            "<span class='fa fa-fw fa-star text-yellow-800'></span>"+
		            "<span class='fa fa-fw fa-star text-yellow-800'></span>"+
		            "<span class='fa fa-fw fa-star-o text-yellow-800'></span>"+
		             "<span class='fa fa-fw fa-star-o text-yellow-800'></span>"+
		             " </p>"+
		              "<p>bishops convent school .</p>"+
		             " <p><span class='label label-grey-100'>Medium : </span>&nbsp;"+data.mediums+"</p>"+
                     " <p><span class='label label-grey-100'>Board : </span>&nbsp;"+data.boardName+"</p>"+
                     " <p><span class='label label-grey-100'>School Category : </span>&nbsp;"+data.schoolCategory+"</p>"+
                     " <p><span class='label label-grey-100'>Teaching Approach : </span>&nbsp;"+data.teachingApproach+"</p>"+
                     " <p><span class='label label-grey-100'>School Type : </span>&nbsp;"+data.schoolType+"</p>"+
                     " <p><span class='label label-grey-100'>Distance : </span>&nbsp;"+data.distance+"</p>"+
                     "<p><span class='label label-grey-100'>Vacant Seat :</span>&nbsp;"+data.seats+"</p>"+
		             " <a  class='btn btn-primary btn-circle absolute bottom right' href=''>View</a>"+
            		"</div>"+
		         " </div>"+
		       " </div>   "+ 
		   "</li>";
		        	$('.tl-page').append(html);
		        	
		            }
		    })
	});
}