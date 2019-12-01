<?php
/**
 * Template Name: Larry Finder 
 */
?>
<?php get_header(); ?>
<style>
#map {
	height:800px;
	z-index:999999999;
	width:800px;
}
#searchbutton {
	color:white;
	padding:5px;
}
.title {
	padding:0px !important;
}
.search {
	width:100%;
}
.list {
  font-family:sans-serif;
  margin:0;
  padding:20px 0 0;
	max-height:750px;
  overflow-y:scroll;
}
.list > li {
  display:block;
  background-color: #eee;
  padding:10px;
  box-shadow: inset 0 1px 0 #fff;
}
.avatar {
  max-width: 150px;
}
img {
  max-width: 100%;
}
h3 {
  font-size: 18px;
  font-weight: normal;
  font-weight:bold;
	font-family:ymtitle;
}
p {
  margin:0;
}

input {
  border:solid 1px #ccc;
  border-radius: 5px;
  padding:7px 14px;
  margin-bottom:10px
}
input:focus {
  outline:none;
  border-color:#aaa;
}
</style>
<div class="wrap">
		<div class="slantysquaresub">
			<h1 class="slantytextsub">Find a Beer</h1>
		</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	<div class="row" style='max-width:1200px; margin-left:auto; margin-right:auto;'>
		<div class="col-md-4">
				<div id="venues">
				  <input class="search" placeholder="Search Suburb or Name..." />
				  <ul class="list">
					<li>
					  <h3 class="title">Your Mates Brewing Company</h3>
					  <p class="address">41 Technology Drive, Warana</p>
					</li>
				  </ul>

				</div>
		</div>
		<div class="col-md-8">
		    <div id="map"></div>
		    <div id="mapCanvas"></div>
		</div>
	</div>
    <script>
		var map;
		function initialize() {
			if (navigator.geolocation) {
		        navigator.geolocation.getCurrentPosition(showPosition);
		    }
			var myLatLng = {lat: -26.726940, lng: 153.123245};
			map = new google.maps.Map(document.getElementById('map'), {
				zoom: 10,
				center: myLatLng
			});
			loadMap();
		}
		function showPosition(position) {
			var center = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
			var suburbname = codeLatLng(position.coords.latitude, position.coords.longitude);
			console.log(suburbname);
			map.panTo(center);
			//Put Home Icon
				 	var icon = {
						url: 'https://yourmatesbrewing.com/wp-content/uploads/2018/11/youarehere.png',
						scaledSize: new google.maps.Size(50, 70), // scaled size
						origin: new google.maps.Point(0,0), // origin
						anchor: new google.maps.Point(0, 50) // anchor
					};

					var marker  = new google.maps.Marker({
						position: {lat:	parseFloat(position.coords.latitude), lng: parseFloat(position.coords.longitude)},
						title: "You Are Here",
						map: map,
						icon: icon,
					});
					var infowindow = new google.maps.InfoWindow({
					    content: "<h2>You Are Here</h2>"
					  });
					infoArray[i] = infowindow;
			
		}
		function loadMap() {
			var request = jQuery.ajax({
				url: "https://yourmatesbrewing.com/wp-json/ymapi/tap_finder", 
				type: "GET",
			});
			request.done(function( data )  {
				data = JSON.parse(data);
				var infoArray = Array(data.length);
				var values = Array(data.length);
				var options = {
 					 valueNames: [ 'title', 'address' ]
				};
				for(var i = 0; i < data.length; i++) {
				 	var icon = {
						url: 'https://yourmatesbrewing.com/wp-content/uploads/2018/10/larry-128.bmp',
						scaledSize: new google.maps.Size(50, 50), // scaled size
						origin: new google.maps.Point(0,0), // origin
						anchor: new google.maps.Point(0, 50) // anchor
					};

					var marker  = new google.maps.Marker({
						position: {lat:	parseFloat(data[i].lat), lng: parseFloat(data[i].lng)},
						title: data[i].title,
						map: map,
						icon: icon,
					});
					var infowindow = new google.maps.InfoWindow({
					    content: "<h2>" + data[i].title + "</h2><p>" + data[i].address + "</p></h2>"
					  });
					infoArray[i] = infowindow;
					marker.set("id", i);
					marker.addListener('click', function() {
						infoArray[parseInt(this.get("id"))].open(map, this);
			        });
				}
				var list = new List('venues', options, data);
			});
		}
		function codeLatLng(lat, lng) {

			var latlng = new google.maps.LatLng(lat, lng);
			var geocoder = new google.maps.Geocoder;
			geocoder.geocode({'latLng': latlng}, function(results, status) {
			  if (status == google.maps.GeocoderStatus.OK) {
				if (results[1]) {
				 //formatted address
				 $(".search").val(results[0].formatted_address)
				//find country name
					 for (var i=0; i<results[0].address_components.length; i++) {
							for (var b=0;b<results[0].address_components[i].types.length;b++) {

							//there are different types that might hold a city admin_area_lvl_1 usually does in come cases looking for sublocality type will be more appropriate
								if (results[0].address_components[i].types[b] == "administrative_area_level_1") {
									//this is the object you are looking for
									city= results[0].address_components[i];
									break;
								}
							}
				}
				//city data
				return city.short_name + " " + city.long_name;

				} else {
					console.log("error");
					return "";
				}
			  } else {
					console.log("Geocoder failed due to: " + status);
					return "";
			  }
			});
	}
google.maps.event.addDomListener(window, 'load', initialize);
    </script>
	</main>
	</div><!-- #primary -->
</div><!-- .wrap -->
<?php get_footer(); ?>
