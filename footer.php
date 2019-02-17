<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<?php if(is_front_page()) { ?>
<div class="row" style='background-color:#f2f2f2; width:100%;'>
	<div class="col-md-4" style='padding:0px;'>
		<a style='text-decoration:none;' href='/shop'>
				<div class="ctaimages cover kitbg">
					<h3 class='ctaactions'>Buy the Kit</h3>	
				</div>
		</a>
	</div>
	<div class="col-md-4" style='padding:0px;'>
		<a style='text-decoration:none;'  href='/shop'>
				<div class="ctaimages cover beerbg" style="">
					<h3 class='ctaactions'>Buy Beer</h3>
				</div>
		</a>
	</div>
	<div class="col-md-4" style='padding:0px;'>
		<a style='text-decoration:none;' href='/shop'>
				<div class="ctaimages cover salesbg">
					<h3 class='ctaactions'>Sales</h3>
				</div>
		</a>
	</div>
</div>
<!-- start beer finder -->
<hr>
<div class='frontbeerfindercontainer'>
<h4 style="text-align:center; margin-left:auto; margin-right:auto; margin-top:20px; padding-top:20px; font-weight:bolder;">Find Your Closest Watering Hole</h4>
	<div class="row" style='max-width:1200px; margin-left:auto; margin-right:auto;'>
<style>
#map {
	height:800px;
	z-index:999999999;
	width:800px;
}
#menubutton {
	right:5%;
}
#drawer-hamburger-icon {
	background-color:white;
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
		google.maps.event.addDomListener(window, 'load', initialize);
    </script>
	</main>
</div>
</div>
<?php } ?>
<!-- end larry finder -->


<div class='contactus'>
	<div class="row">
	<div class="col-md-5"></div>
	<div class="col-md-4"><div class="joinusbox"><?php echo do_shortcode("[mc4wp_form id='104']"); ?></div></div>
	<div class="col-md-3"></div>
</div>

</div><!-- #page -->
<div>
		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );
				//get_template_part( 'template-parts/footer/site', 'info' );
				?>
	
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
<div style="width:100%; background-color:#d01c30; color:white; height:100px;">
<p style='margin-left:25%;padding:5px; padding-top:10px;'>&copy; Your Mates Brewing Company - ABN 36 602 634 257 </p>
</div>
	</div><!-- .site-content-contain -->
</div><!-- #page -->
</main>
<script>
if(!iseighteen) {
		$("#ageVerify").css({"display": "inline-flex"});
}
</script>
</body>
</html>
<?php wp_footer(); ?>
