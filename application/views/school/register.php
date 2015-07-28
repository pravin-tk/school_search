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
    .form-group {
        width :65%;
    }
    .has-success .form-control {
        background: none;
    }
</style>

<!-- uiView:  --><div data-ui-view="" class="ui-view-main ng-scope"><!-- uiView:  --><div ui-view="" class="ui-view-main ng-scope"><!-- Fixed navbar -->
        <?php //include 'header.php';  ?>
        <div id="content" >
            <section class="cover overlay height-70 height-270-xs">
<!--                <img src="<?php echo asset_url(); ?>img/school/photodune-186709-residential-street-m.jpg" alt="cover">-->
<!--                <div class="overlay overlay-full overlay-bg-black bg-transparent">
                    <div class="container">
                        <h1 class="text-h1 text-overlay">School</h1>
                    </div>
                </div>-->
<!--                <div class="overlay overlay-bg-black">
                    <div class="v-bottom">
                        <div class="container">
                            <p class="text-overlay">You searched for school near hadpsar. <span class="hidden-sm hidden-xs"></span></p>
                        </div>
                    </div>
                </div>-->
            </section>
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-9">

                        <div class="row">
                            
                        </div>

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="media media-clearfix-xs media-clearfix-sm">
                                        <h4> Registration </h4>
                                        <hr/>
                <div class="media-body">
                    <form method="post"   id="profile_form" action="javascript:;" enctype="multipart/form-data">
                        <div id="profile_form_error"></div>
                <div class="form-group">
                    <label for="firstName" class="control-label">First Name</label>
                        <input type="text" pattern="^([_A-z0-9]){3,}$" maxlength="25" 
                               class="form-control" id="firstName" name="firstName" placeholder="Enter first name" value ="">
                    
                    <span class="help-block with-errors"></span>
                </div>
                <div class="form-group">
                    <label for="lastName" class="control-label">Last Name</label>
                        <input type="text" pattern="^([_A-z0-9]){3,}$" maxlength="25" 
                               class="form-control" id="lastName" name="lastName"  placeholder="Enter last name"  value="" >
                  
                    <span class="help-block with-errors"></span>
                </div>
                    <div class="form-group">
                        <label for="emailId" class="control-label">Email Id</label>
                            <input type="text"  maxlength="25" 
                                   class="form-control" id="emailId" name="emailId" value="">
                       
                        <span class="help-block with-errors"></span>
                    </div>
                    <div class="form-group">
                        <label for="mobileNo" class="control-label">Mobile No</label>
                        
                            <input type="text" pattern="^([0-9]){3,}$" maxlength="10" 
                                   class="form-control" id="mobileNo" name="mobileNo" placeholder="Enter mobile number" required value="">

                        <span class="help-block with-errors"></span>
                    </div>
                    <div class="form-group">
                        <label for="imageFile" class="control-label">Image</label>
                       
                            <input type="file"  
                                   class="form-control" id="imageFile" placeholder="Upload image" name="imageFile" required>

                        <span class="help-block with-errors"></span>
                    </div>

                    <div class="form-group">
                       
                        <input type="submit" id="profile_save" class="btn btn-primary" value="Save" />
<!--                        <input type="reset" id="btnreset" class="btn btn-default" value="Cancel"/>-->
                    </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
        <div class="col-md-3">
                     
        </div>

                </div>
            </div>
        </div>
    </div>
