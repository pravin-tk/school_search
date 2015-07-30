
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

//$('.detailmenubar').affix({
//    offset: {
//        top: 100,
//    }
//
//})

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


//$(".fa-heart-o").click(function (ev) {
//    $(this).removeClass("fa-heart-o").addClass("fa-heart");
//    ev.preventDefault();
//
//})
//$(".fa-heart").click(function (ev) {
//    $(this).removeClass("fa-heart").addClass("fa-heart-o");
//    ev.preventDefault();
//
//})



//nearby slick
