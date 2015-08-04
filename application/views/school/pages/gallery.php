<div class="col-md-12" id="imggallery">
 	<div class="panel panel-default">
	  	<div class="panel-heading">
	      	<h3 class="text-center"><strong>Gallery </strong></h3>
	    </div>
	    <div class="panel-body">
			<?php 
		    if(isset($galleryinfo)){
            foreach($galleryinfo as $key => $schoolGallery){
	    	?>
	      	<div class="col-md-4">
                <div class="well">
                   	<a href="<?php echo $schoolGallery['imageUrl'];?>" title="<?php echo $schoolGallery['imageTitle'];?>">
                    	<img class="thumbnail img-responsive" alt="<?php echo $schoolGallery['imageTitle'];?>" src="<?php echo $schoolGallery['imageUrl'];?>" />
                   	</a>
                </div>
            </div>
            <?php } }else{
            	?>
            	<section class="panel panel-default">
						<div class="panel-body">
						 Data Not Available 		
		            	</div>
		       </section>
            	<?php 
            } ?>
        </div>
  	</div>
</div>
