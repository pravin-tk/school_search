$("#sch").click(function () {
    if( $("#cboStd").val() == "") {
        $("#cboStd").addClass('has-error');
        $("#cboStd").focus();
        $.bootstrapGrowl("Please select standard from dropdown!!", {
            ele: 'body', // which element to append to
             type: 'danger', // (null, 'info', 'danger', 'success')
            offset: {from: 'top', amount: 175}, // 'top', or 'bottom'
            align: 'left', // ('left', 'right', or 'center')
            width: 250, // (integer, or 'auto')
            delay: 2000, // Time while the message will be displayed. It's not equivalent to the *demo* timeOut!
            allow_dismiss: true, // If true then will display a cross to close the popup.
            stackup_spacing: 10 // spacing between consecutively stacked growls.
          });
    }else if ($("#latitude").val() == "" || $("#longitude").val() == "") {
        $("#schbox").addClass('has-error');
        $("#schbox").focus();
        $.bootstrapGrowl("Please select location from dropdown!!", {
            ele: 'body', // which element to append to
             type: 'danger', // (null, 'info', 'danger', 'success')
            offset: {from: 'top', amount: 75}, // 'top', or 'bottom'
            align: 'center', // ('left', 'right', or 'center')
            width: 250, // (integer, or 'auto')
            delay: 4000, // Time while the message will be displayed. It's not equivalent to the *demo* timeOut!
            allow_dismiss: true, // If true then will display a cross to close the popup.
            stackup_spacing: 10 // spacing between consecutively stacked growls.
          });
    }  else {
        address = $('#address').val();
//        var permlink = getPermlink(address,$("#cboStd option:selected").text());
        
        if($("#cboStd").val() != "" && $("#latitude").val() != "" && $("#longitude").val() != ""){
            getPermlink($("#latitude").val(),$("#longitude").val(),$("#cboStd option:selected").val());
          
        }
    }
});


$(document).ready(function () {
    $("#cboStd").css("display", "block");
//    if(typeof $.cookie("ebdsearchgeolocation") != "undefined"){
//    	if($.cookie("ebdsearchgeolocation").length > 0){
//    		$("#schbox").val($.cookie("ebdsearchgeolocation"));
//    	}
//    }
});


//function getPermlink(strAddress,stdname){
 function getPermlink(latitude,longitude,stdid){
     console.log(latitude+ ","+longitude+","+stdid);
    var permlink =null;
    var status = 0;
    var data ="";
    $.post(base_url + "permlink",
            {
               lat: latitude,
               lng: longitude,
               std: stdid
            }, function (response) {
                
                $.each(response, function (key, value) {
                    if (key == "status") {
                        status = value;
                    }else if(key == "data" ){
                        data = JSON.parse(value);
                        $.each(data, function (key1, value1) {
                            permlink = value1.toLowerCase(); 
                        });
                       
                    }
                });
                if(permlink != null && permlink !="" && status ==1){
                    document.getElementById('searchform').setAttribute('action',base_url+permlink);
                    $("#address").val(permlink);
                    $('#searchform').submit();
                }else{
//                    $.bootstrapGrowl("Sorry! We do not have schools in this location" , {
//                        ele: 'body', // which element to append to
//                        type: 'danger', // (null, 'info', 'danger', 'success')
//                        offset: {from: 'top', amount: 75}, // 'top', or 'bottom'
//                        align: 'center', // ('left', 'right', or 'center')
//                        width: 250, // (integer, or 'auto')
//                        delay: 4000, // Time while the message will be displayed. It's not equivalent to the *demo* timeOut!
//                        allow_dismiss: true, // If true then will display a cross to close the popup.
//                        stackup_spacing: 10 // spacing between consecutively stacked growls.
//                    });
                    window.location.href = base_url+"post-your-requirement";
                }
            }, 'json'
        );
       
         //return permlink;       
    //return permlink.replace(/\s/g, '-').trim();
   
}

$("#frmSch").affix({
    offset: {
        top: 200,
    }
});
$("#search_header").affix({
    offset: {
        top: 200,
    }
});


$('body').scrollspy({
    target: '.navbar-fixed-top',
    offset: 51
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
        var latitude = place.geometry.location.lat();
        var longitude = place.geometry.location.lng();
        var i = latitude+","+longitude;
        var a = address;
        var mesg = "Address: " + address;
        mesg += "\nLatitude: " + latitude;
        mesg += "\nLongitude: " + longitude;
        $("#latitude").val(latitude);
        $("#longitude").val(longitude);
        $("#address").val(address);
        document.cookie="ebdsearchgeocode="+i+";expires="+expires+"; path=/;domain=edbuddy.in";
        document.cookie="ebdsearchgeoloc="+a+";expires="+expires+"; path=/;domain=edbuddy.in";
        $.cookie("ebdsearchgeolocation", a, {expires: 180, path: '/'});
    });
});

$('#globalSearch').on('keydown', '#searchform', function(evt) {
	  if ( evt.which === 13)  {			 
		  $("#sch").click();         
	  }
});

$('.border').mouseover(function() {
$(this).addClass('active');
});
$('.border').mouseout(function() {
	$(this).removeClass('active');
	});