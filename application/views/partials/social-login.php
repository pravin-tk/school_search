<!-- Modal -->
<style>
    .modal-backdrop {
        z-index: 0;
    }

    #fbModal .modal-dialog {
        margin: 30px auto;
        width: 400px;
        margin-top:100px;
    }
    #divlogin_1 .form-control{
        width:109%;
    }
    .modal-footer{
        text-align:left;
    }
    .modal-footer .btn-block{
        width:25%;
        
    }
    
    #fbModal .modal-dialog {
        margin: 30px auto;
        width: 500px;
        margin-top:100px;
    }
    #fbModal .modal-header{
        min-height:100px;
    }
    #fbModal .panel-body{
        min-height:20px;
    }
</style>

<?php if (isset($userId) && $userId < 1) { ?>
    <div class="modal fade" id="fbModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document" >
            <div class="modal-content" id="divsocial" style="display:block">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<!--                    <h4 class="modal-title" id="myModalLabel">Social</h4>-->
                                <div class="col-sm-3">
                                <img src="<?php echo asset_url(); ?>img/vector-school-house-28931692.jpg" alt="property" width="100" height="75" class="media-object">
                                </div>
                                <div class="col-sm-8">
                                <h4 class="modal-title">
                                <a target="_blank" href="http://localhost/edbuddy-proj/pune/kalyani-nagar/bishops-co-ed-school-5/play-group">Bishop's Co-Ed School</a>
                                </h4>
                                <h5 class="margin-title text-capitalize">Kalyani Nagar, Pune</h5>
                                </div>
                </div><form  method="post" id="socialsharefrm">
                    <div class="modal-body">
                        <!-- Login -->
                        <div class="panel panel-default" id="divlogin_1">
                            <div class="panel-body ">
                                
                                    <div class="col-sm-8 ">
                                      
                                        <input id="emailId" name="emailId" type="text" placeholder="your email" maxlength="25" class="form-control">
                                        
                                    </div>
                               
                                <div class="col-sm-4">
                                    <a class="btn btn-primary list-primary-button" href="http://localhost/edbuddy-proj/pune/kalyani-nagar/kidzee-kharadi-19/play-group/#review">COPY URL</a>
                                </div>
                                
                            </div>
                        </div>
                     <div class="modal-footer social-buttons">
                        <a class="btn  btn-social btn-facebook">
                           <i class="fa fa-facebook"></i> Facebook
                        </a>
                        <a class="btn  btn-social btn-google">
                          <i class="fa fa-google"></i> Google
                        </a>
                        <a class="btn btn-social btn-twitter">
                          <i class="fa fa-twitter"></i> Twitter
                        </a>
                    </div></div> </form>
            </div><!-- end social -->
            
            
        </div>
    </div>
<?php } ?>
