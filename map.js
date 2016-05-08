console.log("google");

var map;
function initMap() {
map = new google.maps.Map(document.getElementById('map-location'), {
  center: {lat: -3.207215, lng: 119.666796},
  zoom: 5
});

var current_info_window = null; 

// Bali
var content_string_bali = '<div id="infowindow">'+'<h4 class="firstHeading">PT. Arint Prima Fitting</h4>' + 
      '<h5 class="firstHeading">Bandung</h5>'+
      '<div id="bodyContent">'+
      '<p>Contact: Candra</p>'+
      '<p>Phone: +6221 123 4567</p>'+
      '<p>Products: Dorma</p>'+
      '<p>Services: Available</p>'+
      '</div>'+
      '</div>';

var info_window = new google.maps.InfoWindow({
    content: content_string_bali
  });

var bali = new google.maps.Marker({
    map: map,
    draggable: true,
    position: {lat: -8.409518, lng: 115.188916}
  });
bali.addListener('click', function() {
if (current_info_window != null) { 
        current_info_window.close(); 
    } 
info_window.open(map, bali);
current_info_window = info_window; 
});

// Bandung
var content_string_bandung = '<div id="infowindow">'+'<h4 class="firstHeading">PT. Arint Prima Fitting</h4>' + 
      '<h5 class="firstHeading">Bandung</h5>'+
      '<div id="bodyContent">'+
      '<p>Contact: Candra</p>'+
      '<p>Phone: +6221 123 4567</p>'+
      '<p>Products: Dorma</p>'+
      '<p>Services: Available</p>'+
      '</div>'+
      '</div>';

var info_window_bandung = new google.maps.InfoWindow({
    content: content_string_bandung
  });

var bandung = new google.maps.Marker({
    map: map,
    draggable: true,
    position: {lat: -6.917464, lng: 107.619123}
  });
bandung.addListener('click', function() {
if (current_info_window != null) { 
        current_info_window.close(); 
    } 
info_window.open(map, bandung);
current_info_window = info_window; 
});

// Jakarta
var content_string_jakarta = '<div id="infowindow">'+'<h4 class="firstHeading">PT. Arint Prima Fitting</h4>' + 
      '<h5 class="firstHeading">Bandung</h5>'+
      '<div id="bodyContent">'+
      '<p>Contact: Candra</p>'+
      '<p>Phone: +6221 123 4567</p>'+
      '<p>Products: Dorma</p>'+
      '<p>Services: Available</p>'+
      '</div>'+
      '</div>';

var info_window = new google.maps.InfoWindow({
    content: content_string_jakarta
  });

var jakarta = new google.maps.Marker({
    map: map,
    draggable: true,
    position: {lat: -6.208763, lng: 106.845599}
  });
jakarta.addListener('click', function() {
if (current_info_window != null) { 
        current_info_window.close(); 
    } 
info_window.open(map, jakarta);
current_info_window = info_window; 
});


// Semarang
var content_string_semarang = '<div id="infowindow">'+'<h4 class="firstHeading">PT. Arint Prima Fitting</h4>' + 
      '<h5 class="firstHeading">Bandung</h5>'+
      '<div id="bodyContent">'+
      '<p>Contact: Candra</p>'+
      '<p>Phone: +6221 123 4567</p>'+
      '<p>Products: Dorma</p>'+
      '<p>Services: Available</p>'+
      '</div>'+
      '</div>';

var info_window = new google.maps.InfoWindow({
    content: content_string_semarang
  });

var semarang = new google.maps.Marker({
    map: map,
    draggable: true,
    position: {lat: -7.005145, lng: 110.438125}
  });
semarang.addListener('click', function() {
if (current_info_window != null) { 
        current_info_window.close(); 
    } 
info_window.open(map, semarang);
current_info_window = info_window; 
});


// Surabaya
var content_string_surabaya = '<div id="infowindow">'+'<h4 class="firstHeading">PT. Arint Prima Fitting</h4>' + 
      '<h5 class="firstHeading">Bandung</h5>'+
      '<div id="bodyContent">'+
      '<p>Contact: Candra</p>'+
      '<p>Phone: +6221 123 4567</p>'+
      '<p>Products: Dorma</p>'+
      '<p>Services: Available</p>'+
      '</div>'+
      '</div>';

var info_window = new google.maps.InfoWindow({
    content: content_string_surabaya
  });

var surabaya = new google.maps.Marker({
    map: map,
    draggable: true,
    position: {lat: -7.257472, lng: 112.752088}
  });
surabaya.addListener('click', function() {
if (current_info_window != null) { 
        current_info_window.close(); 
    } 
info_window.open(map, surabaya);
current_info_window = info_window; 
});


var styles = [
    {
        "featureType": "all",
        "elementType": "labels.text",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "saturation": 36
            },
            {
                "color": "#000000"
            },
            {
                "lightness": 40
            },
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "off"
            },
            {
                "color": "#000000"
            },
            {
                "lightness": 16
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
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#e4524e"
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
                "color": "#e4524e"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "landscape.man_made",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#e4524e"
            },
            {
                "lightness": "21"
            }
        ]
    },
    {
        "featureType": "landscape.natural",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#e4524e"
            },
            {
                "lightness": "21"
            }
        ]
    },
    {
        "featureType": "landscape.natural.landcover",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#e4524e"
            },
            {
                "lightness": "21"
            }
        ]
    },
    {
        "featureType": "landscape.natural.terrain",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#e4524e"
            },
            {
                "lightness": "21"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#e4524e"
            },
            {
                "lightness": 21
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#f9f9f9"
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 17
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#000000"
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
                "color": "#000000"
            },
            {
                "lightness": 18
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#fffcfc"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 19
            },
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 17
            }
        ]
    }
];

map.setOptions({
	disableDefaultUI: true,
    draggable: false,
    scaleControl: false,
    scrollwheel: false,
    styles: styles
	});

};