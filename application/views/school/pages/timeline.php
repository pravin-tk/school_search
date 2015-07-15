<?php ;
$i = 0;
$timelineInfo = $otherInfo['schoolTimelineData'];
?>        

<div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center"><strong>Overview </strong></h3>
                </div>
                <div class="panel-body" id="cd-timeline">
					<div class="container">
   
    <ul class="timeline">
        <?php if(isset($timelineInfo))
                foreach($timelineInfo as $key => $timeline) {
                    $milestoneInfo = $timeline['milestones'];
                    $i++;
                    if($i%2 == 0) $class_inverted = "timeline-inverted" ; 
                    else $class_inverted = "";
                    
        ?>
      <li class="<?php echo $class_inverted; ?>">
          <div class="timeline-badge"><?php echo $timeline['year'] ?></div>
          <div class="timeline-panel">
            <?php foreach($milestoneInfo as $key1 => $milestone){ ?>
            <div class="timeline-heading">
              <h4 class="timeline-title"><?php echo $milestone['title'] ?></h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
            </div>
            <div class="timeline-body">
				<p><?php echo $milestone['milestoneDesc'] ?> </p>
            </div>
            <?php } ?>
              <img src="<?php echo $timeline['image'] ?>" width="100%" height="70%">
          </div>
        </li>
        
        
        <?php 
          }?>
        <!--<li>
          <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Mussum ipsum cacilds</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
            </div>
            <div class="timeline-body">
				<p>Started PGDBM </p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Mussum ipsum cacilds</h4>
            </div>
            <div class="timeline-body">
				<p>Started PGDBM </p>
				<p>Started PGDBM </p>
				            </div>
          </div>
        </li>
        <li>
          <div class="timeline-badge danger"><i class="glyphicon glyphicon-credit-card"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">May 2014</h4>
            </div>
            <div class="timeline-body">
				<p>Started PGDBM </p>
                        </div>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Oct 2012</h4>
            </div>
            <div class="timeline-body">
				<p>Started PGDBM </p>
                        </div>
          </div>
        </li>
        <li>
          <div class="timeline-badge info"><i class="glyphicon glyphicon-floppy-disk"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">may 2013</h4>
            </div>
            <div class="timeline-body">
				<p>Best School Award </p>
                          <hr>
              <div class="btn-group">
                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                  <i class="glyphicon glyphicon-cog"></i> <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Jan 2013</h4>
            </div>
            <div class="timeline-body">
				<p>100% result in 10th and 12th </p>
                        </div>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Jan 2000</h4>
            </div>
            <div class="timeline-body">
				<p>Started New English School </p>
                        </div>
          </div>
        </li>-->
    </ul>
</div>
	             </div>
            </div>
         </div>
