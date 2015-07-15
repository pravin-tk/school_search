<?php 

//echo "<pre>";
//print_r($contactInfo);?>      

<div class="col-md-8">

          <h4>Description</h4>
          <div >
            <div >
              <div >
               <?php echo $basicInfo['aboutSchool'];?>
              <div class="expandable-indicator"><i></i></div></div>
            </div>
          </div>


        </div>
        <div class="col-md-4">
          <h4>Contact Information</h4>
          <div class="media media-clearfix-xs-min">
            <div class="media-left text-center">
              <img class="thumbnail media-object" src="<?php echo $basicInfo['logo'];?>" alt="people">
              <a class="btn btn-primary btn-sm" href="">Contact Host</a>
            </div>
            <div class="media-body">
              <div class="expandable expandable-trigger">
                <div class="expandable-content expandable-content-medium">
                    <?php foreach($contactInfo as $key =>$value){?>
                        <p><?php if(isset($value['email'])){ echo $value['email'] ;}?></p>
                        <p><?php if(isset($value['mobileNo'])){ echo $value['mobileNo'];} ?></p>
                    <?php }?>
                <div class="expandable-indicator"><i></i></div></div>
              </div>
            </div>
          </div>
        </div>
