// Google Maps
var map;
var marker;



if(window.location.pathname == "/madu/contact/" || window.location.pathname == "/madu/") {


    function initMap() {
      
      var latlng = new google.maps.LatLng(parseFloat( options.latitude ), 
                                          parseFloat( options.longitude));

      var theme_uri = new google.maps.Marker(uri_object.theme_directory_uri);

      console.log(uri_object.theme_directory_uri);
          
      map = new google.maps.Map(document.getElementById('map'), {
        center: latlng,
        zoom: parseInt( options.zoom ),
        styles: [
    {
        "featureType": "all",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "saturation": 90
            },
            {
                "color": "#F0FFFF"
            },
            {
                "lightness": 60
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#000000"
            },
            {
                "lightness": 40
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 17
            },
            {
                "weight": 1.2
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#f2f2f2"
            },
            {
                "lightness": 3
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#80ff80"
            },
            {
                "lightness": 8
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#99ff99"
            },
            {
                "lightness": 17
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#99ff99"
            },
            {
                "lightness": 29
            },
            {
                "weight": 0.2
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#99ff99"
            },
            {
                "lightness": 0
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#99ff99"
            },
            {
                "lightness": 0
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#99ff99"
            },
            {
                "lightness": 0
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "  #00FFFF"
            },
            {
                "lightness": 17
            }
        ]
    }
]
      });

      marker = new google.maps.Marker({
          position: latlng,
          map: map,
          icon: {url: "img/logo_nobg.png", 
          scaledSize: new google.maps.Size(60, 60)},
          animation: google.maps.Animation.DROP,
          category: "center"
      });
      marker.addListener('click', toggleBounce);  

    }

    function toggleBounce() {
      if (marker.getAnimation() !== null) {
        marker.setAnimation(null);
      } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
    }
}
}
// "wp-content/themes/madu/img/logo_nobg.png",


 
