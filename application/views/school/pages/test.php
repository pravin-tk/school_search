
                    <div id="map-canvas" style="width:100%;height:550px;"></div>
aaaa
                    <input type="hidden" name="latitude" id="latitude" value="" />
                    <input type="hidden" name="longitude" id="longitude" value="" />


                



<script type="text/javascript">
              var markers = new Array(new Array());
            ulat = "18.5463286";
            ulng = "73.90331390000006";
            
            ulat1 = "18.566644" ;
            ulng1 = "73.9154069";
            
            ulat2 = "18.5619384" ;
            ulng2 = "73.9109977";
            
            ulat3 = "18.535787" ;
            ulng3 = "73.8918897";
            
         
             var myMarker, myMarkernew;
  function initialize() {
      var bounds = new google.maps.LatLngBounds();
        var mapOptions = {
          center: new google.maps.LatLng(ulat, ulng),
          zoom: 8
        };
        var myLatlng = new google.maps.LatLng(ulat,ulng);
        var map = new google.maps.Map(document.getElementById('map-canvas'),
          mapOptions);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Hello World!'
        });
        

        
        var drawingManager = new google.maps.drawing.DrawingManager({
          drawingMode: google.maps.drawing.OverlayType.MARKER,
          drawingControl: true,
          drawingControlOptions: {
            position: google.maps.ControlPosition.TOP_CENTER,
            drawingModes: [
              google.maps.drawing.OverlayType.MARKER,
              google.maps.drawing.OverlayType.CIRCLE,
              google.maps.drawing.OverlayType.POLYGON,
              google.maps.drawing.OverlayType.POLYLINE,
              google.maps.drawing.OverlayType.RECTANGLE
            ]
          },
          markerOptions: {
            icon: 'images/beachflag.png'
          },

        });
      // Define a symbol using SVG path notation, with an opacity of 1.
    var lineSymbol = {
            path: 'M 0,-1 0,1',
            strokeOpacity: 1,
            scale: 4
    };
       var sunCircle = {
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
        radius: 110000 // in meters
    };
    cityCircle = new google.maps.Circle(sunCircle)
    cityCircle.bindTo('center', marker, 'position');
    
    for( i = 1; i <= 3; i++ ) {
    var position = new google.maps.LatLng("ulat"+i, "ulng"+i);
    bounds.extend(position);
    marker = new google.maps.Marker({
        position: position,
        map: map,
        title: 'viman'
    });
    }
        
        
        
}

google.maps.event.addDomListener(window, 'load', initialize);



</script>