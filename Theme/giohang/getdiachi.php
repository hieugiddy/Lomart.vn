<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

<style>
	
input, 
input:active, 
input:focus {     
    outline: 0;     
    outline-style: none;     
    outline-width: 0; 
}
button, 
button:active, 
button:focus {     
    outline: 0;     
    outline-style: none;     
    outline-width: 0; 
}
#map {
        height: 300px;
      }
      /* Optional: Makes the sample page fill the window. */
     
      #description {
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
      }

      #infowindow-content .title {
        font-weight: bold;
      }

      #infowindow-content {
        display: none;
      }

      #map #infowindow-content {
        display: inline;
      }

      .pac-card {
        margin: 10px 10px 0 0;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        background-color: #fff;
        font-family: Roboto;
      }

      #pac-container {
        padding-bottom: 12px;
        margin-right: 12px;
      }

      .pac-controls {
        display: inline-block;
        padding: 5px 11px;
      }

      .pac-controls label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }

      #pac-input, #giohang input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 17px;
        font-weight: 400;
        margin-top: 10px;
        padding: 4px 7px;
        text-overflow: ellipsis;
        width: 400px;
        border: 1px solid #999;
        border-radius: 5px;
        color: #000;
      }

      #title {
        color: #fff;
        background-color: #4d90fe;
        font-size: 25px;
        font-weight: 500;
        padding: 6px 12px;
      }
      #target {
        width: 345px;
      }
      #chon{
        padding: 5px 10px;
        background: #900;
        color: #fff;
        text-decoration: none;
        border-radius: 2px
      }
</style>
</head>
<body>
	<input id="pac-input" value="" class="controls" type="text" placeholder="Nhập địa chỉ nhận hàng..." autofocus/>
  <a href="" id="chon" target="_parent" onclick="get_tk()">Chọn</a>
	<br><br>
	<div id="map"></div>
</body>
<script>
  function get_tk(){
    var diachi=document.getElementById('pac-input');
    var thuchien=document.getElementById('chon');
    thuchien.href="/Lomart.vn/?Layout=baiviet&thanhtoan=1&address2="+diachi.value;
  }
</script>
<script>
      function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(geoplugin_latitude(), geoplugin_longitude()),
          zoom: 16,
          mapTypeId: 'roadmap'
        });
        var marker=new google.maps.Marker({position: new google.maps.LatLng(geoplugin_latitude(), geoplugin_longitude()), animation:google.maps.Animation.BOUNCE});
      var myCity = new google.maps.Circle({center:new google.maps.LatLng(geoplugin_latitude(), geoplugin_longitude()), radius:50, strokeColor:"#0000FF", strokeOpacity:0.8,strokeWeight:2, fillColor:"#0000FF",fillOpacity:0.4});

		marker.setMap(map);
		myCity.setMap(map);
        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }


          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(130, 130),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(35, 35)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location,
              animation:google.maps.Animation.BOUNCE
            }));
            
            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });

      }


    </script>
    
</script>
    <script src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script> <!-- lấy vị trí hiện tại -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArDfi6xqaR3tbGkJov0I08y4eYV9KnrSI&libraries=places&callback=initAutocomplete"
         async defer></script>
</html>