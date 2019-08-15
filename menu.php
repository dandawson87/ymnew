<?php
/**
 * Template Name: Food Menu 
 */
define('WP_DEBUG',true);
?>
<head>
  <title>Your Mates Brew House - Food Menu</title>
    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
  <meta property="og:url"           content="https://yourmatesbrewing.com/food-menu" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Your Mates Brew House - Food Menu" />
  <meta property="og:description"   content="Check out the food menu at Your Mates Brew House" />
  <meta property="og:image"         content="/wp-content/uploads/2019/07/Foodupload-5938.jpg" />
</head>
<?php get_header(); ?>
<style>
.site-content {
	padding-top:0px !important;
}
@media print {
		.output {
		-ms-transform: rotate(270deg);
		/* IE 9 */
		-webkit-transform: rotate(270deg);
		/* Chrome, Safari, Opera */
		transform: rotate(270deg);
		top: 1.5in;
		left: -1in;
		}
}
</style>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3&appId=540998179762123&autoLogAppEvents=1"></script>
<script>
$( document ).ready(function() {
		document.getElementById('share-facebook-btn').onclick = function() {
			FB.ui({
				method: 'share',
				app_id: '540998179762123',
				quote: 'Check out the Food at Your Mates Brew House',	
				hashtag: '#yourmates',
				href: 'https://yourmatesbrewing.com/food-menu',
			}, function(response){});
		}
});
</script>
<div class="row" style="width:100%; margin-left:0px; margin-right:0px;">
	<div class="col-md-5 col-sm-12 leftcol mobfull">
			<div class="foodmenutitle">
				<h1>Food Menu</h1>
			</div>
	</div>
	<div class="col-md-7 col-sm-12 foodmenuright">
		<p>AT YOUR MATES BREWHOUSE, WE SOURCE LOCALLY WHERE POSSIBLE AND MAKE EVERYTHING IN HOUSE. AS WE BELIVE FRESH IS ALWAYS BEST.</p>
		<a href='/drink-menu'>
			<button class="drinkmenubutton">Check out our drinks menu &nbsp; <i class="fa fa-beer" aria-hidden="true"></i> </button>
		</a>
			<button id='share-facebook-btn' class="sharebutton">
				Share &nbsp; <i class="fa fa-share" aria-hidden="true"></i>
			</button>
		<button class="printbutton" onclick="window.print();">Print &nbsp; <i class="fa fa-print" aria-hidden="true"></i></button>
	</div>
</div>
<?php
	$args=array(
		'post_type'      => 'food-menu',
		'post_status'    => 'publish',
		'posts_per_page' => 500,
		'orderby' => 'menu_order'
	
	);
	$my_posts = get_posts( $args );
	echo '<div class="row" style="width:90%; margin-left:auto; margin-right:auto;">';
//Begin Column 1
	echo '<div class="col-md-4 col-sm-12 mobfull">';
	echo "<h2 class='menusubhead' style='background-color:#f07722; color:white !important; padding-left:10px;'> Share Plates: All Day </h2>";
	foreach($my_posts as $p) {	
		$cat =	wp_get_post_terms($p->ID, 'food-menu-category');
		foreach($cat as $c) {
			if($c->term_taxonomy_id == 63) {
				$price = get_post_meta($p->ID, 'price', true);
				?>
				<div class='fooditemcontainer'>
					<div class="fooditemleft">
						<h4 class='menutitle'>
						<?php echo $p->post_title; ?>
						</h4>
					</div>
					<div class="fooditemright">
							<div class="menuprice">
								<?php echo " $" . $price; ?>
							</div>
					</div>
				</div>
				<div class="itemcontent">
					<?php echo $p->post_content; ?>
				</div>
				<?php
			}
		}	
	}
	echo "</div>";

//Begin Column 2
	echo '<div class="col-md-4 col-sm-12 mobfull">';
	echo "<h2 class='menusubhead' style='background-color:#f07722; color:white !important; padding-left:10px;'> Salads: Lunch &amp; Dinner</h2>";
	foreach($my_posts as $p) {	
		$cat =	wp_get_post_terms($p->ID, 'food-menu-category');
		foreach($cat as $c) {
			if($c->term_taxonomy_id == 75) {
				$price = get_post_meta($p->ID, 'price', true);
				?>
				<div class='fooditemcontainer'>
					<div class="fooditemleft">
						<h4 class='menutitle'>
						<?php echo $p->post_title; ?>
						</h4>
					</div>
					<div class="fooditemright">
							<div class="menuprice">
								<?php echo " $" . $price; ?>
							</div>
					</div>
				</div>
				<div class="itemcontent">
					<?php echo $p->post_content; ?>
				</div>
				<?php
			}
		}	
	}
	echo "<h2 class='menusubhead' style='background-color:#f07722; color:white !important; padding-left:10px; padding-top:2px !important;'> BURGERS: Lunch &amp; Dinner </h2>";
	foreach($my_posts as $p) {	
		$cat =	wp_get_post_terms($p->ID, 'food-menu-category');
		foreach($cat as $c) {
			if($c->term_taxonomy_id == 61) {
				$price = get_post_meta($p->ID, 'price', true);
				?>
				<div class='fooditemcontainer'>
					<div class="fooditemleft">
						<h4 class='menutitle'>
						<?php echo $p->post_title; ?>
						</h4>
					</div>
					<div class="fooditemright">
							<div class="menuprice">
								<?php echo " $" . $price; ?>
							</div>
					</div>
				</div>
				<div class="itemcontent">
					<?php echo $p->post_content; ?>
				</div>
				<?php
			}
		}	
	}
	echo "<br>Add Bacon - $3 ";
	echo "<br>Add Avo - $3 ";
	echo "<br>Add Patty - $6 ";
	echo "<br>Add Gluten Free Bun - $2";
	echo "</div>";
//Begin Column 3 
	echo '<div class="col-md-4 col-sm-12 mobfull">';
	echo "<h2 class='menusubhead' style='background-color:#f07722; color:white !important; padding-left:10px;'> Mains: Lunch &amp; Dinner </h2>";
	foreach($my_posts as $p) {	
		$cat =	wp_get_post_terms($p->ID, 'food-menu-category');
		foreach($cat as $c) {
			if($c->term_taxonomy_id == 76) {
				$price = get_post_meta($p->ID, 'price', true);
				?>
				<div class='fooditemcontainer'>
					<div class="fooditemleft">
						<h4 class='menutitle'>
						<?php echo $p->post_title; ?>
						</h4>
					</div>
					<div class="fooditemright">
							<div class="menuprice">
								<?php echo " $" . $price; ?>
							</div>
					</div>
				</div>
				<div class="itemcontent">
					<?php echo $p->post_content; ?>
				</div>
				<?php
			}
		}	
	}
	echo "<h2 class='menusubhead' style='background-color:#f07722; color:white !important; padding-left:10px; padding-top:2px !important;'> Kids Menu: Lunch &amp; Dinner </h2>";
	foreach($my_posts as $p) {	
		$cat =	wp_get_post_terms($p->ID, 'food-menu-category');
		foreach($cat as $c) {
			if($c->term_taxonomy_id == 65) {
				$price = get_post_meta($p->ID, 'price', true);
				?>
				<div class='fooditemcontainer'>
					<div class="fooditemleft">
						<h4 class='menutitle'>
						<?php echo $p->post_title; ?>
						</h4>
					</div>
					<div class="fooditemright">
							<div class="menuprice">
								<?php echo " $" . $price; ?>
							</div>
					</div>
				</div>
				<div class="itemcontent">
					<?php echo $p->post_content; ?>
				</div>
				<?php
			}
		}	
	}
	echo "</div>";
	echo "</div>";
?>
<div class="menubottom"><i>GF</i> Gluten Free | <i>DF</i> Dairy Free | <i>V</i> Vegetarian | <i>VG</i> Vegan | <p style='font-size:0.5em;'>All menu options are subject to seasonal change, if you have any dietry questions or
concerns please ask our friendly staff.</p> </div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
