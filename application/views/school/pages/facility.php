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
        <div class="col-md-8">
             <?php if($arractivity)
                    foreach($arractivity as $key => $value) {
                 ?>
            <section class="panel panel-default">
               
                <div class="panel-body">

                    <div class="col-xs-2 col-md-2 text-center btn btn-primary btn-sm">
                        <?php echo $key;?>
                    </div>
                    <div class="col-xs-6 col-md-6 text-center">
                        <?php foreach($value as $itemkey => $itemvalue) {?>
                        <div class="col-md-3 " ><i class="fa fa-2x fa-building-o wow bounceIn marginleft" data-wow-delay=".2s"></i><br/>
                            <p class="page-scroll" ><?php echo $itemvalue['name'];?></p>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </section> <?php }?>
            
            
            <?php if($arrsafety)
                    foreach($arrsafety as $key => $value) {
                 ?>
            <section class="panel panel-default">
               
                <div class="panel-body">

                    <div class="col-xs-2 col-md-2 text-center btn btn-primary btn-sm">
                        <?php echo $key;?>
                    </div>
                    <div class="col-xs-6 col-md-6 text-center">
                        <?php foreach($value as $itemkey => $itemvalue) {?>
                        <div class="col-md-3 " ><i class="fa fa-2x fa-building-o wow bounceIn marginleft" data-wow-delay=".2s"></i><br/>
                            <p class="page-scroll" ><?php echo $itemvalue['name'];?></p>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </section> <?php }?>
            <?php if($arrinfra)
                    foreach($arrinfra as $key => $value) {
                 ?>
            <section class="panel panel-default">
               
                <div class="panel-body">

                    <div class="col-xs-2 col-md-2 text-center btn btn-primary btn-sm">
                        <?php echo $key;?>
                    </div>
                    <div class="col-xs-6 col-md-6 text-center">
                        <?php foreach($value as $itemkey => $itemvalue) {?>
                        <div class="col-md-3 " ><i class="fa fa-2x fa-building-o wow bounceIn marginleft" data-wow-delay=".2s"></i><br/>
                            <p class="page-scroll" ><?php echo $itemvalue['name'];?></p>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </section> <?php }?>
          
<!--          <section class="panel panel-default">
            <div class="panel-body">
                          <div class="col-xs-2 col-md-2 text-center btn btn-primary btn-sm">
		               		High Tech
		                </div>  
		                <div class="col-xs-6 col-md-6 text-center">
		                    <div class="col-md-3 " ><i class="fa fa-2x fa-camera wow bounceIn marginleft" data-wow-delay=".2s"></i><br/>
	                		     <p class="page-scroll" >Robotics Lab</p>
	                		</div>
	                		<div class="col-md-3 " ><i class="fa fa-2x fa-book wow bounceIn marginleft" data-wow-delay=".2s"></i><br/>
	                		                							<p class="page-scroll">Digital Lab</p>
	                		</div>
	                		<div class="col-md-3 " ><i class="fa fa-2x fa-wifi wow bounceIn marginleft" data-wow-delay=".2s"></i><br/>
	                		                							<p class="page-scroll">Wi-Fi</p>
	                		</div>
	                		<div class="col-md-3 " ><i class="fa fa-2x fa-location-arrow wow bounceIn marginleft" data-wow-delay=".2s"></i><br/>
	                		                							<p class="page-scroll">GPS</p>
	                		</div>
		                </div>
            </div>
          </section>-->
<!--          <section class="panel panel-default">
            <div class="panel-body">
                              <div class="col-xs-2 col-md-2 text-center btn btn-primary btn-sm">
		               		 Sports
		                </div>  
		                <div class="col-xs-6 col-md-6 text-center">
		                    <div class="col-md-3 " ><i class="fa fa-2x fa-camera wow bounceIn marginleft" data-wow-delay=".2s"></i><br/>
	                		    <p class="page-scroll">Cricket</p>
	                		</div>
	                		<div class="col-md-3 " ><i class="fa fa-2x fa-camera wow bounceIn marginleft" data-wow-delay=".2s"></i><br/>
	                		    <p class="page-scroll">Table Tennis</p>
	                		</div>
	                		<div class="col-md-3 " ><i class="fa fa-2x fa-camera wow bounceIn marginleft" data-wow-delay=".2s"></i><br/>
	                		    <p class="page-scroll">Athletics</p>
	                		</div>
	                		<div class="col-md-3 " ><i class="fa fa-2x fa-music wow bounceIn marginleft" data-wow-delay=".2s"></i><br/>
	                		    <p class="page-scroll">FootBall</p>
	                		</div>
		                     
		                 </div>
            </div>
          </section>-->
<!--          <section class="panel panel-default">
            <div class="panel-body">
                   <div class="col-xs-2 col-md-2 text-center btn btn-primary btn-sm">
		            Culturals 
		           </div>  
		           <div class="col-xs-6 col-md-6 text-center">
		             <div class="col-md-3 " ><i class="fa fa-2x fa-camera wow bounceIn marginleft" data-wow-delay=".2s"></i><br/>
	                  <p class="page-scroll" href="">Dance</p>
	                 </div>
	                 <div class="col-md-3 " ><i class="fa fa-2x fa-camera wow bounceIn marginleft" data-wow-delay=".2s"></i><br/>
	                		        <p class="page-scroll" href="">Music</p>
	              	 </div>
		           </div>
		    </div>              
          </section>-->
<!--          <section class="panel panel-default">
            <div class="panel-body">
               <div class="col-xs-2 col-md-2 text-center btn btn-primary btn-sm">
		       Misceleaneous
		       </div>  
		       <div class="col-xs-6 col-md-6 text-center">
		          <div class="col-md-3 " >
		           <i class="fa fa-2x fa-camera wow bounceIn marginleft" data-wow-delay=".2s"></i><br/>
	                <p class="page-scroll" href="">Internal Transport</p>
	              </div>
	              <div class="col-md-3 " ><i class="fa fa-2x fa-camera wow bounceIn marginleft" data-wow-delay=".2s"></i><br/>
	               <p class="page-scroll" href="">Guest House</p>
	              </div>               
		       </div>
            </div></section>-->
            </div>
        </div>
    </div>
	               
	                
                </div>
            </div>
        </div>
