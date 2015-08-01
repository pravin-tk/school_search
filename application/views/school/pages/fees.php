<div class="col-md-12">
  	<div class="panel panel-default">
	    <div class="panel-heading">
	      <h3 class="text-center"><strong>Fees </strong></h3>
	    </div>
		<div class="panel-body address-bar-main">
		   <div class="container">
				<div class="flipster col-md-12">
				    <ul style="width:100%;" class="fee-panel-ul">
					    <?php  
					    if (isset($feeInfo))
					    foreach($feeInfo as $key => $schoolFee) {
						?>
					    <li class="fee-panel-box col-md-6 card" id="Carousel<?php echo $schoolFee['id'];?>" title="" data-flip-category="<?php echo $schoolFee['className'];?>">
				        <?php 
				            foreach($schoolFee['fees'] as $key => $fee) {
				       	?>
				          	<section class="panel panel-default">
				            	<div class="panel-body">
				                	<div class="col-xs-8 col-md-8 text-center fee-desc-panel">
						        		<strong><?php echo $fee['feeDesc']?></strong>
						        	</div>
				                 	<div class="col-xs-4 col-md-4 text-center">
				               			<i class="fa fa-rupee"></i> <?php echo $fee['amount']?>
				                 	</div>
				            	</div>
				          	</section>
				     	<?php }?>
				          
					    </li>
					   	<?php } ?>
				    </ul>
				    <br>
				    <br>
				</div>
		  	</div>
		</div>
   </div>
</div>
