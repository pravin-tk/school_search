<?php ?>

<style>
    #map-canvas {
        width: 90%;
        height: 350px;
        margin-top:1%;
        margin-bottom:2%;
        position :absolute;
    }

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
</style>

<!-- uiView:  --><div data-ui-view="" class="ui-view-main ng-scope"><!-- uiView:  --><div ui-view="" class="ui-view-main ng-scope"><!-- Fixed navbar -->
        <?php //include 'header.php';  ?>
        <div id="content" >
            <section class="cover overlay height-200 height-270-xs">
                <img src="<?php echo asset_url(); ?>img/school/photodune-186709-residential-street-m.jpg" alt="cover">
                <div class="overlay overlay-full overlay-bg-black bg-transparent">
                    <div class="container">
                        <h1 class="text-h1 text-overlay">School</h1>
                    </div>
                </div>
                <div class="overlay overlay-bg-black">
                    <div class="v-bottom">
                        <div class="container">
                            <p class="text-overlay">You searched for school near hadpsar. <span class="hidden-sm hidden-xs"></span></p>
                        </div>
                    </div>
                </div>
            </section>

            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <form id="frmSch">
                            <div class="panel panel-default"  style="">
                                <div class="panel-heading " >
                                    <h4 class="panel-title"><strong><i class="fa fa-heart"></i> &nbsp &nbsp Favourites</strong></h4>
                                </div>
                            </div>


                            <div class="panel panel-default" data-toggle="panel-collapse" data-open="false">
                                <div class="panel-heading panel-collapse-trigger collapse in" data-toggle="collapse" data-target="#6d98aa69-0d44-7a1a-96d2-5bd350287a73" aria-expanded="true" style="">
                                    <h4 class="panel-title">Filter Schools By</h4>
                                </div>

                                <div id="6d98aa69-0d44-7a1a-96d2-5bd350287a73" class="collapse"><div class="panel-body">
                                        <div class="form-group margin-none">
                                            <label class="label-block" for="check-out">Type</label>
                                            <div class="input-group">
                                                <select id="schooltypeselectbox" class="form-control multiselect"multiple="multiple">
                                                    <option value=""> -- Select -- </option>
                                                    <?php
//                                                    if(isset($schoolType))
//                                                    foreach ($schoolType as $key => $value) { 
                                                    ?>

                                                    <option value="<?php //echo $value['id'];  ?>"><?php //echo $value['name'];  ?></option>

                                                    <?php //}  ?>
                                                </select>
                                            </div>
                                        </div>




                                    </div></div></div>

                            <div class="row text-center">
                                <div class="col-xs-6">
                                    <input  type="button" class="btn btn-block btn-success" type = "button" name = "btnSch" id = "btnSch" value="Search Now!" onclick="filterResults()"/>
                                </div>
                                <div class="col-xs-6">
                                    <a href="" class="btn btn-link"><i class="fa fa-fw fa-times"></i> reset filters</a>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>
                    <div class="col-md-9">

                        <div class="row">
                            <!--                            <div class="col-xs-6">
                                                            <h4><span class="text-primary">280</span> Results</h4>
                                                        </div>
                                                        <div class="col-xs-6 text-right">
                                                            <div class="dropdown display-inline-block">
                                                                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                                                                    Sort by:
                                                                    <span class="caret"></span>
                                                                </button>
                                                                <ul class="dropdown-menu pull-right">
                                                                    <li><a href="#">Action</a></li>
                                                                    <li><a href="#">Another action</a></li>
                                                                    <li><a href="#">Something else here</a></li>
                                                                    <li><a href="#">Separated link</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="btn-group display-inline-block">
                            
                                                                <a class="btn btn-primary active"  href="search"><i class="fa fa-list"></i></a>
                                                                <a class="btn btn-primary" href="grid"><i class="fa fa-th"></i></a>
                            
                                                            </div>
                                                        </div>-->
                        </div>


                        <!--                         Map  
                                                <div class="panel panel-default" data-toggle="panel-collapse" data-open="true" >
                                                    <div class="panel-heading panel-collapse-trigger collapse in" data-toggle="collapse" data-target="#1e5da4fb-8e34-7fbb-2b79-e722a89153e4" 
                                                         aria-expanded="true" >
                                                        <h4 class="panel-title">Map View</h4>
                                                    </div>
                        
                                                    <div id="1e5da4fb-8e34-7fbb-2b79-e722a89153e4" class="collapse" >
                                                        <div class="panel-body relative height-400" style="width: 100%; height: 100%; position: absolute;">
                                                            <div style="clear:both;">  <div id="map-canvas" style="border: ridge #34C6C3; border-width:0 6px 6px 6px;"></div></div>
                                                                <div class="infobox-wrapper" id="infobox-wrapper" style="width:300px;">
                                                                    <div id="infobox" style="width:300px;">
                                                                        <div id="infobox-text" style="color: #000000;text-align:center;" style="width:300px;">
                                                                            <span id="ins-drag">
                                                                                 <div id='schoolimg' style='float:left;width:"200px;'></div>
                                                                                <div id='schooltext' style='float:right;width="100px;'></div><br></span>
                                                                                <span id="err-text" style="font-weight: bold;"></span>
                                                                                <br>
                                                                                <a id="marker_link" class='btn-orange'  href="">
                                                                                        View School
                                                                            </a>
                                                                            <br/>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div></div>-->
                        <!-- Map end -->
                        <div id="schresult">
                            <?php
//for ($i = 0; $i < 10; $i++) {
//                        if(isset($schools))
//                            foreach($schools as $key => $school){
                            ?>

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="media media-clearfix-xs media-clearfix-sm">
                                        <h4> Registration </h4>
                                        <!--                                        <div class="media-left">
                                                                                
                                                                                    
                                                                                </div>-->
                                        <hr/>
                                        <div class="media-body">
                                            <form method="post" data-toggle="validator" role="form" id="signup_form" action="<?php echo base_url()?>index.php/home/register" enctype="multipart/form-data">
                                               <div class="form-group">
                                                    <label for="firstName" class="control-label">First Name</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">@</span>
                                                        <input type="text" pattern="^([_A-z0-9]){3,}$" maxlength="25" 
                                                               class="form-control" id="firstName" name="firstName" placeholder="Enter first name" required>
                                                    </div>
                                                    <span class="help-block with-errors">Up to 20 letters, numbers and underscores</span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="lastName" class="control-label">Last Name</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">@</span>
                                                        <input type="text" pattern="^([_A-z0-9]){3,}$" maxlength="25" 
                                                               class="form-control" id="lastName" name="lastName"  placeholder="Enter last name" required>
                                                    </div>
                                                    <span class="help-block with-errors">Up to 20 letters, numbers and underscores</span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="emailId" class="control-label">Email Id</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">@</span>
                                                        <input type="text"  maxlength="25" 
                                                               class="form-control" id="emailId" name="emailId" placeholder="Enter email id" required>
                                                    </div>
                                                    <span class="help-block with-errors">Up to 20 letters, numbers and underscores</span>
                                                </div>
                                                 <div class="form-group">
                                                    <label for="mobileNo" class="control-label">Mobile No</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">@</span>
                                                        <input type="text" pattern="^([0-9]){3,}$" maxlength="10" 
                                                               class="form-control" id="mobileNo" name="mobileNo" placeholder="Enter mobile number" required>
                                                    </div>
                                                    <span class="help-block with-errors">Up to 10  numbers</span>
                                                </div>
                                                  <div class="form-group">
                                                    <label for="imageFile" class="control-label">Image</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">@</span>
                                                        <input type="file"  
                                                               class="form-control" id="imageFile" placeholder="Upload image" name="imageFile" required>
                                                    </div>
                                                    <span class="help-block with-errors">file type .png, jpg,gif</span>
                                                </div>
                                        
                                        
                                        
                                        <div class="form-group">
<!--                                            <button type="submit" class="btn btn-primary"> Submit</button>-->
                                        <input type="button" id="user_signup" class="btn-orange" value="sign-up" />
                                        </div>
                                        </form></div>

                                        <div class="pull-right">

                                        </div>
                                        <h4 class="media-heading margin-v-0-10">

                                        </h4>


                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <!--                        <ul class="pagination margin-top-none">
                                                <li class="disabled"><a href="#">«</a></li>
                                                <li class="active"><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">»</a></li>
                                            </ul>-->
                </div>
            </div>
        </div>
    </div>
   <script src="<?php echo asset_url(); ?>js/jquery.js"></script>
    <!--<script src="<?php echo asset_url(); ?>js/validator.min.js"></script> -->
    <script src="<?php echo asset_url(); ?>js/jquery.form.js"></script>
    
<!--    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
    <script src="http://malsup.github.com/jquery.form.js"></script> -->
     <script src="<?php echo asset_url(); ?>js/ajaxform.js"></script> 
    <script>
//        $('#register').validator().on('submit', function (e) {
//            if (e.isDefaultPrevented()) {
//                alert('hii')
//                // handle the invalid form...
//            } else {
//                // everything looks good!
//            }
//        })

//$("#signup_form").on("click","#user_signup",function(){
//	user_signup();
//       
//});

function user_signup() {
        var url = base_url + 'index.php/home/register';
	//showOverlay('Registering user...');
	var formData = $("#signup_form").serialize();
        console.log(formData);
	$.ajax({
  	type: "post",
  	url: url,
  	cache: false,
  	data: formData,
  	dataType: "json",
  	success: function(request){
  		if(request.status == 1) {
//  			hideOverlay();
//  			document.getElementById("form_error").style.display = "none";
//  			tastykhana_notify("Notification",request.message,function() {
//  				window.location.href=base_url+'login?referer='+base_url;
//  			});
  		}else {
//  			hideOverlay();
//  			var error = document.getElementById("form_error");
//  			//error.innerHTML = request.message;
//  			//error.style.display = "block"; 
//  			if (request.name)
//  				{
//  					$("#error_user_reg_name").html(request.name);
//  					document.getElementById("error_user_reg_name").style.display = "block";
//  					document.getElementById("user_reg_name").value="";
//  					$("#user_reg_name").closest('.form-group').addClass('has-error');
//  				}
//  			else
//  				{
//  					document.getElementById("error_user_reg_name").style.display = "none";
//  					$("#user_reg_name").closest('.form-group').removeClass('has-error');
//  				}
//  			if (request.email)
//				{
//					$("#error_user_reg_email").html(request.email);
//					document.getElementById("error_user_reg_email").style.display = "block";
//					document.getElementById("user_reg_email").value="";
//  					$("#user_reg_email").closest('.form-group').addClass('has-error');
//				}
//  			else
//				{
//					document.getElementById("error_user_reg_email").style.display = "none";
//					$("#user_reg_email").closest('.form-group').removeClass('has-error');
//				}
//  			if (request.password)
//				{
//					$("#error_user_reg_pwd").html(request.password);
//					document.getElementById("error_user_reg_pwd").style.display = "block";
//					document.getElementById("user_reg_pwd").value="";
//  					$("#user_reg_pwd").closest('.form-group').addClass('has-error');
//  					$("#user_reg_pwd").removeClass("input-box");
//				}
//  			else
//				{
//					document.getElementById("error_user_reg_pwd").style.display = "none";
//					$("#user_reg_pwd").closest('.form-group').removeClass('has-error');
//				}
//  			if (request.kaptcha)
//				{
//					$("#error_user_reg_kaptcha").html(request.kaptcha);
//					document.getElementById("error_user_reg_kaptcha").style.display = "block";
//					document.getElementById("kaptcha").value="";
//  					$("#kaptcha").closest('.form-group').addClass('has-error');
//				}
//  			else
//				{
//					document.getElementById("error_user_reg_kaptcha").style.display = "none";
//					$("#kaptcha").closest('.form-group').removeClass('has-error');
//				}
//  			if (request.mobile)
//  				{
//				$("#error_user_reg_mobile").html(request.mobile);
//				document.getElementById("error_user_reg_mobile").style.display = "block";
//				document.getElementById("user_reg_mobile").value="";
//					$("#user_reg_mobile").closest('.form-group').addClass('has-error');
//  				}
//			else
//				{
//				document.getElementById("error_user_reg_mobile").style.display = "none";
//				$("#user_reg_mobile").closest('.form-group').removeClass('has-error');
//				}
//  			//SDA14July14
//  			  if (request.cityid)
//				{
//				$("#error_user_reg_city").html(request.cityid);
//				document.getElementById("error_user_reg_city").style.display = "block";
//				document.getElementById("user_reg_city").value="";
//				$("#user_reg_city").closest('.form-group').addClass('has-error');
//				}
//  			   else
//  			   {
//  				   document.getElementById("error_user_reg_city").style.display = "none";
//  				   $("#user_reg_city").closest('.form-group').removeClass('has-error');
//  			   }
//  			  if (request.status == 0)
//  			 	{
//  					$("#form_error").html(request.message);
//  					document.getElementById("form_error").style.display = "block";
//  				}
//  			else
//  				{
//  					document.getElementById("form_error").style.display = "none";
//  				}
  		}
	    },
  	error: function(request, errorType, errorThrown){
  		//hideOverlay();
	    }
	});
}


       

	// pre-submit callback 
	function showRequest(formData, jqForm, options) {
		var queryString = $.param(formData);
		return true;
	}

	// post-submit callback 
	function showResponse(responseText, statusText, xhr, $form) {
		alert(responseText);
	}
        

     // A $( document ).ready() block.
        $( document ).ready(function() {
             $("#user_signup").click(function() {
             var url = base_url + 'index.php/home/register';
		var options = {
			target : '#test',
			beforeSubmit : showRequest,
			success : showResponse,
			url : base_url + 'index.php/home/register',
			semantic : true,
			dataType : 'json'
		};
		
		$('#signup_form').ajaxForm(options);
                
                
                //$('#signup_form').ajaxSubmit();
	});
      });
    </script>