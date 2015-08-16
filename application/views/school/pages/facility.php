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
            $arractivity[$activityvalue['name']][$i]['image'] = $value['image'];
            $i++;
        }
    }
if(isset($safety))    
foreach($safety as $safetykey => $safetyvalue){
    $i = 0;
    foreach($safetyvalue['items'] as $key=>$value ){
        $arrsafety[$safetyvalue['name']][$i]['id'] = $value['id'];
        $arrsafety[$safetyvalue['name']][$i]['name'] = $value['name'];
        $arrsafety[$safetyvalue['name']][$i]['image'] = $value['image'];
        $i++;
    }
}
if(isset($safety)) 
foreach($infra as $infrakey => $infravalue){
    $i = 0;
    foreach($infravalue['items'] as $key=>$value ){
        $arrinfra[$infravalue['name']][$i]['id'] = $value['id'];
        $arrinfra[$infravalue['name']][$i]['name'] = $value['name'];
        $arrinfra[$infravalue['name']][$i]['image'] = $value['image'];
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
				        		 <?php if(count($arractivity) > 0) {?>
				            	<section class="panel panel-default col-md-12" style="margin-right:10px;">
					                <div class="panel-heading">
								      	<h4 class="text-left infra-heading">School Activity </h4>
								    </div>
					                <div class="panel-body">
					                    <div class="col-sm-12">
					                    <?php if($arractivity)
							             	foreach($arractivity as $key => $value) {
							            ?>
					                    <?php foreach($value as $itemkey => $itemvalue) {?>
						                    <div class="col-sm-2 text-center">
						                        <div>
						                        <?php if($itemvalue["image"] != null || $itemvalue["image"] != "") {?>
						                        	<?php $headers = get_headers($itemvalue["image"]);
                									if($headers[0]=='HTTP/1.1 200 OK'){?>
						                        		<img class="fa-4x facility-icons marginleft" src="<?php echo $itemvalue["image"];?>"/>
						                        	<?php }else{ ?>
						                       			<img class='marginleft' src='<?php echo asset_url();?>img/icons/no-image.png'/>
						                        	<?php }?>
						                        <?php } else { ?>
						                        	<img class='marginleft' src='<?php echo asset_url();?>img/icons/no-image.png'/>
						                        <?php }?>
						                        </div>
						                        <p class="page-scroll infra-item-name" ><?php echo $itemvalue['name'];?></p>
						                    </div>
					                    <?php }?>
					                    <?php }?>
					                    </div>
					                </div>
				            	</section> 
				            	<?php }?>
				            	<?php if(count($arrsafety) > 0) {?>
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
						                        <?php if($itemvalue["image"] != null || $itemvalue["image"] != "") {?>
						                        	<?php $headers = get_headers($itemvalue["image"]);
                										if($headers[0]=='HTTP/1.1 200 OK'){?>
						                        		<img class="fa-4x facility-icons marginleft" src="<?php echo $itemvalue['image'];?>">
						                        	<?php }else{ ?>
						                       			<img class='marginleft' src='<?php echo asset_url();?>img/icons/no-image.png'/>
						                        	<?php }?>
						                        <?php } else { ?>
						                        	<img class='marginleft' src='<?php echo asset_url();?>img/icons/no-image.png'/>
						                        <?php } ?>
						                        </div>
						                        <p class="page-scroll infra-item-name" ><?php echo $itemvalue['name'];?></p>
						                    </div>
					                    <?php }?>
					                    <?php }?>
					                    </div>
					                </div>
					            </section> 
					            <?php }?>
					            <?php if(count($arrinfra) > 0) {?>
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
						                        <?php if($itemvalue["image"] != null || $itemvalue["image"] != "") {?>
						                        	<?php $headers = get_headers($itemvalue["image"]);
                										if($headers[0]=='HTTP/1.1 200 OK'){?>
						                        		<img class="fa-4x facility-icons marginleft" src="<?php echo $itemvalue['image'];?>">
						                        	<?php }else{ ?>
						                       			<img class='marginleft' src='<?php echo asset_url();?>img/icons/no-image.png'/> 
						                        	<?php }?>
						                        <?php } else { ?>
						                        	<img class='marginleft' src='<?php echo asset_url();?>img/icons/no-image.png'/>
						                        <?php }?>
						                        </div>
						                        <p class="page-scroll infra-item-name" ><?php echo $itemvalue['name'];?></p>
						                    </div>
					                    <?php }?>
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
     	