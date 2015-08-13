      <div class="col-md-12">
         <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h3 class="text-center"><strong>Visual Tour </strong></h3>
                </div>
             <div class="panel-body nomargin"style="padding:0px;overflow:hidden;">
			   <div class="container" id="container"style="overflow:hidden;width:100%;">
				 <div id="pano-controls" style="">
					  <div class="overlay-gallery text-center demo" style="margin-left:60px;margin-right:50px;" id="pan-slider">
							<?php for($i=0; $i<count($otherInfo['panorama']);$i++){?>
							<div class="">
				               <h4><a> <?php echo $otherInfo['panorama'][$i]['title'];?></a></h4>
				                <img class="lazy img-responsive pano-next" data-id="<?php echo $otherInfo['panorama'][$i]['panoImage'];?>"  src="<?php echo $otherInfo['panorama'][$i]['panoImage'];?>" />
				            </div>
				          <?php }?>
		            	</div>
				  </div>  
						
				</div>					 
			  </div>
					
           	</div>
         </div>
		<div id="info">
		</div>
		
<script src="<?php echo asset_url();?>js/360.js"></script>
<script>
var camera, scene, renderer;
<?php if(count($otherInfo['panorama']) > 0) {?>
	var imagecount = '<?php echo $otherInfo['panorama'][0]['panoImage'];?>';
<?php } else { ?>
	var imagecount = "";
<?php }?>

var isUserInteracting = false,
onMouseDownMouseX = 0, onMouseDownMouseY = 0,
lon = 0, onMouseDownLon = 0,
lat = 0, onMouseDownLat = 0,
phi = 0, theta = 0;

init();
animate();

function init() {
	var container, mesh;

	container = document.getElementById( 'container' );

	camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 1, 1100 );
	camera.target = new THREE.Vector3( 0, 0, 0 );

	scene = new THREE.Scene();

	var geometry = new THREE.SphereGeometry( 500, 60, 40 );
	geometry.applyMatrix( new THREE.Matrix4().makeScale( -1, 1, 1 ) );
	THREE.ImageUtils.crossOrigin = '';
	<?php if(count($otherInfo['panorama']) > 0) {?>
		var image1 = new THREE.MeshBasicMaterial( {
			map: THREE.ImageUtils.loadTexture("<?php echo $otherInfo['panorama'][0]['panoImage'];?>")
		} );
	<?php } else { ?>
	var image1 = new THREE.MeshBasicMaterial( {
		map: THREE.ImageUtils.loadTexture("")
	} );
	<?php }?>

	
	mesh1 = new THREE.Mesh( geometry, image1 );
	
	
	scene.add( mesh1);
	
	renderer = new THREE.WebGLRenderer();
	renderer.setPixelRatio( window.devicePixelRatio );
	renderer.setSize( window.innerWidth, window.innerHeight - $("#detailmenubar").height() - $('.panel-heading').height()  );
	container.appendChild( renderer.domElement );

	container.addEventListener( 'mousedown', onDocumentMouseDown, false );
	document.addEventListener( 'mousemove', onDocumentMouseMove, false );
	document.addEventListener( 'mouseup', onDocumentMouseUp, false );
	document.addEventListener( 'mousewheel', onDocumentMouseWheel, false );
	document.addEventListener( 'DOMMouseScroll', onDocumentMouseWheel, false);
    
$(".pano-play").click(function(){
	event.preventDefault();

	isUserInteracting = true;
})
$(".pano-next").click(function(event){
	event.preventDefault();
	
	imagecount = $(this).attr("data-id");
	THREE.ImageUtils.crossOrigin = '';
	$("h4").removeClass('active-pano');
	$(this).prev().addClass("active-pano");
	var image1 = new THREE.MeshBasicMaterial( {
		map: THREE.ImageUtils.loadTexture( imagecount )
	} );
	mesh1 = new THREE.Mesh( geometry, image1 );
	scene.remove(mesh1);
  	scene.add(mesh1);
  	$('html, body').stop().animate({
        scrollTop: $("#container").offset().top
    }, 500, 'easeInOutExpo');	
})
	document.addEventListener( 'dragover', function ( event ) {

		event.preventDefault();
		event.dataTransfer.dropEffect = 'copy';

	}, false );

	document.addEventListener( 'dragenter', function ( event ) {

		document.body.style.opacity = 0.5;

	}, false );

	document.addEventListener( 'dragleave', function ( event ) {

		document.body.style.opacity = 1;

	}, false );

	document.addEventListener( 'drop', function ( event ) {

		event.preventDefault();

		var reader = new FileReader();
		reader.addEventListener( 'load', function ( event ) {

			material.map.image.src = event.target.result;
			material.map.needsUpdate = true;

		}, false );
		reader.readAsDataURL( event.dataTransfer.files[ 0 ] );

		document.body.style.opacity = 1;

	}, false );

	//

	window.addEventListener( 'resize', onWindowResize, false );

}

function onWindowResize() {

	camera.aspect = window.innerWidth / window.innerHeight;
	camera.updateProjectionMatrix();
	renderer.setSize( window.innerWidth, window.innerHeight - $("#container").offset().top - $("#detailmenubar").height( ) -  $('.panel-heading').height());
	
}

function onDocumentMouseDown( event ) {
//  alert('down');
	event.preventDefault();

	isUserInteracting = true;

	onPointerDownPointerX = event.clientX;
	onPointerDownPointerY = event.clientY;

	onPointerDownLon = lon;
	onPointerDownLat = lat;

}

function onDocumentMouseMove( event ) {
// 	alert('down');

	if ( isUserInteracting === true ) {

		lon = ( onPointerDownPointerX - event.clientX ) * 0.1 + onPointerDownLon;
		lat = ( event.clientY - onPointerDownPointerY ) * 0.1 + onPointerDownLat;

	}

}

function onDocumentMouseUp( event ) {	

	isUserInteracting = false;

}

function onDocumentMouseWheel( event ) {

// 	// WebKit

// 	if ( event.wheelDeltaY ) {

// 		camera.fov -= event.wheelDeltaY * 0.05;

// 	// Opera / Explorer 9

// 	} else if ( event.wheelDelta ) {

// 		camera.fov -= event.wheelDelta * 0.05;

// 	// Firefox

// 	} else if ( event.detail ) {

// 		camera.fov += event.detail * 1.0;

// 	}

// 	camera.updateProjectionMatrix();

}

function animate() {
	requestAnimationFrame( animate );
	update();

}

function update() {

	if ( isUserInteracting === false ) {

		lon += 0.1;

	}

	lat = Math.max( - 85, Math.min( 85, lat ) );
	phi = THREE.Math.degToRad( 90 - lat );
	theta = THREE.Math.degToRad( lon );

	camera.target.x = 500 * Math.sin( phi ) * Math.cos( theta );
	camera.target.y = 500 * Math.cos( phi );
	camera.target.z = 500 * Math.sin( phi ) * Math.sin( theta );

	camera.lookAt( camera.target );
	renderer.render( scene, camera );

}
		
</script>
