<?php
$schools = $schoolList;
$schoolMedium = $filtersList['mediumFilter'];
$schoolBoard = $filtersList['boardFilter'];
$schoolType = $filtersList['typeFilter'];
$schoolCategory = $filtersList['categoryFilter'];
$activities = $filtersList['activityFilter'];
$safety = $filtersList['safetyFilter'];
$infrastructure = $filtersList['infraFilter'];
$classification = $filtersList['classificationFilter'];

?>
<<style>
<!--

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
		width:550px;
	}
	.navbar-form .search-1{
		width:100%;
	}
	.navbar-form .search-1 .input-group{
		width:100%;
	}
	.navbar-form .search-1 .input-group{
		width:100%;
	}
	.navbar-form .search-1 .input-group #schbox{
		width:100%;
	}
}
.pac-container {
  	z-index: 10000 !important;
}
-->
</style>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="" data-toggle="sidebar-menu" class="toggle pull-left visible-xs"><i class="fa fa-bars"></i></a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index"> eddbuddy</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="main-nav">
        <form class="navbar-form navbar-left margin-none ng-pristine ng-valid">
          	<div class="search-1">
	            <div class="input-group">
		            <div class="text-center col-lg-12" style="display: inline-block;">
						<div class="col-lg-4 selectContainer">
							<select class="selectpicker form-control" id="standardId" name="standardId">
								<option value="">--Select--</option>
		                        <?php  foreach ($standard as $key=>$value) { ?>
		                        <option value="<?php echo $value['id'] ?>" <?php if ($standardId == $value['id']) { echo "selected"; }?>><?php echo $value['name'] ?></option>
		                        <?php  } ?>
					  		</select>
						</div>
						<div class="col-lg-8">
							<input id="schbox" type="text" placeholder="Search by School, Area, Location" name="searchtxt" class="form-control">
						</div>
					</div>
	          	</div>
	     	</div>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <!-- Login -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
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
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-fw fa-plus"></i> Sign Up
            </a>
            <div class="dropdown-menu dropdown-size-280">
              <form class="ng-pristine ng-valid">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group form-control-default">
                      <label for="exampleInputFirstName">First name</label>
                      <input type="email" class="form-control" id="exampleInputFirstName" placeholder="Your first name">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group form-control-default">
                      <label for="exampleInputLastName">Last name</label>
                      <input type="email" class="form-control" id="exampleInputLastName" placeholder="Your last name">
                    </div>
                  </div>
                </div>
                <div class="form-group form-control-default required">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group form-control-default required">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </li>
          <!-- // END sign up -->
          <!-- user -->
          <li class="dropdown user">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo asset_url();?>img/users/guy-6.jpg" alt="" class="img-circle"> Bill<span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#"><i class="fa fa-user"></i>Profile</a></li>
              <li><a href="#"><i class="fa fa-wrench"></i>Settings</a></li>
              <li><a href="#"><i class="fa fa-sign-out"></i>Logout</a></li>
            </ul>
          </li>
          <!-- // END user -->
        </ul>
      </div>
      <!-- /.navbar-collapse -->

    </div>
    <div style="border-top:1px solid grey;" class="container-fluid">
    	<input type="hidden" name="latitude" id="latitude" value="<?php echo $latitude;?>" /> 
    	<input type="hidden" name="longitude" id="longitude" value="<?php echo $longitude;?>" />
		<!-- <input type="hidden" name="standardId" id="standardId" value="<?php echo $standardId;?>" /> -->
    	<div class="navbar-header">
<!--     		<a href="" data-toggle="sidebar-menu" class="toggle pull-left visible-xs"><i class="fa fa-bars"></i></a> -->
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
	          <li class="dropdown filters">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	              <i class="fa fa-angle-down fa-2x"></i> Category
	            </a>
	            <div class="dropdown-menu dropdown-size-120">
	            <form class="ng-pristine ng-valid">
	                <?php 
	                	if(isset($classification)) {
	                     	foreach ($classification as $key => $value) { ?>
	                        	<div class="form-group">
	                             	<div class="input-group">
										<input type="checkbox" name="schoolclassificationcheckbox" value="<?php echo $value['id']; ?>" /> <?php echo $value['name']; ?>
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
	              <i class="fa fa-angle-down fa-2x"></i> Board
	            </a>
	            <div class="dropdown-menu dropdown-size-120">
	            <form class="ng-pristine ng-valid">
	                <?php 
	                	if(isset($schoolBoard)) {
	                     	foreach ($schoolBoard as $key => $value) { ?>
	                        	<div class="form-group">
	                             	<div class="input-group">
										<input type="checkbox" name="schoolclassificationcheckbox" value="<?php echo $value['id']; ?>" /> <?php echo $value['name']; ?>
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
	              <i class="fa fa-angle-down fa-2x"></i> Medium
	            </a>
	            <div class="dropdown-menu dropdown-size-120">
	            <form class="ng-pristine ng-valid">
	                <?php 
	                	if(isset($schoolMedium)) {
	                     	foreach ($schoolMedium as $key => $value) { ?>
	                        	<div class="form-group">
	                             	<div class="input-group">
										<input type="checkbox" name="schoolclassificationcheckbox" value="<?php echo $value['id']; ?>" /> <?php echo $value['name']; ?>
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
	              <i class="fa fa-angle-down fa-2x"></i> Type
	            </a>
	            <div class="dropdown-menu dropdown-size-120">
	            <form class="ng-pristine ng-valid">
	                <?php 
	                	if(isset($schoolCategory)) {
	                     	foreach ($schoolCategory as $key => $value) { ?>
	                        	<div class="form-group">
	                             	<div class="input-group">
										<input type="checkbox" name="schoolclassificationcheckbox" value="<?php echo $value['id']; ?>" /> <?php echo $value['name']; ?>
									</div>
	                            </div>
	                <?php 
	                		}
	                	} 
	               	?>
	           	</form>
	            </div>
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
                      	<div class="input-group">
							<a href="javascript:sortSchool('classFee');" id="classFee-button">
								Fees <i class="fa fa-sort-amount-asc"></i>
							</a>
						</div>
						<div>
							<a href="javascript:sortSchool('distance');" id="distance-button">
								Distance <i class="fa fa-sort-amount-asc"></i>
							</a>
						</div>
						<div>
							<a href="javascript:sortSchool('rating');" id="rating-button">
								Rating <i class="fa fa-sort-amount-asc"></i>
							</a>
						</div>
						<div>
							<a href="javascript:sortSchool('seats');" id="seats-button">
								Seats <i class="fa fa-sort-amount-asc"></i>
							</a>
						</div>
                 	</div>
	            </form>
	            </div>
	          </li>
			<li class="sort-field-list">
				<a href="javascript:sortSchool('classFee');" id="classFee-button">
					Fees <i class="fa fa-sort-amount-asc"></i>
				</a>
			</li>
			<li class="sort-field-list">
				<a href="javascript:sortSchool('distance');" id="distance-button">
					Distance <i class="fa fa-sort-amount-asc"></i>
				</a>
			</li>
			<li class="sort-field-list">
				<a href="javascript:sortSchool('rating');" id="rating-button">
					Rating <i class="fa fa-sort-amount-asc"></i>
				</a>
			</li>
			<li class="sort-field-list">
				<a href="javascript:sortSchool('seats');" id="seats-button">
					Seats <i class="fa fa-sort-amount-asc"></i>
				</a>
			</li>
			<li>
				<a href="javascript:sortClear();" id="seats-button">
					Reset <i class="fa fa-refresh"></i>
				</a>
			</li>
      	</ul>
      	<ul class="nav nav-tabs navbar-right">
			<li style="padding-right:3px;">
				<a class="btn btn-default" href="javascript:viewMap();" id="map-button" style="max-height:38px;margin-top:1px;">
					Map
				</a>
			</li>
			<li style="padding-right:3px;">
				<a class="btn btn-default" href="javascript:hideMap();" id="list-button" style="max-height:38px;margin-top:1px;">
					List
				</a>
			</li>
      	</ul>
    </div>
  </nav>