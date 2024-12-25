<!-- 
<div class="content"> ​

   <div id="map" style="width: 100%; height: 530px; color:black;">

   </div> ​

</div> 



 <script>

	const map = L.map('map', {
 	center: [-1.7912604466772375, 116.42311966554416],
 	zoom: 5,
 	layers:[]
}); 
	const tiles = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
		maxZoom: 5,
		subdomains:['mt0','mt1','mt2','mt3']
		// attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);
	var baseLayers = {'Google Satellite Hybrid': GoogleSatelliteHybrid};
var overlayLayers = {}
L.control.layers(baseLayers, overlayLayers, {collapsed: false}).addTo(map);

</script> -->

<h1>Anis Nur Safarina Zaenudin- (11210930000007)</h1>

<div class="content">
 <div id="map" style="width: 100%; height: 530px; color:black;"></div>
</div>

<script>

// var
var prov = new L.LayerGroup();
var faskes = new L.LayerGroup();
var sungai = new L.LayerGroup();
var provin = new L.LayerGroup();

var jakarta_pusat = new L.LayerGroup();
var sungai_jakpus = new L.LayerGroup();
var jalan_jakpus = new L.LayerGroup();



// end var


// map
var map = L.map('map', {
 center: [-1.7912604466772375, 116.42311966554416],
 zoom: 5,
 zoomControl: false,
 layers:[]
});
var GoogleSatelliteHybrid= L.tileLayer('https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', {
maxZoom: 22,
attribution: 'Latihan Web GIS'
}).addTo(map);
//end map

// basemap esri
var OpenStreetMap_Mapnik = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
	maxZoom: 19,
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
});

// googlemaps
var GoogleMaps = new
L.TileLayer('https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', { opacity: 1.0,
attribution: 'Latihan Web GIS'
});
//end googlemaps

//googleroads
var GoogleRoads = new
L.TileLayer('https://mt1.google.com/vt/lyrs=h&x={x}&y={y}&z={z}',{
opacity: 1.0,
attribution: 'Latihan Web GIS'
});
//end google road


	// control layers
var baseLayers = {'Google Satellite Hybrid': GoogleSatelliteHybrid,'OpenStreetMap_Mapnik': OpenStreetMap_Mapnik,'GoogleMaps': GoogleMaps,'GoogleRoads':GoogleRoads};
// var overlayLayers = {}
// L.control.layers(baseLayers, overlayLayers, {collapsed: true}).addTo(map);
// end control layers

// provinsi
var groupedOverlays = {
"Peta Dasar":{
	'Ibu Kota Provinsi' :prov,
	'Jaringan Sungai':sungai,
	'Provinsi' :provin,
	'Jakarta Pusat' :jakarta_pusat,
	'Sungai Jakarta Pusat':sungai_jakpus,
	'Jalan Jakarta Pusat':jalan_jakpus


},
"Peta Khusus":{
	'Fasilitas Kesehatan' :faskes
}
};
L.control.groupedLayers(baseLayers, groupedOverlays).addTo(map);
// end provinsi


//mini map
var
osmUrl='https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}';
var osmAttrib='Map data &copy; OpenStreetMap contributors';
var osm2 = new L.TileLayer(osmUrl, {minZoom: 0, maxZoom: 13, attribution: osmAttrib });
var rect1 = {color: "#ff1100", weight: 3};
var rect2 = {color: "#0000AA", weight: 1, opacity:0, fillOpacity:0};
var miniMap = new L.Control.MiniMap(osm2, {toggleDisplay: true, position : "bottomright",
aimingRectOptions : rect1, shadowRectOptions: rect2}).addTo(map);

//minimap

// geocoder
const geo = L.Control.geocoder({position :"topleft", collapsed:true}).addTo(map);
// endgecoder

// koordinat
/* GPS enabled geolocation control set to follow the user's location */
/* GPS enabled geolocation control set to follow the user's location */
var locateControl = L.control.locate({
position: "topleft",
drawCircle: true,
follow: true,
setView: true,
keepCurrentZoomLevel: true,
markerStyle: {
weight: 1,
opacity: 0.8,
fillOpacity: 0.8
},
circleStyle: {
weight: 1,
clickable: false
},
icon: "fa fa-location-arrow",
metric: false,
strings: {
title: "My location",
popup: "You are within {distance} {unit} from this point",
outsideMapBoundsMsg: "You seem located outside the boundaries of the map"
},
locateOptions: {
maxZoom: 18,
watch: true,
enableHighAccuracy: true,
maximumAge: 10000,
timeout: 10000
}
}).addTo(map);
// koordinat

// controlzoombar
var zoom_bar = new L.Control.ZoomBar({position: 'topleft'}).addTo(map);
// end control zoombar


// leaflet coordinates
L.control.coordinates({
position:"bottomleft",
decimals:2,
decimalSeperator:",",
labelTemplateLat:"Latitude: {y}",
labelTemplateLng:"Longitude: {x}"
}).addTo(map);
/* scala */
L.control.scale({metric: true, position: "bottomleft"}).addTo(map);
// leaflet coordinates

// mata angin
var north = L.control({position: "bottomleft"});
north.onAdd = function(map) {
var div = L.DomUtil.create("div", "info legend");
div.innerHTML = '<img src="<?=base_url()?>assets/arah-mata-angin.png"style=width:200px;>';
return div; }
north.addTo(map);
//mataangin


// geojson provinsi
$.getJSON("<?=base_url()?>assets/provinsi.geojson",function(data){
var ratIcon = L.icon({
iconUrl: '<?=base_url()?>assets/marker.png',
iconSize: [12,10]
});
L.geoJson(data,{
pointToLayer: function(feature,latlng){
var marker = L.marker(latlng,{icon: ratIcon});
marker.bindPopup(feature.properties.CITY_NAME);
return marker;
}
}).addTo(prov);
});
// enndgeojson

//geojson rsu
$.getJSON("<?=base_url()?>assets/rsu.geojson",function(data){
var ratIcon = L.icon({
iconUrl: '<?=base_url()?>assets/marker2.png',
iconSize: [12,10]
});
L.geoJson(data,{
pointToLayer: function(feature,latlng){
var marker = L.marker(latlng,{icon: ratIcon});
marker.bindPopup(feature.properties.NAMOBJ);
return marker;
}
}).addTo(faskes);
});
//end geojson

//poliklinik geojson
$.getJSON("<?=base_url()?>assets/poliklinik.geojson",function(data){
var ratIcon = L.icon({
iconUrl: '<?=base_url()?>assets/marker3.png',
iconSize: [12,10]
});
L.geoJson(data,{
pointToLayer: function(feature,latlng){
var marker = L.marker(latlng,{icon: ratIcon});
marker.bindPopup(feature.properties.NAMOBJ);
return marker;
}
}).addTo(faskes);
});
//end geojson

//geojson puskesmas
$.getJSON("<?=base_url()?>assets/puskesmas.geojson",function(data){
var ratIcon = L.icon({
iconUrl: '<?=base_url()?>assets/marker4.png',
iconSize: [12,10]
});
L.geoJson(data,{
pointToLayer: function(feature,latlng){
var marker = L.marker(latlng,{icon: ratIcon});
marker.bindPopup(feature.properties.NAMOBJ);
return marker;
}
}).addTo(faskes);
});
//end geojson

//geojson sungai
$.getJSON("<?=base_url()?>/assets/sungai.geojson",function(kode){
 L.geoJson( kode, {
 style: function(feature){
 var color,
 kode = feature.properties.kode;
 if ( kode < 2 ) color = "#f2051d";
 else if ( kode > 0 ) color = "#f2051d";
 else color = "#f2051d"; // no data
 return { color: "#999", weight: 5, color: color, fillOpacity: .8 };
 },
 onEachFeature: function( feature, layer ){
 layer.bindPopup
 ()
 } }).addTo(sungai);
});
//end geojson

//geojson provinsi polygon
$.getJSON("<?=base_url()?>/assets/provinsi_polygon.geojson",function(kode){
 L.geoJson( kode, {
 style: function(feature){
 var fillColor,
 kode = feature.properties.kode;
 if ( kode > 21 ) fillColor = "#006837";
 else if (kode>20) fillColor="#fec44f"
 else if (kode>19) fillColor="#c2e699"
 else if (kode>18) fillColor="#fee0d2"
 else if (kode>17) fillColor="#756bb1"
 else if (kode>16) fillColor="#8c510a"
 else if (kode>15) fillColor="#01665e"
 else if (kode>14) fillColor="#e41a1c"
 else if (kode>13) fillColor="#636363"
 else if (kode>12) fillColor= "#762a83"
 else if (kode>11) fillColor="#1b7837"
 else if (kode>10) fillColor="#d53e4f"
 else if (kode>9) fillColor="#67001f"
 else if (kode>8) fillColor="#c994c7"
 else if (kode>7) fillColor="#fdbb84"
 else if (kode>6) fillColor="#dd1c77"
 else if (kode>5) fillColor="#3182bd"
 else if ( kode > 4 ) fillColor ="#f03b20"
 else if ( kode > 3 ) fillColor = "#31a354";
 else if ( kode > 2 ) fillColor = "#78c679";
 else if ( kode > 1 ) fillColor = "#c2e699";
 else if ( kode > 0 ) fillColor = "#ffffcc";
 else fillColor = "#f7f7f7"; // no data
 return { color: "#999", weight: 1, fillColor: fillColor, fillOpacity: .6 };
 },
 onEachFeature: function( feature, layer ){
 layer.bindPopup(feature.properties.PROV)
 }
 }).addTo(provin);
 });
 //end geosjon
 
//geojson provinsi jakarta_pusat
$.getJSON("<?=base_url()?>/assets/jakarta_pusat.geojson",function(kode){
 L.geoJson( kode, {
 style: function(feature){
 var fillColor,
 kode = feature.properties.kode;
 if ( kode > 21 ) fillColor = "#006837";
 else if (kode>20) fillColor="#fec44f"
 else if (kode>19) fillColor="#c2e699"
 else if (kode>18) fillColor="#fee0d2"
 else if (kode>17) fillColor="#756bb1"
 else if (kode>16) fillColor="#8c510a"
 else if (kode>15) fillColor="#01665e"
 else if (kode>14) fillColor="#e41a1c"
 else if (kode>13) fillColor="#636363"
 else if (kode>12) fillColor= "#762a83"
 else if (kode>11) fillColor="#1b7837"
 else if (kode>10) fillColor="#d53e4f"
 else if (kode>9) fillColor="#67001f"
 else if (kode>8) fillColor="#c994c7"
 else if (kode>7) fillColor="#fdbb84"
 else if (kode>6) fillColor="#dd1c77"
 else if (kode>5) fillColor="#3182bd"
 else if ( kode > 4 ) fillColor ="#f03b20"
 else if ( kode > 3 ) fillColor = "#31a354";
 else if ( kode > 2 ) fillColor = "#78c679";
 else if ( kode > 1 ) fillColor = "#c2e699";
 else if ( kode > 0 ) fillColor = "#ffffcc";
 else fillColor = "#f7f7f7"; // no data
 return { color: "#999", weight: 1, fillColor: fillColor, fillOpacity: .6 };
 },
 onEachFeature: function( feature, layer ){
 layer.bindPopup(feature.properties.NAMOBJ)
 }
 }).addTo(jakarta_pusat);
 });
 //end geosjon

//geojson sungai
$.getJSON("<?=base_url()?>/assets/sungai_jakpus.geojson",function(kode){
 L.geoJson( kode, {
 style: function(feature){
 var color,
 kode = feature.properties.kode;
 if ( kode < 2 ) color = "#f2051d";
 else if ( kode > 0 ) color = "#f2051d";
 else color = "#f2051d"; // no data
 return { color: "#999", weight: 5, color: color, fillOpacity: .8 };
 },
 onEachFeature: function( feature, layer ){
 layer.bindPopup
 ()
 } }).addTo(sungai_jakpus);
});
//end geojson

//geojson jalan
$.getJSON("<?=base_url()?>/assets/jalan_jakpus.geojson",function(kode){
 L.geoJson( kode, {
 style: function(feature){
 var color,
 kode = feature.properties.kode;
 if ( kode < 2 ) color = "#ffea00";
 else if ( kode > 0 ) color = "#ffea00";
 else color = "#ffea00"; // no data
 return { color: "#999", weight: 5, color: color, fillOpacity: .8 };
 },
 onEachFeature: function( feature, layer ){
 layer.bindPopup
 ()
 } }).addTo(jalan_jakpus);
});
//end geojson

var markersDataSPBU = [
  {
    coords: [-6.2022210, 106.80621],
    popupText: "<b>SPBU Pertamina Pejompongan 34.102.01</b><br>Jl. Penjernihan 1 No.7, Bend. Hilir, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10210<br><b>Fasilitas:</b> toilet, musholla, bif rais, gas station, green energy station<br><img src=assets/spbu_pejompongan.jpg style='width:100%; margin-top:10px; border-radius:5px;'>"
  },
  {
    coords: [-6.1784312, 106.81812],
    popupText: "<b>SPBU Pertamina COCO Abdul Muis 31.102.02</b><br>Jl. Abdul Muis No.59, RT.4/RW.3, Petojo Sel., Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10160<br><b>Fasilitas:</b> toilet, musholla, ini toko kopi, holland bakery, gas station, green energy station, enduro motor service, supermarket<br><img src=assets/spbu_abdulmuis.jpg style='width:100%; margin-top:10px; border-radius:5px;'>"
  },
  {
    coords: [-6.1801992, 106.81349],
    popupText: "<b>SPBU Pertamina Gas Station 34.102.05</b><br>Jl. Cideng Timur No.14 14, RT.14/RW.2, Petojo Sel., Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10160<br><b>Fasilitas:</b> toilet, musholla, indomaret<br><img src=assets/spbu_petojo.jpg style='width:100%; margin-top:10px; border-radius:5px;'>"
  },
  {
    coords: [-6.1603121, 106.81558],
    popupText: "<b>SPBU Pertamina Gas Station 34.101.01</b><br>Jl. Kyai Haji Zainul Arifin No.8, RT.8/RW.1, Petojo Utara, Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10130<br><b>Fasilitas:</b> toilet, musholla, bank cimb niaga<br><img src=assets/spbu_zainularifin.jpg style='width:100%; margin-top:10px; border-radius:5px;'>"
  },
  {
    coords: [-6.1408858, 106.83623],
    popupText: "<b>SPBU Pertamina Gas Station 34.106.03</b><br>Jl. Gn. Sahari No.12, RT.16/RW.3, Gn. Sahari Utara, Kecamatan Sawah Besar, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10720<br><b>Fasilitas:</b> toilet, musholla, supermarket, bank BRI<br><img src=assets/spbu_sahari.jpg style='width:100%; margin-top:10px; border-radius:5px;'>"
  },
  {
    coords: [-6.1596599, 106.84447],
    popupText: "<b>SPBU Pertamina Gas Station 34.106.04</b><br>Jl. Bungur Besar Raya No.103 11, RT.11/RW.1, Kemayoran, Kec. Kemayoran, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10620<br><b>Fasilitas:</b> toilet, musholla, bank BRI, green energy station<br><img src=assets/spbu_bungurbesar.jpg style='width:100%; margin-top:10px; border-radius:5px;'>"
  },
  {
    coords: [-6.168850, 106.860011],
    popupText: "<b>SPBU Pertamina Gas Station 34.105.05</b><br>Jl. Letjend Soeprapto No.56, Tanah Tinggi, Kec. Johar Baru, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10540<br><b>Fasilitas:</b> toilet, musholla, green energy station<br><img src=assets/spbu_letjend56.jpg style='width:100%; margin-top:10px; border-radius:5px;'>"
  },
  {
    coords: [-6.177873, 106.863466],
    popupText: "<b>SPBU Pertamina Gas Station 34.105.06</b><br>4, Jl. Biduri Anggur No.19, RT.2/RW.2, Galur, Kec. Johar Baru, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10530<br><b>Fasilitas:</b> toilet, musholla, indomaret<br><img src=assets/spbu_bidurianggur.jpg style='width:100%; margin-top:10px; border-radius:5px;'>"
  },
  {
    coords: [-6.186856, 106.844791],
    popupText: "<b>SPBU Pertamina Gas Station 34.104.01</b><br>Jl. Kramat Raya No.116 2, RT.2/RW.9, Kwitang, Kec. Senen, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10420<br><b>Fasilitas:</b> toilet, musholla, green energy station, bank BRI<br><img src=assets/spbu_kramatraya.jpg style='width:100%; margin-top:10px; border-radius:5px;'>"
  },
  {
    coords: [-6.194914, 106.832142],
    popupText: "<b>SPBU Pertamina Gas Station 34.103.01</b><br>RR5H+C82, Jl. Gereja Theresia, Gondangdia, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10350<br><b>Fasilitas:</b> toilet, musholla, supermarket<br><img src=assets/spbu_gerejatheresia.jpg style='width:100%; margin-top:10px; border-radius:5px;'>"
  },
  {
    coords: [-6.206736, 106.798348],
    popupText: "<b>SPBU Pertamina Gas Station 34.102.06</b><br>Jl. Hang Lekir I No.4 1, RT.1/RW.3, Gelora, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10270<br><b>Fasilitas:</b> toilet, musholla, green energy station, alfamart<br><img src=assets/spbu_hanglekir.jpg style='width:100%; margin-top:10px; border-radius:5px;'>"
  },
  {
    coords: [-6.165707, 106.833181],
    popupText: "<b>SPBU Pertamina COCO Samanhudi 31.107.02</b><br>Jl. H. Samanhudi No.20, RT.5/RW.3, Ps. Baru, Kecamatan Sawah Besar, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10710<br><b>Fasilitas:</b> toilet, musholla, gas station, minimarket<br><img src=assets/spbu_samanhudi.jpg style='width:100%; margin-top:10px; border-radius:5px;'>"
  },
  {
    coords: [-6.192855, 106.835694],
    popupText: "<b>SPBU Pertamina COCO Cikini 31.103.03</b><br>Jl. Cikini Raya No.113-115, RT.10/RW.4, Cikini, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10330<br><b>Fasilitas:</b> toilet, musholla, green energy station, coffee shop<br><img src=assets/spbu_cikiniraya.jpg style='width:100%; margin-top:10px; border-radius:5px;'>"
  },
  {
    coords: [-6.171547, 106.868341],
    popupText: "<b>SPBU Pertamina Gas Station 34.105.07</b><br>Jl. Cempaka Putih Raya B No.2 3, RT.3/RW.8, Cemp. Putih Tim., Kec. Cemp. Putih, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10510<br><b>Fasilitas:</b> toilet, musholla, green energy station<br><img src=assets/spbu_cempakaputih.jpg style='width:100%; margin-top:10px; border-radius:5px;'>"
  },
  {
    coords: [-6.173933, 106.869874],
    popupText: "<b>SPBU Pertamina Gas Station 34.105.04</b><br>Jl. Jenderal Ahmad Yani No.48 10, RT.10/RW.2, Cemp. Putih Tim., Kec. Cemp. Putih, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10510<br><b>Fasilitas:</b> toilet, musholla, green energy station, supermarket<br><img src=assets/spbu_ahmadyani.jpg style='width:100%; margin-top:10px; border-radius:5px;'>"
  },
  {
    coords: [-6.183889, 106.857155],
    popupText: "<b>SPBU Pertamina Gas Station 34.104.02</b><br>Jl. Pramuka No.5, RT.5/RW.6, Paseban, Kec. Senen, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10440<br><b>Fasilitas:</b> toilet, gas station, minimarket<br><img src=assets/spbu_pramuka.jpg style='width:100%; margin-top:10px; border-radius:5px;'>"
  },
  {
    coords: [-6.176961, 106.865075],
    popupText: "<b>SPBU Pertamina Gas Station 34.105.02</b><br>Jl. Letjend Suprapto No.60 4, RT.4/RW.3, Cemp. Putih Bar., Kec. Cemp. Putih, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10520<br><b>Fasilitas:</b> toilet, musholla, green energy station<br><img src=assets/spbu_letjend60.jpg style='width:100%; margin-top:10px; border-radius:5px;'>"
  },
  {
    coords: [-6.173695, 106.853630],
    popupText: "<b>SPBU Pertamina Gas Station 34.106.05</b><br>Jl. Letjend Suprapto No.26 7, RT.7/RW.2, Harapan Mulya, Kec. Kemayoran, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10640<br><b>Fasilitas:</b> toilet, musholla, bank cimb niaga, bank bri<br><img src=assets/spbu_letjend26.jpg style='width:100%; margin-top:10px; border-radius:5px;'>"
  }
];


markersDataSPBU.forEach(function(marker) {
var newMarker = L.marker(marker.coords).addTo(jakarta_pusat);
newMarker.bindPopup(marker.popupText).openPopup();
}
);

</script>