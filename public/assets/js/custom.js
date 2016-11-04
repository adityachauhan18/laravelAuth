   
   function initMap(lat,lng,Zoom) {
       
       alert(lat);
       alert(lng);
       alert(Zoom);
       var Zooms =2; 
       
       if(lat && lng && Zoom){
           var Zoom =Zoom; 
           var uluru = {lat: lat, lng: lng}; 
           
       }else if(lat && lng){
         
           Zoom =Zooms;
           var uluru = {lat: lat, lng: lng};
           
       }else{
            Zoom =Zooms;
            var uluru = {lat: 22.77753179000182, lng: 79.8046875};
       }
       
    
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: Zoom,
          center: uluru,
          //mapTypeId: google.maps.MapTypeId.HYBRID
        });
        var marker = new google.maps.Marker({ 
          position: uluru,
          map: map
        });
        
       
        
        google.maps.event.addDomListener(map, 'click', function(event) {
            
           var Zoom= zoomLevel = map.getZoom();
            var myLatLng = event.latLng;
            var lat = myLatLng.lat();
            var lng = myLatLng.lng();
            initMap(lat,lng,Zoom);
        });
         
        google.maps.event.addListener(map, 'zoom_changed', function() {
                var Zoom= zoomLevel = map.getZoom();
                  var myLatLng = event.latLng;
               var lat = myLatLng.lat();
               var lng = myLatLng.lng();
                initMap(lat,lng,Zoom);
            
           
        });
    }
