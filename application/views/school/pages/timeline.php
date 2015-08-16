<?php ;
$i = 0;
$timelineInfo = $otherInfo['schoolTimelineData'];
?>        

	<div class="col-md-12" id="navtimeline">
      	<div class="panel panel-default">
          	<div class="panel-heading">
              	<h3 class="text-center"><strong>Timeline </strong></h3>
            </div>
            <div class="panel-body" id="cd-timeline">
				<div class="container">
     				<div id="timeline">
						<ul id="issues">
						<?php 
						foreach($timelineInfo as $key=>$timeline )
						{
						echo "<li id='".$timeline['year']."' >";
						?>
							<img src='<?php echo $timeline['image']; ?>' width='150' height='150' />
							<h1><?php echo $timeline['year'];?></h1>
							<div class="timeline-inverted">
								<div class="timeline-panel">
						            <div class="timeline-heading">
						              <h4 class="timeline-title"><?php echo $timeline['title'];?></h4>
						            </div>
            						<div class="timeline-body">
										<p><?php //echo $milestone['milestoneDesc'];?> </p>
                        			</div>
						      	</div>
							</div>
						</li>
						<?php } ?>

						</ul>
						<ul id="dates">
						<?php     
						foreach($timelineInfo as $key=>$timeline )
						{
							echo "<li><a href='".$timeline['year']."'>".$timeline['year']."</a></li>";
							
						}?>
						</ul>
					<div id="grad_left"></div>
						<div id="grad_right"></div>
							<a href="#" id="next">+</a>
							<a href="#" id="prev">-</a>
					</div>
				</div>
	      	</div>
      	</div>
  	</div>
