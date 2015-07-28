<div class="breadcrumb marhlfbot" id="breadcrumb">
	<div class="container_16">
			<div class="grid_16">
			 <div class="breadcrumb">
			 <ul>
			 <li class="crumb one <?php if($breadcrum_step == 1) { ?>curr<?php }?>" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
			 	<?php if($breadcrum_step == 2) { ?>
			  	<a href="<?php echo $base_url;?>" itemprop="url"> <span class="crumb-icon" itemprop="title"> 
                SELECT LOCATION
                </span><span class="fl"><i class="fa fa-map-marker"></i></span></a>
                <?php } else {?>
                <span class="crumb-icon" itemprop="title"> 
                SELECT LOCATION
                </span><span class="fl"><i class="fa fa-map-marker"></i></span>
                <?php }?>
             </li>
             <li class="crumb two <?php if($breadcrum_step == 2) { ?>curr<?php }?>" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                <?php if($breadcrum_step == 3) { ?>
               	<a href="<?php if($page == 'billing'){ echo $menu_url;} else { echo $search_url; }?>" itemprop="url"><span class="crumb-icon">
                SELECT RESTAURANT
                </span><span class="fl"><i class="fa fa-cutlery"></i></span></a>
                <?php } else {?>
                <span class="crumb-icon">
                SELECT RESTAURANT
                </span><span class="fl"><i class="fa fa-cutlery"></i></span>
                <?php }?>
             </li>
             <li class="crumb three <?php if($breadcrum_step == 3) { ?>curr<?php }?>" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                <span class="crumb-icon">
                PLACE  ORDER 
                </span><span class="fl"><i class="fa fa-shopping-cart"></i></span>
             </li>
                </ul>
			 </div>
			 <div class="clear"></div>
      </div> 
 	</div>
</div>
 