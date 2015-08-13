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
					    $i = 0;
					    if (isset($feeInfo))
					    foreach($feeInfo as $key => $schoolFee) {
						?>
					    <li class="fee-panel-box col-md-6" id="Carousel<?php echo $schoolFee['id'];?>" title="" data-flip-category="<?php echo $schoolFee['className'];?>">
					        <div class="panel panel-default">
					        	<div class="panel-heading">
				            		<h4 class="text-left infra-heading"><strong>Fee Details</strong></h4>
					        	</div>
					        	<div class="panel-body">
						        <?php 
						            foreach($schoolFee['fees'] as $key => $fee) {
						       	?>
						          	<section class="panel panel-default">
						            	<div class="panel-body">
						                	<div class="col-xs-8 col-md-8 text-left fee-desc-panel">
								        		<strong><?php echo $fee['feeDesc']?></strong>
								        	</div>
						                 	<div class="col-xs-4 col-md-4 text-left">
						               			<i class="fa fa-rupee"></i> <?php echo $fee['amount']?>
						                 	</div>
						            	</div>
						          	</section>
						     	<?php }?>
					     		</div>
				     		</div>
				     		<div class="flip-content  panel panel-default card">
				            	<div class="panel-heading">
				            		<h4 class="text-left infra-heading"><strong>Eligibility Criteria</strong></h4>
					        	</div>
			                 	<div class="text-left school-fee-detail">
			               			<?php 
			               		 if (isset($schoolFee['eligibilityCriteria']))
			               			echo $schoolFee['eligibilityCriteria'];?>
				          		</div>
				          	</div>
				          	<div class="flip-content  panel panel-default card">
				            	<div class="panel-heading">
				            		<h4 class="text-left infra-heading"><strong>Admission Process</strong></h4>
					        	</div>
			                 	<div class="text-left school-fee-detail">
			               			<?php 
			               			if (isset($schoolFee['admissionProcess']))
			               			echo $schoolFee['admissionProcess'];?>
				          		</div>
				          	</div>
				          	<div class="flip-content  panel panel-default card">
				            	<div class="panel-heading">
				            		<h4 class="text-left infra-heading"><strong>How To Apply</strong></h4>
					        	</div>
			                 	<div class="text-left school-fee-detail">
			               			<?php 
			               			if (isset($schoolFee['howToApply']))
			               			echo $schoolFee['howToApply'];?>
				          		</div>
				          	</div>
				          	<div class="flip-content  panel panel-default card">
				            	<div class="panel-heading">
				            		<h4 class="text-left infra-heading"><strong>Admission Starts From</strong></h4>
					        	</div>
			                 	<div class="panel-body">
			               			<?php 
			               			if (isset($schoolFee['admissionFrom']))
			               			echo date_format(new DateTime($schoolFee['admissionFrom']),'j M Y');?>
				          		</div>
				          	</div>
				          	<div class="flip-content  panel panel-default card">
				            	<div class="panel-heading">
				            		<h4 class="text-left infra-heading"><strong>Admission Deadline</strong></h4>
					        	</div>
			                 	<div class="panel-body">
			               			<?php 
			               			if (isset($schoolFee['admissionDeadline']))
			               			echo date_format(new DateTime($schoolFee['admissionDeadline']),'j M Y');?>
				          		</div>
				          	</div>
				          	<div class="flip-content  panel panel-default card">
				            	<div class="panel-heading">
				            		<h4 class="text-left infra-heading"><strong>Fee Payment Terms</strong></h4>
					        	</div>
			                 	<div class="text-left school-fee-detail">
			               			<?php 
			               			if (isset($schoolFee['feesPaymentTerm']))
			               			echo $schoolFee['feesPaymentTerm'];?>
				          		</div>
				          	</div>
					    </li>
					   	<?php $i++;} ?>
				    </ul>
				    <br>
				    <br>
				</div>
		  	</div>
		</div>
   </div>
</div>
