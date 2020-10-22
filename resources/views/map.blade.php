@extends('layout')
@section('styles')
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
 <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
@endsection   

@section('content')
 <div id="mapid" style="position:absolute;height:100%;width: 100%"></div>
@endsection

@section('scripts')
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
    integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
    crossorigin=""></script>
<script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
<script>
 /* Where this has to be we will learn in another lesson */

var mymap = L.map('mapid').setView([52.5, 5.09], 3);


L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 14,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1Ijoia2FtaWVsY2hvaSIsImEiOiJja2I1Yzh1MzQxMm1hMnNtdmc1YjlvcDJhIn0.dWccRH5v-_Se60s7CFEtCw'
}).addTo(mymap);

//The Icons
var CityIcon = L.Icon.extend({
    options: {
        iconSize:     [32, 32],
        shadowSize:   [36, 36],
        iconAnchor:   [16, 16],
        popupAnchor:  [16, 16]
    }
});
var markerIcon = new CityIcon({iconUrl: 'img/marker.png'});

var markers = {!! json_encode($coords) !!}

function MakeCircle(item) {
  console.log(item);
     var circle = L.circle([item.lat, item.lon], {
        color: '#f00',
        fillColor: '#faa',
        fillOpacity: 0.5,
        radius: 500
    }).addTo(mymap);
    circle.bindPopup("I am in " + "<a href='../city/" + item.city + "''>" + item.city + "</a>"); 
}
function MakePopup(item) {
  var marker = L.marker([item.lat, item.lon],{icon:markerIcon}).addTo(mymap);
  marker.on('click', function redirect(){
    window.location.href="../city/" + item.city;
  })
  //marker.bindPopup("I am in " + "<a href='../city/" + item.city + "''>" + item.city + "</a>");
}

markers.forEach(MakePopup);

var popup = L.popup();

function onMapClick(e) {
    console.log(e.latlng.toString())
}

mymap.on('click', onMapClick);



/* through API 
axios.get(' }} route('api.drawings.index') }}')
    .then(function (response) {
        console.log(response.data);
        L.geoJSON(response.data, {
            pointToLayer: function(geoJsonPoint, latlng) {
                return L.marker(latlng);
            }
        })
        .bindPopup(function (layer) {
            return layer.feature.properties.map_popup_content;
        }).addTo(map);
    })
    .catch(function (error) {
        console.log(error);
    });
*/



      var geocoder = L.Control.Geocoder.nominatim();
      if (URLSearchParams && location.search) {
        // parse /?geocoder=nominatim from URL
        var params = new URLSearchParams(location.search);
        var geocoderString = params.get('geocoder');
        if (geocoderString && L.Control.Geocoder[geocoderString]) {
          console.log('Using geocoder', geocoderString);
          geocoder = L.Control.Geocoder[geocoderString]();
        } else if (geocoderString) {
          console.warn('Unsupported geocoder', geocoderString);
        }
      }

      var control = L.Control.geocoder({
        query: 'Moon',
        placeholder: 'Search here...',
        geocoder: geocoder
      }).addTo(mymap);
      var marker;

      setTimeout(function() {
        control.setQuery('Earth');
      }, 12000);

/*
      mymap.on('click', function(e) {
        geocoder.reverse(e.latlng, mymap.options.crs.scale(mymap.getZoom()), function(results) {
              var r = results[0];
              var city = r.name.slice(0, r.name.indexOf(","));
              console.log(city);
              if (r) {
                if (marker) {
                  marker
                    .setLatLng(r.center)
                    .setPopupContent("<h1 class='title'><a href='city/" + city + "'>" + city.toUpperCase() + "</a></h1>" + "<br/>" + r.html)
                    .openPopup();
                } else {
                  marker = L.marker(r.center)
                    .bindPopup(r.name)
                    .setPopupContent("<h1 class='title'><a href='city/" + city + "'>" + city.toUpperCase() + "</a></h1>" + "<br/>" + r.html)
                    .addTo(mymap)
                    .openPopup();
                }
          }
        });
      });
*/

 </script>


@endsection