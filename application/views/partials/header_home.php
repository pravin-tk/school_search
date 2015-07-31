<style type="text/css">
.navbar a{color:white;}
.navbar-default{}
</style>
<style>
    .has-error .form-control {
        border-color: #a94442;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
        background: #efefef; 
    }
     .has-error .input-group-addon {
        background-color: #f2dede;
        border-color: #a94442;
        color: #a94442;
    }
    .forgot_password {
        font-size:10px;
        padding-left: 12px;
    }
    
    .help-block-success {
        color: #00994C ;
        display: block;
        margin-left: 15px;
        margin-bottom: 3px;
        margin-top: 3px;
    }
    
    .help-block-error {
        color: #D00000 ;
        display: block;
        margin-left: 15px;
        margin-bottom: 3px;
        margin-top: 3px;
    }
    
    .form-control {
       width:'';
    }
    .navbar text-center a{
        color:#26a69a;
    }
</style>
<script type="text/javascript">
        var logged_in = null;
        var url = '<?php echo $base_url;?>';
        function readCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for(var i=0;i < ca.length;i++) {
                    var c = ca[i];
                    while (c.charAt(0)==' ') c = c.substring(1,c.length);
                    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
            }
            return null;
        }
        logged_in = readCookie('ebduserid');
        logged_in_as = readCookie('ebdusername');
        logged_pic = readCookie('ebdmypic');
        
</script>
<nav class="navbar navbar-static-top" style="position: absolute;width:100%;"role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="" data-toggle="sidebar-menu" class="toggle pull-left visible-xs"><i class="fa fa-bars"></i></a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand"  href="index"> eddbuddy</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="main-nav">
        
        <ul class="nav navbar-nav navbar-right">
           <li class="dropdown">
              <a href="#" class="btn-clear">
              <i class="fa fa-fw fa-mobile "></i> Download App
            </a>
            
          </li>
           <li class="dropdown">
              <a href=""  class="btn-clear">
              <i class="fa fa-fw fa-plus"></i> List Your School
            </a>
            
          </li>
         
         <!-- Login -->
            <script>
            
                if(logged_in == null) { //not logged in
                    var public_data = '<li class="dropdown">';
                    public_data += '<a href="#" class="dropdown-toggle" data-toggle="dropdown" id="alogin">';
                    public_data += '<i class="fa fa-fw fa-lock"></i> Login</a>';
                    public_data += '<div class="dropdown-menu dropdown-size-280" id="divlogin">';
                    public_data += '<div class="dropdown-toggle" style ="float:right;" data-toggle="collapse" id="" onclick=""> <i class="fa fa-close"></i> </div>';
                    public_data += '<div id="derr" class="help-block"></div>';
                    public_data += '<form class="ng-pristine ng-valid" id = "flogin">';
                    public_data += '<div class="form-group" id="divname">';
                    //public_data += '<div class="input-group">';
                    //public_data += '<span class="input-group-addon"><i class="fa fa-user"></i></span>';
                    public_data += '<input type="text" class="form-control" placeholder="EMAIL" id="tusername" name="tusername" />';
                    public_data += '</div>'; //</div>
                    public_data += '<div class="form-group" id="divpwd">';
                    //public_data += '<div class="input-group">';
                    //public_data += '<span class="input-group-addon"><i class="fa fa-shield"></i></span>';
                    public_data += '<input type="password" class="form-control" placeholder="PASSWORD" id="tpassword" name="tpassword" >';
                    public_data += '</div>'; //</div>
                    public_data += '<div class="text-center">';
                    public_data += '<input type="submit" name="blogin" id="blogin" value="Login" class="btn btn-primary" />';
                    public_data += '<a href="#" class="forgot_password" style ="color:#26a69a;" >Forgot Password?</a></label>'; 
                    public_data += '</div></form></div>';
                    public_data += '<div class="dropdown-menu dropdown-size-280" id="divforgotp" style="display:none">';
                    public_data += '<div id="dpwerr" class="help-block"></div>';
                    public_data += '<form class="ng-pristine ng-valid" id="frmpwd">';
                    public_data += '<div class="form-group" id="divfpwd">';
                    //public_data += '<div class="input-group">';
                    //public_data += '<span class="input-group-addon"><i class="fa fa-user"></i></span>';
                    public_data += '<input type="text" class="form-control" placeholder="EMAIL" id="temail" name="temail" />';
                    public_data += '</div>'; //</div>
                    public_data += '<div class="text-center">';
                    public_data += '<input type="submit" name="btnfpwd" id="btnfpwd" value="Submit" class="btn btn-primary" />';
                    public_data += '</div>';
                    public_data += '</form></div>';
                    public_data += '</li>';
                    document.write(public_data);
              }
              if(logged_in == null) { // not logged in
                var public_data = '<li class="dropdown">';
                    public_data += '<a href="<?php echo $base_url; ?>signup" target="_blank" >';
                    public_data += '<i class="fa fa-fw fa-plus"></i> Sign Up</a>';
                    public_data += '<div class="dropdown-menu dropdown-size-280"></div>'
                    public_data += '</li>';
                    document.write(public_data);
              }  
             
             
              if(logged_in != null) { // logged in
                    var private_data = '<li class="dropdown user">';
                    private_data += '<a href="#" class="dropdown-toggle" data-toggle="dropdown">';
                    private_data += '<img src="'+logged_pic+'" alt="" class="img-circle"> '+logged_in_as+'<span class="caret"></span></a>'; 
                    private_data += '<ul class="dropdown-menu" role="menu">';
                    private_data += '<li><a href="<?php echo $base_url; ?>user-profile"><i class="fa fa-user"></i>Profile</a></li>';
//                    private_data += '<li><a href="#"><i class="fa fa-wrench"></i>Settings</a></li>';
                    private_data += '<li><a href="<?php echo $base_url; ?>logout"><i class="fa fa-sign-out"></i>Logout</a></li>';
                    private_data += '</ul></li>';
                    document.write(private_data);
              }
           </script>   
          <!-- // END login -->
         
        </ul>
      </div>
      <!-- /.navbar-collapse -->

    </div>
  </nav>
   

<script>
             
          </script>
