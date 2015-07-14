<!DOCTYPE html>
<!-- saved from url=(0069)http://real-estate.aws.ipv4.ro/angular/index.html#/front/listing-grid -->
<html lang="en"  class="st-effect-rxs-1 hide-sidebar top-navbar ls-bottom-footer-fixed"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
   <title>edbuddy</title>
<body class="breakpoint-1024">

  <!-- uiView:  --><div data-ui-view="" class="ui-view-main ng-scope"><!-- uiView:  --><div ui-view="" class="ui-view-main ng-scope"><!-- Fixed navbar -->
<?php include 'header.php';?>

<div id="content" class="ng-scope">
  <section class="cover overlay height-200 height-270-xs">
    <img src="<?php echo asset_url();?>img/school/photodune-186709-residential-street-m.jpg" alt="cover" style="width: 1279px; height: 856.367476851852px;">
    <div class="overlay overlay-full overlay-bg-black bg-transparent">
      <div class="container">
        <h1 class="text-h1 text-overlay">School Search</h1>
      </div>
    </div>
    <div class="overlay overlay-bg-black">
      <div class="v-bottom">
        <div class="container">
          <p class="text-overlay">You searched for schools in hadpsar.</p>
        </div>
      </div>
    </div>
  </section>

  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
          <div class="panel-heading panel-collapse-trigger collapse in" data-toggle="collapse"  aria-expanded="true" style="">
            <h4 class="panel-title">Location</h4>
          </div>
          
        <div  class="collapse in"><div class="panel-body">

            <div class="form-group">
              
                 <select class="form-control"  data-toggle="select2" title="">
                <optgroup label="Alaskan/Hawaiian Time Zone">
                  <option value="AK">Alaska</option>
                  <option value="HI">Hawaii</option>
                </optgroup>
                <optgroup label="Pacific Time Zone">
                  <option value="CA">California</option>
                  <option value="NV">Nevada</option>
                  <option value="OR">Oregon</option>
                  <option value="WA">Washington</option>
                </optgroup>
                <optgroup label="Mountain Time Zone">
                  <option value="AZ">Arizona</option>
                  <option value="CO">Colorado</option>
                  <option value="ID">Idaho</option>
                  <option value="MT">Montana</option>
                  <option value="NE">Nebraska</option>
                  <option value="NM">New Mexico</option>
                  <option value="ND">North Dakota</option>
                  <option value="UT">Utah</option>
                  <option value="WY">Wyoming</option>
                </optgroup>
                <optgroup label="Central Time Zone">
                  <option value="AL">Alabama</option>
                  <option value="AR">Arkansas</option>
                  <option value="IL">Illinois</option>
                  <option value="IA">Iowa</option>
                  <option value="KS">Kansas</option>
                  <option value="KY">Kentucky</option>
                  <option value="LA">Louisiana</option>
                  <option value="MN">Minnesota</option>
                  <option value="MS">Mississippi</option>
                  <option value="MO">Missouri</option>
                  <option value="OK">Oklahoma</option>
                  <option value="SD">South Dakota</option>
                  <option value="TX">Texas</option>
                  <option value="TN">Tennessee</option>
                  <option value="WI">Wisconsin</option>
                </optgroup>
                <optgroup label="Eastern Time Zone">
                  <option value="CT">Connecticut</option>
                  <option value="DE">Delaware</option>
                  <option value="FL">Florida</option>
                  <option value="GA">Georgia</option>
                  <option value="IN">Indiana</option>
                  <option value="ME">Maine</option>
                  <option value="MD">Maryland</option>
                  <option value="MA">Massachusetts</option>
                  <option value="MI">Michigan</option>
                  <option value="NH">New Hampshire</option>
                  <option value="NJ">New Jersey</option>
                  <option value="NY">New York</option>
                  <option value="NC">North Carolina</option>
                  <option value="OH">Ohio</option>
                  <option value="PA">Pennsylvania</option>
                  <option value="RI">Rhode Island</option>
                  <option value="SC">South Carolina</option>
                  <option value="VT">Vermont</option>
                  <option value="VA">Virginia</option>
                  <option value="WV">West Virginia</option>
                </optgroup>
              </select>
            </div>

            <div class="checkbox checkbox-primary margin-none">
              <input id="radius50" type="checkbox" checked="">
              <label for="radius50">50km radius</label>
            </div>
          </div>
          </div></div>

        <div class="panel panel-default" data-toggle="panel-collapse" data-open="false">
          <div class="panel-heading panel-collapse-trigger collapse in" data-toggle="collapse" data-target="#6d98aa69-0d44-7a1a-96d2-5bd350287a73" aria-expanded="true" style="">
            <h4 class="panel-title">School Type</h4>
          </div>
          
        <div id="6d98aa69-0d44-7a1a-96d2-5bd350287a73" class="collapse"><div class="panel-body">

            <div class="form-group">
              <label class="label-block" for="check-in">Board Type</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				 <select class="form-control" title="">
                  <option value="cbse">CBSE</option>
                  <option value="state">State</option>
                  <option value="state">IGCE</option>
                  <option value="state">ICSE</option>
                 </select>
               </div>
            </div>
            <div class="form-group margin-none">
              <label class="label-block" for="check-out">School Medium</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <select class="form-control" title="">
                  <option value="cbse">English</option>
                  <option value="state">Marathi</option>
                  <option value="state">Hindi</option>
                  <option value="state">Others</option>
                </select>
              </div>
            </div>
            <div class="form-group margin-none">
              <label class="label-block" for="check-out">School Type</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <select class="form-control" title="">
                  <option value="cbse">Boys</option>
                  <option value="state">Girls</option>
                  <option value="state">Co-Education</option>
                </select>
              </div>
            </div>

          </div></div></div>

        <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
          <div class="panel-heading panel-collapse-trigger collapse in" data-toggle="collapse" data-target="#2577c4d2-088a-9d72-d555-13d644a5a25b" aria-expanded="true" style="">
            <h4 class="panel-title">More</h4>
          </div>
          
        <div id="2577c4d2-088a-9d72-d555-13d644a5a25b" class="collapse in"><div class="panel-body">

            <div class="form-group">
              <label for="guests">Facility:</label>
              <div class="input-group bootstrap-touchspin">
               <select class="form-control" title="">
                  <option value="cbse">Boys</option>
                  <option value="state">Girls</option>
                  <option value="state">Co-Education</option>
                </select>
              </div>
            </div>
            <div class="form-group margin-none">
              <p class="help-block margin-none"><a href="#lodging" data-toggle="collapse" class="collapsed" aria-expanded="false">+ more</a></p>
            </div>

            <div class="collapse" id="lodging" aria-expanded="false">
              <br>
              <div class="form-group">
                <label for="sports">Sports:</label>
                <div class="input-group bootstrap-touchspin">
                <select class="form-control" title="">
                  <option value="cbse">Cricket</option>
                  <option value="state">Football</option>
                  <option value="state">Table Tennis</option>
                </select>
                </div>
              </div>
              <div class="form-group">
                <label for="arts">Arts:</label>
                <div class="input-group bootstrap-touchspin">
                <select class="form-control" title="">
                  <option value="cbse">Music</option>
                  <option value="state">Kevboard</option>
                  <option value="state">Vocal</option>
                </select>
                </div>
              </div>
              <div class="form-group">
                <label for="bedrooms">Category:</label>
                <div class="input-group bootstrap-touchspin">
                <select class="form-control" title="">
                  <option value="cbse">Pre-School</option>
                  <option value="state">Play School</option>
                  <option value="state">K-12</option>
                </select>
                </div>
              </div>
            </div>

          </div></div></div>

        <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
          <div class="panel-heading panel-collapse-trigger collapse in" data-toggle="collapse" data-target="#b7fc22f2-629a-83c9-b17e-dc65823a0d8e" aria-expanded="true" style="">
            <h4 class="panel-title">Fees</h4>
          </div>
          
        <div id="b7fc22f2-629a-83c9-b17e-dc65823a0d8e" class="collapse in">
         <div class="panel-body">

            <div class="slider slider-horizontal">
            	<div class="slider-track">
            	 <div class="slider-selection" style="left: 24.2424242424242%; width: 20.2020202020202%;"></div>
            	 <div class="slider-handle min-slider-handle" tabindex="0" style="left: 24.2424242424242%;"></div>
            	 <div class="slider-handle max-slider-handle" tabindex="0" style="left: 44.4444444444444%;"></div>
            	</div>
            	 <div class="tooltip tooltip-main top" style="left: 34.3434343434343%; margin-left: -33px;">
            	   <div class="tooltip-arrow"></div><div class="tooltip-inner">250 : 450</div>
            	  </div>
            	  <div class="tooltip tooltip-min top" style="left: 24.2424242424242%; margin-left: -18px;">
            	   <div class="tooltip-arrow"></div><div class="tooltip-inner">250</div>
            	  </div>
            	  <div class="tooltip tooltip-max bottom" style="top: 18px; left: 44.4444444444444%; margin-left: -18px;">
            	   <div class="tooltip-arrow"></div><div class="tooltip-inner">450</div>
            	  </div>
             </div>
             <input data-slider="default" type="text" value="250,450" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[250,450]" data-slider-handle="square" data="value: &#39;250,450&#39;" style="">

          </div></div></div>

        <div class="row text-center">
          <div class="col-xs-6">
            <button class="btn btn-block btn-success">Search Now!</button>
          </div>
          <div class="col-xs-6">
            <a href="" class="btn btn-link"><i class="fa fa-fw fa-times"></i> reset filters</a>
          </div>
        </div>
        <br>
      </div>
      <div class="col-md-9">

        <div class="row">
          <div class="col-xs-6">
            <h4><span class="text-primary">280</span> Results</h4>
          </div>
          <div class="col-xs-6 text-right">
            <div class="dropdown display-inline-block">
              <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                Sort by:
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu pull-right">
                <li><a href="">Action</a></li>
                <li><a href="">Another action</a></li>
                <li><a href="">Something else here</a></li>
                <li><a href="">Separated link</a></li>
              </ul>
            </div>
            <div class="btn-group display-inline-block">

              <a class="btn btn-primary"  href="search"><i class="fa fa-list"></i></a>
              <a class="btn btn-primary active" href=""><i class="fa fa-th"></i></a>

            </div>
          </div>
        </div>
        <br>

        <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
          <div class="panel-heading panel-collapse-trigger collapse in" data-toggle="collapse" data-target="#cad83c8a-f71a-59d3-8ea5-819c804665bc" aria-expanded="true" style="">
            <h4 class="panel-title">Map View</h4>
          </div>
          
        <div  class="collapse in">
         <div class="panel-body relative height-350">
          </div>
         </div>
        </div>

        <div class="row gridalicious" data-toggle="gridalicious" data-width="200">
        <?php for ($i=0;$i<=8;$i++) {?>
         <div class="galcolumn" id="item0ZgvPF" style="width: 24.5743473325766%; padding-left: 15px; padding-bottom: 15px; float: left; box-sizing: border-box;">
          <div class="panel panel-default relative" style="margin-bottom: 15px; zoom: 1; opacity: 1;">
            <div class="ribbon-heading ribbon-primary inline absolute left margin-none">CBSE</div>
            <div class="cover hover overlay margin-none" style="height: 133px;">
              <img src="<?php echo asset_url();?>img/vector-school-house-28931692.jpg" alt="location" class="img-responsive" style="width: 100%; height: auto; display: block; margin-left: auto; margin-right: auto;">
              <a class="overlay overlay-full overlay-bg-black overlay-hover" href="" style="height: 133px;">
                <span class="v-center">
                <span class="btn btn-circle btn-white"><i class="fa fa-eye"></i></span>
                </span>
              </a>
            </div>
            <div class="panel-body">
              <h4 class="margin-v-0-5">Bishops Convent School</h4>
              <p class="small">
                <span class="fa fa-fw fa-star text-yellow-800"></span>
                <span class="fa fa-fw fa-star text-yellow-800"></span>
                <span class="fa fa-fw fa-star text-yellow-800"></span>
                <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                <span class="fa fa-fw fa-star-o text-yellow-800"></span>
              </p>
              <p>bishops convent school .</p>
              <span class="label label-grey-100">Medium : English</span>&nbsp;

              <i class="small fa fa-fw icon-home-fill-1" data-toggle="tooltip" data-title="Agency"></i>

              <a  class="btn btn-primary btn-circle absolute bottom right" href="">View</a>
            </div>
          </div>
         
          </div>
          <?php } ?>
<div id="clearZgvPF" style="clear: both; height: 0px; width: 0px; display: block;"></div></div>

        <ul class="pagination margin-top-none">
          <li class="disabled"><a href="#">«</a></li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">»</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php';?></body></html>