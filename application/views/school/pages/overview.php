 <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="text-center"><strong>Overview </strong></h3>
    </div>
    <div class="panel-heading">
      <h5 class="text-left"><strong>Highlights </strong></h5>
    </div>
   <div class="panel-body"style="width: 50%;">
     
          <?php 
          if(isset($overviewInfo))
          foreach ($overviewInfo as $key => $value){
          ?>
          	<section class="panel panel-default text-left"style="border-radius:30;">
               
                <div class="panel-body">
					<?php echo $value['name']?>
                </div>
            </section> 
          	<?php
          } ?>
         
   </div>
  <!--  timeline  -->
  
	  <div class="panel-heading"style="border-bottom:none; ">
		 <h5 class="text-left"><strong>Timeline </strong></h5>
	  </div>
  <div class="container">
	
	   <?php 
		$i = 0;	
		$timelineInfo = $otherInfo['schoolTimelineData']; ?>        
				
	<div class="timelineslider">
       <?php
       if(isset($timelineInfo))
         foreach($timelineInfo as $key=>$timeline)
             {?>
        <div class="item" style="width: 222px; padding-left: 15px; padding-bottom: 15px; float: left; box-sizing: border-box;">
            <div class="panel panel-default relative">
              <div class="ribbon-heading text-h5 ribbon-default inline margin-none left absolute">
                 <?php 	echo $timeline['year'];?>
              </div>
              <div class="cover hover overlay margin-none" style="height: 147px;">
                <img src="<?php $timeline['year'] ?>"  alt="location" class="img-responsive">
              </div>
              <div class="panel-body">
                <h4 class="margin-v-0-5"><?php echo $timeline['year'];?></h4>
                <p>R.R.Shinde junior college.</p>
                <?php foreach ($timeline['milestones'] as $key=>$milestone) {
	   			?> 
	   			<h4 class="label-grey-100"><?php echo $milestone['title'];?></h4>
                <span class="label-black"><?php echo $milestone['milestoneDesc'];?></span>
                <?php } ?>
<!--                 <a  class="btn btn-primary btn-circle absolute bottom right" href="schooldetailsTest"></a> -->
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
              
      <?php 
	$i = 0;	
	$timelineInfo = $otherInfo['schoolTimelineData']; ?>        
				
	<div class="slider-nav">
       <?php
            if(isset($timelineInfo))
            foreach($timelineInfo as $key=>$timeline)
                {?>
            <div class="relative timelinebackground">
              <div class="ribbon-heading text-h5 ribbon-color btn-circle absolute bottom right">
                 <?php 	echo $timeline['year'];?>
              </div>
              <div class="panel-body">
              </div>
            </div>
        <?php } ?>
      </div>
              

	</div>

	<!-- timeline -->
	

</div>

<!-- end of highlights -->
