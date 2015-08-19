<?php 
                        if(isset($schools)) {
                            foreach($schools as $key => $school){
                                $arrLinks = explode("/",$permlink);
                                $schoolName = strtolower($school['name']);
                                $schoolName = str_replace(" ", "-", $schoolName);
                                $schoolName = str_replace("'", "", $schoolName);
                                $schoolName = preg_replace('/[^A-Za-z0-9\-]/', '', $schoolName);
                                $urllink = $base_url.$arrLinks[0]."/".$arrLinks[1]."/". $schoolName."-".$school['schoolId']."/".$arrLinks[2];
                       
                        ?>

                            <div class="panel panel-default" id="list-search-result-<?php echo $school['schoolId']?>">
								<div class="panel-body">
									<div class="media media-clearfix-xs media-clearfix-sm">
										<div class="media-left">
											<p id="list-image">
												<a href="<?php echo $urllink?>" target="_blank">
                                                    <?php if($school['logo'] == ""){?>
                                                    <img src="<?php echo asset_url(); ?>img/vector-school-house-28931692.jpg" alt="property" width="150" height="135" class="media-object">
                                                    <?php }else{?>
                                                    <img src="<?php echo $school['logo'];?>" alt="property" width="150" height="135" class="media-object">
                                                     <?php }?>
                                                </a>
                                                <span class="icon-heart-list" id="iconheartlist-<?php echo $school['schoolId']?>">
                                                <i class="fa fa-heart-o"></i> 
                                                 </span>
                                                </p>
                                                </div>
                                    <div class="media-body">
                                            <div class="col-sm-3" id="padding-left-08">
                                        <div class="list-top-line">
                                                <div class="school-name-text margin-title text-capitalize">
                                                        <a href="<?php echo $urllink;?>" target="_blank">
                                                                <?php echo $school['name']?>
			                                            </a>
		                                            </div>
		                                            <div class="street-locality">
		                                            	<i class="fa fa-map-marker"></i> <?php echo ucwords($school['localityName'].", ".$school['cityName']);?>
		                                            </div>
	                                            </div>
	                                            <div class="detail-label">
	                                            	Category
	                                            </div>
	                                            <div class="detail-value">
	                                            	<?php echo $school['schoolClassification']?>
	                                            </div>
	                                            <?php if (strtolower($school['boardName']) != "na") {?>
	                                            <div class="detail-label">
	                                            	Board
	                                            </div>
	                                            <div class="detail-value">
	                                            	<?php echo $school['boardName'];?>
	                                            </div>
	                                            <?php } else {?>
	                                            <div class="detail-label">
	                                            	Teaching Approach
	                                            </div>
	                                            <div class="detail-value">
	                                            	<?php echo $school['teachingApproach'];?>
	                                            </div>
	                                            <?php }?>
                                                                                            <a class="btn btn-primary list-primary-button" href="<?php echo $urllink?>/#gallery" target="_blank">
													<i class="fa fa-picture-o"></i> Gallery (<?php echo $school['galeryImages']?>)
	                                            </a>
											</div>
											<div class="col-sm-3" id="padding-left-08">
												<div class="list-top-line">
													<div class="detail-label">
														Play Group
		                                            </div>
		                                            <div>
		                                            (<i class="fa fa-user-plus"></i> <?php echo $school['seats'];?> available)
		                                            </div>
		                                        </div>
	                                            <div class="detail-label">
	                                            	Medium
	                                            </div>
	                                            <div class="detail-value">
	                                            	<?php echo $school['mediums']?>
	                                            </div>
	                                            <div class="detail-label">
	                                            	Type
	                                            </div>
	                                            <div class="detail-value">
	                                            	<?php echo $school['schoolCategory']?>
	                                            </div>
	                                            <a class="btn btn-primary list-primary-button" href="<?php echo $urllink?>/#visualtour" target="_blank">
							<i class="fa fa-dot-circle-o"></i> 360<sup>0</sup> View
	                                            </a>
											</div>
											<div class="col-sm-3" id="padding-left-08">
												<div class="list-top-line">
													<div>
														<span class="label label-grey-100">
															<i class="fa fa-road"></i> <?php echo round($school['distance'],2)?> Kms
														</span>
		                                            </div>
		                                        </div>
		                                        <div class="detail-label">
	                                            	Management
	                                            </div>
	                                            <div class="detail-value">
	                                            	<?php echo $school['schoolType']?>
	                                            </div>
	                                            <div class="detail-label">
	                                            	Fee(Per Annum)
	                                            </div>
	                                            <div class="detail-value">
	                                            	<i class="fa fa-rupee"></i>
		                                            <?php 
														if($school['totalFee'] > 1000)
															echo round($school['totalFee']/1000,2)."K PA";
														else 
															echo $school['totalFee']." PA";
													?> (approx.)
	                                            </div>
                                                                                            <a class="btn btn-primary list-primary-button" href="<?php echo $urllink?>/#review" target="_blank">
													<i class="fa fa-comments"></i> Reviews (<?php echo $school['reviews']?>)
	                                            </a>
											</div>
											<div class="col-sm-3">
												<div class="list-top-line text-center">
													<div class="margin-title btn btn-primary">
														<?php echo number_format((float)$school['rating'], 1, '.', '');?>
													</div>
													<div class="text-center">
													<?php 
														$ratingNumber = round($school['rating']);
														$decimal = $school['rating'] - $ratingNumber;
														$unratedStars = 5 - $ratingNumber;
														if($decimal >= 0.5){
															$unratedStars = $unratedStars - 1;
														}
														for ($i=0; $i < $ratingNumber; $i++){
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
													<div class="text-center">(0 votes)</div>
												</div>
												<div class="text-center">
													&nbsp;
												</div>
												<div class="share-school">
													<div class="text-center detail-value padding-top-05">
														<i class="fa fa-share-alt fa-2x"></i>
													</div>
												</div>
												<div class="text-center">
													<a class="btn btn-primary list-primary-button" href="<?php echo $urllink?>/#contact" target="_blank">
														<i class="fa fa-phone"></i> Contact
		                                            </a>
	                                            </div>
											</div>
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

