<!DOCTYPE html>
<!-- saved from url=(0068)http://real-estate.aws.ipv4.ro/angular/index.html#/front/home-slider -->
<html lang="en"
	class="st-effect-rxs-1 hide-sidebar ls-bottom-footer-fixed">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>School Search</title>
<link href="<?php echo asset_url();?>css/all.css" rel="stylesheet">
<link href="<?php echo asset_url();?>css/app.css" rel="stylesheet">
<link href="<?php echo asset_url();?>css/timeline.css" rel="stylesheet">
<link href="<?php echo asset_url();?>css/cobox.css" rel="stylesheet">
<!-- Custom Fonts -->
<link
	href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
	rel='stylesheet' type='text/css'>
<link
	href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
	rel='stylesheet' type='text/css'>
<link rel="stylesheet" wtype="text/css" href="<?php echo asset_url();?>font-awesome/css/font-awesome.min.css">
<!-- jQuery -->
<!--    <script src="<?php echo asset_url();?>js/all.js"></script>-->

<!-- Bootstrap Core JavaScript -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places"></script>
<script src="<?php echo asset_url();?>js/jquery.js"></script>
<script src="<?php echo asset_url();?>js/jquery.cookie.js"></script>
<script src="<?php echo asset_url();?>js/fontawesome-markers.min.js"></script>

<style type="text/css">
.gm-style .gm-style-cc span, .gm-style .gm-style-cc a, .gm-style .gm-style-mtc div
	{
	font-size: 10px;
}

@media print {
	.gm-style .gmnoprint, .gmnoprint {
		display: none
	}
}

@media screen {
	.gm-style .gmnoscreen, .gmnoscreen {
		display: none
	}
}

.gm-style {
	font-family: Roboto, Arial, sans-serif;
	font-size: 11px;
	font-weight: 400;
	text-decoration: none
}

.gm-style img {
	max-width: none
}

#detailmenubar.affix {
	top: 50px;
	z-index: 1000;
	width: 100%;
}
</style>
<script type="text/javascript">
	var base_url = '<?php echo $base_url; ?>';
	var asset_url = '<?php echo asset_url();?>';
    /* var global_url = '';
     var global_cityid = '';
     var global_city = '';
     var global_assets = '';
     var global_cdn = '';
     var js_cdn = '';
     var live_chat = '';
     var page = '';
     var autoload = true;
     var orderid = '';
     var local_js = '';
     var opt_page_url = '';
     var captcha = "";
     var cookie_domain = "";
     var dslider = false;
     var rslider = false;
     var is_mobile = '';*/
</script>
</head>
<body class="breakpoint-1024">
	<!-- uiView:  -->
	<div class="ui-view-main ">
		<!-- uiView:  -->
		<div class="ui-view-main">
			<!-- Fixed navbar -->
                <?php echo $template['partials']['header']; ?>
                <?php echo $template['body']; ?>
                <script src="<?php echo asset_url();?>js/pages/<?php echo $page;?>.js"></script>
                <!-- // END .bg-white -->
				<!-- // END #content -->
                <?php echo $template['partials']['footer']; ?>