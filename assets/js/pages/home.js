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
        var permlink = getPermlink(address,$("#cboStd option:selected").text());
        console.log("perm="+permlink);
        if($("#cboStd").val() != "" && $("#latitude").val() != "" && $("#longitude").val() != ""){
            document.getElementById('searchform').setAttribute('action',base_url+permlink);
            $("#address").val(permlink);
            $('#searchform').submit();
        }
    }
});


$(document).ready(function () {
    $("#cboStd").css("display", "block");
    
});


function getPermlink(strAddress,stdname){
    var arrStr = [];
    var city = "";
    var locality = "";
    var permlink = "";
    
    arrStr = strAddress.split(',');
    for(i=0;i<arrStr.length;i++){
        console.log(arrStr[i]);
    }
    city = arrStr[1].trim().replace(" ","-");
    locality = arrStr[0].replace(" ","-");
    locality = arrStr[0].replace(".","-");
    stdname = stdname.replace(" ","-");
    stdname = stdname.replace(".","-");
    permlink = city+"/"+locality+"/"+stdname;
    permlink =permlink.toLowerCase();
    return permlink.replace(/\s/g, '-').trim();
   
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
    });
});

$('#globalSearch').on('keydown', '#searchform', function(evt) {
	  if ( evt.which === 13)  {			 
		  $("#sch").click();         
	  }
});

