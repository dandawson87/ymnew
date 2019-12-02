<?php
/**
 * Template Name: Gabs 
 */
?>
<head>
  <title>Your Mates Brew House - GABS Hottest 100</title>
    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
  <meta property="og:url"           content="https://yourmatesbrewing.com/gabs-hottest-100" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Your Mates Brewing - GABS Hottest 100" />
  <meta property="og:description"   content="Vote in the GABS Hottest 100" />
  <meta property="og:image"         content="/wp-content/uploads/2018/12/16906335_555785184607796_161929179116339200_n.jpg" />
</head>
<?php get_header(); ?>
<?php the_post(); ?>
<style>
.site-content {
	padding-top:0px !important;
}
</style>
<br>
<div class="backgroundimage" style="background-image:url('/wp-content/uploads/2019/12/beerbgl.png');" style='background-size:contain;'></div>
<div class="row" style="width:80%; margin-left:auto; margin-right:auto; text-align:center;">
	<div class="col-md-6">
		<div class="slantysquaresub" style="background-color:#56b8ad; margin-right:60%;" id="ourvision">
			<h1 class="slantytextsub">GABS</h1>
		</div>
		<br>
		<div class="slantysquaresub" id="brewhouseheader" style='margin-right:30%;'>
			<h1 class="slantytextsub" id="brewtext">Hottest 100</h1>
		</div>
	</div>
	<div class="col-md-6">
		<div style="text-align:left; padding:10px; margin:10px;">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>
</div>
<div class="row" style="width:100%; margin-left:auto; margin-right:auto; text-align:center; ">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<iframe style="width:900px; height:500px; padding:20px;" src="https://www.youtube.com/embed/0-IYiDnJU3w" frameborder="0" 
			allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<div onclick='window.location="/food-menu/";' id='mobbut1' class="littlebuttonthree" style='margin-top:0px; cursor:pointer; width:150px; margin-left:auto; margin-right:auto;'>
			Go Vote	
		</div>
	</div>
	<div class="col-md-2"></div>
</div>
<div style="height:20px;"></div>
<div class="row" style="width:70%; margin-left:auto; margin-right:auto; text-align:center; margin-top:10px;">
	<div class="col-md-8" style='text-align:left;'>
		<h2 style='font-size:28px;'>Everyone knows a Larry</h2>
		<p class="descriptiontext">Everyone knows a Larry. Larry is that mate who instantly makes you
			smile. He's a summer-lovin', party-shirt wearin’ kinda fella who gets
			along with everyone. Larry is your #larrycan mate.</p>
		<ul class="descriptionlist">
			<li><b>Flavours:</b> Tropical Fruit</li>
			<li><b>Body:</b> Light, easy drinking and super seasonable!</li>
			<li><b>IBU:</b> 16 </li>
			<li><b>ABV:</b> 4.5% </li>
		</ul>
	</div>
	<div class="col-md-4">
		<img src='/wp-content/uploads/2019/12/larrycartoon.png'/>
		<div style="width:100%;"></div>
		<div onclick='window.location="https://yourmatesbrewing.com/product/larry-pale-ale/"' class="shopnowcol" style="text-align:right; pointer:cursor; margin-left:auto; margin-right:auto;">
			<div class="shopnowbutton">SHOP NOW ></div>
		</div>
	</div>
</div>
<div class="row" style="width:80%; margin-left:auto; margin-right:auto; text-align:center; margin-top:30px;">
	<div class="slantysquaresub" id="brewhouseheader" style='margin-right:30%;'>
	<h1 class="slantytextsub" id="brewtext">Get The Look</h1>
</div>
<div class="row" style="width:80%; margin-left:auto; margin-right:auto; text-align:center; margin-top:30px;">
	<h3>Shop the Limited Edition Larry Tee</h3>
</div>
<div class="row" style="width:80%; margin-left:auto; margin-right:auto; text-align:center; margin-top:30px;">
		<div class="shopcontainer">
			<div class="row">
		<?php
			$args = array(
				'post_type'      => 'product',
				'posts_per_page' => 4,
				'product_cat'    => 'gabs'
			);

			$loop = new WP_Query( $args );

			while ( $loop->have_posts() ) : $loop->the_post();
				global $product;
				?>
				<div class="col-md-6" style="text-align:center;">
					<?php $product = wc_get_product( get_the_ID() );?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );  ?>
					<a href="<?php echo get_permalink(); ?>">
							<img src="<?php echo $image[0]; ?>" class="shopthumb">
							<h3 class="merchshoptitle"><?php echo $product->get_name(); ?></h3>
							<h4 class="shopprice">AUD $<?php echo $product->get_price(); ?></h4>
					</a>
				</div>
				<?php
			endwhile;

			wp_reset_query();
		?>
			</div>
		</div>
</div>
	</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
