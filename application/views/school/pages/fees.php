<div class="col-md-12">
  	<div class="panel panel-default">
	    <div class="panel-heading">
	      <h3 class="text-center"><strong>Fees </strong></h3>
	    </div>
		<div class="panel-body">
		   <div class="container">
				<div class="flipster col-md-12">
				    <ul style="width:100%;height:100%;" class="fee-panel-ul">
					    <?php  
					    if (isset($feeInfo))
					    foreach($feeInfo as $key => $schoolFee) {
						?>
					    <li class="fee-panel-box col-md-6" id="Carousel<?php echo $schoolFee['id'];?>" title="" data-flip-category="<?php echo $schoolFee['className'];?>">
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
				     		<section class="panel panel-default">
				            	<div class="panel-body">
				            		<strong>Eligibility Criteria</strong>
					        	</div>
			                 	<div class="text-left school-fee-detail">
			               			<?php 
			               		 if (isset($schoolFee['eligibilityCriteria']))
			               			echo $schoolFee['eligibilityCriteria'];?>
				          		</div>
				          	</section>
				          	<section class="panel panel-default">
				            	<div class="panel-body">
				            		<strong>Admission Process</strong>
					        	</div>
			                 	<div class="text-left school-fee-detail">
			               			<?php 
			               			if (isset($schoolFee['admissionProcess']))
			               			echo $schoolFee['admissionProcess'];?>
				          		</div>
				          	</section>
				          	<section class="panel panel-default">
				            	<div class="panel-body">
				            		<strong>How To Apply</strong>
					        	</div>
			                 	<div class="text-left school-fee-detail">
			               			<?php 
			               			if (isset($schoolFee['howToApply']))
			               			echo $schoolFee['howToApply'];?>
				          		</div>
				          	</section>
				          	<section class="panel panel-default">
				            	<div class="panel-body">
				            		<strong>Admission Starts From</strong>
					        	</div>
			                 	<div class="text-left school-fee-detail">
			               			<?php 
			               			if (isset($schoolFee['admissionFrom']))
			               			echo date_format(new DateTime($schoolFee['admissionFrom']),'j M Y');?>
				          		</div>
				          	</section>
				          	<section class="panel panel-default">
				            	<div class="panel-body">
				            		<strong>Admission Deadline</strong>
					        	</div>
			                 	<div class="text-left school-fee-detail">
			               			<?php 
			               			if (isset($schoolFee['admissionDeadline']))
			               			echo date_format(new DateTime($schoolFee['admissionDeadline']),'j M Y');?>
				          		</div>
				          	</section>
				          	<section class="panel panel-default">
				            	<div class="panel-body">
				            		<strong>Fee Payment Terms</strong>
					        	</div>
			                 	<div class="text-left school-fee-detail">
			               			<?php 
			               			if (isset($schoolFee['feesPaymentTerm']))
			               			echo $schoolFee['feesPaymentTerm'];?>
				          		</div>
				          	</section>
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
