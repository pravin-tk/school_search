 <?php //for ($i = 0; $i < 10; $i++) {
                            foreach($schools as $key => $school){
                        
                        ?>

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="media media-clearfix-xs media-clearfix-sm">
                                        <div class="media-left">
                                            <p>
                                                <a  href="school-details.php">
                                                    <img src="<?php echo asset_url(); ?>img/vector-school-house-28931692.jpg" alt="property" width="150" class="media-object">
                                                </a>
                                            </p>
                                            <div class="text-center small">
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="pull-right">
                                                <a  class="text-primary" href=""><i class="fa fa-comments fa-fw"></i> <strong>5</strong></a>
                                                <a  class="text-grey-400" href=""><i class="fa fa-star-o fa-fw"></i></a>
                                            </div>
                                            <h4 class="media-heading margin-v-0-10">
                                                <a  href="schoolDetailsTest"><?php echo $school['name']?>,
                                                    <?php echo $school['streetName']?>,<?php echo $school['localityName']?>,<?php echo $school['cityName']?></a>
                                            </h4>
                                            <p>
                                                <span class="label label-grey-100"><i class="fa fa-home fa-fw"></i>Board : <?php echo $school['boardName']?></span>
                                                <span class="label label-grey-100"><i class="fa fa-fw icon icon-toilet"></i> Medium :<?php echo $school['mediums']?></span>
                                                <span class="label label-grey-100"><i class="icon icon-shovel "></i> Category :<?php echo $school['schoolCategory']?> </span>
                                            </p>
                                            <p class="margin-none"><?php echo $school['aboutSchool']?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                <?php } ?>