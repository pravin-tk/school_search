<style>   
   div.desc{
    background-color: #000;
/*    color: #FFF;*/
    font: bold 12px verdana;
    font-size: 12px;
    font-weight: bolder;
    padding-left: 10px;
    padding-top: 7px;
    height: 33px; opacity: 0.5;
    position: relative; 
    top: -20px;
}

.fix{
    width: 100%;
    padding: 0px;
}


</style>


<div class="col-md-12" id="imggallery">
 	<div class="panel panel-default">
	  	<div class="panel-heading">
	      	<h3 class="text-center"><strong>Gallery </strong></h3>
	    </div>
	    <div class="panel-body">
			<?php 
		    if(isset($galleryinfo)){
            foreach($galleryinfo as $key => $schoolGallery){?>
	      	<div class="col-md-4">
                <div class="well">
                <?php 
                $headers = get_headers($schoolGallery['imageUrl']);
                if($headers[0]=='HTTP/1.1 200 OK'){?>    
                
                            <!-- image -->  
                             <a href="<?php echo $schoolGallery['imageUrl'];?>" title="<?php echo $schoolGallery['imageTitle'];?>">
                             <img class="lazy img-responsive" data-original="<?php echo $schoolGallery['imageUrl'];?>" alt="<?php echo $schoolGallery['imageTitle'];?>"  />
                              <div class="desc">
                                <p class="desc_content"><?php echo $schoolGallery['imageTitle'];?>.</p>
                             </div>
                             </a>
               <?php 
                }
                ?>
                   	
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
