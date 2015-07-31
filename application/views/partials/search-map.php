<?php
if (isset ( $schools )) {
	foreach ( $schools as $key => $school ) {
		
		?>
<div class="panel panel-default"
	id="map-search-result-<?php echo $school['schoolId']?>">
	<div class="panel-body">
		<div class="media media-clearfix-xs media-clearfix-sm">
			<div class="media-left">
				<p>
					<a href="<?php echo $base_url ?>index.php/home/schoolDetail/<?php echo $school['schoolId']?>/<?php echo $standardId; ?>">
                   	<?php if($school['logo'] == ""){?>
                        <img src="<?php echo asset_url(); ?>img/vector-school-house-28931692.jpg" alt="property" width="120" height="100" class="media-object">
                  	<?php }else{?>
                        <img src="<?php echo $school['logo'];?>" alt="property" width="120" height="100" class="media-object">
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
					<span class="text-grey-400 sort-listed-map-schools"
						id="sortlistedmaphearts-<?php echo $school['schoolId']; ?>"><i
						class="fa fa-heart-o fa-fw"></i></span>
				</div>
				<h4 class="media-heading margin-v-0-10">
					<a
						href="<?php echo $base_url ?>index.php/home/schoolDetail/<?php echo $school['schoolId']; ?>/<?php echo $standardId?>"><?php echo $school['name']?>
                                                    </a>
				</h4>
				<h5 class="margin-title text-capitalize"><?php echo ucwords($school['localityName'].", ".$school['cityName']);?></h5>
				<p>
					<span class="label-100"><?php echo $school['boardName']?>,<?php echo $school['mediums']?></span>
				</p>
				<p>
					<span class="fee label-100"> <i class="fa fa-rupee"></i> 
					<?php
						if ($school ['totalFee'] > 1000)
							echo round ( $school ['totalFee'] / 1000, 2 ) . "K PA";
						else
							echo $school ['totalFee'] . " PA";
					?>
					</span>
				</p>
			</div>
		</div>
	</div>
</div>
<?php
	}
}
?>
                 	