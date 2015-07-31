
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

$(document).ready(function () {
    $("#cboStd").css("display", "block");
});

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

$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - $("#detailmenubar").height()
        }, 500, 'easeInOutExpo');
        event.preventDefault();
    });
});

$('body').scrollspy({
    target: '.navbar-fixed-top',
    offset: 51
});
