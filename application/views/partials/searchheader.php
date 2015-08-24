<?php
if(isset($schoolList))
    $schools = $schoolList;

if(isset($filtersList)) {
    $schoolMedium = $filtersList['mediumFilter'];
    $schoolBoard = $filtersList['boardFilter'];
    $schoolCategory = $filtersList['categoryFilter'];
    $classification = $filtersList['classificationFilter'];
}
if(!isset($latitude))
    $latitude ="";
if(!isset($longitude))
     $longitude ="";
?>
<style>
<!--
#map-list-nav{
	padding-left:0px;
}
.dropdown-sort{
	padding:2px;
}
.dropdown-sort a{
	color:#212121;
}
.sort-active a{
	color:#26a69a;
}
.dropdown-sort a:hover{
	color:#26a69a;
}
#alogin{
	color:#ffffff;
}
#alogin .fa-lock{
	color:#ffffff;
}
#alogin:hover{
	color:#26a69a;
}
#header-signup-btn{
	color:#ffffff;
}
#header-signup-btn:hover{
	color:#26a69a;
}
#header-signup-btn .fa-plus{
	color:#ffffff;
}
.filters .fa-angle-down {
  color: #7f7f7f;
  margin-left: 6px;
  float: right;
  -webkit-transition: .5s ease-in-out;
  -o-transition: .5s ease-in-out;
  transition: .5s ease-in-out;
}
.filters .fa-angle-down {
  margin-left: 6px;
  line-height: inherit;
}
.filters.open .fa-angle-down {
  -webkit-transform: rotateZ(180deg);
  -moz-transform: rotateZ(180deg);
  -ms-transform: rotateZ(180deg);
  -o-transform: rotateZ(180deg);
  transform: rotateZ(180deg);
}
.navbar-nav > li > a.dropdown-toggle {
  height: 40px;
  line-height: 40px;
}
.navbar-nav > li > a {
  padding: 0 15px;
  height: 40px;
  line-height: 40px;
  font-size: 1.15rem;
}
.navbar-header h4{
  color: #7f7f7f;
  font-size: 10px;
}
.nav {
	font-family: din,Calibri,Cantarell,sans-serif;
}
.input-group .col-lg-12{
	margin:5px;
	height:40px;
}

.selectContainer{
	padding-right:5px;
}
.selectpicker{
	border:1px solid #ccc;
}
@media screen and (min-width: 768px){
	.navbar .search-1 .form-control {
	    height: 40px;
	    border: none;
	    background: none;
	    box-shadow: none;
	    border-radius: 0;
	}
	.navbar-form{
		min-width:450px;
		padding-left:0px;
		padding-right:0px;
	}
	.navbar-form .search-1{
		width:95%;
	}
	.navbar-form .search-1 .input-group{
		width:95%;
	}
	.navbar-form .search-1 .input-group{
		width:95%;
	}
	.navbar-form .search-1 .input-group #schbox{
		width:95%;
	}
}
@media screen and (min-width: 1000px){
	.navbar-form{
		min-width:550px;
		padding-left:0px;
		padding-right:0px;
	}
}
.pac-container {
  	z-index: 10000 !important;
}
@media (min-width:767px) and (max-width:1199px){
	.col-lg-12{
		width:100%;
		float:left;
		padding-left:0px;
		padding-right:0px;
	}
	.col-lg-4{
		width:30%;
		float:left;
	}
	.col-lg-8{
		width:70%;
		float:left;
	}
}
.search-bar-login:hover{
	color:#26a69a;
}
.search-bar-login i:hover{
	color:#26a69a;
}
#loggedin_user{
	color:white;
}
#loggedin_user:hover{
	color:white;
	background-color:#212121;
}
#loggedin_user_li open{
	background-color:#212121;
}
#loggedin_user_li open:not ( :hover){
	background-color:#212121;
}
.has-success .form-control {
    background:none;
}
.has-error .form-control {
    background: none;
}
.show-item-count{
	border-radius: 50%;
    behavior: url(PIE.htc); /* remove if you don't care about IE8 */
	min-width:20px;
    width: 20px;
    height: 20px;
    background: #26a69a;
    border: 1px solid #f2f2f2;
    color: #212121;
    padding:0px auto;
    padding-top:3px;
    text-align: center;
    font: 10px Arial, sans-serif;
    font-weight:bold;
    top: -8px;
    position: relative;
    display:none;
}

.range-filter .dropdown-menu {
	max-height:none;
	min-width:135px;
}
.range-filter .range-header {
    text-align: center;
    line-height: 45px;
    background: #e6e6e6;
    border: 1px solid #cdcdcd;
    margin-top: -6px;
}
.range-header .box {
    font-size: 12px;
    height: 25px;
    font-weight: 700;
    border: 1px solid #ccc;
    width: 46px;
}
.range-header .box, .range-header .dash {
    display: inline-block;
    vertical-align: middle;
}
.range-header .dash {
    height: 1px;
    width: 12px;
    background: #7f7f7f;
}
.range-header .box {
    font-size: 12px;
    height: 25px;
    font-weight: 700;
    border: 1px solid #ccc;
    width: 46px;
}
.range-header input, .range-header select {
    color: #191919;
    padding: 6px;
    height: 40px;
    margin: 0;
    display: inline-block;
    border: 1px solid #e6e6e6;
    background: #fff;
    outline: 0;
    font-size: 14px;
    vertical-align: middle;
    line-height: normal;
    border-radius: 2px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.range-filter ul.range-list {
    text-align: left;
    list-style: none;
    margin: 0;
    padding: 0;
}
.range-filter ul.range-list li.range-item {
    padding: 0 8px;
    line-height: 36px!important;
    cursor: pointer;
}
.range-filter ul.range-list li.range-item.current-item {
    font-weight: 700;
}
.range-filter ul.range-list li.range-item.selected, .range-filter ul.range-list li.range-item:hover {
    background: #EAECEE;
}
.range-filter ul.range-list.text-right {
    text-align: right;
}

-->
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
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid" style="background-color:#212121;">
      <div class="navbar-header" style="color:white;height:45px;">
        <a href="" data-toggle="sidebar-menu" class="toggle pull-left visible-xs"><i class="fa fa-bars"></i></a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" style="color:white;">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo $base_url; ?>" style="color:white;border-right: #c2c2c2;"> Edbuddy</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="main-nav" id="searchInner">
        <form class="navbar-form navbar-left margin-none ng-pristine ng-valid" id="frmsearchInner" style="height:45px;">
          	<div class="search-1">
	            <div class="input-group">
		            <div class="text-center col-lg-12" style="display: inline-block;">
                                <div class="col-lg-4 selectContainer">
                                    <select class="selectpicker form-control" id="standardId" name="standardId" style="background-color: white;height: 35px;">
									<option value="">--Select--</option>
                                <?php  
                                if($standard)
                                    foreach ($standard as $key=>$value) { ?>
                                        <option value="<?php echo $value['id'] ?>" <?php if ($standardId == $value['id']) { echo "selected"; }?>><?php echo $value['name'] ?></option>
                                <?php  } ?>
                                    </select>
                                </div>
                                <div class="col-lg-8">
                                        <input id="schbox_inner" type="text" placeholder="Search by School, Area, Location" name="searchtxt" class="form-control" style="background-color: white;height:35px;">
                                </div>
                            </div>
	          	</div>
	     	</div>
        </form>
        <ul class="nav navbar-nav navbar-right">
           <!-- Login -->
            <script>
            
                if(logged_in == null) { //not logged in
                    var public_data = '<li class="dropdown" style="background-color:#212121;">';
                    public_data += '<a href="#" class="search-bar-login" data-toggle="modal" data-target="#myModal" id="alogin" style="background-color:#212121;">';
                    public_data += '<i class="fa fa-fw fa-lock"></i> Login</a>';
                    public_data += '</li>';
                    document.write(public_data);
                }
               if(logged_in == null) { // not logged in
                var public_data = '<li class="dropdown" style="background-color:#212121;color:#ffffff;">';
                    public_data += '<a href="<?php echo $base_url; ?>signup" target="_blank" id="header-signup-btn" style="background-color:#212121;">';
                    public_data += '<i class="fa fa-fw fa-plus"></i> Sign Up</a>';
                    public_data += '<div class="dropdown-menu dropdown-size-280" style="background-color:#212121;color:#ffffff;"></div>'
                    public_data += '</li>';
                    document.write(public_data);
               }  
             
             
              if(logged_in != null) { // logged in
                    var private_data = '<li class="dropdown user" style="color:#fff;" id="loggedin_user_li">';
                    private_data += '<a href="#" class="dropdown-toggle" data-toggle="dropdown" id="loggedin_user">';
                    private_data += '<img src="'+logged_pic+'" alt="" class="img-circle"> '+logged_in_as+'<span class="caret"></span></a>'; 
                    private_data += '<ul class="dropdown-menu" role="menu" id="loggedin-settings">';
                    private_data += '<li><a href="<?php echo $base_url; ?>user-profile"><i class="fa fa-user"></i>Profile</a></li>';
//                    private_data += '<li><a href="#"><i class="fa fa-wrench"></i>Settings</a></li>';
                    private_data += '<li><a href="<?php echo $base_url; ?>logout"><i class="fa fa-sign-out"></i>Logout</a></li>';
                    private_data += '</ul></li>';
                    document.write(private_data);
              }
           </script>   
          <!-- // END sign up -->
         
        </ul>
      </div>
      <!-- /.navbar-collapse -->

    </div>
    <div style="border-top:1px solid grey;" class="container-fluid">
    	<input type="hidden" name="latitude" id="latitude" value="<?php echo $latitude;?>" /> 
    	<input type="hidden" name="longitude" id="longitude" value="<?php echo $longitude;?>" />
		<!-- <input type="hidden" name="standardId" id="standardId" value="<?php echo $standardId;?>" /> -->
    	<div class="navbar-header" >
	        <button type="button" class="navbar-toggle collapsed filter-toggle-icon" data-toggle="collapse" data-target="#main-nav-search">
	          <i class="text-success fa fa-filter"></i>
	        </button>
        	<h4 class="filter-text-bar">
                    <i class="text-success fa fa-filter fa-2x"></i> 
			</h4>
      	</div>
    	<div class="collapse navbar-collapse" id="main-nav-search">				
    		<ul class="nav navbar-nav navbar-left">
    		<!-- Category Filter -->
	          <li class="dropdown filters" style="padding-left:3px;">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	              <i class="fa fa-angle-down fa-2x"></i> Category<label class="show-item-count" id="classification-count">0</label>
	            </a>
	            <div class="dropdown-menu dropdown-size-120">
	            <form class="ng-pristine ng-valid">
	                <?php 
                            if(isset($classification)) {
	                     	foreach ($classification as $key => $value) { ?>
                                    <div class="form-group">
	                             	<div class="input-group">
                                            <input type="checkbox" name="schoolclassificationcheckbox" value="<?php echo $value['id']; ?>" class="search-filters" /> <?php echo $value['name']; ?>
                                        </div>
	                            </div>
	                <?php 
                                }
                            } 
	               	?>
	            </form>
	            </div>
	          </li>
          <!-- // END Category -->
          <!-- Board Filter -->
	          <li class="dropdown filters">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	              <i class="fa fa-angle-down fa-2x"></i> Board<label class="show-item-count" id="board-count">0</label>
	            </a>
	            <div class="dropdown-menu dropdown-size-120">
	            <form class="ng-pristine ng-valid">
	                <?php 
                            if(isset($schoolBoard)) {
	                     	foreach ($schoolBoard as $key => $value) { ?>
                                    <div class="form-group">
	                             	<div class="input-group">
                                            <input type="checkbox" name="schoolboardcheckbox" value="<?php echo $value['id']; ?>" class="search-filters" /> <?php echo $value['name']; ?>
                                        </div>
	                            </div>
	                <?php 
	                	}
                            } 
	               	?>
	           	</form>
	            </div>
	          </li>
          <!-- // END Board -->
          <!-- Medium Filter -->
	          <li class="dropdown filters">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	              <i class="fa fa-angle-down fa-2x"></i> Medium<label class="show-item-count" id="medium-count">0</label>
	            </a>
	            <div class="dropdown-menu dropdown-size-120">
	            <form class="ng-pristine ng-valid">
	                <?php 
                            if(isset($schoolMedium)) {
	                     	foreach ($schoolMedium as $key => $value) { ?>
                                    <div class="form-group">
	                             	<div class="input-group">
                                            <input type="checkbox" name="schoolmediumcheckbox" value="<?php echo $value['id']; ?>" class="search-filters" /> <?php echo $value['name']; ?>
                                        </div>
	                            </div>
	                <?php 
	                	}
                            } 
	               	?>
	           	</form>
	            </div>
	          </li>
          <!-- // END Medium -->
          <!-- Type Filter -->
	          <li class="dropdown filters">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	              <i class="fa fa-angle-down fa-2x"></i> Type<label class="show-item-count" id="category-count">0</label>
	            </a>
	            <div class="dropdown-menu dropdown-size-120">
	            <form class="ng-pristine ng-valid">
	                <?php 
                            if(isset($schoolCategory)) {
	                     	foreach ($schoolCategory as $key => $value) { ?>
                                    <div class="form-group">
	                             	<div class="input-group">
                                            <input type="checkbox" name="schoolcategorycheckbox" value="<?php echo $value['id']; ?>" class="search-filters" /> <?php echo $value['name']; ?>
                                        </div>
	                            </div>
	                <?php 
	                	}
                            } 
	               	?>
	           	</form>
	            </div>
	          </li>
	          <li class="dropdown filters range-filter">
	          	<a href="#" class="dropdown-toggle" data-toggle="dropdown">
	              <i class="fa fa-angle-down fa-2x"></i> Annual Fee<label class="show-item-count" id="annualfee-count">0</label>
	            </a>
	          	<ul class="dropdown-menu">
					<div class="dropdown-filter-wrapper">
						<form class="clearfix">
							<div class="range-header">
								<input class="box lower-box selected" placeholder="Min" tabindex="0" data-value="0" data-sample="lower">
								<div class="dash">&nbsp;</div>
								<input class="box upper-box selected" placeholder="Max" tabindex="0" data-value="0" data-sample="upper">
							</div>
							<div class="range-list-wrapper">
								<ul class="lower-list range-list" data-sample="lower" style="display: block;">
									<li class="range-item" data-value="0" data-sample="lower">
										0
									</li>
									<li class="range-item" data-value="5000" data-sample="lower">
										<span class="icon-rupee"></span>
										5000 +
									</li>
									<li class="range-item" data-value="10000" data-sample="lower">
										<span class="icon-rupee"></span>
										10.0K +
									</li>
									<li class="range-item" data-value="20000" data-sample="lower">
										<span class="icon-rupee"></span>
										20.0K +
									</li>
									<li class="range-item" data-value="30000" data-sample="lower">
										<span class="icon-rupee"></span>
										30.0K +
									</li>
									<li class="range-item" data-value="40000" data-sample="lower">
										<span class="icon-rupee"></span>
										40.0K +
									</li>
									<li class="range-item" data-value="50000" data-sample="lower">
										<span class="icon-rupee"></span>
										50.0K +
									</li>
								</ul>
								<ul class="hide range-list text-right upper-list" data-sample="upper" style="display: none;">
									<li class="range-item" data-value="10000" data-sample="upper">
										<span class="icon-rupee"></span>
										10.0K
									</li>
									<li class="range-item" data-value="15000" data-sample="upper">
										<span class="icon-rupee"></span>
										15.0K
									</li>
									<li class="range-item" data-value="20000" data-sample="upper">
										<span class="icon-rupee"></span>
										20.0K
									</li>
									<li class="range-item" data-value="25000" data-sample="upper">
										<span class="icon-rupee"></span>
										25.0K
									</li>
									<li class="range-item" data-value="30000" data-sample="upper">
										<span class="icon-rupee"></span>
										30.0K
									</li>
									<li class="range-item" data-value="35000" data-sample="upper">
										<span class="icon-rupee"></span>
										35.0K
									</li>
									<li class="range-item" data-value="0" data-any="true" data-sample="upper">
										Any value
									</li>
								</ul>
							</div>
						</form>
					</div>
				</ul>
	          </li>
	          <li>
	      		<a href="javascript:resetFilters();">
                  	<i class="fa fa-undo"></i>
                </a>
	          </li>
	          <li style="padding-left:5px;padding-right:3px;">
	      		<h4 class="filter-text-bar">
                    <i class="text-success fa fa-sort-numeric-asc"></i> 
				</h4>
	          </li>
          <!-- // END Type -->
      		<input type="hidden" name="classFee" id="classFee" value=""/>
			<input type="hidden" name="distance" id="distance" value=""/>
			<input type="hidden" name="rating" id="rating" value=""/>
			<input type="hidden" name="seats" id="seats" value=""/>
			<li class="dropdown filters sort-field-dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	              <i class="fa fa-angle-down fa-2x"></i> Sort
	            </a>
	            <div class="dropdown-menu dropdown-size-120">
	            <form class="ng-pristine ng-valid">
                  	<div class="form-group">
                            <div class="dropdown-sort">
                                <a href="javascript:sortSchool('classFee');" class="classFee-button">
                                        Fees <i class="fa fa-sort-amount-asc"></i>
                                </a>
                            </div>
                            <div class="dropdown-sort">
                                <a href="javascript:sortSchool('distance');" class="distance-button">
                                        Distance <i class="fa fa-sort-amount-asc"></i>
                                </a>
                            </div>
                            <div class="dropdown-sort">
                                <a href="javascript:sortSchool('rating');" class="rating-button">
                                        Rating <i class="fa fa-sort-amount-asc"></i>
                                </a>
                            </div>
                            <div class="dropdown-sort">
                                <a href="javascript:sortSchool('seats');" class="seats-button">
                                        Seats <i class="fa fa-sort-amount-asc"></i>
                                </a>
                            </div>
                 	</div>
	            </form>
	            </div>
	    </li>
            <li class="sort-field-list">
                <a href="javascript:sortSchool('classFee');" class="classFee-button">
                        Fees <i class="fa fa-sort-amount-asc"></i>
                </a>
            </li>
            <li class="sort-field-list">
                <a href="javascript:sortSchool('distance');" class="distance-button">
                        Distance <i class="fa fa-sort-amount-asc"></i>
                </a>
            </li>
            <li class="sort-field-list">
                <a href="javascript:sortSchool('rating');" class="rating-button">
                        Rating <i class="fa fa-sort-amount-asc"></i>
                </a>
            </li>
            <li class="sort-field-list">
                <a href="javascript:sortSchool('seats');" class="seats-button">
                        Seats <i class="fa fa-sort-amount-asc"></i>
                </a>
            </li>
            <li>
                <a href="javascript:sortClear();">
                         <i class="fa fa-refresh"></i>
                </a>
            </li>
      	</ul>
      	<ul class="nav-tabs navbar-right" id="map-list-nav" style="margin-bottom:0px;margin-top:5px;">
            <li style="padding-right:3px;">
                <a class="btn btn-default" href="javascript:viewMap();" id="map-button" style="max-height:38px;margin-top:1px;z-index:0;color:#212121;">
                   	Map
                </a>
            </li>
            <li style="padding-right:3px;">
                <a class="btn btn-default" href="javascript:hideMap();" id="list-button" style="max-height:38px;margin-top:1px;z-index:0;color:#212121;">
                   	List
                </a>
            </li>
      	</ul>
    </div>
  </nav>
