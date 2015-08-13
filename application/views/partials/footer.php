<!-- Modal -->
<style>
    .modal-backdrop {
        z-index: 0;
}

.modal-dialog {
    margin: 30px auto;
    width: 400px;
}
    
</style>
<?php if(  $userId <1) { ?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Login with Email</h4>
      </div><form class="form-horizontal" method="post" id="loginfrm">
      <div class="modal-body">
       
                
             <!-- Login -->
                <div class="panel panel-default" id="divlogin_1">
            
             <fieldset>
<!--            <div class="panel-heading" style="border-bottom: 1px solid #e2e9e6;">
                    <h3 class="text-center infra-heading"><strong>Contact Us</strong></h3>
            </div>-->
           
            <div class="panel-body">
                     <div id="derr"></div>

                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-1">
                            <input id="logemailId" name="logemailId" type="text" placeholder="your email" maxlength="25" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-1">
                            <input id="logpasswd" name="logpasswd" type="password" placeholder="your password" maxlength="30" class="form-control">
                        </div>
                    </div>
                    

                  
                    </div>
        </fieldset>
    
		                </div>
               
           
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary btn-lg" id= "btnpost" value ="Submit" >
      </div></form>
    </div>
  </div>
</div>
 <?php }else{
                    echo "&nbsp;LLLoged";
                }
?>
<footer class="footer" style="position: relative;">
	<strong>eddbuddy </strong> v1.2.0 © Copyright 2015
</footer>

<!-- Inline Script for colors and config objects; used by various external scripts; -->
<script>
    var colors = {
      "danger-color": "#e74c3c",
      "success-color": "#81b53e",
      "warning-color": "#f0ad4e",
      "inverse-color": "#2c3e50",
      "info-color": "#2d7cb5",
      "default-color": "#6e7882",
      "default-light-color": "#cfd9db",
      "purple-color": "#9D8AC7",
      "mustard-color": "#d4d171",
      "lightred-color": "#e15258",
      "body-bg": "#f6f6f6"
    };
    var config = {
      theme: "angular",
      skins: {
        "default": {
          "primary-color": "#16ae9f"
        }
      }
    };

    
</script>

<script>
	$('.multiselect').multiselect(
		{
                enableFiltering: true,
                numberDisplayed: 2,
                }
	);

$(function() {
    
    var cookie_domain = 'edbuddy.in';
    var d = new Date();
    d.setTime(d.getTime()+(1*24*60*60*1000));
    var expires = "expires="+d.toGMTString();
   // function details to populate 
   // //rating data for logged in user
        if( logged_in >1 && logged_in !=null){
            rateformcookie = readCookie('ebdratesch');
           
            if(rateformcookie == "yes"){
                $("#divreviewfrm").show();
                $("#divUserRatingReview").hide();
            }
        }          
    var ratingData =[];
    var ratingId =[];
    var isDataavailable = false;
   if( logged_in > 1 && logged_in != null){ //populate user rating data
    <?php if(isset($userRatingInfo)){
            foreach($userRatingInfo as $key => $schoolRating){ ?>
                    ratingData[<?php echo $schoolRating['catid'] ?>] = <?php echo $schoolRating['rating'] ?>;
                    <?php if(isset($schoolRating['id'])){?>
                           ratingId[<?php echo $schoolRating['catid'] ?>]= <?php echo $schoolRating['id'] ?>;
                    <?php }?>
         <?php }?>
            isDataavailable = true;
    <?php }?>
          if(isDataavailable){
            var id =0;
            for (var key in ratingData) {
                var value = ratingData[key];
                id = ratingId[key];
                var keyname ="#rate_star_";
                keyname += key +"_"+id ;
                $(keyname).rating('update', value);
                
            }
            <?php if(isset($userReviewInfo['review'])){ ?>
                $('#frmrateReview #hdnreviewid').val('<?php echo $userReviewInfo['reviewId']?>');
                $('#frmrateReview #txtReview').val('<?php echo $userReviewInfo['review']?>');
                $('#frmrateReview #txttitle').val('<?php  echo $userReviewInfo['title'] ?>');
            <?php }?>
        }
     
     }// if logged 
     
     
    $(".rating-stars").click(function() {
        if( logged_in < 1){
            $("#btnopenLogin").click();
         
        }
        
    });
    $("#frmrateReview #btnCancel").click(function() {
         $("#divreviewfrm").hide();
         $("#divUserRatingReview").show();
        
    });
    
    
    
    
    
    $("#addReview").click(function() {
        
        if( logged_in >1 && logged_in !=null){
            rateformcookie = readCookie('ebdratesch');
           // if(rateformcookie == "yes"){
                $("#divreviewfrm").show();
                $("#divUserRatingReview").hide();
                
           // }
        }else{
             console.log("create cookie");
             document.cookie="ebdratesch=yes;expires="+expires+"; path=/;";
             $("#btnopenLogin").click();
        }
        
    });
    
});


</script>
