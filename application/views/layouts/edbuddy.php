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
<link href="<?php echo asset_url();?>css/style.css" rel="stylesheet">
<link href="<?php echo asset_url();?>css/cobox.css" rel="stylesheet">
<link href="<?php echo asset_url();?>css/rating.css" rel="stylesheet">
<link href="<?php echo asset_url();?>css/timeline.css" rel="stylesheet">

<link href="<?php echo asset_url();?>css/jquery.flipster.min.css" rel="stylesheet">
<link href="<?php echo asset_url();?>css/bootstrapValidator.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href="<?php echo asset_url();?>font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo asset_url();?>css/pages/<?php echo $page;?>.css" rel="stylesheet">
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places,geometry,drawing"></script>
<script src="<?php echo asset_url();?>js/jquery.js"></script>
<script src="<?php echo asset_url();?>js/jquery.cookie.js"></script>
<script src="<?php echo asset_url();?>js/fontawesome-markers.min.js"></script>
<script src="<?php echo asset_url();?>js/bootstrap.js"></script>
<script src="<?php echo asset_url();?>js/jquery.lazyload.min.js"></script>

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

#pan{
  position:relative;
  width:100%;
  height:100%;
  margin:0px auto;
}

#mask,#mask .bac,#mask .logo{
  position:absolute;
  top:0;
  left:0;
  width:100%;
  height:40px;
  z-index:2;
}
#mask .bac,#mask .logo{
  position:absolute;
  top:0;
  left:0;
  background:white;
}
#mask .logo{
/*    background:url("./img/logo130is.png") no-repeat 20px 10px; */
}
#mask .bac{
  -webkit-opacity:.4; 
  -o-opacity:.4;
  -khtml-opacity:.4;      
  -moz-opacity:.4;
  opacity:.4;
  z-index:-1;
}
#mask .remote{
  position:absolute;
  width:20px;
  height:20px;
  top:10px;
  right:15px;
  z-index:2;
  cursor:pointer;
}
#mask .stop{
/*   background:url("pause.png") no-repeat; */
}
#mask .play{
/*   background:url("play.png") no-repeat; */
}

</style>
<script type="text/javascript">
	var base_url = '<?php echo $base_url; ?>';
	var asset_url = '<?php echo asset_url();?>';
        
</script>
</head>
<body class="breakpoint-1024"id="page-top" data-spy="scroll" data-target=".property-meta">
	<div class="se-pre-con">
	<p class="text-center loadings" >Loading Schools </p>
	</div>
    <?php echo $template['partials']['header']; ?>
    <?php echo $template['body']; ?>
    <script src="<?php echo asset_url();?>js/slick.js"></script>
    <script src="<?php echo asset_url();?>js/jquery.flipster.min.js"></script>
    <script src="<?php echo asset_url();?>js/rating.js"></script>
    <script src="<?php echo asset_url();?>js/bootstrap-multiselect.js"></script>
    <script src="<?php echo asset_url();?>js/bootstrapValidator.min.js"></script>
    <script src="<?php echo asset_url();?>js/cobox.min.js"></script>
    <script src="<?php echo asset_url();?>js/jquery.easing.min.js"></script>
    <script src="<?php echo asset_url();?>js/jquery.bootstrap-growl.min.js"></script>
    <script src="<?php echo asset_url();?>js/bootstrap-rating-input.js"></script>
    <script src="<?php echo asset_url();?>js/pages/common.js"></script>
    <script src="<?php echo asset_url();?>js/pages/<?php echo $page;?>.js"></script>
    <!-- // END .bg-white -->
	<!-- // END #content -->
        
    <?php echo $template['partials']['footer']; ?>
