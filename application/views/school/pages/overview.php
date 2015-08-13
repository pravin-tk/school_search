 <style>
<!--
.highlight-panel-body {
    padding-top:10px;
    padding-bottom:10px;
    padding-left:0px;
    padding-right:0px;
    background-color:#fff;
    font-size:14px;
}
.highlight-panel-body .col-md-6{
	margin-top:5px;
	margin-bottom:0px;
}
.panel-col-6-section{
	margin-right:5px;
	margin-bottom:5px;
}
.timelineslider .slide-bar .panel{
}
.timelineslider{
	padding-bottom:10px;
	border: 1px solid #e5e5e5;
}
.slider-nav {
    background-image: url(../img/icons/dot.gif) center repeat-x;
}
#dates{background: url(../../../../assets/img/icons/dot.gif) center repeat-x;margin-bottom:30px;width:100%;height:40px;text-align:center;}
#dates li{display: inline;margin-left: 80px;border-radius: 50px;background:#1c7d74;min-height:80px;}

.btn-circle btn{}
.btn-circle a{color:#fff;padding:10px;}
-->
</style>
<div class="panel panel-default">
  	<div class="panel-heading">
       	<h3 class="text-center"><strong>Overview </strong></h3>
    </div>
    <div class="panel-body" style="padding-bottom:0px;">
		<div class="container">
		  	<div class="panel">
		  		<div class="overview-heading">
		      		<h4 class="text-left">Basic Information</h4>
		    	</div>
		    	<div class="panel-body highlight-panel-body col-md-12" style="margin-left:50px;">
			  		<div class="overview-heading-title">
			  			<div class="col-md-3 text-left">
		  					Category
		  				</div>
		  				<div class="col-md-3">
		  					Medium
		  				</div>
		  				<div class="col-md-3">
		  					Type
		  				</div>
		  				<div class="col-md-3 text-left">
		  					Board
		  				</div>
			  		</div>
			  		<div class="highlight-panel-body-title col-md-12" style="padding-bottom:10px;">
			  			<div class="col-md-3">
			  				<div>
			  					<?php echo $basicInfo['schoolClassification']?>
			  				</div>
			  			</div>
			  			<div class="col-md-3">
			  				<div>
			  					<?php echo $basicInfo['mediums']?>
			  				</div>
			  			</div>
			  			<div class="col-md-3">
			  				<div>
			  					<?php echo $basicInfo['schoolCategory']?>
			  				</div>
			  			</div>
			  			<div class="col-md-3">
			  				<div>
			  					<?php echo $basicInfo['boardName']?>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="overview-heading-title">
		  				<div class="col-md-3">
		  					Management
		  				</div>
		  				<div class="col-md-3">
		  					Fee
		  				</div>
		  				<div class="col-md-3">
		  					Campus Size
		  				</div>
		  				<div class="col-md-3">
		  					Student:Teacher Ratio
		  				</div>
			  		</div>
			  		<div class="highlight-panel-body-title col-md-12">
			  			<div class="col-md-3">
			  				<div>
			  					<?php echo $basicInfo['schoolType']?>
			  				</div>
			  			</div>
			  			<div class="col-md-3">
			  				<div>
			  					<i class="fa fa-rupee"></i> <?php echo $basicInfo['totalFee']?>
			  				</div>
			  			</div>
			  			<div class="col-md-3">
			  				<div>
			  					<?php echo $basicInfo['campusSize']?> <?php echo $basicInfo['unitName']?>
			  				</div>
			  			</div>
			  			<div class="col-md-3">
			  				<div>
			  					10:<?php echo round(($basicInfo['teachers']/$basicInfo['students']),1)*10;?>
			  				</div>
			  			</div>
			  		</div>
			  	</div>
		  	</div>
		</div>
	</div>
	<div class="panel-body" style="padding-top:10px;">
		<div class="container">
		  	<div class="panel">
		   		<div class="overview-heading">
		      		<h4 class="text-left">Highlights</h4>
		    	</div>
		   		<div class="panel-body highlight-panel-body col-md-12">
		     
		          <?php 
		          if(isset($overviewInfo)){
			          foreach ($overviewInfo as $key => $value){
			          ?>
			          	<div class="col-md-6">
				          	<section class="text-left panel-col-6-section" style="border-radius:30px;">
				                <li class="">
									<?php echo $value['name']?>
				                </li>
				            </section> 
			            </div>
			          	<?php
			          } }else{ ?>
		               <section class="panel panel-default">
						<div class="panel-body">
						 Highlights Not Available 		
		            	</div>
		           </section>
		           <?php } ?>
		  		</div>
		  	</div>
		</div>
		<div class="container">
			<div class="panel">
			<div class="overview-heading">
			 	<h4 class="text-left">Timeline </h4>
			</div>
			</div>
		   <?php 
			$i = 0;	
			$timelineInfo = $otherInfo['schoolTimelineData']; ?>        
						
			<div class="timelineslider col-md-12" id="timelineslider" style="padding-top: 25px;padding-left: 45px;">
		       <?php 
		       if(isset($timelineInfo)){
			       foreach($timelineInfo as $key=>$timeline)
			       {?>
			        <div class="item  slide-bar col-md-4" style="padding-bottom:15px;padding-right:45px;box-sizing: border-box;">
			            <div class="panel panel-default relative">
<!-- 			              <div class="ribbon-heading text-h5 ribbon-default inline margin-none left absolute"> -->
			                 <?php 	//echo $timeline['year'];?>
<!-- 			              </div> -->
			              <div class="cover hover overlay margin-none" style="height: 240px;">
			                <?php 
			                if($timeline['image']==null){
							echo"<img data-original='".asset_url()."img/icons/default-thumb.png'  alt='location' class='lazy img-responsive' style='height:230px;width:100%;'>";
			                }else {
			                $headers = get_headers($timeline['image']);
                			if($headers[0]=='HTTP/1.1 200 OK'){
								?>
							<img data-original="<?php echo $timeline['image'] ?>"  alt="location" class="lazy img-responsive" style="height:230px;width:100%;">
								<?php 
						       }else{
						       	echo"<img data-original='".asset_url()."img/icons/default-thumb.png'  alt='location' class='lazy img-responsive' style='height:230px;width:100%;'>";
						       }
						    }
						       ?>
			              </div>
			              <div class="panel-body">
			                <h5 class="margin-v-0-5 timeline-milestone-title"><?php echo $timeline["milestones"][0]['title'];?></h5>
			              </div>
			            </div>
			            <div>
			           		<hr class="school-timeline-progress">
			            	<div style="padding-left:0px;margin-left:0px;margin-top:10px;margin-bottom:0px;">
			            		<i class="fa fa-dot-circle-o fa-2x text-primary"></i>
			            	</div>
				            <div style="font-size:14px;font-weight:bold;padding-left:0px;margin-left:0px;padding-top:5px;margin-top:-10px;margin-bottom:0px;">
				            	<?php echo $timeline['year'];?>
				            </div>
			            </div>
			          </div>
			        <?php } 
			       }else{
			       	?>
			       	<section class="panel panel-default">
						<div class="panel-body">
						 Data Not Available 		
		            	</div>
		           </section>
			      <?php } ?>
		  	</div>
		  	<div class="col-md-12">
		  	
			<ul id="dates">
			<?php if(isset($timelineInfo))
			       foreach($timelineInfo as $key=>$timeline)
			       {?>
			<li class="btn btn-primary btn-circle"><a class="button-slick" data-role="none"><?php echo $timeline['year']; ?></a></li>
			<?php } ?>
			
			</ul>
		  	</div>
		  	
		</div>
		
		<div class="container">
		  	<div class="panel">
		   		<div class="overview-heading">
		      		<h4 class="text-left"><img src="<?php echo asset_url();?>img/icons/vector_333_04-24.png" />School & Student Achievements</h4>
		    	</div>
		   		<div class="panel-body highlight-panel-body col-md-12">
		     
		          <?php 
                          if(isset($otherInfo)){
                          foreach ($otherInfo['schoolAchievements'] as $key => $value){
		          ?>
		          <div class="col-md-12">
			          	<section class="text-left panel-col-6-section" style="border-radius:30px;">
			          		<div class="col-md-1">
				                <div><?php echo $value['batch']?></div>
			                </div>
			                <!-- div class="col-md-2" style="text-transform:capitalize;">
								<?php echo $value['name']?>
			                </div> -->
			                <div class="col-md-11" style="text-transform:capitalize;">
			                	<i class="fa fa-user"></i> <strong><?php echo $value['name']?></strong> - <?php echo $value['achievements']?>
			                </div>
			            </section> 
		            </div>
		          	<?php
		          } 
                          }else{?>
                             Data not available
                          <?php }?> 
		         
		  		</div>
		  	</div>
		</div>
	</div>
	</div>
</div>
<!-- end of timeline -->
