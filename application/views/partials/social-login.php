<!-- Modal -->
<style>
    .modal-backdrop {
        z-index: 0;
    }

   #myModal .modal-dialog {
        margin: 30px auto;
        width: 400px;
        margin-top:100px;
    }
    #divlogin_1 .form-control{
        width:109%;
    }
</style>

<?php if (isset($userId) && $userId < 1) { ?>
    <div class="modal fade" id="fbModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document" >
            <div class="modal-content" id="divlogin" style="display:block">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Social</h4>
                </div><form  method="post" id="loginfrm">
                    <div class="modal-body">
                        <!-- Login -->
                        <div class="panel panel-default" id="divlogin_1">
                            <div class="panel-body">
                                <a class="btn btn-social-icon btn-twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a class="btn btn-social-icon btn-facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a class="btn btn-social-icon btn-google">
                                    <i class="fa fa-google"></i>
                                </a>
                            </div>
                        </div>
                    <div class="modal-footer">
                       
                    </div></div> </form>
            </div><!-- end login -->
            
        </div>
    </div>
<?php } ?>
