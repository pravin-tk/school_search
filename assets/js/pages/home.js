
$("#sch").click(function () {
//function geoSearch() {
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
    //}
  });
// A $( document ).ready() block.
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
})
$("#search_header").affix({
    offset: {
        top: 200,
    }
})




////nearby slick
//$('#searchform').bootstrapValidator({
//            message: 'Please select location from dropdown',
//            feedbackIcons: {
//                    valid: 'glyphicon glyphicon-ok',
//                    invalid: 'glyphicon glyphicon-remove',
//                    validating: 'glyphicon glyphicon-refresh'
//            },
//            submitHandler: function(validator, form, submitButton) {
//                   $('button[type="submit"]').prop('disabled', 'false')
//                    geoSearch();
//             },
//            fields: {
//                    cboStd: {
//                    message: 'Please select standard from dropdown',
//                        validators: {
//                                notEmpty: {
//                                        message: 'Please select standard from dropdown'
//                                },
//                          }   
//                    },
//                   schbox: {
//                    message: 'Please select location from dropdown',
//                        validators: {
//                                notEmpty: {
//                                        message: 'Please select location from dropdown'
//                                },
//                          }   
//                    },
//                },
//                showErrors: function(errorMap, errorList) {
//                        $.each(this.successList, function(index, value) {
//                          return $(value).popover("hide");
//                        });
//                        return $.each(errorList, function(index, value) {
//                          var _popover;
//                          _popover = $(value.element).popover({
//                            trigger: "manual",
//                            placement: "top",
//                            content: value.message,
//                            template: "<div class=\"popover\"><div class=\"arrow\"></div><div class=\"popover-inner\"><div class=\"popover-content\"><p></p></div></div></div>"
//                          });
//                          // Bootstrap 3.x :      
//                          //_popover.data("bs.popover").options.content = value.message;
//                          // Bootstrap 2.x :
//                          _popover.data("popover").options.content = value.message;
//                          return $(value.element).popover("show");
//                        });
//                      }
//                     
//        });
     
