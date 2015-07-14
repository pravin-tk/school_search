

<!-- Footer -->
<footer class="footer">
  <strong>eddbuddy </strong> v1.2.0 © Copyright 2015
</footer>
<!-- // Footer --></div></div>

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

  
  <script src="<?php echo asset_url();?>js/all.js"></script>

  <!-- Vendor Scripts Standalone Libraries -->
  <!-- <script src="js/vendor/core/all.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.js"></script> -->
  <!-- <script src="js/vendor/core/bootstrap.js"></script> -->
  <!-- <script src="js/vendor/core/breakpoints.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.nicescroll.js"></script> -->
  <!-- <script src="js/vendor/core/isotope.pkgd.js"></script> -->
  <!-- <script src="js/vendor/core/packery-mode.pkgd.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.grid-a-licious.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.cookie.js"></script> -->
  <!-- <script src="js/vendor/core/jquery-ui.custom.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.hotkeys.js"></script> -->
  <!-- <script src="js/vendor/core/handlebars.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.hotkeys.js"></script> -->
  <!-- <script src="js/vendor/core/load_image.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.debouncedresize.js"></script> -->
  <!-- <script src="js/vendor/forms/all.js"></script> -->
  <!-- <script src="js/vendor/media/all.js"></script> -->
  <!-- <script src="js/vendor/angular/all.js"></script> -->

  <!-- App Scripts Bundle
    Includes Custom Application JavaScript used for the current theme/module;
    Do not use it simultaneously with the standalone modules below. -->



<script type="text/javascript" src="<?php echo asset_url();?>js/js"></script>
<script type="text/javascript">
$('#detailmenubar').affix({
	offset:  {
		top:120,
	}

})

$('.demo').slick({
	infinite: true,
	  slidesToShow: 6,
	  slidesToScroll: 6,
	  prevArrow: '<button type="button" data-role="none" class="slick-prev">Previous</button>',
	  nextArrow: '<button type="button" data-role="none" class="slick-next">Next</button>',
	  autoplay: true,
	  autoplaySpeed: 3000,
	  centerMode: false,
	  centerPadding: '50px'
	  
	  	  
});

  </script>