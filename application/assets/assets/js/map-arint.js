console.log("google");

var map;
function initMap() {
map = new google.maps.Map(document.getElementById('arint-location'), {
  center: {lat: -6.136937, lng: 106.862089},
  zoom: 15
});

var current_info_window = null; 

// Bali
var content_string_arint = '<h4 class="firstHeading">Find Us Here!</h4>' ;

var info_window = new google.maps.InfoWindow({
    content: content_string_arint
  });


var arint = new google.maps.Marker({
    map: map,
    draggable: true,
    position: {lat: -6.136937, lng: 106.862089}
  });
arint.addListener('click', function() {
if (current_info_window != null) { 
        current_info_window.close(); 
    } 
info_window.open(map, arint);
current_info_window = info_window; 
});

map.setOptions({
	disableDefaultUI: true,
    scaleControl: false
	});

};