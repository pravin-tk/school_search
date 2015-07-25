<div class="col-md-12">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="text-center"><strong>Rating </strong></h3>
    </div>
   <div class="panel-body">
	 <div class="container">
        <div class="col-md-6">
        <?php         
	    if(isset($ratingInfo))
                            foreach($ratingInfo as $key => $schoolRating){
	    	?>
          <section class="panel panel-default">
            <div class="panel-body">
                		<div class="col-xs-3 col-md-3 text-center btn btn-primary btn-sm">
		          	      <?php echo $schoolRating['name']?>
		                </div>
		                 <div class="col-xs-4 col-md-4 text-center">
		                        <div class="rating">
		                        
		                        <?php 
		                        for($i=(6 - $schoolRating['rating']);$i>=1;$i--){
		                            echo "<span class='fa fa-star-o text-yellow-800'></span>";	
		                            }
		                        for ($i=$schoolRating['rating'];$i>=1;$i--) { 
		                            echo"<span class='fa fa-star text-yellow-800'></span>";
		                         } 
		                         
		                        ?>
		                        </div>
		                        <div>
		                            <span class="fa fa-user"></span>125888 total votes
		                        </div>
		                    </div>
		                    
            </div>
          </section>
          <?php }
		else{ ?>
			<section class="panel panel-default">
				<div class="panel-body">
				 Rating Not Available 		
            	</div>
           </section>
		<?php } ?>
        </div>
		<h4 class="text-center">Rate Us </h4>
		<input type="hidden" name="schoolId" id ="schoolId" value="<?php echo $basicInfo['schoolId'];?>"/>
	    <input type="hidden" name="userId" id="userId" value="<?php echo $basicInfo['schoolId'];?>">
		<form  id="rateusfrm">
		
		<?php 
		if(isset($ratingInfo))
		foreach($ratingInfo as $key => $schoolRating){
			?>
			<div class="col-md-6 text-center">
         
	                		<div class="col-md-3 text-center btn btn-primary btn-sm">
			          	      <?php echo $schoolRating['name']?>
			                </div>
			                 <div class="col-md-5 text-center">
			                        <div class="rating">
			                        
		   							<input id="<?php echo $schoolRating['catid']; ?>" name="<?php echo $schoolRating['catid']; ?>" class="rating" data-min="0" data-max="5" data-step="1"data-size="xs">
			                        </div>
			                 </div>
        </div>
        <br/><br/>
			<?php 
		}?>
		<br/>
        <div class="col-md-3 text-center">
           <input type="submit" id="rateUs" value =" Submit Rating"/>
        </div>
        </form>
    </div> <!-- container -->
   </div> <!-- pane body -->
   
  </div><!--  -->
   
</div>

