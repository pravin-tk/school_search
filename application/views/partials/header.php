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
    
    .class_hand a {
        cursor: hand;
        color :#000;
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
        logged_pic = "<?php echo $this->session->userdata("sessebdmypic");?>";
</script>
<nav class="navbar navbar-default navbar-static-top" style="position: absolute;width:100%;"role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="" data-toggle="sidebar-menu" class="toggle pull-left visible-xs"><i class="fa fa-bars"></i></a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand"  href="<?php echo $base_url; ?>"> Edbuddy</a>
      </div>
      <div class="collapse navbar-collapse" id="main-nav">
        <ul class="nav navbar-nav navbar-right">
            <script>
                if(logged_in == null) { //not logged in
                    var public_data = '<li class="dropdown">';
                    public_data += '<a href="#"  data-toggle="modal" data-target="#myModal" id="alogin">';
                    public_data += '<i class="fa fa-fw fa-lock"></i> Login</a>';
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
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
  </nav>
