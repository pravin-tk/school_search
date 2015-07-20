<?php
$schools = $schoolList;
$schoolMedium = $filtersList['mediumFilter'];
$schoolBoard = $filtersList['boardFilter'];
$schoolType = $filtersList['typeFilter'];
$schoolCategory = $filtersList['categoryFilter'];
$activities = $filtersList['activityFilter'];
$safety = $filtersList['safetyFilter'];
$infrastructure = $filtersList['infraFilter'];
$classification = $filtersList['classificationFilter'];

?>

<style>
#map-canvas {
	width: 90%;
	height: 350px;
	margin-top: 1%;
	margin-bottom: 2%;
	position: absolute;
}

.dropdown-menu {
	max-height: 200px;
	overflow-y: auto;
	overflow-x: hidden;
	z-index: 700000;
}

.panel .panel-default {
	max-height: auto;
	overflow-y: auto;
	overflow-x: hidden;
}
#search_header.affix{
	width:74%;
	top:50px;
	z-index:10000;
}
@media (min-width: 999px) and (max-width: 1050px){
	#search_header.affix{
		width:75%;
		top:50px;
		z-index:10000;
	}
}
@media (min-width: 1051px) and (max-width: 1100px){
	#search_header.affix{
		width:74%;
		top:50px;
		z-index:10000;
	}
}
@media (min-width: 1101px) and (max-width: 1200px){
	#search_header.affix{
		width:72%;
		top:50px;
		z-index:10000;
	}
}
#sortFields checkbox {
	border:1px solid green;
	background-color:green;
}
</style>

<!-- uiView:  -->
<div data-ui-view="" class="ui-view-main ng-scope">
	<!-- uiView:  -->
	<div ui-view="" class="ui-view-main ng-scope">
		<!-- Fixed navbar -->
		<div id="content">
			<section class="cover overlay height-200 height-270-xs">
				<img
					src="<?php echo asset_url(); ?>img/school/photodune-186709-residential-street-m.jpg"
					alt="cover">
				<div class="overlay overlay-full overlay-bg-black bg-transparent">
					<div class="container">
						<br/>
						<h1 class="text-h1 text-overlay">School</h1>
					</div>
				</div>
				<div class="overlay overlay-bg-black">
					<div class="v-bottom">
						<div class="container">
							<p class="text-overlay">
								You searched for school near <?php echo $location; ?>. <span
									class="hidden-sm hidden-xs"></span>
							</p>
						</div>
					</div>
				</div>
			</section>

			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<form id="frmSch">
							<input type="hidden" name="latitude" id="latitude"
								value="<?php echo $latitude;?>" /> <input type="hidden"
								name="longitude" id="longitude" value="<?php echo $longitude;?>" />
							<input type="hidden" name="standardId" id="standardId"
								value="<?php echo $standardId;?>" />
							<div class="panel panel-default" data-toggle="panel-collapse"
								data-open="false">
								<div class="panel-heading panel-collapse-trigger collapse in"
									data-toggle="collapse"
									data-target="#6d98aa69-0d44-7a1a-96d2-5bd350287a73"
									aria-expanded="true" style="">
									<h4 class="panel-title">
										<i class="text-success fa fa-filter"></i> Search Filters
									</h4>
								</div>

								<div id="6d98aa69-0d44-7a1a-96d2-5bd350287a73" class="">
									<div class="panel-body">
										<div class="form-group margin-none">
											<label class="label-block" for="check-out"><i
												class="fa fa-graduation-cap"></i> School Board</label>
											<div class="input-group">
                                        	<?php 
                                            if(isset($schoolBoard)) {  
                                              	foreach ($schoolBoard as $key => $value) { ?>
                                                	<div class="col-sm-6">
													<input type="checkbox" name="schoolboardcheckbox"
														value="<?php echo $value['id']; ?>" /> <?php echo $value['name']; ?>
                                                    </div>
                                          	<?php 
                                            	}
                                            }
                                            ?>
                                        </div>
										</div>
										<div class="form-group margin-none">
											<label class="label-block" for="check-out"><i
												class="fa fa-language"></i> Teaching Medium</label>
											<div class="input-group">
                                        	<?php 
                                            if(isset($schoolMedium)){
                                              	foreach ($schoolMedium as $key => $value) { ?>
	                                              	<div class="col-sm-6">
													<input type="checkbox" name="schoolmediumcheckbox"
														value="<?php echo $value['id']; ?>" /> <?php echo $value['name']; ?>
	                                                </div>
                                            <?php
                                             	} 
                                            }
                                          	?>
                                        </div>
										</div>

										<div class="form-group margin-none">
											<label for="category"><i class="fa fa-mercury"></i> School
												Type:</label>
											<div class="input-group bootstrap-touchspin">
                                          	<?php 
                                            if(isset($schoolCategory)) {
                                              	foreach ($schoolCategory as $key => $value) { ?>
                                                	<div class="col-sm-6">
													<input type="checkbox" name="schoolcategorycheckbox"
														value="<?php echo $value['id']; ?>" /> <?php echo $value['name']; ?>
                                                    </div>
                                          	<?php 
                                              	}
                                            } 
                                           	?>
                                        </div>
										</div>

										<div class="form-group margin-none">
											<label for="check-out"><i class="fa fa-users"></i> School
												Management</label>
											<div class="input-group">
                                         	<?php 
                                            if(isset($schoolType)) {
                                          		foreach ($schoolType as $key => $value) { ?>
                                                    <div
													class="col-sm-6">
													<input type="checkbox" name="schooltypecheckbox"
														value="<?php echo $value['id']; ?>" /> <?php echo $value['name']; ?>
                                                    </div>
                                           	<?php 
                                            	}
                                            }
                                            ?>
                                        </div>
										</div>
										<div class="form-group margin-none">
											<label for="category"><i class="fa fa-tags"></i> School
												Category:</label>
											<div class="input-group bootstrap-touchspin">
                                        	<?php 
                                            if(isset($classification)) {
                                            	foreach ($classification as $key => $value) { ?>
                                                    <div
													class="col-sm-6">
													<input type="checkbox" name="schoolclassificationcheckbox"
														value="<?php echo $value['id']; ?>" /> <?php echo $value['name']; ?>
                                                    </div>
                                         	<?php 
                                            	}
                                            } 
                                            ?>
                                        </div>
										</div>
										
<!-- 										<div class="col-xs-6"> -->
<!-- 											<input type="button" class="btn btn-block btn-success" -->
<!-- 												type="button" name="btnSch" id="btnSch" value="Search Now!" onclick="filterResults()" /> -->
<!-- 										</div> -->
<!-- 										<div class="col-xs-6"> -->
<!-- 											<a href="" class="btn btn-link"><i class="fa fa-fw fa-times"></i> -->
<!-- 												reset filters</a> -->
<!-- 										</div> -->
<!-- 									</div> -->
<!-- 								</div> -->
<!-- 							</div> -->

<!-- 							<div class="panel panel-default" data-toggle="panel-collapse" -->
<!-- 								data-open="true"> -->
<!-- 								<div class="panel-heading panel-collapse-trigger collapse in" -->
<!-- 									data-toggle="collapse" -->
<!-- 									data-target="#2577c4d2-088a-9d72-d555-13d644a5a25b" aria-expanded="true" style="">  -->
<!-- 									<h4 class="panel-title"> -->
<!-- 										<i class="text-success fa fa-filter"></i> .. More Filters -->
<!-- 									</h4> -->
<!-- 								</div> -->

<!-- 								<div id="2577c4d2-088a-9d72-d555-13d644a5a25b" -->
<!-- 									class="collapse in"> -->
<!-- 									<div class="panel-body"> -->
										<div id="moreFilters-panel" style="display:none;">
										<div class="form-group">
											<div class="input-group bootstrap-touchspin">
                                            	<?php 
                                                if($activities){
	                                              	foreach ($activities as $key => $items) { ?>
	                                              		<div class="col-sm-12">
													<label for="activities"><?php echo $items['categoryName']; ?></label>
												</div>
	                                                    <?php foreach ($items['filter'] as $key1 => $itemvalue) { ?>
	                                                      	<div
													class="col-sm-12">
													<input type="checkbox" name="activitycheckbox"
														value="<?php echo $itemvalue['id']; ?>" /> <?php echo $itemvalue['name']; ?>
					                                       	</div>
	                                                    <?php } ?>
	                                           	<?php 
	                                             	}
	                                            } 
	                                           	?>
                                            </div>
										</div>
										<div class="form-group">
											<div class="input-group bootstrap-touchspin">
			                                  	<?php 
				                                if($infrastructure) {
					                             	foreach ($infrastructure as $key => $items) { ?>
					                             	<div class="col-sm-12">
													<label for="activities"><?php echo $items['categoryName']; ?></label>
												</div>
	                                                	<?php foreach ($items['filter'] as $key1 => $itemvalue) { ?>
	                                                        <div
													class="col-sm-12">
													<input type="checkbox" name="infracheckbox"
														value="<?php echo $itemvalue['id']; ?>" /> <?php echo $itemvalue['name']; ?>
					                                       	</div>
	                                                    <?php } ?>
                                               	<?php 
				                                  	}
				                                }
				                                ?>
                                            </div>
										</div>
										<div class="form-group">
											<div class="input-group bootstrap-touchspin">
                                        	<?php 
                                        	if($safety) {
                                            	foreach ($safety as $key => $items) { ?>
                                                <div class="col-sm-12">
													<label for="activities"><?php echo $items['categoryName']; ?></label>
												</div>
                                                    <?php foreach ($items["filter"] as $key1 => $itemvalue) { ?>
                                                        <div
													class="col-sm-12">
													<input type="checkbox" name="safetycheckbox"
														value="<?php echo $itemvalue['id']; ?>" /> <?php echo $itemvalue['name']; ?>
					                                   	</div>
                                                    <?php } ?>

                                        	<?php 
                                            	}
                                        	} 
                                        	?>
                                            </div>
                                            </div>
                                            </div>
                                            <br/><br/>
											<div class="col-xs-6">
												<input type="button" class="btn btn-block btn-success"
													type="button" name="btnSch" id="btnSch" value="Search Now!"
													onclick="filterResults()" />
											</div>
											<div class="col-xs-6">
												<a href="javascript:resetFilters();" class="btn btn-link"><i class="fa fa-fw fa-times"></i>
													reset filters</a>
											</div>
											<div class="col-xs-6" id="moreFilters">
												<a href="javascript:moreFilters()" class="btn btn-link"><i class="fa fa-fw fa-ellipsis-h"></i>
													More filters</a>
											</div>
											<br>
											<br>
										<div class="collapse" id="lodging" aria-expanded="false">
											<br>
										</div>
										<br/><br/>
									</div>
								</div>
							</div>
							<br/><br/>
							<br/>

<!-- 							<div class="row text-center"> -->
<!-- 								<div class="col-xs-6"> -->
<!-- 									<input type="button" class="btn btn-block btn-success" -->
<!-- 										type="button" name="btnSch" id="btnSch" value="Search Now!" onclick="filterResults()" /> -->
<!-- 								</div> -->
<!-- 								<div class="col-xs-6"> -->
<!-- 									<a href="" class="btn btn-link"><i class="fa fa-fw fa-times"></i> -->
<!-- 										reset filters</a> -->
<!-- 								</div> -->
<!-- 							</div> -->
							<br>
						</form>
					</div>
					<div class="col-md-9 panel panel-default">

						<div class="row panel-heading" id="search_header">
							<div class="col-xs-4">
								<h4>
									<span class="text-primary"><?php if(isset($schools)){echo count($schools);}?></span>
									Results
								</h4>
							</div>
							<input type="hidden" name="classFee" id="classFee" value=""/>
							<input type="hidden" name="distance" id="distance" value=""/>
							<input type="hidden" name="rating" id="rating" value=""/>
							<input type="hidden" name="seats" id="seats" value=""/>
							<div class="col-xs-8 text-right">
								<span class="btn btn-primary" onclick="sortSchool('classFee');" id="classFee-button">
									Fee <i class="fa fa-sort-amount-asc"></i>
								</span>
								<span class="btn btn-primary" onclick="sortSchool('distance');" id="distance-button">
									Distance <i class="fa fa-sort-amount-asc"></i>
								</span>
								<span class="btn btn-primary" onclick="sortSchool('rating');" id="rating-button">
									Rating <i class="fa fa-sort-amount-asc"></i>
								</span>
								<span class="btn btn-primary" onclick="sortSchool('seats');" id="seats-button">
									Seats <i class="fa fa-sort-amount-asc"></i>
								</span>
								<span class="btn btn-primary" onclick="sortClear();" id="seats-button">
									Clear <i class="fa fa-times-circle"></i>
								</span>
								<div class="btn-group display-inline-block">

									<a class="btn btn-primary active" href="search"><i
										class="fa fa-list"></i></a> <a class="btn btn-primary"
										href="grid"><i class="fa fa-th"></i></a>

								</div>
							</div>
						</div>
						<br>

						<!-- Map  -->
						<div class="panel panel-default" data-toggle="panel-collapse"
							data-open="true" id="map_window">
							<div class="panel-heading panel-collapse-trigger collapse in"
								data-toggle="collapse"
								data-target="#1e5da4fb-8e34-7fbb-2b79-e722a89153e4"
								aria-expanded="true">
								<h4 class="panel-title">Map View</h4>
							</div>

							<div id="1e5da4fb-8e34-7fbb-2b79-e722a89153e4" class="collapse">
								<div class="panel-body relative height-400"
									style="width: 100%; height: 100%; position: absolute;">
									<div style="clear: both;">
										<div id="map-canvas"
											style="border: ridge #34C6C3; border-width: 0 6px 6px 6px;"></div>
									</div>
									<div class="infobox-wrapper" id="infobox-wrapper"
										style="width: 300px;">
										<div id="infobox" style="width: 300px;">
											<div id="infobox-text"
												style="color: #000000; text-align: center;"
												style="width:300px;">
												<span id="ins-drag">
													<div id='schoolimg' style='float: left; width: "200px;'></div>
													<div id='schooltext' style='float: right;width="100px;'></div>
													<br>
												</span> <span id="err-text" style="font-weight: bold;"></span>
												<br> <a id="marker_link" class='btn-orange' href=""> View
													School </a> <br />
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Map end -->
						<div id="schresult">
                        <?php 
                        if(isset($schools)) {
                            foreach($schools as $key => $school){
                        
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
										</div>
										<div class="media-body">
											<div class="pull-right">
												<a class="text-primary" href=""><i class="fa fa-star text-yellow"></i> <strong><?php echo $school['rating'];?></strong></a> 
												<a class="text-grey-400" href=""><i class="fa fa-heart-o fa-fw"></i></a>
											</div>
											<h4 class="media-heading margin-v-0-10">
												<a href="<?php echo $base_url ?>index.php/home/schoolDetail/<?php echo $school['schoolId']; ?>/<?php echo $standardId?>"><?php echo $school['name']?>
                                                    </a>
											</h4>
											<h5 class="margin-title"><?php echo ucwords($school['streetName'].", ".$school['localityName'].", ".$school['cityName']);?></h5>
											<p>
												<span class="label label-grey-100"><i
													class="fa fa-graduation-cap fa-fw"></i>Board : <?php echo $school['boardName']?></span>
												<span class="label label-grey-100"><i
													class="fa fa-fw icon fa-language"></i> Medium :<?php echo $school['mediums']?></span>
												<span class="label label-grey-100"><i
													class="fa fa-mercury "></i> Category :<?php echo $school['schoolCategory']?> </span>
											</p>
											<p>
												<span class="label label-grey-100">
													<i class="fa fa-money"></i>  <i class="fa fa-rupee"></i> 
													<?php 
													if($school['totalFee'] > 100000)
														echo round($school['totalFee']/100000,3)." LPA";
													else 
														echo $school['totalFee']." PA";
													?>
												</span>
												<span class="label label-grey-100">
													<i class="fa fa-road"></i> <?php echo round($school['distance'],2)?> Kms
												</span>
												<span class="label label-grey-100">
													<i class="fa fa-user-secret"></i> <?php echo $school['seats'];?> seats available
												</span>
											</p>
											<p>
												<span class="label label-grey-100">
													<i class="fa fa-picture-o"></i> Gallery(<?php echo $school['galeryImages']?> Photos)
												</span>
												<span class="label label-grey-100">
													<i class="fa fa-comments"></i> Review(<?php echo $school['reviews']?> Reviews)
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
                      	</div>
						<br/><br/>
					</div>
				</div>
			</div>
		</div>
<script type="text/javascript">
$("#map_window").click(function() {
   	initialize();
});   
var base_url = '<?php echo $base_url;?>'
function filterResults() {
  	var boardType = "";
    var schoolType = "";
    var mediumType = "";
    var categoryType = "";
    var activityType = "";
    var infraType = "";
    var safetyType = "";
    var classificationType = "";
    $('input[name="schoolboardcheckbox"]:checked').each(function() { 
		if(boardType == ""){
			boardType = $(this).val();
		} else {
			boardType += "," + $(this).val();
		}
   	});
    $('input[name="schoolmediumcheckbox"]:checked').each(function() { 
		if(mediumType == ""){
			mediumType = $(this).val();
		} else {
			mediumType += "," + $(this).val();
		}
   	});
    $('input[name="schoolcategorycheckbox"]:checked').each(function() { 
		if(categoryType == ""){
			categoryType = $(this).val();
		} else {
			categoryType += "," + $(this).val();
		}
   	});
    $('input[name="schooltypecheckbox"]:checked').each(function() { 
		if(schoolType == ""){
			schoolType = $(this).val();
		} else {
			schoolType += "," + $(this).val();
		}
  	});
    $('input[name="schoolclassificationcheckbox"]:checked').each(function() { 
		if(classificationType == ""){
			classificationType = $(this).val();
		} else {
			classificationType += "," + $(this).val();
		}
   	});
    $('input[name="activitycheckbox"]:checked').each(function() { 
		if(activityType == ""){
			activityType = $(this).val();
		} else {
			activityType += "," + $(this).val();
		}
  	});
    $('input[name="infracheckbox"]:checked').each(function() { 
		if(infraType == ""){
			infraType = $(this).val();
		} else {
			infraType += "," + $(this).val();
		}
   	});
    $('input[name="safetycheckbox"]:checked').each(function() { 
		if(safetyType == ""){
			safetyType = $(this).val();
		} else {
			safetyType += "," + $(this).val();
		}
  	});
    $('#sortFields option:selected').each(function() {
        schoolType += $(this).val() + ",";
	});
   
    $.post(base_url+"index.php/home/schoolJSON",
    	{
        	latitude: $("#latitude").val(),
        	longitude: $("#longitude").val(),
        	standardId: $("#standardId").val(),
        	boardId: boardType,
        	mediumId: mediumType,
        	typeId: schoolType,
        	safetyId: safetyType,
        	infraId: infraType,
        	activityId: activityType,
        	classificationId: classificationType	
        },function(response){
        	$("#schresult").html(response.html);
        },
        'json'
    );
}

function sortSchool(sortFilter) {
	var boardType = "";
    var schoolType = "";
    var mediumType = "";
    var categoryType = "";
    var activityType = "";
    var infraType = "";
    var safetyType = "";
    var classificationType = "";
    var classFee = "";
    var rating = "";
    var distance = "";
    var seats = "";
    
	$("#"+sortFilter+"-button").addClass("active");
	
	if (parseInt($("#classFee").val()) == 0) {
		classFee = "desc";
	} else if (parseInt($("#classFee").val()) == 1) {
		classFee = "asc";
	}
	if (parseInt($("#distance").val()) == 0) {
		distance = "desc";
	} else if (parseInt($("#distance").val()) == 1) {
		distance = "asc";
	}
	if (parseInt($("#rating").val()) == 0) {
		rating = "desc";
	} else if (parseInt($("#rating").val()) == 1) {
		rating = "asc";
	}
	if (parseInt($("#seats").val()) == 0) {
		seats = "desc";
	} else if (parseInt($("#seats").val()) == 1) {
		seats = "asc";
	}
	
	if (sortFilter == "classFee") {
		if (parseInt($("#"+sortFilter).val()) == 0 || $("#"+sortFilter).val() == "") {
			$("#"+sortFilter+"-button").html("Fee <i class='fa fa-sort-amount-asc'></i>");
			$("#"+sortFilter).val("1");
			classFee = "asc";
		} else if (parseInt($("#"+sortFilter).val()) == 1) {
			$("#"+sortFilter+"-button").html("Fee <i class='fa fa-sort-amount-desc'></i>");
			$("#"+sortFilter).val("0");
			classFee = "desc";
		}
	} else if(sortFilter == "distance") {
		if (parseInt($("#"+sortFilter).val()) == 0 || $("#"+sortFilter).val() == "") {
			$("#"+sortFilter+"-button").html("Distance <i class='fa fa-sort-amount-asc'></i>");
			$("#"+sortFilter).val("1");
			distance = "asc";
		} else if (parseInt($("#"+sortFilter).val()) == 1) {
			$("#"+sortFilter+"-button").html("Distance <i class='fa fa-sort-amount-desc'></i>");
			$("#"+sortFilter).val("0");
			distance = "desc";
		}
	} else if(sortFilter == "rating") {
		if (parseInt($("#"+sortFilter).val()) == 0 || $("#"+sortFilter).val() == "") {
			$("#"+sortFilter+"-button").html("Rating <i class='fa fa-sort-amount-asc'></i>");
			$("#"+sortFilter).val("1");
			rating = "asc";
		} else if (parseInt($("#"+sortFilter).val()) == 1) {
			$("#"+sortFilter+"-button").html("Rating <i class='fa fa-sort-amount-desc'></i>");
			$("#"+sortFilter).val("0");
			rating = "desc";
		}
	} else if(sortFilter == "seats") {
		if (parseInt($("#"+sortFilter).val()) == 0 || $("#"+sortFilter).val() == "") {
			$("#"+sortFilter+"-button").html("Seats <i class='fa fa-sort-amount-asc'></i>");
			$("#"+sortFilter).val("1");
			seats = "asc";
		} else if (parseInt($("#"+sortFilter).val()) == 1) {
			$("#"+sortFilter+"-button").html("Seats <i class='fa fa-sort-amount-desc'></i>");
			$("#"+sortFilter).val("0");
			seats = "desc";
		}
	}
	
    $('input[name="schoolboardcheckbox"]:checked').each(function() { 
		if(boardType == ""){
			boardType = $(this).val();
		} else {
			boardType += "," + $(this).val();
		}
   	});
    $('input[name="schoolmediumcheckbox"]:checked').each(function() { 
		if(mediumType == ""){
			mediumType = $(this).val();
		} else {
			mediumType += "," + $(this).val();
		}
   	});
    $('input[name="schoolcategorycheckbox"]:checked').each(function() { 
		if(categoryType == ""){
			categoryType = $(this).val();
		} else {
			categoryType += "," + $(this).val();
		}
   	});
    $('input[name="schooltypecheckbox"]:checked').each(function() { 
		if(schoolType == ""){
			schoolType = $(this).val();
		} else {
			schoolType += "," + $(this).val();
		}
  	});
    $('input[name="schoolclassificationcheckbox"]:checked').each(function() { 
		if(classificationType == ""){
			classificationType = $(this).val();
		} else {
			classificationType += "," + $(this).val();
		}
   	});
    $('input[name="activitycheckbox"]:checked').each(function() { 
		if(activityType == ""){
			activityType = $(this).val();
		} else {
			activityType += "," + $(this).val();
		}
  	});
    $('input[name="infracheckbox"]:checked').each(function() { 
		if(infraType == ""){
			infraType = $(this).val();
		} else {
			infraType += "," + $(this).val();
		}
   	});
    $('input[name="safetycheckbox"]:checked').each(function() { 
		if(safetyType == ""){
			safetyType = $(this).val();
		} else {
			safetyType += "," + $(this).val();
		}
  	});
   
    $.post(base_url+"index.php/home/schoolJSON",
    	{
        	latitude: $("#latitude").val(),
        	longitude: $("#longitude").val(),
        	standardId: $("#standardId").val(),
        	boardId: boardType,
        	mediumId: mediumType,
        	typeId: schoolType,
        	safetyId: safetyType,
        	infraId: infraType,
        	activityId: activityType,
        	classificationId: classificationType,
        	classFee: classFee,
        	distance: distance,
        	rating: rating,
        	seats: seats	
        },function(response){
        	$("#schresult").html(response.html);
        },
        'json'
    );
}

function sortClear(){
	$("#classFee").val("");
	$("#distance").val("");
	$("#rating").val("");
	$("#seats").val("");
	$("#classFee-button").html("Fees <i class='fa fa-sort-amount-asc'></i>");
	$("#rating-button").html("Rating <i class='fa fa-sort-amount-asc'></i>");
	$("#distance-button").html("Distance <i class='fa fa-sort-amount-asc'></i>");
	$("#seats-button").html("Seats <i class='fa fa-sort-amount-asc'></i>");
	filterResults();
}

function moreFilters(){
	$("#moreFilters-panel").show();
	$("#moreFilters").html("<a href='javascript:lessFilters()' class='btn btn-link'><i class='fa fa-fw fa-ellipsis-h'></i> Less filters</a>");
}

function lessFilters(){
	$("#moreFilters-panel").hide();
	$("#moreFilters").html("<a href='javascript:moreFilters()' class='btn btn-link'><i class='fa fa-fw fa-ellipsis-h'></i> More filters</a>");
}

function resetFilters(){
	$('input:checkbox').removeAttr('checked');
	filterResults();
}

  function initialize() {
   
    var ulat = $("#latitude").val();
    var ulng = $("#longitude").val();
    var bounds = new google.maps.LatLngBounds();
    var mapCanvas = document.getElementById('map-canvas');
    var mapOptions = {
      center: new google.maps.LatLng(ulat, ulng),
      zoom: 12,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
  	var map = new google.maps.Map(mapCanvas, mapOptions);
    var icon_user = {
    	url: "//tkstatic.in/frontend/assets/images/user-marker.png", // url
       	size: new google.maps.Size(20, 40),
       	origin: new google.maps.Point(0, 0),
       	anchor: new google.maps.Point(15, 30),
       	scaledSize: new google.maps.Size(20,40)
  	};

    infobox = new google.maps.InfoWindow({
	   	content: document.getElementById("infobox"),
	    disableAutoPan: false,
	    maxWidth: 300,
	    minHight: 50,
	    zIndex: null,	
	    boxStyle: {
	        width: "300px",
	        height: "100px",
	        padding: 0,
	    },
	    infoBoxClearance: new google.maps.Size(1, 1),
	    buttons:{close:{show:4}}
	});

   	<?php 
    if(isset($schools)) {
      	foreach($schools as $key => $school){
    ?>
        var txt<?php echo $school['schoolId']?> =  "<?php echo $school['name']?> , <?php echo $school['streetName']?>,<?php echo $school['localityName']?>,<?php echo $school['cityName']?>      "; 
        var marker<?php echo $school['schoolId']?> = new google.maps.Marker({
            map: map,
            draggable: false,
            animation: google.maps.Animation.DROP,
            position: new google.maps.LatLng(<?php echo $school['latitude']?>, <?php echo $school['longitude']?>),
            icon:icon_user
        });
        marker = marker<?php echo $school['schoolId']?>;
        bounds.extend(marker.position);
        google.maps.event.addListener(marker<?php echo $school['schoolId']?>, 'click', function(marker, i) {
            document.getElementById('schooltext').innerHTML =   txt<?php echo $school['schoolId']?>; 
            <?php if($school['logo']==""){?>
                document.getElementById('schoolimg').innerHTML =  "<img src='http://localhost/school-proj/assets/img/vector-school-house-28931692.jpg' style='width:50px;height:50px;'>";
            <?php } else {?>
            document.getElementById('schoolimg').innerHTML =  "<img src='<?php echo $school['logo']?>' style='width:50px;height:50px;'>";
            <?php }?>
            document.getElementById('marker_link').href = base_url + "index.php/home/schoolDetail/<?php echo $school['schoolId']?>";
            infobox.open(map,marker<?php echo $school['schoolId']?>);
        });
        
        google.maps.event.addListener(marker<?php echo $school['schoolId']?>, 'mouseover', function(marker, i) {
            document.getElementById('schooltext').innerHTML =   txt<?php echo $school['schoolId']?>; 
            <?php if($school['logo']==""){?>
                document.getElementById('schoolimg').innerHTML =  "<img src='http://localhost/school-proj/assets/img/vector-school-house-28931692.jpg' style='width:50px;height:50px;'>";
            <?php } else {?>
            document.getElementById('schoolimg').innerHTML =  "<img src='<?php echo $school['logo']?>' style='width:50px;height:50px;'>";
            <?php }?>
            document.getElementById('marker_link').href = base_url + "index.php/home/schoolDetail/<?php echo $school['schoolId']?>";
            infobox.open(map,marker<?php echo $school['schoolId']?>);
        });

   	<?php 
		}
	}
   	?>
        map.fitBounds(bounds);
        document.getElementById('map-canvas').style = "border: ridge #34C6C3; border-width:6px 6px 6px 6px;"
        var listener = google.maps.event.addListener(map, "idle", function () {
         	map.setZoom(14);
         	google.maps.event.removeListener(listener);
		});
        map.setCenter(new google.maps.LatLng(ulat, ulng));
  	}
 	//google.maps.event.addDomListener(window, 'load', initialize);
    
</script>