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
}
.slider-nav {
    background-image: url(../img/icons/dot.gif) center repeat-x;
}
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
		  					Management
		  				</div>
		  				<div class="col-md-3">
		  					Fee
		  				</div>
			  		</div>
			  		<div class="highlight-panel-body-title col-md-12">
			  			<div class="col-md-3">
			  				<div>
			  					<?php echo $basicInfo['mediums']?>
			  				</div>
			  			</div>
			  			<div class="col-md-3">
			  				<div>
			  					<i class="fa fa-rupee"></i> <?php echo $basicInfo['totalFee']?>
			  				</div>
			  			</div>
			  			<div class="col-md-3">
			  				<div>
			  					<?php echo $basicInfo['mediums']?>
			  				</div>
			  			</div>
			  			<div class="col-md-3">
			  				<div>
			  					<i class="fa fa-rupee"></i> <?php echo $basicInfo['totalFee']?>
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
		     
		          <?php foreach ($overviewInfo as $key => $value){
		          ?>
		          	<div class="col-md-6">
			          	<section class="text-left panel-col-6-section" style="border-radius:30px;">
			                <li class="">
								<?php echo $value['name']?>
			                </li>
			            </section> 
		            </div>
		          	<?php
		          } ?>
		         
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
						
			<div class="timelineslider col-md-12" id="timelineslider">
		       <?php foreach($timelineInfo as $key=>$timeline)
		       {?>
		        <div class="item  slide-bar col-md-4" style="padding-bottom:15px;padding-right:45px;box-sizing: border-box;">
		            <div class="panel panel-default relative">
		              <div class="ribbon-heading text-h5 ribbon-default inline margin-none left absolute">
		                 <?php 	echo $timeline['year'];?>
		              </div>
		              <div class="cover hover overlay margin-none" style="height: 240px;">
		                <img src="<?php echo $timeline['image'] ?>"  alt="location" class="img-responsive" style="height:230px;width:100%;">
		              </div>
		              <div class="panel-body">
		                <h4 class="margin-v-0-5"><?php echo $timeline['title'];?></h4>
		              </div>
		            </div>
		          </div>
		        <?php } ?>
		  	</div>
		</div>
		<div class="container">
		  	<div class="panel">
		   		<div class="overview-heading">
		      		<h4 class="text-left">School & Student Achievements</h4>
		    	</div>
		   		<div class="panel-body highlight-panel-body col-md-12">
		     
		          <?php foreach ($otherInfo['schoolAchievements'] as $key => $value){
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
		          } ?>
		         
		  		</div>
		  	</div>
		</div>
	</div>
	</div>
</div>
<!-- end of timeline -->
