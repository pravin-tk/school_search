<div class="bg-white">
    <div class="container">
      	<h3 class="page-section-heading">Related schools</h3>
      	<div class="demo">
      	<?php if(isset($nearbySchool))
                  foreach ($nearbySchool as $key =>$school) {?>
        	<div class="item" style="width: 222px; padding-left: 15px;
                     padding-bottom: 15px; float: left; box-sizing: border-box;">
            	<div class="panel panel-default relative">
              		<div class="ribbon-heading text-h5 ribbon-default inline margin-none left absolute"><?php //echo $school['city'] ?></div>
              		<div class="cover hover overlay margin-none" style="height: 147px;">
                            <?php //if ($school['homeImage'] == ""){ ?>
                		<img src="<?php echo asset_url();?>img/vector-school-house-28931692.jpg" alt="location" class="img-responsive">
                                 <?php //}else{ ?> 
<!--                                <img src="<?php echo asset_url().$school['homeImage'];?>" alt="location" class="img-responsive">-->
                                <?php // }?>
                		<a  class="overlay overlay-full overlay-bg-black overlay-hover" href="schooldetailsTest" style="height: 147px;">
                  			<span class="v-center">
                        		<span class="btn btn-circle btn-white"><i class="fa fa-eye"></i></span>
                  			</span>
                		</a>
              		</div>
	              	<div class="panel-body">
                            <h4 class="margin-v-0-5" ><a href="" alt ="<?php echo $school['name'] ?>" title ="<?php echo $school['name'] ?>" ><?php echo substr($school['name'],0,15); ?>....</a></h4>
	                	<p class="small">
                                      <?php for($j=1;$j <= $school['rating'];$j++){ ?>
                                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                                    <?php } ?>
                                    <?php for($k=$j;$k<= 5;$k++){ ?>
                                            <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                    <?php } ?> 

	                	</p>
	                	<p><?php echo $school['localityName'] ?></p>
	                	<span class="label label-grey-100">Medium : </span><?php //echo $school['medium'] ?>
                                <span class="label label-grey-100">Vacant Seat :</span> <?php echo $school['vacantSeat'] ?>
                                <span class="label label-grey-100">Distance : </span><?php echo round($school['distance'],2) ?> kms.
<!--	                	<i class="small fa fa-fw icon-user-1" data-toggle="tooltip" ></i>-->
	              	</div>
         		</div>
       		</div>
        <?php } ?>
  		</div>
    	<br>
    </div>
</div>
<!-- Near By -->