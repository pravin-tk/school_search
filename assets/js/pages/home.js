
//$("#sch").click(function () {
function geoSearch() {
    if( $("#cboStd").val() == "") {
        console.log('8');
        $("#cboStd").addClass('has-error');
        $("#cboStd").focus();
       // $('#cboStd').tooltip('show');
    }else if ($("#latitude").val() == "" || $("#longitude").val() == "") {
      console.log('4');
        $("#schbox").addClass('has-error');
        $("#schbox").focus();
      // $('#schbox').tooltip('show');
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
    }
 // });
// A $( document ).ready() block.
$(document).ready(function () {
    $("#cboStd").css("display", "block");
    
});
//$("#searchform").bootstrapValidator({
//  rules : {
//    test : {
//      minlength: 3 ,
//      required: true
//    }
//  },
//  showErrors: function(errorMap, errorList) {
//    $.each(this.successList, function(index, value) {
//      return $(value).popover("hide");
//    });
//    return $.each(errorList, function(index, value) {
//      var _popover;
//      _popover = $(value.element).popover({
//        trigger: "manual",
//        placement: "top",
//        content: value.message,
//        template: "<div class=\"popover\"><div class=\"arrow\"></div><div class=\"popover-inner\"><div class=\"popover-content\"><p></p></div></div></div>"
//      });
//      // Bootstrap 3.x :      
//      //_popover.data("bs.popover").options.content = value.message;
//      // Bootstrap 2.x :
//      _popover.data("popover").options.content = value.message;
//      return $(value.element).popover("show");
//    });
//  }
//});

function getPermlink(strAddress,stdname){
    var arrStr = [];
    var city = "";
    var locality = "";
    var permlink = "";
    
    arrStr = strAddress.split(',');
    for(i=0;i<arrStr.length;i++){
        console.log(arrStr[i]);
    }
    city = arrStr[1];
    locality = arrStr[0].replace(" ","-");
    stdname = stdname.replace(" ","-");
    permlink = city+"/"+locality+"/"+stdname;
    permlink =permlink.toLowerCase();
    return permlink.trim();
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
$('#searchform').bootstrapValidator({
            message: 'Please select location from dropdown',
            feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
            },
            submitHandler: function(validator, form, submitButton) {
                   $('button[type="submit"]').prop('disabled', 'false')
                    geoSearch();
             },
            fields: {
                    cboStd: {
                    message: 'Please select standard from dropdown',
                        validators: {
                                notEmpty: {
                                        message: 'Please select standard from dropdown'
                                },
                          }   
                    },
                   schbox: {
                    message: 'Please select location from dropdown',
                        validators: {
                                notEmpty: {
                                        message: 'Please select location from dropdown'
                                },
                          }   
                    },
                },
                showErrors: function(errorMap, errorList) {
                        $.each(this.successList, function(index, value) {
                          return $(value).popover("hide");
                        });
                        return $.each(errorList, function(index, value) {
                          var _popover;
                          _popover = $(value.element).popover({
                            trigger: "manual",
                            placement: "top",
                            content: value.message,
                            template: "<div class=\"popover\"><div class=\"arrow\"></div><div class=\"popover-inner\"><div class=\"popover-content\"><p></p></div></div></div>"
                          });
                          // Bootstrap 3.x :      
                          //_popover.data("bs.popover").options.content = value.message;
                          // Bootstrap 2.x :
                          _popover.data("popover").options.content = value.message;
                          return $(value.element).popover("show");
                        });
                      }
                     
        });
     