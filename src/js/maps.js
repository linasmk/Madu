// Google Maps
var map;
    function initMap() {
      var latlng = {
      	lat: 54.6838763,
      	lng: 25.2785107
      }

      map = new google.maps.Map(document.getElementById('map'), {
        center: latlng,
        zoom: 18
      });

      var marker = new google.maps.Marker({
      	position: latlng,
      	map: map,
      	title: 'Madu'
      });
    }


 
