<style type="text/css">
.navbar a{color:white;}
.navbar-default{}
</style>
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
          <li class="dropdown">
            <a href="#" class="dropdown-toggle btn-clear" data-toggle="dropdown">
              <i class="fa fa-fw fa-lock"></i> Login
            </a>
            <div class="dropdown-menu dropdown-size-280">
              <form class="ng-pristine ng-valid">
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Username">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-shield"></i></span>
                    <input type="password" class="form-control" placeholder="Password">
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Login <i class="fa fa-sign-in"></i></button>
                </div>
              </form>
            </div>
          </li>
          <!-- // END login -->
          <!-- Sign up -->
          <li class="dropdown">
              <a href="<?php echo $base_url; ?>index.php/auth/signup" class="btn-clear" target="_blank" onclick="alert('hi')>
              <i class="fa fa-fw fa-plus"></i> Sign Up
            </a>
            
          </li>
          <!-- // END sign up -->
          
        </ul>
      </div>
      <!-- /.navbar-collapse -->

    </div>
  </nav>
