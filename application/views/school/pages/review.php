<div class="col-md-12">
  	<div class="panel panel-default">
	    <div class="panel-heading">
	      	<h3 class="text-center">
		      	<strong>Rating & Reviews </strong>
				<span class="btn btn-primary"><?php echo round($basicInfo['rating'],1);?></span>
			</h3>
	    </div>
   		<div class="panel-body">
	 		<div class="container">
        		<div class="col-md-6">
        		<?php 
        			$totalRating = 0;
        			$totalRatingCount = 0;
	    			if(isset($ratingInfo))
                    foreach($ratingInfo as $key => $schoolRating){
	    				$totalRatingCount++;
	    		?>
          			<section class="panel panel-default">
            			<div class="panel-body">
	                		<div class="col-xs-3 col-md-3 text-center">
			          	      <i class="fa fa-building-o fa-2x"></i>
			          	      <div class="infra-name">
			          	      <?php echo $schoolRating['name']?>
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
					<div class="panel panel-default">
						<?php
						if(isset($reviewInfo)){
						foreach($reviewInfo as $key => $schoolReview){
						?>
						<div class="panel panel-default review-panel">
							<div class="media">
								<div class="media-left">
									<img src="<?php echo $schoolReview["userRegistrationInfo"]["image"];?>" width="70" height="70" alt="<?php echo $schoolReview["userRegistrationInfo"]["firstName"];?>" class="img-circle media-object">
									<div class="text-center review-user-name"><?php echo $schoolReview["userRegistrationInfo"]["firstName"];?></div>
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
					 }else{
					 	?>
					 	<section class="panel panel-default">
						<div class="panel-body">
						 0 Review  		
		            	</div>
		           </section>
					 	<?php
					 }	
						?>
					</div>
					<!-- div>
						<input type="hidden" name="schoolId" id ="schoolId" value="<?php echo $basicInfo['schoolId'];?>"/>
		    			<input type="hidden" name="userId" id="userId" value="<?php echo $basicInfo['schoolId'];?>">
						<form  id="rateusfrm">
				
							<?php 
							if(isset($ratingInfo))
							foreach($ratingInfo as $key => $schoolRating){
							?>
								<div class="col-md-12 text-center">
				                	<div class="col-md-3 text-center btn btn-primary btn-sm">
						          	   	<?php echo $schoolRating['name']?>
						           	</div>
						            <div class="col-md-6 text-center">
						               	<div class="rating">
					   						<input id="<?php echo $schoolRating['catid']; ?>" name="<?php echo $schoolRating['catid']; ?>" class="rating" data-min="0" data-max="5" data-step="1"data-size="xs">
						                </div>
						         	</div>
			        			</div>
			        			<br/><br/>
							<?php 
							}
							?>
							<br/>
			        		<div class="col-md-3 text-center">
			           			<input type="submit" id="rateUs" value =" Submit Rating"/>
			        		</div>
		        		</form>
	        		</div> -->
        		</div>
    		</div> <!-- container -->
   		</div> <!-- pane body -->
  	</div><!--  -->
</div>

