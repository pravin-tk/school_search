
$("#sch").click(function () {
    if( $("#cboStd").val() == "") {
        $("#cboStd").addClass('has-error');
        $("#cboStd").focus();
        $.bootstrapGrowl("Please select standard from dropdown!!", {
            ele: 'body', // which element to append to
             type: 'danger', // (null, 'info', 'danger', 'success')
            offset: {from: 'top', amount: 75}, // 'top', or 'bottom'
            align: 'center', // ('left', 'right', or 'center')
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
            //document.getElementById('global_search_form').setAttribute('action',base_url+request.cityname+'/'+request.permlink);
            document.getElementById('searchform').setAttribute('action',base_url+permlink);
            $("#address").val(permlink);
//            alert($("#address").val());
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

