
<footer class="footer" style="position: relative;">
	<strong>eddbuddy </strong> v1.2.0 © Copyright 2015
</footer>

<!-- Inline Script for colors and config objects; used by various external scripts; -->
<script>
    var colors = {
      "danger-color": "#e74c3c",
      "success-color": "#81b53e",
      "warning-color": "#f0ad4e",
      "inverse-color": "#2c3e50",
      "info-color": "#2d7cb5",
      "default-color": "#6e7882",
      "default-light-color": "#cfd9db",
      "purple-color": "#9D8AC7",
      "mustard-color": "#d4d171",
      "lightred-color": "#e15258",
      "body-bg": "#f6f6f6"
    };
    var config = {
      theme: "angular",
      skins: {
        "default": {
          "primary-color": "#16ae9f"
        }
      }
    };

    
</script>

<script src="<?php echo asset_url();?>js/jquery.js"></script>
<script src="<?php echo asset_url();?>js/bootstrap.js"></script>
<script src="<?php echo asset_url();?>js/slick.js"></script>
<script src="<?php echo asset_url();?>js/jquery.flipster.min.js"></script>
<script src="<?php echo asset_url();?>js/rating.js"></script>
<script src="<?php echo asset_url();?>js/bootstrap-multiselect.js"></script>
<script src="<?php echo asset_url();?>js/cobox.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.easing.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.timelinr-0.9.54.js"></script>
<script>
	$('.multiselect').multiselect(
		{
             enableFiltering: true,
             numberDisplayed: 2,
        }
	);
</script>
