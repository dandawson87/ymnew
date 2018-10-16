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
#thebody {
	margin-top:100px;
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
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	<h2 style='text-align:center; margin-left:auto; margin-right:auto;'>Find Your Closest Watering Hole</h2>
	<div class="row" style='max-width:1200px; margin-left:auto; margin-right:auto;'>
		<div class="col-md-4">
				<div id="venues">
				  <input class="search" placeholder="Search Suburb or Name..." />
				  <ul class="list">
					<li>
					  <h3 class="title">Your Mates Brewing Company</h3>
					  <p class="address">30 Allen St, Moffat Beach</p>
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
			var myLatLng = {lat: -26.728540, lng: 153.128860};
			map = new google.maps.Map(document.getElementById('map'), {
				zoom: 10,
				center: myLatLng
			});
			loadMap();
		}
		function showPosition(position) {
			var center = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
			map.panTo(center);
		}
		function loadMap() {
			var request = jQuery.ajax({
				url: "http://35.197.164.85/wp-json/ymapi/tap_finder", 
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
						url: 'http://35.197.164.85/wp-content/uploads/2018/10/larry-128.bmp',
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
		google.maps.event.addDomListener(window, 'load', initialize);
    </script>
	</main>
	</div><!-- #primary -->
</div><!-- .wrap -->
<?php get_footer(); ?>
