<?php
$schools = $schoolList;
$schoolMedium = $filtersList['mediumFilter'];
$schoolBoard = $filtersList['boardFilter'];
$schoolCategory = $filtersList['categoryFilter'];
$classification = $filtersList['classificationFilter'];
?>
<style>
    html, body {height: 100%;}
	.text-wrap {
    overflow: hidden;
    display: inline-block;
    text-overflow: ellipsis;
    max-width: 100%;
    white-space: nowrap;
}
    #map-canvas {
        float:left;
        width:75%;
        height:100%;
        overflow-y:auto;
        min-height: 100%;
        display: block;
        background: #fff;
        z-index: 1;
    }
    
    #map-tabs {
        float:right;
        width:25%;
        height:100%;
        overflow-y:auto;
        min-height: 100%;
        display: block;
        background: #f4f4f4;
        z-index: 2;
        text-align: center;
        border-right: 1px solid rgba(0,0,0,.1);
        box-sizing: border-box;
    }
    
    #map-tabs .col-md-6{
		padding-left:0px;
		padding-right:0px;
		height:100%;
	    overflow-y:auto;
	    min-height: 100%;
		background: #f4f4f4;
	    cursor: pointer;
	    color: #2e2e32;
	    -webkit-box-sizing: border-box;
	    -moz-box-sizing: border-box;
	    box-sizing: border-box;
	    font-size: 16px;
	}
	.map-view{
		position:absolute;
		top:87px;
		width: 100%;
	    height: auto;
	    min-height:auto;
	    display: block;
	    font-size: 14px;
	    line-height: 20px;
	    font-family: din,Calibri,Cantarell,sans-serif;
	}
	.schoollistTab, .sortlistTab{
		width:50%;
		color: #2e2e32;
	}

    .schoollistTab, .sortlistTab .summary{
        line-height: 50px;
        font-weight: 700;
    }
    .schoollistTab, .sortlistTab .summary-list{
        line-height: 50px;
        font-weight: 700;
    }
    .schoollistTab, .sortlistTab .text {
        font-size: 14px;
        display: inline;
        line-height: 20px;
        font-weight: 400;
    }
    #map-tabs .tab-content{
        position:relative;
        height:100%;
        overflow-y:auto;
        min-height: 100%;
        padding:0px;
    }
    .tab-content #schoolList, #sortList, #sortListRight {
        height:100%;
        overflow-y:auto;
        min-height: 100%;
    }
    .tab-content .media-left, .media > .pull-left {
        padding-right: 5px;
    }
    .tab-content .media-left p a img{
        border:1px solid #f2f2f2;
    }
    .tab-content .media-body{
        text-align:left;
    }
    .tab-content #schoolList .panel{
        margin-bottom:0px;
        border-bottom:0px;
        border-left:0px;
    }
    .tab-content #schoolList .panel-body{
        padding-bottom:2px;
        padding-right:0px;
    }

    .tab-content .media-body .fee {
        color: #2e2e32;
        font-size: 14px;
        font-weight: 500;
        line-height: normal;
        white-space: nowrap;
    }

    .nav-tab-map-list{
        position: relative;
        width:100%;
    }

    ::-webkit-scrollbar-thumb {
        background: #aaa;
        border-radius: 6px;
    }

    ::-webkit-scrollbar {
        width: 10px;
        background: 0 0;
    }
    * {
        -webkit-tap-highlight-color: transparent;
        -webkit-font-smoothing: antialiased;
    }

    .fa-heart{
        color: #D41464;
    }

    .map-view {
        display:block;
    }

    #list-searchresult{
        display:none;
    }
    .container {
        position:relative;
        top:80px;
    }
    .container .row [class*="col-"] {
        padding: 0px;
        margin:0px;
    }
    .container .panel-default .col-md-9, .col-md-3{
        padding-left:0px;
        padding-right:0px;
    }
    #schresult .panel{
        border-top:0px;
        border-left:0px;
        border-right:0px;
        margin-bottom:0px;
    }
    .detail-label {
        color: #000;
        display: inline-block;
        opacity: .5;
    }
    .detail-value {
        color: #000;
        padding-bottom:5px;
    }
    .share-school{
    	margin-top: 11px;
        min-height:45px;
    }
    .share-school .padding-top-05{
        margin-top:5px;
    }
    .list-primary-button{
        width:80%;
    }
    .col-sm-3 .btn {
        font-weight:600;
    }
    #padding-left-08 {
        padding-left:8px;
    }
    .street-locality {
        opacity: .5;
        display: table-cell;
        max-width: 165px;
        padding-left: 0px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    .school-name-text {
    	font-size: 14px;
        font-weight:700;
        max-width: 165px;
        padding-left: 0px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    .school-name-text-marker{
        font-weight:700;
        font-size:16px;
        font-weight:normal;
        text-transform: capitalize;
        max-width: 200px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        text-align:left;
        padding-left:5px;
    }
    .street-locality-marker {
        opacity: .5;
        display: block-line;
        max-width: 200px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        text-align:left;
        padding-left:5px;
        font-weight:normal;
    }
    .school-fee-marker {
        display: block-line;
        max-width: 200px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        text-align:left;
        padding-left:5px;
        font-size:16px;
    }
    .list-top-line{
        min-height:45px;
    }
    .container .panel .panel-body .media .media-left p{
        margin-bottom:8px;
    }
    .dropdown-menu {
        max-height: 200px;
        overflow-y: auto;
        overflow-x: hidden;
        z-index: 700000;
    }

    .panel .panel-default {
        max-height: auto;
        overflow-y: auto;
        overflow-x: hidden;
    }
    #search_header{
        width:100%;
        top:52px;
        z-index:10000;
    }
    .map-gradient {
        margin-top: 20px;
        background-image: linear-gradient(90deg, #FF0000, #00FFFF);
    }
    .legend{
        background-color:#f2f2f2;
        color:#000;
        font-weight:bold;
        margin: 5px 5px 5px 5px;
        padding: 3px 3px 3px 3px;
    }
    .footer{
        display:none;
    }
    .nav > .sort-field-list{
        display: block;
    }
    .nav > .sort-field-dropdown{
        display:none;
    }
    .filter-text-bar{
        display:true;
    }
    @media screen and (max-width:1270px){
        .nav > .sort-field-list{
            display:none;
        }
        .nav > .sort-field-dropdown{
            display:block;
        }
        .filter-toggle-icon{
            padding-top:4px;
            padding-bottom:4px;
            margin-top:5px;
            margin-bottom:5px;
            font-size:14px;
        }
    }
    @media screen and (max-width:825px){
        .filter-text-bar{
            display:none;
        }
    }
    .container .row .col-md-3 .right-side-fav-button{
        padding:10px;
        border:1px solid transparent;
    }
    #listFavButton a{
        border:1px solid #e2e9e6;
        background-color:#fff;
    }
    .container .row .col-md-3{
        height:auto;
        min-height:100%;
        border-left:1px solid transparent;
    }
    .container .row .col-md-3 .right-side-bar{
        height:100%;
        min-height:100%;
    }
    .listFavButton{
        width:100%;
        color: #2e2e32;
    }

    .listFavButton .summary {
        line-height: 50px;
        font-weight: 700;
    }
    .listFavButton .summary-list {
        line-height: 50px;
        font-weight: 700;
    }
    .listFavButton .text {
        font-size: 14px;
        display: inline;
        line-height: 20px;
        font-weight: 400;
    }
    .container .row .col-md-3 .col-md-12 {
        padding-left: 0px;
        padding-right: 0px;
        height: 100%;
        overflow-y: auto;
        min-height: 100%;
        background: #f4f4f4;
        cursor: pointer;
        color: #2e2e32;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        font-size: 16px;
    }

    #right-col-md-3{
        height:100%;
        min-height:100%;
    }
    #list-image{
        position:relative;
    }
    #list-image img{
    	border:1px solid #e2e9e6;
    }
    #map-image{
        position:relative;
    }
    #map-image .fa-heart{
        background-color:rgba(255, 255, 255, 0.4);
    }
    #map-image .fa-heart-o{
        background-color:rgba(255, 255, 255, 0.4);
    }
    .icon-heart-list {
        position: absolute;
        right: 4px;
        top: 5px;
        z-index:1;
        font-size:16px;
    }
    .sort-listed-map-schools{
        position: absolute;
        right: 4px;
        top: 3px;
        z-index:1;
        font-size:16px;
        padding:1px;
    }
    .right-main-content-inner{
        position:fixed;
        top:90px;
        left:inherit;
        width:inherit;
        padding-right:15px;
    }
    .right-main-content-inner .nav{
        background-color:#fff;
    }
    #list-searchresult{
        width:100%;
    }
    .search-list-row{
        width:100%;
        height:auto;
        overflow:auto;
    }
    @media screen and (max-width:991px){
        .right-main-content-inner{
            position:relative;
            top:0px;
            left:inherit;
            width:inherit;
            padding-right:15px;
        }
    }
    .title-h1{
        padding-left:15px;
        font-size:12px;
        border-bottom:1px solid #e2e9e6;
    }
    .title-h1 h1{
        font-size:22px;
    }
    #listFavButton{
        padding-top:5px;
    }

    #schbox_inner{
        width:250px;
    }
    .compaire{
    	display:none;
    }
</style>

<div id="content">
    <div id="mav-view-layout" class="map-view">
        <div id="map-canvas"></div>
        <div class="infobox-wrapper" id="infobox-wrapper" style="width: 300px;">
            <div id="infobox" style="width: 300px;">
            </div>
        </div>
        <div id="map-tabs">
            <ul class="nav nav-tabs nav-tab-map-list" role="tablist">
                <li role="presentation" class="active col-md-6" id="schoollistTab">
                    <a href="#schoolList" aria-controls="schoolList" role="tab" data-toggle="tab">
                        <i class="fa fa-list"></i> 
                        <span class="summary-list"><?php echo count($schools); ?></span> <span class="text">Schools</span>
                    </a>
                </li>
                <li role="presentation" class="col-md-6" id="sortlistTab">
                    <a href="#sortList" aria-controls="sortList" role="tab" data-toggle="tab">
                        <i class="fa fa-heart"></i> 
                        <span class="summary">0</span> <span class="text">Sortlist</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="tab-map-list-content">
                <div role="tabpanel" class="tab-pane active" id="schoolList">
                    <div id="schresult-map">
                        <?php
                        if (isset($schools)) {
                            foreach ($schools as $key => $school) {
                                $arrLinks = explode("/",$permlink);
                                $schoolName = strtolower($school['name']);
                                $schoolName = str_replace(" ", "-", $schoolName);
                                $schoolName = str_replace("'", "", $schoolName);
                                $schoolName = preg_replace('/[^A-Za-z0-9\-]/', '', $schoolName);
                                $urllink = $base_url.$arrLinks[0]."/".$arrLinks[1]."/". $schoolName."-".$school['schoolId']."/".$arrLinks[2];

                                $rawUrl = $base_url . "index.php/home/schoolDetail/" . $school['schoolId'] . "/" . $standardId;
                                ?>
                                <div class="panel panel-default" id="map-search-result-<?php echo $school['schoolId'] ?>">
                                    <div class="panel-body">
                                        <div class="media media-clearfix-xs media-clearfix-sm">
                                            <div class="media-left">
                                                <p id="map-image">
                                                    <a href="<?php echo $urllink; ?>" target="_blank">
                                                        <?php if ($school['logo'] == "") { ?>
                                                            <img src="<?php echo asset_url(); ?>img/vector-school-house-28931692.jpg" alt="property" width="120" height="100" class="media-object">
                                                        <?php } else { ?>
                                                            <img src="<?php echo $school['logo']; ?>" alt="property" width="120" height="100" class="media-object">
                                                        <?php } ?>
                                                    </a>
                                                    <span class="sort-listed-map-schools" id="sortlistedmaphearts-<?php echo $school['schoolId']; ?>">
                                                        <i class="fa fa-heart-o"></i> 
                                                    </span>
                                                </p>
                                                <div class="text-center small">
                                                    <?php
                                                    $ratingNumber = round($school['rating']);
                                                    $decimal = $school['rating'] - $ratingNumber;
                                                    $unratedStars = 5 - $ratingNumber;
                                                    if ($decimal >= 0.5) {
                                                        $unratedStars = $unratedStars - 1;
                                                    }
                                                    for ($i = 0; $i < $ratingNumber; $i++) {
                                                        ?>
                                                        <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                    <?php } ?>
                                                    <?php if ($decimal >= 0.5) { ?>
                                                        <span class="fa fa-fw fa-star-half-o text-yellow-800"></span> 
                                                    <?php } ?>
                                                    <?php for ($i = 0; $i < $unratedStars; $i++) { ?>
                                                        <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="pull-right">
                                                 <!-- span class="text-grey-400 sort-listed-map-schools" id="sortlistedmaphearts-<?php echo $school['schoolId']; ?>"><i class="fa fa-heart-o fa-fw"></i></span-->
                                                </div>
                                                <h4 class="school-name-text media-heading margin-v-0-10">
                                                    <a href="<?php echo $urllink; ?>" target="_blank"><?php echo $school['name'] ?></a>
                                                </h4>
                                                <h5 class="margin-title text-capitalize"><?php echo ucwords($school['localityName'] . ", " . $school['cityName']); ?></h5>
                                                <p>
                                                    <span class="label-100">
                                                    <?php if (strtolower($school['boardName']) != "na") {
                                                        echo $school['boardName'];
                                                    } else {
                                                        echo $school['teachingApproach'];
                                                    } ?>,<?php echo $school['mediums'] ?></span>
                                                </p>
                                                <p>
                                                    <span class="fee label-100">
                                                        <i class="fa fa-rupee"></i> 
                                                        <?php
                                                        if ($school['totalFee'] > 1000)
                                                            echo round($school['totalFee'] / 1000, 2) . "K PA";
                                                        else
                                                            echo $school['totalFee'] . " PA";
                                                        ?>
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="sortList">

                </div>
            </div>
        </div>
    </div>

    <div class="container" id="list-searchresult">
        <div class="search-list-row">
            <div class="col-md-9 panel panel-default">
                <div class="title-h1 padding-left-05">
                    <h1><?php echo count($schools); ?> Schools in <?php echo $location; ?></h1> 
                </div>
                <div id="schresult">
                    <?php
                    if (isset($schools)) {
			echo '<script> var json = '. json_encode($schools).'</script>';
                        foreach ($schools as $key => $school) {
                            	$arrLinks = explode("/",$permlink);
                                $schoolName = strtolower($school['name']);
                                $schoolName = str_replace(" ", "-", $schoolName);
                                $schoolName = str_replace("'", "", $schoolName);
                                $schoolName = preg_replace('/[^A-Za-z0-9\-]/', '', $schoolName);
                                $urllink = $base_url.$arrLinks[0]."/".$arrLinks[1]."/". $schoolName."-".$school['schoolId']."/".$arrLinks[2];
                            ?>
                            <div class="panel panel-default" id="list-search-result-<?php echo $school['schoolId'] ?>">

                                <div class="panel-body">
                                    <div class="media media-clearfix-xs media-clearfix-sm">
                                        <div class="media-left">
                                            <p id="list-image">
                                                <a href="<?php echo $urllink; ?>" target="_blank">
                                                    <?php if ($school['logo'] == "") { ?>
                                                        <img src="<?php echo asset_url(); ?>img/vector-school-house-28931692.jpg" alt="property" width="150" height="130" class="media-object">
                                                    <?php } else { ?>
                                                        <img src="<?php echo $school['logo']; ?>" alt="property" width="150" height="130" class="media-object">
                                                    <?php } ?>
                                                </a>
                                                <span class="icon-heart-list" id="iconheartlist-<?php echo $school['schoolId']; ?>">
                                                    <i class="fa fa-heart-o"></i> 
                                                </span>
                                            </p>
                                           
                                                <input class="toggle-event" type="checkbox"   value="<?php echo $school['schoolId']; ?>" data-id="<?php echo $school['schoolId']; ?>">
                                                 <span class="compaire" id="compare-<?php echo $school['schoolId']; ?>">
                                                   <a> Compare Now</a>
                                                </span>
                                        </div>
                                        <div class="media-body">
                                            <div class="col-sm-3" id="padding-left-08">
                                                <div class="list-top-line">
                                                    <div class="school-name-text margin-title text-capitalize">

                                                        <a href="<?php echo $urllink;?>" target="_blank" class="school-link-<?php echo $school['schoolId'] ?>">
                                                            <?php echo $school['name'] ?>
                                                        </a>
                                                    </div>
                                                    <div class="street-locality">
                                                        <i class="fa fa-map-marker"></i> <?php echo ucwords($school['localityName'] . ", " . $school['cityName']); ?>
                                                    </div>
                                                </div>
                                                <div class="detail-label">
                                                    Category
                                                </div>
                                                <div class="detail-value">
                                                <?php echo $school['schoolClassification']; ?>
                                                </div>
                                                <?php if (strtolower($school['boardName']) != "na") { ?>
                                                    <div class="detail-label">
                                                        Board
                                                    </div>
                                                    <div class="detail-value">
                                                    <?php echo $school['boardName']; ?>
                                                    </div>
        										<?php } else { ?>
                                                    <div class="detail-label">
                                                        Teaching Approach
                                                    </div>
                                                    <div class="detail-value">
                                                    <?php echo $school['teachingApproach']; ?>
                                                    </div>
                                                <?php } ?>
                                                <div style="margin-top:8px;">
                                                	<a class="btn btn-primary list-primary-button" href="<?php echo $urllink?>/#gallery">
	                                                    <i class="fa fa-picture-o"></i> Gallery (<?php echo $school['galeryImages']; ?>)
	                                                </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-3" id="padding-left-08">
                                                <div class="list-top-line">
                                                    <div class="detail-label">
                                                        Play Group
                                                    </div>
                                                    <div>
                                                        (<i class="fa fa-user-plus"></i> <?php echo $school['seats']; ?> available)
                                                    </div>
                                                </div>
                                                <div class="detail-label">
                                                    Medium
                                                </div>
                                                <div class="detail-value">
                                                    <?php echo $school['mediums'] ?>
                                                </div>
                                                <div class="detail-label">
                                                    Type
                                                </div>
                                                <div class="detail-value">
                                                    <?php echo $school['schoolCategory'] ?>
                                                </div>
                                                <div style="margin-top:8px;">
	                                                <a class="btn btn-primary list-primary-button" href="<?php echo $urllink?>/#visualtour">
	                                                    <i class="fa fa-dot-circle-o"></i> 360<sup>0</sup> View
	                                                </a>
	                                            </div>
                                            </div>
                                            <div class="col-sm-3" id="padding-left-08">
                                                <div class="list-top-line">
                                                    <div>
                                                    	<div class="detail-label">
	                                                        Distance
	                                                    </div>
                                                        <div>
                                                            <?php echo round($school['distance'], 2) ?> Kms
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="detail-label">
                                                    Management
                                                </div>
                                                <div class="detail-value">
                                                    <?php echo $school['schoolType'] ?>
                                                </div>
                                                <div class="detail-label">
                                                    Fee(Per Annum)
                                                </div>
                                                <div class="detail-value">
                                                    <i class="fa fa-rupee"></i>
                                                    <?php
                                                    if ($school['totalFee'] > 1000)
                                                        echo round($school['totalFee'] / 1000, 2) . "K PA";
                                                    else
                                                        echo $school['totalFee'] . " PA";
                                                    ?> (approx.)
                                                </div>
                                                <div style="margin-top:8px;">
	                                                <a class="btn btn-primary list-primary-button" href="<?php echo $urllink?>/#review">
	                                                    <i class="fa fa-comments"></i> Reviews (<?php echo $school['reviews'] ?>)
	                                                </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="list-top-line text-center">
                                                    <div class="margin-title btn btn-primary">
                                                        <?php echo number_format((float) $school['rating'], 1, '.', ''); ?>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                        <?php
                                                        $ratingNumber = round($school['rating']);
                                                        $decimal = $school['rating'] - $ratingNumber;
                                                        $unratedStars = 5 - $ratingNumber;
                                                        if ($decimal >= 0.5) {
                                                            $unratedStars = $unratedStars - 1;
                                                        }
                                                        for ($i = 0; $i < $ratingNumber; $i++) {
                                                            ?>
                                                            <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                        <?php } ?>
                                                        <?php if ($decimal >= 0.5) { ?>
                                                            <span class="fa fa-fw fa-star-half-o text-yellow-800"></span> 
                                                        <?php } ?>
                                                        <?php for ($i = 0; $i < $unratedStars; $i++) { ?>
                                                            <span class="fa fa-fw fa-star-o text-yellow-800"></span>
        												<?php } ?>
                                                </div>
                                                <div class="text-center">(0 votes)</div>
                                                <div class="share-school" data-toggle="modal" data-target="#fbModal" data-id="<?php echo $school['schoolId']; ?>">
                                                    <div class="text-center detail-value padding-top-05">
                                                        <i class="fa fa-share-alt fa-2x"></i>
                                                    </div>
                                                </div>
                                                <div style="margin-top:0px;">
                                                    <a class="btn btn-primary list-primary-button" href="<?php echo $urllink?>/#contact">
                                                        <i class="fa fa-phone"></i> Contact
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-3 panel panel-default" id="right-main-content">
                <div class="right-main-content-inner">
                    <ul class="nav nav-tabs right-side-fav-button" role="tablist">
                        <li role="presentation" class="col-md-12 active" id="listFavButton">
                            <a href="#sortListRight" aria-controls="sortListRight" role="tab" data-toggle="tab">
                                <i class="fa fa-heart"></i> 
                                <span class="summary">0</span> <span class="text">Sortlisted Schools</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="right-side-bar">
                        <div role="tabpanel" class="tab-pane active" id="sortListRight" style="padding-bottom:40px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="compareview" style="position:absolute;top:0px;width:100%;display:none;background:linear-gradient(to right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8));z-index:1050;height:100%;">
    	<span  class="btn btn-primary btn-circle absolute  right" id="comparedistroy" >X</span>
	   	<div id="tiles-container"style="position:relative;top:45px;left:-25px;">
		 	<ul class="tl-page" data-tl-template="myTemplate">
		 	</ul>
	   	</div>
    </div>
</div>

<script src="<?php echo asset_url();?>js/jstiles.js" type="text/javascript"></script>
<script type="text/javascript">

var map;
    var dataArr = null;
    var infowindow = new google.maps.InfoWindow();
    dataArr = <?php echo json_encode($schools); ?>;
    var markers = [];
    $(document).ready(function () {

        $('#map-canvas').height(($(window).height() - $(".navbar-fixed-top").height()));
        $('#tab-map-list-content').height(($(window).height() - $(".navbar-fixed-top").height() - $(".nav-tab-map-list").height()));
        $("#right-side-bar").height(($(window).height() - $(".navbar-fixed-top").height()));
        $(window).resize(function () {
            $('#map-canvas').height(($(window).height() - $(".navbar-fixed-top").height()));
            $('#tab-map-list-content').height(($(window).height() - $(".navbar-fixed-top").height() - $(".nav-tab-map-list").height()));
            $("#right-side-bar").height(($(window).height() - $(".navbar-fixed-top").height()));
        });
    });

    var locCircle, locCircle1;
    var myMarker, myMarkernew;
    var flagAutoComplete = 0;
    var d = new Date();
    d.setTime(d.getTime() + (1 * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toGMTString();

    function initialize() {
        updateSortListedSchools();
        $('#schbox_inner').val($.cookie("ebdsearchgeolocation"));
        dataArr = <?php echo json_encode($schools); ?>;
        var ulat = $("#latitude").val();
        var ulng = $("#longitude").val();
        var minSort = 0;
        var maxSort = 0;
        var mapCanvas = document.getElementById('map-canvas');

        var mapOptions = {
            center: new google.maps.LatLng(ulat, ulng),
            zoom: 14,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        map = new google.maps.Map(mapCanvas, mapOptions);
        var legendDiv = document.createElement('DIV');
        var legend = new Legend(legendDiv, map);
        legendDiv.index = 1;
        map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(legendDiv);

<?php
$minColor = 0;
$maxColor = 0;

if (isset($schools)) {
    foreach ($schools as $key => $school) {
        if ($minColor > $school['totalFee']) {
            $minColor = $school['totalFee'];
        }
        if ($maxColor < $school['totalFee']) {
            $maxColor = $school['totalFee'];
        }
    }
}

if (isset($schools)) {
    foreach ($schools as $key => $school) {
?>
                var hexMarkerColor = getColourTemp(<?php echo $maxColor; ?>,<?php echo $minColor; ?>,<?php echo $school['totalFee']; ?>);
                var schoolText = "<?php echo $school['name']; ?>";
                var localityText = "<?php echo $school['localityName']; ?>";
                <?php if ($school['totalFee'] > 1000) { ?>
                    var schoolFeeMarker = "<?php echo round($school['totalFee'] / 1000, 2) . "K PA"; ?>";
                <?php } else { ?>
                    var schoolFeeMarker = "<?php echo $school['totalFee'] . " PA"; ?>";
                <?php } ?>
                <?php 
	                $arrLinks = explode("/",$permlink);
	                $schoolName = strtolower($school['name']);
	                $schoolName = str_replace(" ", "-", $schoolName);
	                $schoolName = str_replace("'", "", $schoolName);
	                $schoolName = preg_replace('/[^A-Za-z0-9\-]/', '', $schoolName);
	                $urllink = $base_url.$arrLinks[0]."/".$arrLinks[1]."/". $schoolName."-".$school['schoolId']."/".$arrLinks[2];
                ?>
                var marker_url = "<?php echo $urllink ?>";
                        var schoolBoards = "<?php echo $school['boardName'] ?>,<?php echo $school['mediums'] ?>";

                                var marker<?php echo $school['schoolId'] ?> = new google.maps.Marker({
                                    map: map,
                                    draggable: false,
                                    url: marker_url,
                                    position: new google.maps.LatLng(<?php echo $school['latitude'] ?>, <?php echo $school['longitude'] ?>),
                                    icon: {
                                        path: fontawesome.markers.MAP_MARKER,
                                        scale: 0.6,
                                        strokeWeight: 0.2,
                                        strokeColor: 'black',
                                        strokeOpacity: 1,
                                        fillColor: '#FE7569',
                                        fillOpacity: 0.9
                                    }
                                });
                                marker = marker<?php echo $school['schoolId'] ?>;
                                var school_img = "";
                                <?php if ($school['logo'] == "") { ?>
                                    school_img = "<img src='<?php echo asset_url() ?>img/vector-school-house-28931692.jpg' style='width:90px;height:90px;'>";
                                <?php } else { ?>
                                    school_img = "<img src='<?php echo $school['logo'] ?>' style='width:90px;height:90px;'>";
                                <?php } ?>
                                var infoContent = "<div id='infobox' style='width: 300px;'>"
                                        + "<div id='infobox-text' style='color: #000000; text-align: center;width:300px;'>"
                                        + "<span id='ins-drag'>"
                                        + "<div id='schoolimg' style='float: left; width:90px;'>" + school_img + "</div>"
                                        + "<div id='schooltext' style='float: right;width:210px;'>"
                                        + "<div class='school-name-text-marker'>"
                                        + schoolText
                                        + "</div>"
                                        + "<div class='street-locality-marker'>"
                                        + localityText
                                        + "</div>"
                                        + "<div class='street-locality-marker'>"
                                        + "<span class='label-100'>"
                                        + schoolBoards
                                        + "</span>"
                                        + "</div>"
                                        + "<div class='school-fee-marker'>"
                                        + "<span class='fee label-100'><i class='fa fa-rupee'></i> "
                                        + schoolFeeMarker
                                        + "</span>"
                                        + "</div>"
                                        + "</div>"
                                        + "</span> "
                                        + "<span id='err-text' style='font-weight: bold;'></span>"
                                        + "</div></div>";
                                google.maps.event.addListener(marker, 'mouseover', (function (marker, infoContent, infowindow) {
                                    return function () {
                                        infowindow.setContent(infoContent);
                                        infowindow.open(map, marker);
                                    };
                                })(marker, infoContent, infowindow));
                                google.maps.event.addListener(marker, 'mouseout', function () {
                                    infowindow.close(map, marker);
                                });
                                google.maps.event.addListener(marker, 'click', function () {
                                    window.open(this.url, '_blank');
                                });
                                markers.push(marker);
                                $(document.body).on('mouseenter', '#map-search-result-<?php echo $school['schoolId']; ?>' ,function(){
                                	marker<?php echo $school['schoolId'] ?>.setAnimation(google.maps.Animation.BOUNCE);
                                });
                                $(document.body).on('mouseleave', '#map-search-result-<?php echo $school['schoolId']; ?>' ,function(){
                                	marker<?php echo $school['schoolId'] ?>.setAnimation(null);
                                });

        <?php
    }//foreach school
}//if schools
?>

                        //~~~~~~~~~~ map circle ~~~~~~~~~~
                        var myLatlng = new google.maps.LatLng(ulat, ulng);
                        myMarker = new google.maps.Marker({
                            position: myLatlng,
                            map: map,
                            title: 'My location!',
                            icon: {
                                path: fontawesome.markers.MALE,
                                scale: 0.4,
                                strokeWeight: 0.2,
                                strokeColor: 'black',
                                strokeOpacity: 1,
                                fillColor: '#212121',
                                fillOpacity: 0.9
                            }
                        });
                        // Define a symbol using SVG path notation, with an opacity of 1.
                        var lineSymbol = {
                            path: 'M 0,-1 0,1',
                            strokeOpacity: 1,
                            scale: 4
                        };
                        var mapCircle = {
                            strokeColor: "#c3fc49",
                            strokeOpacity: 0.8,
                            strokeWeight: 2,
                            fillColor: "#1E90FF",
                            fillOpacity: 0.35,
                            icons: [{
                                    icon: lineSymbol,
                                    offset: '0',
                                    repeat: '20px'
                                }],
                            map: map,
                            center: myLatlng,
                            radius: 3000 // in meters
                        };
                        locCircle = new google.maps.Circle(mapCircle)
                        locCircle.bindTo('center', myMarker, 'position');
                        var places_inner = new google.maps.places.Autocomplete(document.getElementById('schbox_inner'));

                        google.maps.event.addListener(places_inner, 'place_changed', function () {

                            map.clearOverlays();
                            var place = places_inner.getPlace();
                            var address = place.formatted_address;
                            var latitude = place.geometry.location.lat();
                            var longitude = place.geometry.location.lng();
                            var i = latitude + "," + longitude;
                            var a = address;

                            var mesg = "Address: " + address;
                            mesg += "\nLatitude: " + latitude;
                            mesg += "\nLongitude: " + longitude;
                            $("#latitude").val(latitude);
                            $("#longitude").val(longitude);
                            $("#address").val(address);

                            $.cookie("ebdsearchgeocode", i, {expires: 180, path: '/'});
                            $.cookie("ebdsearchgeolocation", a, {expires: 180, path: '/'});
                            /******/

                            document.cookie = "ebdsearchgeocode=" + i + ";expires=" + expires + "; path=/;";
                            
                            getPermlink(latitude,longitude, $("#standardId").val());
                            
                            for (var i = 0; i < markers.length; i++) {
                                markers[i].setMap(null);
                            }
                            markers.length = 0;
                            //map.panTo(new google.maps.LatLng(i));
                            map.setCenter(place.geometry.location);
                            //~~~~~~~~~~ map circle ~~~~~~~~~~
                            var myLatlng = new google.maps.LatLng(latitude, longitude);
                            myMarkernew = new google.maps.Marker({
                                position: myLatlng,
                                map: map,
                                title: 'My location!',
                            });
                            // Define a symbol using SVG path notation, with an opacity of 1.
                            var lineSymbol = {
                                path: 'M 0,-1 0,1',
                                strokeOpacity: 1,
                                scale: 4
                            };
                            var mapCircle = {
                                strokeColor: "#c3fc49",
                                strokeOpacity: 0.8,
                                strokeWeight: 2,
                                fillColor: "#1E90FF",
                                fillOpacity: 0.35,
                                icons: [{
                                        icon: lineSymbol,
                                        offset: '0',
                                        repeat: '20px'
                                    }],
                                map: map,
                                center: myLatlng,
                                radius: 3000 // in meters
                            };
                            locCircle1 = new google.maps.Circle(mapCircle)
                            locCircle1.bindTo('center', myMarkernew, 'position');
                            flagAutoComplete = 1;
                            //~~~~~~~~~map circle ~~~~~~~~~~~
                            filterResults();

                        });
                    } //end initialize
                    google.maps.event.addDomListener(window, 'load', initialize);

                    $("#standardId").change(function () {
                        for (var i = 0; i < markers.length; i++) {
                            markers[i].setMap(null);
                        }
                        markers.length = 0;
                        filterResults();
                    });

                    google.maps.Map.prototype.clearOverlays = function () {

                        for (var i = 0; i < markers.length; i++) {
                            markers[i].setMap(null);
                        }
                        myMarker.setMap(null);
                        markers.length = 0;
                        locCircle.setMap(null);
                        if (flagAutoComplete == 1) {
                            locCircle1.setMap(null);
                            myMarkernew.setMap(null);
                        }

                    }


                    $('#main-nav').on('keydown', '#frmsearchInner', function (evt) {
                        if (evt.which === 13) {
                            evt.preventDefault();

                        }

                    });
                    
                    
function getPermlink(latitude,longitude,stdid){
    console.log(latitude+ ","+longitude+","+stdid);
    var permlink =null;
    var status = 0;
    var data ="";
    $.post(base_url + "permlink",
            {
               lat: latitude,
               lng: longitude,
               std: stdid
            }, function (response) {
                
                $.each(response, function (key, value) {
                    if (key == "status") {
                        status = value;
                    }else if(key == "data" ){
                        data = JSON.parse(value);
                        $.each(data, function (key1, value1) {
                            permlink = value1.toLowerCase(); 
                        });
                       
                    }
                });
                if(permlink != null && permlink !="" && status ==1){
                    
                    $("#address").val(permlink);
                    document.cookie = "ebdsearchgeoloc=" + permlink + ";expires=" + expires + "; path=/;";
                }else{
                    $.bootstrapGrowl("Sorry! We do not have schools in this location" , {
                        ele: 'body', // which element to append to
                        type: 'info', // (null, 'info', 'danger', 'success')
                        offset: {from: 'top', amount: 75}, // 'top', or 'bottom'
                        align: 'top', // ('left', 'right', or 'center')
                        width: 250, // (integer, or 'auto')
                        delay: 4000, // Time while the message will be displayed. It's not equivalent to the *demo* timeOut!
                        allow_dismiss: true, // If true then will display a cross to close the popup.
                        stackup_spacing: 10 // spacing between consecutively stacked growls.
                    });
                }
            }, 'json'
        );
   
}

$("#frmSch").affix({
    offset: {
        top: 200,
    }
});

$("#search_header").affix({
    offset: {
        top: 200,
    }
});

$('body').scrollspy({
    target: '.navbar-fixed-top',
    offset: 51
});

var cookie_domain = 'edbuddy.in';
var d = new Date();
d.setTime(d.getTime()+(1*24*60*60*1000));
var expires = "expires="+d.toGMTString();

google.maps.event.addDomListener(window, 'load', function () {
    var places = new google.maps.places.Autocomplete(document.getElementById('schbox'));
    console.log('189');
    google.maps.event.addListener(places, 'place_changed', function () {
        var place = places.getPlace();
        var address = place.formatted_address;
        var latitude = place.geometry.location.lat();
        var longitude = place.geometry.location.lng();
        var i = latitude+","+longitude;
        var a = address;
        var mesg = "Address: " + address;
        mesg += "\nLatitude: " + latitude;
        mesg += "\nLongitude: " + longitude;
        $("#latitude").val(latitude);
        $("#longitude").val(longitude);
        $("#address").val(address);
        document.cookie="ebdsearchgeocode="+i+";expires="+expires+"; path=/;domain=edbuddy.in";
        document.cookie="ebdsearchgeoloc="+a+";expires="+expires+"; path=/;domain=edbuddy.in";
    });
});

$('.toggle-event').change(function() {
	if($(this).prop('checked')){
		$( this).parent().css( "width", "50px" );
	    //if($('.toggle-event:checked').size() >= 2)
	    $("#compare-"+$(this).attr("data-id")).show();
	}else{
		$( this).parent().css( "width", "100px" );
		$("#compare-"+$(this).attr("data-id")).hide();
	}
  })
$(".compaire").click(function(){
var compareSize = $('.toggle-event:checked').size();
if(compareSize >=2){
        addToCompare();
        $("#list-searchresult").hide();
        $( "#compareview" ).fadeIn( "slow", function() {
            // Animation complete
        });
        var myTemplateObject = {
                myTemplate: {
                tilesNum: compareSize,
                        tiles: {
                            0: '',
                            1: '',
                            2: '',
                            3: ''
                        },
                        animations: {
                            0: { tlClass:'tl-slide-right', tlClassF:'tl-slide-right-in', tlDelay:10000 },
                            1: { tlClass:'tl-slide-down', tlClassF:'tl-slide-down-f', tlDelay:1500 },
                            2: { tlClass:'tl-slide-up', tlClassF:'tl-slide-down-f', tlDelay:1500 },
                            3: { tlClass:'tl-slide-left', tlClassF:'tl-slide-down-f', tlDelay:1500 },
                        }
                }
        }
        var opt = {
                templateObj: myTemplateObject
        } 
        $('#tiles-container').jstiles(opt);
}else{
        alert("atleast 2 schools needed to compare");
}
});
$("#comparedistroy").click(function(){
	$("#compareview").fadeOut( "slow", function() {
		    // Animation complete
	});
	$("#list-searchresult").fadeIn( "slow", function() {
		    // Animation complete
	});

  $('.tl-page li').remove();
});

$(document).ready(function () {

//Function for social login modal pop up
$( ".share-school" ).click(function() {
    var schoolId = $(this).data("id");
    var divparent = "#list-search-result-"+$(this).data("id");
    var aclass = '.school-link-'+schoolId;
    var urLink = $(divparent).find(aclass).attr('href');
    var html = "";
    $.post(base_url+"share-social-login",
    {
    permlink: urLink,
    schoolId: schoolId
    },function(response){
      $.each(response, function(key, value) {
            if(key == "id")
               id = value;
            else if(key == "html")
               html = value;
            else if(key == "status")
               status = value;

           $("#fbModal #divsocial").html(html);
           $("#fbModal #divsocial #copyurl").val(urLink);

        });
    },'json'
    );
});

$('.toggle-event').bootstrapToggle({
    on: "<i class='fa fa-check'></i>",
    off: "compare",
    width:"100px"
});  

});
 
   
</script>
