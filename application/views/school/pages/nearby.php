<div class="bg-white">
    <div class="container">
      	<h3 class="page-section-heading">Related schools</h3>
      	<div class="demo">
          
      	<?php
                
                if(isset($nearbySchool))
                  foreach ($nearbySchool as $key =>$school) {
                        $id = $school['schoolId'];
                        $cityname =  "pune";// preg_replace('/[^A-Za-z0-9\-]/', '', strtolower(str_replace(" ","-",$school['cityName']))); 
                        $localityname = preg_replace('/[^A-Za-z0-9\-]/', '', strtolower(str_replace(" ","-",$school['localityName']))); 
                        $schoolname = preg_replace('/[^A-Za-z0-9\-]/', '', strtolower(str_replace(" ","-",$school['name']))); 
                        $urllink2 =   $base_url.$cityname."/".$localityname."/".$schoolname."-".$id."/detail";
                       
            
            ?>
        	<div class="item" style="width: 222px; padding-left: 15px;
                     padding-bottom: 15px; float: left; box-sizing: border-box;">
            	<div class="panel panel-default relative">
              		<div class="ribbon-heading text-h5 ribbon-default inline margin-none left absolute"><?php //echo $school['city'] ?></div>
              		<div class="cover hover overlay margin-none" style="height: 147px;">
                            <?php if ($school['homeImage'] == ""){ ?>
                		        <img src="<?php echo asset_url();?>img/vector-school-house-28931692.jpg" alt="location" class="lazy img-responsive">
                                 <?php }else{ 
                                 $headers = get_headers($timeline['image']);
	                                 if($headers[0]=='HTTP/1.1 200 OK'){ 
	                                echo "<img src='$school[homeImage]' alt='location' class='lazy img-responsive'>";
	                                
	                                 }else{
									echo "<img src='".asset_url()."img/icons/3-512.png' alt='location' class='lazy img-responsive'>";
	                                 } 
	                                 	
                                 }?>
                                <a  class="overlay overlay-full overlay-bg-black overlay-hover" href="<?php echo $urllink2;?>" style="height: 147px;">
                  			<span class="v-center">
                        		<span class="btn btn-circle btn-white"><i class="fa fa-eye"></i></span>
                  			</span>
                		</a>
              		</div>
	              	<div class="panel-body">
<!--                            <h4 class="margin-v-0-5" >-->
                                <div class="infra-name">
                                    <a href="<?php echo $urllink2;?>" alt ="<?php echo $school['name'] ?>" title ="<?php echo $school['name'] ?>" ><strong><?php echo substr($school['name'],0,15); ?>....</strong></a>
                                </div>
<!--                            </h4>-->
	                	<p class="small">
                                      <?php for($j=1;$j <= $school['rating'];$j++){ ?>
                                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                                    <?php } ?>
                                    <?php for($k=$j;$k<= 5;$k++){ ?>
                                            <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                    <?php } ?> 

	                	</p>
	                	<?php echo $school['localityName'] ?>
                                <p><span class="label label-grey-100">Medium : </span>&nbsp;<?php echo $school['mediums'] ?></p>
                                
                                <p> <span class="label label-grey-100">Distance : </span>&nbsp;<?php echo round($school['distance'],2) ?> kms.</p>
                                <p> <span class="label label-grey-100">Vacant Seat :</span>&nbsp;<?php echo $school['vacantSeat'] ?></p>
	              	</div>
         		</div>
       		</div>
        <?php } ?>
  		</div>
    	<br>
    </div>
</div>
<!-- Near By -->
