<style>
/* .rating-md { */
/*     font-size: 2.13em; */
/* } */
/*  .rating-sm { */
/*     font-size: 1.13em; */
/* }    */
/*.rating-input{
    font-size: 1.5em;
}*/
.symbol {
  display: inline-block;
  border-radius: 50%;
  border: 5px double white;
  width: 30px;
  height: 30px;
}

.symbol-empty {
  background-color: #ccc;
}

.symbol-filled {
  background-color: black;
}
.rating-md { 
font-size: 1.75em; 
}
</style>
<div class="col-md-12">
  	<div class="panel panel-default">
	    <div class="panel-heading">
	      	<h3 class="text-center">
		    <strong>Rating & Reviews </strong>
                    <span class="btn btn-primary"><?php echo round($basicInfo['rating'],1);?></span>
                </h3>
                <div style="align:right;padding-left:100px;"><a id="addReview" style="cursor:hand;" href ="#"><u>Add Rating & Review </u></a> </div>
	    </div>
            <div class="panel-body" id="divreviewfrm" style="display:none;">
                <div class="container">
                    <div class ="col-md-12">
                        <section style="padding-bottom:5px;margin-bottom:5px;" class="panel panel-default">
            			<div class="panel-body">
                                    <h4> Rating and review form</h4>
                                    <form id="frmrateReview" name="frmrateReview" method="post" />
                                    <input type="hidden" name="hdnSchid" id="hdnSchid" value="<?php echo $schId;?>" />
                                    <button id ="btnopenLogin" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" style="display:none"> open login form</button>
                                    <hr/>
                                   <?php 
                                   
        			$totalRating = 0;
        			$totalRatingCount = 0;
                                $ratingId = 0;
	    			if(isset($userRatingInfo) && count($userRatingInfo)>0){
                                foreach($userRatingInfo as $key => $schoolRating){
	    				$totalRatingCount++;
                                        if(isset($schoolRating['id']))
                                            $ratingId = $schoolRating['id'];
                                        //print_r($schoolRating);
                                ?>
          			<section class="panel panel-default text-yellow-800" style="padding-bottom:5px;margin-bottom:5px;">
            			<div class="panel-body">
	                		<div class="col-xs-3 col-md-3 text-center">
			          	      <i class="fa fa-lg"><img alt="<?php echo $schoolRating['name']?>" src="<?php echo asset_url();?>img/<?php echo strtolower($schoolRating['name']);?>.png" class="rating-category-icons" ></i>
			          	      <div class="infra-name">
			          	      	<strong><?php echo $schoolRating['name']?></strong>
			          	      </div>
			                </div>
		                 	<div class="col-xs-4 col-md-4 text-center">
                                            <input type="number" name="rate_star_<?php echo $schoolRating['catid'];?>_<?php echo $ratingId;?>" id="rate_star_<?php echo $schoolRating['catid'];?>_<?php echo $ratingId;?>" class="rating fa-2x" data-value="<?php echo $schoolRating['rating'];?>" />
		                      
                                            </div>
            			</div>
          			</section>
	          	<?php } // for
                             }else{
                                   foreach($schoolRatingInfo as $key => $schoolRating){
	    				$totalRatingCount++;
                                        if(isset($schoolRating['id']))
                                            $ratingId = $schoolRating['id'];
                                ?>
          			<section class="panel panel-default" style="padding-bottom:5px;margin-bottom:5px;">
            			<div class="panel-body">
	                		<div class="col-xs-3 col-md-3 text-center">
			          	      <i class="fa fa-2x"><img alt="<?php echo $schoolRating['name']?>" src="<?php echo asset_url();?>img/<?php echo strtolower($schoolRating['name']);?>.png" class="rating-category-icons"></i>
			          	      <div class="infra-name">
			          	      	<strong><?php echo $schoolRating['name']?></strong>
			          	      </div>
			                </div>
		                 	<div class="col-xs-4 col-md-4 text-center">
                                            <input type="number" name="rate_star_<?php echo $schoolRating['catid'];?>_<?php echo $ratingId;?>" id="rate_star_<?php echo $schoolRating['catid'];?>_<?php echo $ratingId;?>" class="rating" />
		                      
                                        </div>
            			</div>
          			</section>
	          	<?php 
			    	} // for 
                             }?>
                                    <section style="padding-bottom:5px;margin-bottom:5px;" class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="col-xs-3 col-md-3 text-center">

                                                  <div class="infra-name">
                                                    <strong>Review Title</strong>
                                                  </div>
                                            </div>
                                            <div class="col-xs-4 col-md-4 text-center">
                                            <div class="rating">
                                                <input type="hidden" id="hdnreviewid" value="" />
                                               <input id="txttitle" name="txttitle" type="text" 
                                                      placeholder="review title" maxlength="25" class="form-control">	                       
                                            </div>

                                        </div>
                                    </div>
                                    <div class="panel-body">
                                            <div class="col-xs-3 col-md-3 text-center">

                                                  <div class="infra-name">
                                                    <strong>Review Description</strong>
                                                  </div>
                                            </div>
                                            <div class="col-xs-4 col-md-4 text-center">
                                            <div class="rating">
                                                <textarea name="txtReview" id="txtReview" class="form-control"> </textarea>		                       
                                            </div>

                                        </div>
                                    </div>
          			</section>
                                <section style="padding-bottom:5px;margin-bottom:5px;" class="panel panel-default">
                                    <div class="panel-body">
                                            <div class="col-xs-3 col-md-3 text-center">
                                                  <div class="infra-name">  </div>
                                            </div>
                                            <div class="col-xs-4 col-md-4 text-center">
                                                <div class="rating">
                                                    <input type="submit" name="btnAddReview" class="btn btn-primary btn-sm" 
                                                           id="btnAddReview" value="Submit">
                                                    <input type="button" class="btn btn-default btn-sm" name="btnCancel" id="btnCancel" value="Cancel"/>
                                                </div>

                                            </div>
                                    </div>
          			</section>
                                </form>
            			</div>
          			
                        </section>
                        
                        
                    </div>
                </div>
                
            </div>
            
   		<div class="panel-body" id="divUserRatingReview">
	 		<div class="container">
        		<div class="col-md-6">
        		<?php 
        			$totalRating = 0;
        			$totalRatingCount = 0;
	    			if(isset($ratingInfo))
                                foreach($ratingInfo as $key => $schoolRating){
	    				$totalRatingCount++;
	    		?>
          			<section class="panel panel-default" style="padding-bottom:5px;margin-bottom:5px;">
            			<div class="panel-body">
	                		<div class="col-xs-3 col-md-3 text-center">
			          	      <i class="fa fa-2x"><img alt="<?php echo $schoolRating['name']?>" src="<?php echo asset_url();?>img/<?php echo strtolower($schoolRating['name']);?>.png" class="rating-category-icons"></i>
			          	      <div class="infra-name">
			          	      	<strong><?php echo $schoolRating['name']?></strong>
			          	      </div>
			                </div>
		                 	<div class="col-xs-4 col-md-4 text-center">
		                        <div class="rating">
		                        <?php 
		                        $totalRating += $schoolRating['rating'];
		                        $fill_stars = floor($schoolRating['rating']);
		                        $half_stars = $schoolRating['rating'] - floor($schoolRating['rating']);
		                        if($half_stars > 0.3){
		                        	$half_stars = 1;
		                        } else {
		                        	$half_stars = 0;
		                        }
		                        $null_stars = 5 - floor($schoolRating['rating']) - $half_stars;
		                       	for ($i=0; $i < $fill_stars;$i++) { 
		                            echo"<span class='fa fa-star text-yellow-800'></span>";
		                        } 
		                        if($half_stars > 0){
		                        	echo"<span class='fa fa-star-half-o text-yellow-800'></span>";
		                        }
		                        for ($i=0; $i < $null_stars;$i++) {
		                        	echo"<span class='fa fa-star-o text-yellow-800'></span>";
		                        }
		                        ?>
		                        </div>
		                        <div>
		                            <span class="fa fa-user"></span> <?php echo $schoolRating['ratingCount'];?> total votes
		                        </div>
		                    </div>
            			</div>
          			</section>
	          	<?php 
			    	}else{ 
				?>
					<section class="panel panel-default">
						<div class="panel-body">
						 Rating Not Available 		
                                                </div>
                                    </section>
				<?php } ?>
        		</div>
        		<div class="col-md-6">
                            <div class="panel panel-default" id="reviewBoard">
                            <?php 
                            $i = 0;
                            if(isset($reviewInfo) && !empty($reviewInfo)){
                                    foreach($reviewInfo as $key => $schoolReview){ //print_r($schoolReview);
                                        $i++;
                                    ?>
                                    <div class="panel panel-default review-panel">
                                        <div class="media">
                                            <div class="media-left">
                                            <img src="<?php echo $schoolReview["image"];?>" width="70" height="70" alt="<?php echo $schoolReview["firstName"];?>" class="img-circle media-object">
                                            <div class="text-center review-user-name"><?php echo $schoolReview["firstName"];?></div>
                                            </div>
                                            <div class="media-body">
                                            <p class="font-size-14"><strong><?php echo $schoolReview["title"];?></strong></p>
                                            <p>
                                                    <?php echo $schoolReview["review"];?>
                                            </p>
                                            </div>
                                        </div>
                                    </div>
                                
                            <?php 
                                    }
                                    if($i>4)
                                        echo "<div id='loadMore'>show more</div>";
                            }else{
                                    ?>
                                    <section class="panel panel-default">
                                            <div class="panel-body">
                                             0 Reviews		
                            </div>
                            </section>
                            <?php
                            }	
                            ?>
                            </div>
					
        		</div>
    		</div> <!-- container -->
   		</div> <!-- pane body -->
  	</div><!--  -->
</div>
<script>
$( document ).ready(function() {
    <?php if(isset($userRatingInfo)){
            foreach($userRatingInfo as $key => $schoolRating){
	    	$totalRatingCount++;
                if(isset($schoolRating["id"]) && $schoolRating["id"]>0){?> //edit 
                    $("#rate_star_<?php echo $schoolRating["catid"]?>_<?php echo $schoolRating["id"]?>").rating({ size:'md',showCaption:false,step:1});
                   
                <?php }else{ ?>      //add
                    $("#rate_star_<?php echo $schoolRating["catid"]?>_0").rating({ size:'md',showCaption:false,step:1});
            <?php }
            }
    }else{
        foreach($schoolRatingInfo as $key => $schoolRating){ ?>//add 
            $("#rate_star_<?php echo $schoolRating["catid"]?>_0").rating({ size:'md',showCaption:false,step:1});    
  <?php  }
    }?>          
    });

</script>