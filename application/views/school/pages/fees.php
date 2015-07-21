<div class="col-md-12">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="text-center"><strong>Fees </strong></h3>
    </div>
    
   <div class="panel-body">
	 <div class="container">
	 <div class="flipster col-md-10">
	    <ul >
	    <?php  
	    if (isset($feeInfo))
	    foreach($feeInfo as $key => $schoolFee) {
		 ?>
	        <li style="height: 500px;" id="Carousel<?php echo $schoolFee['className'];?>" title="" data-flip-category="<?php echo $schoolFee['className'];?>">
          <?php 
            foreach($schoolFee['fees'] as $key => $fee) {?>
          <section class="panel panel-default">
            <div class="panel-body">
                <div class="col-xs-5 col-md-5 text-center btn btn-primary btn-sm">
		                <?php echo $fee['feeDesc']?>
		                </div>
		                 <div class="col-xs-4 col-md-4 text-center">
		               		<?php echo $fee['amount']?>
		                 </div>
            </div>
          </section>
          <?php }?>
          
	        </li>
	        <?php } ?>
	    </ul>
	</div>

         
        </div>
    </div>
   </div>
  </div>
</div>
