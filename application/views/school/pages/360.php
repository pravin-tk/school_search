		<style>
			
			#info {
				position: absolute;
				top: 0px; width: 100%;
				color: #ffffff;
				padding: 5px;
				font-family:Monospace;
				font-size:13px;
				font-weight: bold;
				text-align:center;
			}
			#pano-controls{
			position:absolute;
			z-index:1;
			background:rgba(31,31,31,0.8);
			color:silver;
			top:100px;
			border-radius:2px;
			box-sizing:border-box;
			text-align: center;
			padding:30px 20px;
			box-shadow:0 0 10px -5px rgba(0,0,0,0.5);
			min-width:250px;
			overflow:hidden;
			}
			.overlay-gallery{
/* 			position:absolute; */
			z-index:1;
/* 			background:rgba(31,31,31,0.8); */
			color:silver;
/* 			top:100px; */
/* 			right:20px; */
			border-radius:2px;
			box-sizing:border-box;
			text-align: center;
			padding:30px 20px;
			box-shadow:0 0 10px -5px rgba(0,0,0,0.5);
/* 			overflow:hidden; */
			}
			li{
			list-style: none;}
			.overlay-gallery img{
			height:80px;
			width:160px;
			background:rgba(31,31,31,0.2); 
			border-radius:2px;
			box-sizing:border-box;
			text-align: center;
			box-shadow:0 0 10px -5px rgba(0,0,0,0.5);
			margin-top: 20px;
			
			}
			#pano-position{
			font-size:20px;
			text-align: center;
			padding:0px 0 20px;
			}
			#pano-btn{
			margin-left:5px;
			background: transparent;
			color:silver;
			text-transform: uppercase;
			min-width:50px;
			}
			.btn {
		    -webkit-transition: 0.2s;
		    -o-transition: 0.2s;
		    transition: 0.2s;
		    -webkit-box-sizing: border-box;
		    -moz-box-sizing: border-box;
		    box-sizing: border-box;
		    cursor: pointer;
		    display: inline-block;
		    height: auto;
		    line-height: 40px;
		    outline: none;
		    padding: 0 15px;
		    text-align: center;
		    white-space: nowrap;
		    font-size: 14px;
		    border-radius: 2px;
		    border: 1px solid #cdcdcd;
		    }
		</style>
        <div class="col-md-12">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h3 class="text-center"><strong>Visual Tour </strong></h3>
                </div>
                <div class="panel-body nomargin"style="padding:0px;overflow:hidden;">
					<div class="container" id="container"style="overflow:hidden;width:100%;">
					   <div id="pano-controls" style="left: 135px;">
							<div class="pano-position">
							<span class="value">1</span>
							<span>of 6 Views</span>
							</div>
							<div class="btn pano-btn pano-play" style="display: inline-block;">
							<i class="icon icon-play-video" >Play</i>
							</div>
							<div class="btn pano-btn pano-pause" style="display: none;">
							<span class="icon">||</span>
							</div>
							<div class="btn pano-btn pano-next">
							<span class="text">Next View</span>
							<i class="icon icon-arrow-right"></i>
							</div>
						</div>  
						
						</div>					 
					</div>
					<div class="col-md-10 overlay-gallery text-center demo">
						<div class="float-left">
			                <img class="pano-next" data-id="<?php echo asset_url();?>img/panorma/campus_new.jpg"  src="<?php echo asset_url();?>img/panorma/campus_new.jpg" />
			               <h4><a> Campus</a> </h4>
			            </div>
			            <div class="float-left">
							<img class="pano-next" data-id="<?php echo asset_url();?>img/panorma/classroom.jpg" src="<?php echo asset_url();?>img/panorma/classroom.jpg" />						  
			               <h4><a>Class Room</a></h4>
							
							</div>
						<div class="float-left">	
			                <img class="pano-next" data-id="<?php echo asset_url();?>img/panorma/computer.jpg"  src="<?php echo asset_url();?>img/panorma/computer.jpg" />
			               <h4><a>Computer Lab</a></h4>
			            </div>
			            <div class="float-left">
			                <img class="pano-next" data-id="<?php echo asset_url();?>img/panorma/seminar.jpg"  src="<?php echo asset_url();?>img/panorma/seminar.jpg" /> 
 			                <h4><a>Seminar Hall 1</a></h4>
			                </div>
			            
			            <div class="float-left" >    
			                <img class="pano-next" data-id="<?php echo asset_url();?>img/panorma/lobby.jpg"  src="<?php echo asset_url();?>img/panorma/lobby.jpg" />
			             	<h4><a>Lobby</a></h4>
			            </div>
			            <div class="float-left" >    
			                <img class="pano-next" data-id="<?php echo asset_url();?>img/panorma/seminar_b.jpg"  src="<?php echo asset_url();?>img/panorma/seminar_b.jpg" />
			             	<h4><a>Seminar Hall 2</a></h4>
			            </div>
			            <div class="float-left" >    
			                <img class="pano-next" data-id="<?php echo asset_url();?>img/panorma/sitting.jpg"  src="<?php echo asset_url();?>img/panorma/sitting.jpg" />
			             	<h4><a>Hostel Room</a></h4>
			            </div>
			            <div class="float-left" >    
			                <img class="pano-next" data-id="<?php echo asset_url();?>img/panorma/bedroom.jpg"  src="<?php echo asset_url();?>img/panorma/bedroom.jpg" />
			             	<h4><a>Hostel bedroom</a></h4>
			            </div>
			              <div class="float-left" >    
			                <img class="pano-next" data-id="<?php echo asset_url();?>img/panorma/PANO_20150720_190545.jpg"  src="<?php echo asset_url();?>img/panorma/PANO_20150720_190545.jpg" />
			             	<h4><a>Hostel bedroom</a></h4>
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
var imagecount = 'panorama4.jpg';

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

	var image1 = new THREE.MeshBasicMaterial( {
		map: THREE.ImageUtils.loadTexture( asset_url+'img/panorma/campus_new.jpg' )
	} );

	
	mesh1 = new THREE.Mesh( geometry, image1 );
	
	
	scene.add( mesh1);
// 	scene.add( mesh2 );
// 	scene.add( mesh3);
	
	renderer = new THREE.WebGLRenderer();
	renderer.setPixelRatio( window.devicePixelRatio );
	renderer.setSize( window.innerWidth, 470 );
	//alert( window.innerWidth+"-"+ window.innerHeight);
	container.appendChild( renderer.domElement );

	document.addEventListener( 'mousedown', onDocumentMouseDown, false );
	document.addEventListener( 'mousemove', onDocumentMouseMove, false );
	document.addEventListener( 'mouseup', onDocumentMouseUp, false );
	document.addEventListener( 'mousewheel', onDocumentMouseWheel, false );
	document.addEventListener( 'DOMMouseScroll', onDocumentMouseWheel, false);
    
	//
$(".pano-play").click(function(){
	event.preventDefault();

	isUserInteracting = true;
})
$(".pano-next").click(function(){
	event.preventDefault();
	
	imagecount = $(this).attr("data-id");
	var image1 = new THREE.MeshBasicMaterial( {
		map: THREE.ImageUtils.loadTexture( imagecount )
	} );
	mesh1 = new THREE.Mesh( geometry, image1 );
	scene.remove(mesh1);
  	scene.add(mesh1);
  	$('html, body').stop().animate({
        scrollTop: $("#container").offset().top - $("#detailmenubar").height()
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
	renderer.setSize( window.innerWidth, window.innerHeight - $(".overlay-gallery").height()  );

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

	/*
	// distortion
	camera.position.copy( camera.target ).negate();
	*/

	renderer.render( scene, camera );

}
		
</script>
