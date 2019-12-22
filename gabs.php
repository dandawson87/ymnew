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
  <meta property="og:description"   content="Vote 1 Larry in the GABS Hottest 100" />
  <meta property="og:image"         content="/wp-content/uploads/2018/12/16906335_555785184607796_161929179116339200_n.jpg" />
</head>
<?php get_header(); ?>
<?php the_post(); ?>
<style>
.site-content {
	padding-top:0px !important;
}
</style>
<div class="backgroundimage" style="background-image:url('/wp-content/uploads/2019/12/heppyandlarry.png');" style='background-size:contain;'></div>
<div class="row" style="width:80%; margin-left:auto; margin-right:auto; text-align:center;">
	<div class="col-md-5">
		<div class="slantysquaresub" style="background-color:#56b8ad; margin-right:60%;" id="ourvision">
			<h1 class="slantytextsub">GABS</h1>
		</div>
		<br>
		<div class="slantysquaresub" id="brewhouseheader" style='margin-right:30%;'>
			<h1 class="slantytextsub" id="brewtext">Hottest 100</h1>
		</div>
	</div>
	<div class="col-md-7">
		<div style="text-align:left; padding:10px; margin:10px;">
			<p>Larry is an easy drinking pale ale known for its sunny Queensland tropical flavours. Larry is super sessionable and perfect for hot summer days. If
			you love Larry as much as we do then swing him a <a href='https://www.gabsfestival.com/h100-aus-vote'>vote </a>by clicking the link below.</p>
		</div>
	</div>
</div>
<div class="row" style="width:100%; margin-left:auto; margin-right:auto; text-align:center; ">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<iframe style="width:900px; height:500px; padding:20px;" src="https://www.youtube.com/embed/qopejBLuSL4" frameborder="0" 
			allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" class='gabsvideo' allowfullscreen></iframe>
		<div onclick='window.location="https://www.gabsfestival.com/h100-aus-vote";' id='mobbut1' class="littlebuttonthree" style='margin-top:0px; cursor:pointer; width:150px; margin-left:auto; margin-right:auto;'>
			Go Vote	
		</div>
	</div>
	<div class="col-md-2"></div>
</div>
<div style="height:20px;"></div>
<div class="row" style="width:70%; margin-left:auto; margin-right:auto; text-align:center; margin-top:10px;">
	<div class="col-md-8" style='text-align:left;'>
		<h2 style='font-size:28px;'>Everyone knows a Larry</h2>
		<p class="descriptiontext">Everyone has a mate like Larry! He’s the happy larrikin, he’s the mate you love to hate. He came in 13th in last year’s Hottest 100 and was absolutely chuffed! This year he has high hopes to do even better and he needs all of his mates’ help, including yours. 
So please, help your favourite larrycan mate out and swing him a <a href='https://www.gabsfestival.com/h100-aus-vote'>vote!!</a>
</p>
		<ul class="descriptionlist">
			<li><b>Flavours:</b> Tropical Fruit</li>
			<li><b>Body:</b> Light, easy drinking and super seasonable!</li>
			<li><b>IBU:</b> 16 </li>
			<li><b>ABV:</b> 4.5% </li>
		</ul>
	<img src='/wp-content/uploads/2019/12/LARRY-Can_Render.jpg' style='width:50%;' class='larrycanimg'/>
	</div>
	<div class="col-md-4">
		<img src='/wp-content/uploads/2019/12/LARRY_Character_Transparent-1.png'/>
		<div style="width:100%;"></div>
		<div onclick='window.location="https://yourmatesbrewing.com/product/larry-pale-ale/"' class="shopnowcol" style="text-align:right; pointer:cursor; margin-left:auto; margin-right:auto;">
			<div class="shopnowbutton">BUY NOW ></div>
		</div>
	</div>
</div>
<div class="row" style="width:80%; margin-left:auto; margin-right:auto; text-align:center; margin-top:30px;">
		<div class="slantysquaresub" style="background-color:#56b8ad; margin-right:60%;" id="ourvision">
			<h1 class="slantytextsub">Shop The</h1>
		</div>
		<br>
		<div class="slantysquaresub" id="brewhouseheader" style='margin-right:30%;'>
			<h1 class="slantytextsub" id="brewtext">Larry Look</h1>
		</div>
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
