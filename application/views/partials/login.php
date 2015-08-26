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
    #afb {
       padding-left:12px;
       margin-left:65px;
       float:left;
    }
   
    
    .btn-googleplus {
        margin-right:30px;
    }
    .modal-footer {
        text-align: right;
    }

</style>

<?php if (isset($userId) && $userId < 1) { ?>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document" >
            <div class="modal-content" id="divlogin" style="display:block">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <h4 class="modal-title" id="myModalLabel">Login</h4>
                    <div id="response"></div>
                    
                </div>
                <form  method="post" id="loginfrm">
                    <div class="modal-body" >
                       
                   
                        <!-- Login -->
                        <div class="panel panel-default" id="divlogin_1" style="text-align:center;">
                            <div class="panel-body">
                               <div id="derr2"></div> 
                               <a id="afb"onclick="facebookLogin()" title="Share on Facebook"  
                                class="btn btn-facebook" id="afb" ><i class="fa fa-facebook"></i> Facebook</a>
                             <a onclick="googleLogin()" title="Share on Google+" id="authorize-button"
                                    class="btn btn-googleplus g-signin2"><i class="fa fa-google-plus"></i> Google+</a>
                               

                            </div>
                        </div>
                        <h4 style="text-align:center;">OR</h4>
                         <div class="panel panel-default" id="divlogin_1">
                            <div class="panel-body">
                                <div id="derr"></div>

                                <div class="form-group" style ="margin-bottom:50px;">
                                    <div class="col-md-10 col-md-offset-1">
                                        <input id="logemailId" name="logemailId" type="text" placeholder="your email" maxlength="25" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-10 col-md-offset-1">
                                        <input id="logpasswd" name="logpasswd" type="password" placeholder="your password" maxlength="30" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="modal-footer" style="text-align:right;">
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary btn-sm" id= "btnpost" value ="Submit" >
                          <label><a href="#" class="forgot_password" style ="color:#26a69a;" >Forgot Password?</a></label>
                    </div></div> </form>
            </div><!-- end login -->
            <!-- forgot  password -->
            <div class="modal-content" id="divforgotp" style="display:none">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Forgot Password</h4>
                </div><form  method="post" id="frmpwd">
                    <div class="modal-body">
                        <!-- forgot password -->
                        <div class="panel panel-default" id="divlogin_1">
                            <div class="panel-body">
                               <div id="dpwerr" class="help-block"></div>

                                <div class="form-group" style ="margin-bottom:50px;">
                                    <div class="col-md-10 col-md-offset-1">
                                      <input type="text" class="form-control" placeholder="EMAIL" id="temail" name="temail" />
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary btn-sm" id= "btnpost" value ="Submit" >
                          <label><a href="#" class="alogin" style ="color:#26a69a;" >Login</a></label>
                    </div></div> </form>
            </div><!-- end login -->
            <!-- end forgot password -->
        </div>
    </div>
<?php } ?>



