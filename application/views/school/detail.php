<!DOCTYPE html>
<!-- saved from url=(0068)http://real-estate.aws.ipv4.ro/angular/index.html#/property/property -->
<html lang="en" data-ng-app="app" data-ng-controller="AppCtrl" class="ng-class:app.settings.htmlClass ng-scope st-layout ls-top-navbar ls-bottom-footer show-sidebar sidebar-l1 sidebar-r1-xs st-effect-rxs-1 sidebar-r-25pc-lg sidebar-r-30pc"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link type="text/css" rel="stylesheet" href="./details page_files/css"><style type="text/css">.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px}</style><style type="text/css">@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style><style type="text/css">.gm-style{font-family:Roboto,Arial,sans-serif;font-size:11px;font-weight:400;text-decoration:none}.gm-style img{max-width:none}</style><script src="./details page_files/markerclusterer.min.js"></script><script src="./details page_files/infobox_packed.js"></script><script src="./details page_files/jquery.ui.map.rdfa.js"></script><script src="./details page_files/jquery.ui.map.overlays.js"></script><script src="./details page_files/jquery.ui.map.microformat.js"></script><script src="./details page_files/jquery.ui.map.microdata.js"></script><script src="./details page_files/jquery.ui.map.services.js"></script><script src="./details page_files/jquery.ui.map.extensions.js"></script><script src="./details page_files/jquery.ui.map.js"></script><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}</style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
     <title>edbuddy</title>
<?php include 'header.php';?>
     <body class="breakpoint-1024">

  <!-- uiView:  --><div data-ui-view="" class="ui-view-main ng-scope"><!-- uiView:  --><div ui-view="" class="ui-view-main ng-scope"><!-- Wrapper required for sidebar transitions -->
<div class="st-container ng-scope">

  <!-- Fixed navbar -->
<?php include 'header.php';?>
  <!-- Sidebar component with st-effect-1 (set on the toggle button within the navbar) -->
  <aside class="sidebar left sidebar-size-1 sidebar-mini-reveal sidebar-offset-0 sidebar-skin-dark sidebar-visible-desktop" id="sidebar-menu" data-type="collapse">
    <div data-scrollable="" tabindex="17" style="overflow-y: hidden; outline: none;">
      <ul class="sidebar-menu sm-bordered sm-icons-block sm-icons-right">
        <li class="hasSubmenu" >
          <a href="http://real-estate.aws.ipv4.ro/angular/index.html#discover" data-toggle="collapse" class="collapsed" aria-expanded="false"><i class="fa fa-star"></i><span>Discover</span></a>
          <ul id="discover" class="collapse" aria-expanded="false">
            <li ><a  href="list search.htm"><i class="fa fa-map-marker"></i><span>Search Result</span></a></li>
          </ul>
        </li>
        <li class="hasSubmenu open active" >
          <a href="http://real-estate.aws.ipv4.ro/angular/index.html#property" data-toggle="collapse" class="collapsed" aria-expanded="false"><i class="fa fa-home"></i><span>Schools</span></a>
          <ul id="property"  class="collapse in" aria-expanded="false">
            <li ><a  href=""><i class="fa fa-map-marker"></i><span>High Schools</span></a></li>
            <li  class="active"><a  href="./details page_files/details page.html"><i class="fa fa-list"></i><span>Secondary schools</span></a></li>
          </ul>
        </li>
      </ul>
      <h4 class="category">NearBy Schools</h4>
      <ul class="sidebar-menu sm-icons-block sm-icons-right sm-active-item-bg">
        <li ><a  href=""><i class="fa fa-search"></i><span>Sonai School</span></a></li>
        <li ><a  href=""><i class="fa fa-eyedropper"></i><span>Sardar Dastur high school</span></a></li>
        <li ><a  href=""><i class="fa fa-map-marker"></i><span>sent vincent convent school</span></a></li>
      </ul>
      
      <h4 class="category"> a</h4>
      <div class="sidebar-block text-center">
        <a class="btn btn-primary active btn-block" href="">
          <strong>Test</strong>
        </a>
        <a class="btn btn-primary btn-block" href="">
          <strong>Test</strong>
        </a>
      </div>
    </div>
  
  </aside>


  
  <!-- content push wrapper -->
  <div class="st-pusher">

    <!-- sidebar effects INSIDE of st-pusher: -->
    <!-- st-effect-3, st-effect-6, st-effect-7, st-effect-8, st-effect-14 -->

    <!-- this is the wrapper for the content -->
    <div class="st-content">

      <!-- extra div for emulating position:fixed of the menu -->
      <div class="st-content-inner padding-top-none" id="content" data-scrollable="" tabindex="20" style="overflow-y: hidden; outline: none;">

        <div id="carousel-example-generic" class="carousel slide cover overlay overflow-hidden margin-bottom-none max-height-500" data-ride="carousel">
          <div class="ribbon-heading ribbon-primary h4 inline absolute left margin-none">€1,129,450</div>
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="2" class="active"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="item">
              <img src="<?php echo asset_url();?>img/architectural_main_school_building_facade.jpg" alt="First slide" class="width-100pc" style="width: 903px; height: 582px;">
            </div>
            <div class="item">
              <img src="<?php echo asset_url();?>img/schoolbus.jpg" alt="Second slide" class="width-100pc" style="height: 500px;">
            </div>
            <div class="item active">
              <img src="<?php echo asset_url();?>img/hillschool.jpg" alt="Third slide" class="width-100pc" style="height: 500px;">
            </div>
          </div>
          <div class="overlay overlay-bg-black">
            <div class="v-bottom">
              <div class="page-section">
                <h1 class="text-h1 text-overlay">Dastur High School</h1>
                <p class="text-subhead text-overlay">Sasane Nagar , Hadpsar </p>
              </div>
            </div>
            <div class="v-bottom">
              <div class="pull-left text-h5">
                <span class="fa fa-fw fa-star text-yellow-800"></span>
                <span class="fa fa-fw fa-star text-yellow-800"></span>
                <span class="fa fa-fw fa-star text-yellow-800"></span>
                <span class="fa fa-fw fa-star text-yellow-800"></span>
                <span class="fa fa-fw fa-star-o"></span>
              </div>
              <div class="pull-right text-h5">
                <i class="fa fa-fw fa-heart text-pink-500"></i> <span class="text-white">35 loved this</span>
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="http://real-estate.aws.ipv4.ro/angular/index.html#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="http://real-estate.aws.ipv4.ro/angular/index.html#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="property-meta">
          <ul>
            <li class="property-meta-item"><i class="fa fa-fw icon icon-home-2"></i> House</li>
            <li class="property-meta-item"><i class="fa fa-fw icon icon-bed"></i> 3 Bedrooms</li>
            <li class="property-meta-item"><i class="fa fa-fw icon icon-toilet"></i> 1 Bathrooms</li>
          </ul>
        </div>

        <div class="container-fluid">

          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">Description</h4>
            </div>
            <div class="panel-body">
              <div class="expandable expandable-indicator-white expandable-trigger">
                <div class="expandable-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor dolores nisi possimus temporibus. Aliquam assumenda consequuntur corporis, debitis eum eveniet excepturi fugit inventore iste libero nam nostrum nulla numquam, omnis quibusdam
                    soluta tenetur velit veritatis. Impedit minus numquam praesentium sapiente! Harum laboriosam quam quibusdam recusandae?</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias fuga in iste maiores nemo quisquam sapiente soluta suscipit ullam, veniam? Ab accusamus aliquam consequatur et expedita facere fugiat illum iure libero molestiae nesciunt
                    nisi, officia quidem, reprehenderit rerum sunt tenetur unde velit veniam voluptates voluptatum?</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias architecto asperiores blanditiis consequatur dignissimos distinctio dolores ducimus eaque, exercitationem facilis illum ipsum laudantium minima molestiae nam neque
                    nesciunt nihil obcaecati officiis perspiciatis possimus praesentium quas quidem recusandae rem repellendus reprehenderit sint ut vero voluptates!</p>
                <div class="expandable-indicator"><i></i></div></div>
              </div>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">Facilities</h4>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-sm-4 col-xs-6">
                  <ul class="property-facilities">
                    <li><i class="icon icon-wifi-2 primary"></i> Internet</li>
                    <li><i class="icon icon-shovel"></i> Garden</li>
                    <li><i class="md md-directions-car"></i> Garage</li>
                    <li><i class="md md-directions-bus"></i> Bus</li>
                  </ul>
                </div>
                <div class="col-sm-4 col-xs-6">
                  <ul class="property-facilities">
                    <li><i class="md md-local-mall"></i> Mall</li>
                    <li><i class="md md-local-bar"></i> Restaurant</li>
                    <li><i class="md md-local-laundry-service"></i> Washing</li>
                    <li><i class="icon icon-no-smoking"></i> No Smoking</li>
                  </ul>
                </div>
                <div class="col-sm-4 hidden-xs">
                  <ul class="property-facilities">
                    <li><i class="icon icon-shovel"></i> Garden</li>
                    <li><i class="icon icon-wifi-2"></i> Internet</li>
                    <li><i class="md md-directions-car"></i> Garage</li>
                    <li><i class="md md-directions-bus"></i> Bus</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <h4>Comments</h4>
          <form class="ng-pristine ng-valid">
            <div class="form-group input-group">
              <input type="text" class="form-control" placeholder="Your comment ..">
              <span class="input-group-btn">
            <button class="btn btn-primary" type="button"><i class="fa fa-plus"></i></button>
        </span>
            </div>
          </form>
          <section class="panel panel-default">
            <div class="panel-body">
              <div class="media">
                <a class="media-left" href="">
                  <img class="media-object" src="./details page_files/guy-2.jpg" alt="people">
                </a>
                <div class="media-body">
                  <small class="text-grey-400 pull-right">2 minutes ago</small>
                  <h5 class="media-heading margin-v-5">Andrew B.</h5>
                  <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias asperiores doloremque nulla omnis perspiciatis repudiandae sit suscipit temporibus vitae voluptates?</p>
                </div>
              </div>
            </div>
          </section>
          <section class="comment-reply">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="media">
                  <a class="media-left" href="">
                    <img class="media-object" src="./details page_files/woman-5.jpg" alt="people">
                  </a>
                  <div class="media-body">
                    <small class="text-grey-400 pull-right">2 hours ago</small>
                    <h5 class="media-heading margin-v-5">Jane D.</h5>
                    <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet facere laborum nam numquam quia tempora.</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="panel panel-default">
            <div class="panel-body">
              <div class="media">
                <a class="media-left" href="">
                  <img class="media-object" src="./details page_files/guy-1.jpg" alt="people">
                </a>
                <div class="media-body">
                  <small class="text-grey-400 pull-right">1 hour ago</small>
                  <h5 class="media-heading margin-v-5">Dave P.</h5>
                  <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dignissimos quidem quis! Alias et hic nemo reprehenderit, repudiandae totam ut.</p>
                </div>
              </div>
            </div>
          </section>

          <h4>Nearby Schools</h4>

          <div class="slick-basic slick-slider slick-initialized" data-items="4" data-items-lg="4" data-items-md="3" data-items-sm="2" data-items-xs="1">

            <div class="slick-list draggable" tabindex="0">
             <div class="slick-track" style="opacity: 1; width: 3066px; transform: translate3d(-876px, 0px, 0px);">
             
             <div class="item slick-slide slick-cloned" index="-4" style="width: 213px;">
              <div class="panel panel-default relative">
                <div class="ribbon-heading text-h5 ribbon-default inline margin-none left absolute"></div>
                <div class="cover hover overlay margin-none" style="height: 141px;">
                  <a ui-sref="property.property" class="overlay overlay-full overlay-bg-black overlay-hover" href="./details page_files/details page.html" style="height: 141px;">
                    <span class="v-center">
                        <span class="btn btn-circle btn-white"><i class="fa fa-eye"></i></span>
                    </span>
                  </a>
                  <img src="./details page_files/photodune-196089-house-xs.jpg" alt="location" class="img-responsive">
                </div>
                <div class="panel-body">
                  <h4 class="margin-v-0-5">MIT High School</h4>
                  <p class="small">
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                  </p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <span class="label label-grey-100"></span>
                  <i class="small fa fa-fw icon-user-1" data-toggle="tooltip" data-title="Individual"></i>
                </div>
              </div>
            </div>
            
            <div class="item slick-slide slick-cloned" index="-3" style="width: 213px;">
              <div class="panel panel-default relative">
                <div class="ribbon-heading text-h5 ribbon-primary inline margin-none left absolute"></div>
                <div class="cover hover overlay margin-none" style="height: 141px;">
                  <img src="./details page_files/photodune-197173-residential-home-xs.jpg" alt="location" class="img-responsive">
                  <a ui-sref="property.property" class="overlay overlay-full overlay-bg-black overlay-hover" href="./details page_files/details page.html" style="height: 141px;">
                    <span class="v-center">
                        <span class="btn btn-circle btn-white"><i class="fa fa-eye"></i></span>
                    </span>
                  </a>
                </div>
                <div class="panel-body">
                  <h4 class="margin-v-0-5">Vit Convent School</h4>
                  <p class="small">
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                  </p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <span class="label label-grey-100"></span>
                  <i class="small fa fa-fw icon-user-1" data-toggle="tooltip" data-title="Individual"></i>
                </div>
              </div>
            </div>
            
            <div class="item slick-slide slick-cloned" index="-2" style="width: 213px;">
              <div class="panel panel-default relative">
                <div class="ribbon-heading text-h5 ribbon-default inline margin-none left absolute">CBSE</div>
                <div class="cover hover overlay margin-none" style="height: 141px;">
                  <img src="./details page_files/photodune-2238345-apartments-xs.jpg" alt="location" class="img-responsive">
                  <a ui-sref="property.property" class="overlay overlay-full overlay-bg-black overlay-hover" href="./details page_files/details page.html" style="height: 141px;">
                    <span class="v-center">
                        <span class="btn btn-circle btn-white"><i class="fa fa-eye"></i></span>
                    </span>
                  </a>
                </div>
                <div class="panel-body">
                  <h4 class="margin-v-0-5">Kidzee </h4>
                  <p class="small">
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                  </p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <span class="label label-grey-100"></span>
                  <i class="small fa fa-fw icon-user-1" data-toggle="tooltip" data-title="Individual"></i>
                  <a ui-sref="property.property" class="btn btn-primary btn-circle absolute bottom right" href="./details page_files/details page.html"><i class="fa fa-shopping-cart"></i></a>
                </div>
              </div>
            </div>
            
            <div class="item slick-slide slick-cloned" index="-1" style="width: 213px;">
              <div class="panel panel-default relative">
                <div class="ribbon-heading text-h5 ribbon-primary inline margin-none left absolute">CBSE</div>
                <div class="cover hover overlay margin-none" style="height: 136px;">
                  <img src="./details page_files/photodune-3979102-superb-backyard-xs.jpg" alt="location" class="img-responsive">
                  <a ui-sref="property.property" class="overlay overlay-full overlay-bg-black overlay-hover" href="./details page_files/details page.html" style="height: 136px;">
                    <span class="v-center">
                        <span class="btn btn-circle btn-white"><i class="fa fa-eye"></i></span>
                    </span>
                  </a>
                </div>
                <div class="panel-body">
                  <h4 class="margin-v-0-5">JSPM </h4>
                  <p class="small">
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                  </p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <span class="label label-grey-100">Medium : English</span>
                  <i class="small fa fa-fw icon-home-fill-1" data-toggle="tooltip" data-title="Agency"></i>
                  <a ui-sref="property.property" class="btn btn-primary btn-circle absolute bottom right" href="./details page_files/details page.html"><i class="fa fa-shopping-cart"></i></a>
                </div>
              </div>
            </div>
            
            <div class="item slick-slide slick-active" index="0" style="width: 213px;">
              <div class="panel panel-default relative">
                <div class="ribbon-heading text-h5 ribbon-primary inline margin-none left absolute">CBSE</div>
                <div class="cover hover overlay margin-none" style="height: 141px;">
                  <img src="./details page_files/photodune-378874-real-estate-xs.jpg" alt="location" class="img-responsive">
                  <a ui-sref="property.property" class="overlay overlay-full overlay-bg-black overlay-hover" href="./details page_files/details page.html" style="height: 141px;">
                    <span class="v-center">
                        <span class="btn btn-circle btn-white"><i class="fa fa-eye"></i></span>
                    </span>
                  </a>
                </div>
                <div class="panel-body">
                  <h4 class="margin-v-0-5">Bishops High School</h4>
                  <p class="small">
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                  </p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <span class="label label-grey-100">Medium : English</span>
                  <i class="small fa fa-fw icon-home-fill-1" data-toggle="tooltip" data-title="Agency"></i>
                  <a ui-sref="property.property" class="btn btn-primary btn-circle absolute bottom right" href="./details page_files/details page.html"><i class="fa fa-shopping-cart"></i></a>
                </div>
              </div>
            </div>
            </div>
          </div>
          <button type="button" data-role="none" class="slick-prev" style="display: block;">Previous</button>
          <button type="button" data-role="none" class="slick-next" style="display: block;">Next</button>
          <ul class="slick-dots" style="display: block;">
	          <li class="slick-active">
	          	<button type="button" data-role="none">1</button>
	          </li>
	          <li><button type="button" data-role="none">2</button></li>
	          <li><button type="button" data-role="none">3</button></li>
	          <li><button type="button" data-role="none">4</button></li>
	          <li><button type="button" data-role="none">5</button></li>
	          <li><button type="button" data-role="none">6</button></li>
	          </ul>
	     </div>
          <!-- // END .owl-basic -->

        </div>

      </div>
      <!-- /st-content-inner -->

    </div>
    <!-- /st-content -->

  </div>
  <!-- /st-pusher -->

  <?php include 'footer.php';?>
  
  </body></html>