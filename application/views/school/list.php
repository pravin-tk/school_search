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


<!-- uiView:  --><div data-ui-view="" class="ui-view-main ng-scope"><!-- uiView:  --><div ui-view="" class="ui-view-main ng-scope"><!-- Fixed navbar -->
        <?php //include 'header.php'; ?>
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
                        <!--        <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
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
                                        
                                       
                                      </select>
                                    </div>
                        
                                    <div class="checkbox checkbox-primary margin-none">
                                      <input id="radius50" type="checkbox" checked="">
                                      <label for="radius50">50km radius</label>
                                    </div>
                                  </div>
                                  </div>
                                  </div>-->
                <input type ="hidden" name = "latitude" id ="latitude" value = "<?php echo $latitude;?>"/>
            <input type ="hidden" name = "longitude" id ="longitude" value = "<?php echo $longitude;?>"/>       
            <input type ="hidden" name = "standardId" id ="standardId" value = "<?php echo $standardId;?>"/>  
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
                                                    if(isset($schoolType))
                                                    foreach ($schoolType as $key => $value) { ?>

                                                    <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>

                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group margin-none">
                                        <label class="label-block" for="check-in">Board</label>
                                        <div class="input-group">
                                            <select id="boardtypeselectbox"  class="form-control multiselect" multiple="multiple">
                                                  <option value=""> -- Select -- </option>
                                                <?php 
                                                 if(isset($schoolBoard))   
                                                    foreach ($schoolBoard as $key => $value) { ?>
                                                        <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>

                                                    <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group margin-none">
                                        <label class="label-block" for="check-out">Medium</label>
                                        <div class="input-group">
                                            <select id="mediumselectbox"  class="form-control multiselect"multiple="multiple">
                                                  <option value=""> -- Select -- </option>
                                                <?php 
                                                if(isset($schoolMedium))
                                                foreach ($schoolMedium as $key => $value) { ?>
                                                    <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>

                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                   
                                    <div class="form-group margin-none">
                                        <label for="category">Category:</label>
                                        <div class="input-group bootstrap-touchspin">
                                            <select id="schoolcategoryselectbox" class="form-control multiselect"multiple="multiple">
                                                <option value=""> -- Select -- </option>
                                                <?php 
                                                if(isset($schoolCategory))
                                                    foreach ($schoolCategory as $key => $value) { ?>
                                                        <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>

                                                    <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                      <div class="form-group margin-none">
                                        <label for="category">Classification:</label>
                                        <div class="input-group bootstrap-touchspin">
                                            <select id="classificationselectbox" class="form-control multiselect"multiple="multiple">
                                                <option value=""> -- Select -- </option>
                                                <?php 
                                                if(isset($classification))
                                                    foreach ($classification as $key => $value) { ?>
                                                        <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>

                                                    <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                </div></div></div>

                        <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
                            <div class="panel-heading panel-collapse-trigger collapse in" data-toggle="collapse" data-target="#2577c4d2-088a-9d72-d555-13d644a5a25b" aria-expanded="true" style="">
                                <h4 class="panel-title">Facilities present</h4>
                            </div>

                            <div id="2577c4d2-088a-9d72-d555-13d644a5a25b" class="collapse in"><div class="panel-body">
                                           <div class="form-group">
                                            <label for="activities">Activities:</label>
                                            <div class="input-group bootstrap-touchspin">
                                                 <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                <select id="activityselectbox" class="form-control multiselect"multiple="multiple">
                                                    
                                                    <option value=""> -- Select -- </option>
                                                    <?php 
                                                    if($activities)
                                                    foreach ($activities as $key => $items) { ?>
                                                        <optgroup label="<?php echo $items['categoryName']; ?>">
                                                        <?php foreach ($items['filter'] as $key1 => $itemvalue) { ?>
                                                                <option value="<?php echo $itemvalue['id']; ?>">
                                                                <?php echo $itemvalue['name']; ?>
                                                                </option>
                                                                <?php } ?>
                                                        </optgroup>

                                                        <?php } ?></select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="infrastructure">Infrastructure:</label>
                                            <div class="input-group bootstrap-touchspin">
                                                 <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                <select id="infraselectbox" class="form-control multiselect"multiple="multiple">
                                                    <option value=""> -- Select -- </option>
                                        <?php 
                                        if($infrastructure)
                                        foreach ($infrastructure as $key => $items) { ?>
                                                        <optgroup label="<?php echo $items['categoryName']; ?>">
                                                        <?php foreach ($items['filter'] as $key1 => $itemvalue) { ?>
                                                                <option value="<?php echo $itemvalue['id']; ?>">
                                                            <?php echo $itemvalue['name']; ?>
                                                                </option>
                                                            <?php } ?>
                                                        </optgroup>

                                                            <?php } ?></select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="safety">Safety:</label>
                                            <div class="input-group bootstrap-touchspin">
                                                <select id="safetyselectbox" class="form-control multiselect"multiple="multiple" >
                                                    <option value=""> -- Select -- </option>
                                                    
                                        <?php 
                                        if($safety)
                                            foreach ($safety as $key => $items) { ?>
                                                            <optgroup label="<?php echo $items["categoryName"]; ?>">
                                                        <?php foreach ($items["filter"] as $key1 => $itemvalue) { ?>
                                                                    <option value="<?php echo $itemvalue['id']; ?>">
                                                                <?php echo $itemvalue['name']; ?>
                                                                    </option>
                                                            <?php } ?>
                                                            </optgroup>

                                        <?php } ?></select>
                                            </div>
                                        </div>
                                    
                                    <div class="form-group margin-none">
                                        <p class="help-block margin-none"><a href="#lodging" data-toggle="collapse" class="collapsed" aria-expanded="false">+ more</a></p>
                                    </div>

                                    <div class="collapse" id="lodging" aria-expanded="false">
                                        <br>
                                 
                                    </div>

                                </div></div></div>


                        <div class="row text-center">
                            <div class="col-xs-6">
                                <input  type="button" class="btn btn-block btn-success" type = "button" name = "btnSch" id = "btnSch" value="Search Now!"/>
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
                            </div>
                        </div>
                        <br>

                        <!-- Map  -->
                        <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
                            <div class="panel-heading panel-collapse-trigger collapse in" data-toggle="collapse" data-target="#1e5da4fb-8e34-7fbb-2b79-e722a89153e4" aria-expanded="true" style="">
                                <h4 class="panel-title">Map View</h4>
                            </div>

                            <div id="1e5da4fb-8e34-7fbb-2b79-e722a89153e4" class="collapse"><div class="panel-body relative height-350">
                                </div>
                            </div></div>
                        <!-- Map end -->
                        <div id="schresult">
                        <?php //for ($i = 0; $i < 10; $i++) {
                            foreach($schools as $key => $school){
                        
                        ?>

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="media media-clearfix-xs media-clearfix-sm">
                                        <div class="media-left">
                                            <p>
                                                <a  href="<?php echo $base_url ?>index.php/home/schoolDetail/<?php echo $school['schoolId']?>/<?php echo $standardId; ?>">
                                                    <?php if($school['logo'] == ""){?>
                                                    <img src="<?php echo asset_url(); ?>img/vector-school-house-28931692.jpg" alt="property" width="150" class="media-object">
                                                    <?php }else{?>
                                                    <img src="<?php echo $school['logo'];?>" alt="property" width="150" class="media-object">
                                                     <?php }?>
                                                </a>
                                            </p>
                                            <div class="text-center small">
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="pull-right">
                                                <a  class="text-primary" href=""><i class="fa fa-comments fa-fw"></i> <strong>5</strong></a>
                                                <a  class="text-grey-400" href=""><i class="fa fa-heart-o fa-fw"></i></a>
                                            </div>
                                            <h4 class="media-heading margin-v-0-10">
                                                <a  href="<?php echo $base_url ?>index.php/home/schoolDetail/<?php echo $school['schoolId']; ?>/<?php echo $standardId?>"><?php echo $school['name']?>,
                                                    <?php echo $school['streetName']; ?>,<?php echo $school['localityName']?>,<?php echo $school['cityName']?></a>
                                            </h4>
                                            <p>
                                                <span class="label label-grey-100"><i class="fa fa-home fa-fw"></i>Board : <?php echo $school['boardName']?></span>
                                                <span class="label label-grey-100"><i class="fa fa-fw icon icon-toilet"></i> Medium :<?php echo $school['mediums']?></span>
                                                <span class="label label-grey-100"><i class="icon icon-shovel "></i> Category :<?php echo $school['schoolCategory']?> </span>
                                            </p>
                                            <p class="margin-none"><?php echo $school['aboutSchool']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                <?php } ?></div>

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
         <script type="text/javascript">

         var base_url = '<?php echo $base_url;?>'
  //  (function() {
        $("#btnSch").click(function(){

            console.log('hiys');
            var boardType = "";
            var schoolType = "";
            var mediumType = "";
            var categoryType = "";
            var activityType = "";
            var infraType = "";
            var safetyType = "";
            var classificationType = "";
            
            $('#boardtypeselectbox option:selected').each(function() {
                        boardType += $(this).val() + ",";
            });
            if(boardType !=""){
                boardType = boardType.substring(0,boardType.lastIndexOf(",")) ;
            }
            $('#mediumselectbox option:selected').each(function() {
                        mediumType += $(this).val() + ",";
            });
            if(mediumType !=""){
                mediumType = mediumType.substring(0,mediumType.lastIndexOf(",")) ;
            }
            $('#schooltypeselectbox option:selected').each(function() {
                        schoolType += $(this).val() + ",";
            });
            if(schoolType !=""){
                schoolType = schoolType.substring(0,schoolType.lastIndexOf(",")) ;
            }
            $('#schoolcategoryselectbox option:selected').each(function() {
                        categoryType += $(this).val() + ",";
            });
            if(categoryType !=""){
                categoryType = categoryType.substring(0,categoryType.lastIndexOf(",")) ;
            }
            $('#activityselectbox option:selected').each(function() {
                        activityType += $(this).val() + ",";
            });
            if(activityType !=""){
                activityType = activityType.substring(0,activityType.lastIndexOf(",")) ;
            }
            $('#infraselectbox option:selected').each(function() {
                        infraType += $(this).val() + ",";
            });
            if(infraType !=""){
                infraType = infraType.substring(0,infraType.lastIndexOf(",")) ;
            }
            $('#safetyselectbox option:selected').each(function() {
                        safetyType += $(this).val() + ",";
            });
            if(safetyType !=""){
                safetyType = safetyType.substring(0,safetyType.lastIndexOf(",")) ;
            }
            $('#classificationselectbox option:selected').each(function() {
                    classificationType += $(this).val() + ",";
            });
            if(classificationType !=""){
                classificationType = classificationType.substring(0,classificationType.lastIndexOf(",")) ;
            }
   
            var data = 'latitude='+$("#latitude").val()+'&longitude='+$("#longitude").val()+'&standardId='+$("#standardId").val();
            data += '&boardId='+boardType;
            data += '&mediumId='+mediumType;
            data += '&typeId='+schoolType;
            data += '&safetyId='+safetyType;
            data += '&infraId='+infraType;
            data += '&activityId='+activityType;
            data += '&classificationId='+classificationType;
            $.ajax({
        type: "post",
        url: base_url+"/index.php/home/schoolJSON",
        dataType: "json",
                data: data,
        success: function(data){
                  console.log('success') 
                   $("#schresult").html(data);
                  // $("#schresult").html('hii');
                    console.log($("#schresult").html()) 
                },
                error: function(request, errorType, errorThrown){
                }
            });
     
   });

$('#boardtypeselectbox').multiselect();

    
    </script>