
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
           <!-- Login -->
            <script>
             alert(logged_in);
                if(logged_in == null) { //not logged in
                    var public_data = '';
                   
                    public_data += '<div class="dropdown-menu dropdown-size-280" id="divlogin">';
                    public_data += '<div class="dropdown-toggle" style ="float:right;" data-toggle="collapse" id="" onclick=""><a style="color:#000;" href=""> <i class="fa fa-close"></i></a> </div>';
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
                    public_data += '<div  style ="float:right;" data-toggle="collapse" id="" onclick=""> <a style="color:#000;" href=""><i class="fa fa-close"></i></a> </div>';
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
              </script>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<section class="footer-section" > 
     <div class="container"> 
       <div class="row"> 
         <div class="col-xs-6 col-md-2"> 
           <h4>Corporate</h4> 
           <ul class="list-unstyled"> 
             <li><a href="<?php echo $base_url; ?>aboutus">About the company</a></li> 
             <li><a href="">Our Mission</a></li> 
             <li><a href="<?php echo $base_url; ?>ourteam">Our People</a></li> 
             <li><a href="<?php echo $base_url; ?>career">Career</a></li> 
             <li><a href="<?php echo $base_url; ?>contactus">Contact Us</a></li> 
           </ul> 
         </div> 
         <div class="col-xs-6 col-md-2"> 
           <h4>Media</h4> 
           <ul class="list-unstyled"> 
             <li><a href="">Advertise with Us</a></li> 
             <li><a href="">Partners</a></li> 
             <li><a href="">Media Room</a></li> 
             <li><a href="">Licensing</a></li> 
           </ul> 
         </div> 
 		<div class="col-xs-6 col-md-2"> 
           <h4>Policies</h4> 
           <ul class="list-unstyled"> 
             <li><a href="<?php echo $base_url; ?>how_we_rate">How We Rate Schools</a></li> 
             <li><a href="<?php echo $base_url; ?>review_guidelines">School Review Guidelines</a></li> 
             <li><a href="<?php echo $base_url; ?>terms">Terms Of Use</a></li> 
             <li><a href="<?php echo $base_url; ?>privacy">Privacy and Policies</a></li> 
           </ul> 
         </div>        <div class="col-xs-12 col-md-4"> 
           <div class="panel bg-transparent margin-none"> 
             <div class="panel-body"> 
               <div class="form-group form-control-default"> 
                 <label for="email">Email:</label> 
                 <input id="email" class="form-control" type="text" placeholder="Your email address .."> 
               </div> 
               <div class="form-group"> 
                 <button class="btn btn-pink-500">Subscribe</button> 
               </div> 

               <small class="help-block">* We will never sell your email</small> 
             </div> 
           </div> 
         </div> 
       </div> 
     </div> 
   </section> 
</div>

<!-- Footer -->
<footer class="footer" style="position: relative;">
	<strong>eddbuddy </strong> v1.2.0 © Copyright 2015
</footer>

<!-- Inline Script for colors and config objects; used by various external scripts; -->
<script>
    var colors = {
      "danger-color": "#e74c3c",
      "success-color": "#81b53e",
      "warning-color": "#f0ad4e",
      "inverse-color": "#2c3e50",
      "info-color": "#2d7cb5",
      "default-color": "#6e7882",
      "default-light-color": "#cfd9db",
      "purple-color": "#9D8AC7",
      "mustard-color": "#d4d171",
      "lightred-color": "#e15258",
      "body-bg": "#f6f6f6"
    };
    var config = {
      theme: "angular",
      skins: {
        "default": {
          "primary-color": "#16ae9f"
        }
      }
    };

    
	$('.multiselect').multiselect(
		{
             enableFiltering: true,
             numberDisplayed: 2,
        }
	);
</script>
