<?php 
if(isset($schooldata)){ 
?>
<div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<!--                    <h4 class="modal-title" id="myModalLabel">Social</h4>-->
                                <div class="col-sm-3">
                               <?php if(isset($schooldata['logo']) && ($schooldata['logo']!="")){?>
                                   <img src="<?php echo $schooldata['logo']; ?>" alt="property" width="100" height="75" class="media-object">
                               <?php }else { ?>    
                                <img src="<?php echo asset_url(); ?>img/vector-school-house-28931692.jpg" alt="property" width="100" height="75" class="media-object">
                               <?php }?>
                                </div>
                                <div class="col-sm-8">
                                <h4 class="modal-title">
                                <?php echo $schooldata['name'];?>
                                </h4>
                                <h5 class="margin-title text-capitalize"> <?php echo $schooldata['localityName'].",".$schooldata['streetName'];?></h5>
                                </div>
                                </div><form  method="post" id="socialsharefrm">
                                <div class="modal-body">
                        <!-- Login -->
                        <div class="panel panel-default" id="divlogin_1">
                            <div class="panel-body ">

                                    <div class="col-sm-8 ">

                                        <input id="copyurl" name="copyurl" type="text" placeholder="" maxlength="25" class="form-control">

                                    </div>

                                <div class="col-sm-4">
                                    <a class="btn btn-primary list-primary-button" href="http://localhost/edbuddy-proj/pune/kalyani-nagar/kidzee-kharadi-19/play-group/#review">COPY URL</a>
                                </div>

                            </div>
                        </div>
                     <div class="modal-footer social-buttons">
                       <!-- Twitter -->
                       <a onclick="return popitup('http://twitter.com/home?status=<?php echo $permlink;?>')"
                        title="Share on Twitter"  class="btn btn-twitter" >
                     <i class="fa fa-twitter"></i> Twitter</a>
                     <!-- Facebook -->
                     <a onclick="return popitup('https://www.facebook.com/sharer/sharer.php?s=100&p[title]=<?php echo $schooldata['name'];?>&p[url]=<?php echo $permlink;?>')"
                        title="Share on Facebook"  class="btn btn-facebook" >
                     <i class="fa fa-facebook"></i> Facebook</a>
                     <!-- Google+ -->
                     <a onclick="return popitup('https://plus.google.com/share?url=<?php echo $permlink;?>')" 
                        title="Share on Google+"  class="btn btn-googleplus">
                     <i class="fa fa-google-plus"></i> Google+</a>

                     <!-- LinkedIn -->
                     <a onclick="return popitup('http://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=<?php echo $permlink;?>')" 
                         title="Share on LinkedIn"  class="btn btn-linkedin">
                      <i class="fa fa-linkedin"></i> LinkedIn</a>
                    </div></div> </form>
    <?php }?>