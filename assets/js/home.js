 google.maps.event.addDomListener(window, 'load', function () {
            var places = new google.maps.places.Autocomplete(document.getElementById('schbox'));
            google.maps.event.addListener(places, 'place_changed', function () {
                var place = places.getPlace();
                var address = place.formatted_address;
                var latitude = place.geometry.location.A;
                var longitude = place.geometry.location.F;
                var mesg = "Address: " + address;
                mesg += "\nLatitude: " + latitude;
                mesg += "\nLongitude: " + longitude;
                $("#latitude").val(latitude);
                $("#longitude").val(longitude);
                $("#address").val(address);
                
            });
        });
        
        $("#sch").click(function() {
            if($("#latitude").val() == "" || $("#longitude").val() == "" ) {
                $("#schbox").addClass('has-error');
                $("#schbox").focus();
            }else if($("#standardId").val = ""){
                $("#standardId").addClass('has-error');
                $("#standardId").focus();
            }else{
                alert('hey');
                $("#schbox").removeClass('has-error');
                $("#standardId").addClass('has-error');
                $( "#searchform" ).submit();
            }
        });
        
        // A $( document ).ready() block.
        $( document ).ready(function() {
//            console.log('yoohoo')
//            alert(base_url);

            $("#cboStd").css("display", "block");
        });
        
        $('#detailmenubar').affix({
        	offset:  {
        		top:120,
        	}

        })

        $("#searchfilter").affix({
        	offset:{
        		top:200,
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
        $(".fa-heart-o").click(function(ev){
        	$( this ).removeClass( "fa-heart-o" ).addClass( "fa-heart" );
        	ev.preventDefault();
        	
        	})
        $(".fa-heart").click(function(ev){
        	$( this ).removeClass( "fa-heart" ).addClass( "fa-heart-o" );
        	ev.preventDefault();
        	
        	})

        $('a.page-scroll').bind('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: ($($anchor.attr('href')).offset().top - 150)
            }, 1250, 'easeInOutExpo');
            event.preventDefault();
        });

        // Highlight the top nav as scrolling occurs
        $('body').scrollspy({
            target: '.navbar-fixed-top',
            offset: 51
        })
