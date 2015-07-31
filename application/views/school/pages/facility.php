<?php
$activity= $otherInfo['facility']['activity'];
$infra= $otherInfo['facility']['infra'];
$safety= $otherInfo['facility']['safety'];
error_log(json_encode($activity),0);
error_log(json_encode($infra),0);
error_log(json_encode($safety),0);

$arractivity = array();
$arrsafety = array();
$arrinfra =  array();
foreach($activity as $activitykey => $activityvalue){
    $i = 0;
    foreach($activityvalue['items'] as $key=>$value ){
        $arractivity[$activityvalue['name']][$i]['id'] = $value['id'];
        $arractivity[$activityvalue['name']][$i]['name'] = $value['name'];
        $i++;
    }
}
foreach($safety as $safetykey => $safetyvalue){
    $i = 0;
    foreach($safetyvalue['items'] as $key=>$value ){
        $arrsafety[$safetyvalue['name']][$i]['id'] = $value['id'];
        $arrsafety[$safetyvalue['name']][$i]['name'] = $value['name'];
        $i++;
    }
}
foreach($infra as $infrakey => $infravalue){
    $i = 0;
    foreach($infravalue['items'] as $key=>$value ){
        $arrinfra[$infravalue['name']][$i]['id'] = $value['id'];
        $arrinfra[$infravalue['name']][$i]['name'] = $value['name'];
        $i++;
    }
}
?>


		<div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center"><strong>Facility </strong></h3>
                </div>
                <div class="panel-body address-bar-main">
				   	<div class="panel-body">
					 	<div class="container">
				        	<div class="col-md-12">
					            <?php if($arractivity)
					             	foreach($arractivity as $key => $value) {
					            ?>
				            	<section class="panel panel-default col-md-6 infra-col-md-6 card" style="margin-right:10px;">
					                <div class="panel-heading">
								      	<h4 class="text-left infra-heading"><?php echo $key;?> </h4>
								    </div>
					                <div class="panel-body">
					                    <div class="col-sm-12">
					                    <?php foreach($value as $itemkey => $itemvalue) {?>
						                    <div class="col-sm-4 text-center">
						                        <div>
						                        	<i class="fa fa-4x fa-building-o wow bounceIn marginleft" data-wow-delay=".2s"></i>
						                        </div>
						                        <p class="page-scroll" ><?php echo $itemvalue['name'];?></p>
						                    </div>
					                    <?php }?>
					                    </div>
					                </div>
				            	</section> 
				            	<?php }?>
				            
				            
					            <?php if($arrsafety)
					               	foreach($arrsafety as $key => $value) {
					            ?>
					            <section class="panel panel-default col-md-6 infra-col-md-6 card" style="margin-right:10px;">
					               	<div class="panel-heading">
								      	<h4 class="text-left infra-heading"><?php echo $key;?> </h4>
								    </div>
					                <div class="panel-body">
					                    <div class="col-sm-12">
					                    <?php foreach($value as $itemkey => $itemvalue) {?>
						                    <div class="col-sm-4 text-center">
						                        <div>
						                        	<i class="fa fa-4x fa-building-o wow bounceIn marginleft" data-wow-delay=".2s"></i>
						                        </div>
						                        <p class="page-scroll" ><?php echo $itemvalue['name'];?></p>
						                    </div>
					                    <?php }?>
					                    </div>
					                </div>
					            </section> 
					       		<?php }?>
				            	<?php if($arrinfra)
				                    foreach($arrinfra as $key => $value) {
				                ?>
				            	<section class="panel panel-default col-md-6 infra-col-md-6 card" style="margin-right:10px;">
				               		<div class="panel-heading">
							      		<h4 class="text-left infra-heading"><?php echo $key;?> </h4>
							    	</div>
				                	<div class="panel-body">
					                    <div class="col-sm-12">
					                    <?php foreach($value as $itemkey => $itemvalue) {?>
						                    <div class="col-sm-4 text-center">
						                        <div>
						                        	<i class="fa fa-4x fa-building-o wow bounceIn marginleft" data-wow-delay=".2s"></i>
						                        </div>
						                        <p class="page-scroll" ><?php echo $itemvalue['name'];?></p>
						                    </div>
					                    <?php }?>
					                    </div>
				                	</div>
				            	</section> 
				            	<?php }?>
				          
				          	</div>
				     	</div>
				 	</div>
            	</div>
         	</div>
     	</div>
