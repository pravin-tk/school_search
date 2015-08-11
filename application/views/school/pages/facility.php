<?php
$activity= $otherInfo['facility']['activity'];
$infra= $otherInfo['facility']['infra'];
$safety= $otherInfo['facility']['safety'];

$arractivity = array();
$arrsafety = array();
$arrinfra =  array();
if(isset($activity))
    foreach($activity as $activitykey => $activityvalue){
        $i = 0;
        foreach($activityvalue['items'] as $key=>$value ){
            $arractivity[$activityvalue['name']][$i]['id'] = $value['id'];
            $arractivity[$activityvalue['name']][$i]['name'] = $value['name'];
            $i++;
        }
    }
if(isset($safety))    
foreach($safety as $safetykey => $safetyvalue){
    $i = 0;
    foreach($safetyvalue['items'] as $key=>$value ){
        $arrsafety[$safetyvalue['name']][$i]['id'] = $value['id'];
        $arrsafety[$safetyvalue['name']][$i]['name'] = $value['name'];
        $i++;
    }
}
if(isset($safety)) 
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
                <div class="panel-body">
				   	<div class="panel-body">
					 	<div class="container">
				        	<div class="col-md-12">
				            	<section class="panel panel-default col-md-12" style="margin-right:10px;">
					                <div class="panel-heading">
								      	<h4 class="text-left infra-heading"><?php //echo $key;?>School Activity </h4>
								    </div>
					                <div class="panel-body">
					                    <div class="col-sm-12">
					                    <?php if($arractivity)
							             	foreach($arractivity as $key => $value) {
							            ?>
					                    <?php foreach($value as $itemkey => $itemvalue) {?>
						                    <div class="col-sm-2 text-center">
						                        <div>
						                        	<i class="fa fa-4x fa-building-o wow bounceIn marginleft" data-wow-delay=".2s"></i>
						                        </div>
						                        <p class="page-scroll infra-item-name" ><?php echo $itemvalue['name'];?></p>
						                    </div>
					                    <?php }?>
					                    <?php }?>
					                    </div>
					                </div>
				            	</section> 
				            
				            
					            <section class="panel panel-default col-md-12" style="margin-right:10px;">
					               	<div class="panel-heading">
								      	<h4 class="text-left infra-heading"><?php //echo $key;?>School Safety </h4>
								    </div>
					                <div class="panel-body">
					                    <div class="col-sm-12">
					                    <?php if($arrsafety)
							               	foreach($arrsafety as $key => $value) {
							            ?>
					                    <?php foreach($value as $itemkey => $itemvalue) {?>
						                    <div class="col-sm-2 text-center">
						                        <div>
						                        	<i class="fa fa-4x fa-building-o wow bounceIn marginleft" data-wow-delay=".2s"></i>
						                        </div>
						                        <p class="page-scroll infra-item-name" ><?php echo $itemvalue['name'];?></p>
						                    </div>
					                    <?php }?>
					                    <?php }?>
					                    </div>
					                </div>
					            </section> 
				            	<section class="panel panel-default col-md-12" style="margin-right:10px;">
				               		<div class="panel-heading">
							      		<h4 class="text-left infra-heading"><?php //echo $key;?>School Infrastructure </h4>
							    	</div>
				                	<div class="panel-body">
					                    <div class="col-sm-12">
					                    <?php if($arrinfra)
						                    foreach($arrinfra as $key => $value) {
						                ?>
					                    <?php foreach($value as $itemkey => $itemvalue) {?>
						                    <div class="col-sm-2 text-center">
						                        <div>
						                        	<i class="fa fa-4x fa-building-o wow bounceIn marginleft" data-wow-delay=".2s"></i>
						                        </div>
						                        <p class="page-scroll infra-item-name" ><?php echo $itemvalue['name'];?></p>
						                    </div>
					                    <?php }?>
					                    <?php }?>
					                    </div>
				                	</div>
				            	</section> 
				          
				          	</div>
				     	</div>
				 	</div>
            	</div>
         	</div>
     	</div>
