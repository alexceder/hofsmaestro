function getLocation(){
  if (navigator.geolocation){
      navigator.geolocation.getCurrentPosition(getPositionSuccess, getPositionError);
  }
  else{
    x.innerHTML="Geolocation is not supported by this browser.";
  }
}

function getPositionError(){
  alert('Geocoder failed');
}

function getPositionSuccess(position){
  var curLat = position.coords.latitude;
  var curLng = position.coords.longitude;

  console.log("Latitude: ", curLat);
  console.log("Longitude: ", curLng);

  getCity(curLat, curLng);
}

function getCity(curLat, curLng){
  geocoder = new google.maps.Geocoder();
  var latlng = new google.maps.LatLng(curLat, curLng);
  geocoder.geocode({'latLng': latlng}, function(results, status){
    if(status == google.maps.GeocoderStatus.OK){
      if(results[1]) {
        //console.log(results[0].formatted_address)
        for (var i=0; i<results[0].address_components.length; i++) {
          for (var b=0;b<results[0].address_components[i].types.length;b++) {
            // administrative_area_level_2 is the level we want
            if (results[0].address_components[i].types[b] == "administrative_area_level_2") {
                //Stores the city
                city= results[0].address_components[i]; 
                console.log("city: ", city.short_name)
                break;
            }
          }
        }
    } else {
      alert("No results found");
    }
    } else {
      alert("Geocoder failed due to: " + status);
    }
  });
}