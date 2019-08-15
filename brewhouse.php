<?php
/**
 * Template Name: Brewhouse 
 */
?>
<head>
  <title>Your Mates Brew House - Sunshine Coast</title>
    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
  <meta property="og:url"           content="https://yourmatesbrewing.com/your-mates-brewhouse" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Your Mates Brew House - Sunshine Coast" />
  <meta property="og:description"   content="Check out the Your Mates Brew House" />
  <meta property="og:image"         content="/wp-content/uploads/2018/12/16906335_555785184607796_161929179116339200_n.jpg" />
</head>
<?php get_header(); ?>
<?php the_post(); ?>
<style>
.site-content {
	padding-top:0px !important;
}
</style>
<div class="backgroundimage" style="background-image:url('/wp-content/uploads/2019/08/YMBrewhouse.jpg');" style='background-size:contain;'></div>
<div class="recentheader" style='margin-bottom:30px;'>
		<div class="slantysquaresub" id="brewhouseheader">
		<h1 class="slantytextsub" id="brewtext">The Brew House</h1>
		</div>
</div>
<div class="row" style="width:80%; margin-left:auto; margin-right:auto; text-align:center;">
		<div class="col-md-6" style="text-align:center;">
			<img src="/wp-content/uploads/2019/08/YMBrewhousePeeps.jpg"> 
		</div>
		<div class="col-md-6" style="text-align:justify;">
		<?php 
			$content = the_content(); 
			$content = apply_filters( 'the_content', $content );
			$content = str_replace( ']]>', ']]&gt;', $content );
			echo $content;
		?>
				<div class="row">
					<div class="col-md-5">
						<div onclick='window.location="/food-menu/";' id='mobbut1' class="littlebuttonthree" style='margin-top:0px; cursor:pointer;'>
							Food Menu	
						</div>
					</div>
					<div class="col-md-2">
					</div>
					<div class="col-md-5">
						<div onclick='window.location="/drink-menu/";'  id='mobbut2' class="littlebuttonone" style='margin-top:0px; cursor:pointer;'>
							Drink Menu	
						</div>
					</div>
				</div>
		</div>
</div>
<hr>
<div class="row" style="width:80%; margin-left:auto; margin-right:auto; text-align:center;">
		<div class="col-md-6" style="text-align:center;">
				<div class="slantysquaresub" style="background-color:#56b8ad; height:6em;" id='functions'>
						<h1 class="slantytextsub" style="margin-top:0.5em;">Functions</h1>
				</div>
				<h3 style='margin-top:10px;'>Let us host your next function</h3>
				<p style='text-align:left;'>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<div class="row">
					<div class="col-md-6">
						<div onclick="window.scrollTo(0, $('#booknow').offset().top);" class="littlebuttonone" id='mobbut3' style='margin-top:0px; cursor:pointer;'>
							Book Now	
						</div>
					</div>
					<div class="col-md-6">
						<a href='/wp-content/uploads/2019/08/YM-Brewhouse-Function-Package.pdf' download="Your Mates Brewhouse Menu.pdf">
						<div class="littlebuttonone" style='margin-top:0px; cursor:pointer; width:100%;' id='mobbut4'>
							Download Info Pack
						</div>
						</a>
					</div>
				</div>
		</div>
		<div class="col-md-6" style="text-align:justify;">
			<img src='/wp-content/uploads/2019/08/taco.jpg'>
		</div>
</div>
				<div class="row" style="width:80%; margin-left:auto; margin-right:auto; margin-top:30px;">
					<div class="col-md-6">
						<div class="slantysquaresub" style="background-color:#56b8ad; height:5em;" id='functions'>
							<h1 class="slantytextsub" id="booknow" style="">Book Now</h1>
						</div>
						<div style='height:20px;'></div>
						<?php echo do_shortcode('[contact-form-7 id="501" title="Book a Function"]'); ?>
					</div>
					<div class="col-md-6">
						<p style='margin-top:20px; margin-bottom:10px;'>Book Your Function by filling out this form, or call us on <a href='tel:0753294733'>(07) 5329 4733</a>.
						<img src='/wp-content/uploads/2019/02/Venue-101upload-0700-e1550389873158.jpg'>
					</div>
				</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
