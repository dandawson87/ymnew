
<?php
/**
 * Template Name: Shop 
 */
?>
<head>
  <title>Your Mates Brewing - Online Store</title>
    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
  <meta property="og:url"           content="https://yourmatesbrewing.com/ym-shop" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Your Mates Online Store" />
  <meta property="og:description"   content="Check out our Beer and Merch on the Your Mates Online Store" />
  <meta property="og:image"         content="/wp-content/uploads/2019/07/Larry.png" />
</head>
<?php get_header(); ?>
<style>
.site-content {
	padding-top:0px !important;
}

a {
	text-decoration:none;
	color:#56b8ad;
}
a:hover {
	text-decoration:none !important;
}
</style>
<div class="taglinecontainer" style='background-color: #4180b2; width:100%; text-align:center;'>
	<div class="taglineym" id="storeheader">Your Mates Online Store</div>
</div>
<div class="shopbuttons">
<a style='color:black;' href='/cart'><i class="fa fa-shopping-cart"></i></a> &nbsp;
<a style='color:black;' href='/checkout'><i class="fas fa-cash-register"></i></a>
</div>
<div class="row" style="width:80%; margin-left:auto; margin-right:auto; text-align:center;">
<?php
	if($_GET["add-to-cart"] > 0) {
?>
	<div class="alert alert-success" role="alert" style="width:100%;">
	  <strong>Added to Cart!</strong> <a href='/cart'>View your cart </a>, or keep shopping.
	</div>
<?php
	}
?>
<div class="recentheader" style='margin-bottom:30px;'>
		<div class="slantysquaresub" id="beersub">
		<h1 class="slantytextsub" id="beertext">Beer</h1>
		</div>
</div>
<?php

$args = array( 'post_type' => 'product', 'posts_per_page' => 10,'product_cat' => 'Beer', 'orderby' =>'date','order' => 'ASC' );
  $loop = new WP_Query( $args );
	echo "<div class='shopproductcontainer' style='margin-bottom:15px;'>";
	while ( $loop->have_posts() ) : $loop->the_post();
		global $product; 
		echo "<div class='productcontainer'>";
				echo "<a href='/" . get_permalink($product->ID) . "'>";
				echo "<h1 class='beerheader'>" . $product->name . "</h1>";
				echo "<div class='beerphoto'>" . $product->get_image('woocommerce_single') . "</div>";
				?>
					<div class='priceheader'>
						<div class="slantysquaresubprice">
							<h1 class="slantytextsubprice" style='color:#56b8ad;'>$<?php echo $product->regular_price; ?><a style='font-size:0.2em; letter-spacing:1px; '>Per Carton</a></h1>	
						</div>
					</div>
				</a>
				<?php
					$add_to_cart = do_shortcode('[add_to_cart_url id="'.$post->ID.'"]');
				?>
					<a href='<?php echo $add_to_cart; ?>'><div class="addtocartbutton" id="#addtocart" style="width:50%; margin-left:25%;">Add To Cart</div></a>
				<hr class="mobileline" display="display:none;">
				<?php
				/*
				echo "<div class='shop_price'><b>Price: </b> $" . $product->regular_price . " per carton (16 beers)</div>";
				if($product->stock_status) {
					echo "<div class='stock_status'><b>Stock Status: </b> In Stock</div>";
				} else {
					echo "<div class='stock_status'><b>Stock Status: </b> <a style='color:red;'>Out of Stock </a></div>";
				}
				echo "<div class='beerdescription'><b>Product Description: </b>" . $product->description . "</div>";
				*/
		echo "</div>";
?>

<?php
	endwhile;
	echo "</div>";
	wp_reset_query(); 
	echo "<div class='shopproductcontainer'>";
			echo "<div class='mixedproductcontainer'>";
				$product = wc_get_product(731);
				echo "<a href='/" . get_permalink(731) . "'>";
				echo "<h1 class='beerheader'>" . $product->name . "</h1>";
				echo "<div class='mixedbeerphoto'>" . $product->get_image('woocommerce_single') . "</div>";
				?>
					<div class='priceheader'>
						<div class="slantysquaresubprice">
							<h1 class="slantytextsubprice" style='color:#56b8ad !important;'>$<?php echo $product->regular_price; ?><a style='font-size:0.2em; letter-spacing:1px; '>Per Carton</a></h1>	
						</div>
					</div>
				</a>
				<?php
					$add_to_cart = do_shortcode('[add_to_cart_url id="731"]');
				?>
					<a href='<?php echo $add_to_cart; ?>'><div class="addtocartbutton" id="#addtocart" style="width:50%; margin-left:25%;">Add To Cart</div></a>
				<hr class="mobileline" display="display:none;">
				<?php
				
			echo "</div>";
	echo "</div>";
?>
<div class="recentheader" style='margin-bottom:30px; margin-top:30px;'>
		<div class="slantysquaresub">
		<h1 class="slantytextsub" name='merch'>Merch</h1>
		</div>
</div>
<?php
$args = array( 'post_type' => 'product', 'posts_per_page' => 10,'product_cat' => 'Merch', 'orderby' =>'date','order' => 'ASC' );
  $loop = new WP_Query( $args );
	echo "<div class='shopproductcontainer'>";
	while ( $loop->have_posts() ) : $loop->the_post();
		global $product; 
		echo "<div class='productcontainer'>";
				echo "<a style='color:black;' href='/" . get_permalink($product->ID) . "'>";
				echo "<h1 class='merchheader'>" . $product->name . "</h1>";
				echo "<div class='merchphoto'>" . $product->get_image('woocommerce_single') . "</div>";
				?>
					<div class='priceheader'>
						<div class="slantysquaresubprice" id="#merchsub">
							<?php 
								
								$price = $product->regular_price;
								if($price == null || $price == 0) {
									$price = (int)$product->get_variation_regular_price( 'min' );
								}
							?>
							<h1 class="slantytextsubprice" id="#merchtext" style='color:#56b8ad;'>$ <?php echo $price; ?></h1>	
						</div>
					</div>
				</a>
				<?php
					$add_to_cart = do_shortcode('[add_to_cart_url id="'.$post->ID.'"]');
				?>
					<a href='<?php echo get_permalink($product->ID); ?>'><div id="#addtocart" class="addtocartbutton" style="width:50%; margin-left:25%;">Add To Cart</div></a>
				<?php
				/*
				echo "<div class='shop_price'><b>Price: </b> $" . $product->regular_price . " per carton (16 beers)</div>";
				if($product->stock_status) {
					echo "<div class='stock_status'><b>Stock Status: </b> In Stock</div>";
				} else {
					echo "<div class='stock_status'><b>Stock Status: </b> <a style='color:red;'>Out of Stock </a></div>";
				}
				echo "<div class='beerdescription'><b>Product Description: </b>" . $product->description . "</div>";
				*/
		echo "</div>";
?>
<?php
	endwhile;
	echo "</div>";
	wp_reset_query(); 
?>
</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
