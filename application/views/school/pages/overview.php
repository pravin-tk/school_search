<?php 

//echo "<pre>";
//print_r($contactInfo);?>      
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="text-center"><strong>Highlights </strong></h3>
    </div>
   <div class="panel-body">
	 <div class="container text-center"style="width:40%;margin-top:5%;">
     
          <?php foreach ($overviewInfo as $key => $value){
          ?>
          	<section class="panel panel-default text-center"style="border-radius:30;">
               
                <div class="panel-body">
                    <div class="text-center">
					<?php echo $value['name']?>
                    </div>
                </div>
            </section> 
          	<?php
          } ?>
         
   </div>
  </div>
   
</div>



        
