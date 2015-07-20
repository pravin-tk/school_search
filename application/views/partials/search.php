<?php
if (isset ( $schools )) {
	foreach ( $schools as $key => $school ) {
?>

<div class="panel panel-default">
	<div class="panel-body">
		<div class="media media-clearfix-xs media-clearfix-sm">
			<div class="media-left">
				<p>
					<a href="<?php echo $base_url ?>index.php/home/schoolDetail/<?php echo $school['schoolId']?>/<?php echo $standardId; ?>">
                    <?php if($school['logo'] == ""){?>
                    	<img src="<?php echo asset_url(); ?>img/vector-school-house-28931692.jpg" alt="property" width="150" class="media-object">
                    <?php }else{?>
                        <img src="<?php echo $school['logo'];?>" alt="property" width="150" class="media-object">
                    <?php }?>
                    </a>
				</p>
				<div class="text-center small">
				<?php
					$ratingNumber = round ( $school ['rating'] );
					$decimal = $school ['rating'] - $ratingNumber;
					$unratedStars = 5 - $ratingNumber;
					if ($decimal >= 0.5) {
						$unratedStars = $unratedStars - 1;
					}
					for($i = 0; $i < $ratingNumber; $i ++) {
				?>
						<span class="fa fa-fw fa-star text-yellow-800"></span>
				<?php }?>
				<?php if($decimal >= 0.5) { ?>
						<span class="fa fa-fw fa-star-half-o text-yellow-800"></span> 
				<?php }?>
				<?php for ($i=0; $i < $unratedStars; $i++) {?>
				<span class="fa fa-fw fa-star-o text-yellow-800"></span>
				<?php }?>
				</div>
			</div>
			<div class="media-body">
				<div class="pull-right">
					<a class="text-primary" href=""><i class="fa fa-star text-yellow"></i>
						<strong><?php echo $school['rating'];?></strong></a> <a
						class="text-grey-400" href=""><i class="fa fa-heart-o fa-fw"></i></a>
				</div>
				<h4 class="media-heading margin-v-0-10">
					<a
						href="<?php echo $base_url ?>index.php/home/schoolDetail/<?php echo $school['schoolId']; ?>/<?php echo $standardId?>"><?php echo $school['name']?>
                                                    </a>
				</h4>
				<h5 class="margin-title"><?php echo ucwords($school['streetName'].", ".$school['localityName'].", ".$school['cityName']);?></h5>
				<p>
					<span class="label label-grey-100"><i
						class="fa fa-graduation-cap fa-fw"></i>Board : <?php echo $school['boardName']?></span>
					<span class="label label-grey-100"><i
						class="fa fa-fw icon fa-language"></i> Medium :<?php echo $school['mediums']?></span>
					<span class="label label-grey-100"><i class="fa fa-mercury "></i> Category :<?php echo $school['schoolCategory']?> </span>
				</p>
				<p>
					<span class="label label-grey-100"> <i class="fa fa-money"></i> <i class="fa fa-rupee"></i> 
					<?php
						if ($school ['totalFee'] > 100000)
							echo round ( $school ['totalFee'] / 100000, 3 ) . " LPA";
						else
							echo $school ['totalFee'] . " PA";
					?>
					</span> 
					<span class="label label-grey-100"> <i class="fa fa-road"></i> <?php echo round($school['distance'],2)?> Kms </span>
					<span class="label label-grey-100">
						<i class="fa fa-user-secret"></i> <?php echo $school['seats'];?> seats available
					</span>
				</p>
				<p>
					<span class="label label-grey-100"> <i class="fa fa-picture-o"></i> Gallery(<?php echo $school['galeryImages']?> </span> 
					<span class="label label-grey-100"> <i class="fa fa-comments"></i> Review(<?php echo $school['reviews']?> Reviews) </span>
				</p>
			</div>
		</div>
	</div>
</div>
<?php
	}
} else {
?>
<div>
Sorry do not have any school listed for your search criteria.
</div>
<?php }?>

