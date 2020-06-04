<?php
/**
 * Template Name: Our Yarn 
 */
?>
<head>
  <title>Your Mates Brew House - Our Yarn</title>
    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
  <meta property="og:url"           content="https://yourmatesbrewing.com/drink-menu" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Your Mates Brew House - Our Yarn" />
  <meta property="og:description"   content="Check out the Your Mates Yarn" />
  <meta property="og:image"         content="/wp-content/uploads/2018/12/16906335_555785184607796_161929179116339200_n.jpg" />
</head>
<?php get_header(); ?>
<?php the_post(); ?>
<style>
.site-content {
	padding-top:0px !important;
}
</style>
<div class="backgroundimage" style="background-image:url('/wp-content/uploads/2020/04/DSC00534.jpg');"></div>
<div class="recentheader" style='margin-bottom:30px;'>
		<div class="slantysquaresub" id="ouryarnheader">
		<h1 class="slantytextsub" id="beertext">Our Yarn</h1>
		</div>
</div>
<div class="row" style="width:80%; margin-left:auto; margin-right:auto; text-align:center;">
		<div class="col-md-6" style="text-align:center;">
			<img src="/wp-content/uploads/2019/07/mattnmcgazzacopped.png"> 
			<h3>"How hard could it really be?"</h3>
			<br>
			<img src="/wp-content/uploads/2020/06/Moving.jpg" id='img2'> 
			<h3 id='heading2'>"We would bribe all our mates with free beer and pool comps to give us a hand"</h3>
			<br>
			<img src="/wp-content/uploads/2019/07/heppandmcgaz.png" id='img3'> 
			<h3 id='heading1'>"At least the beers were free!"</h3>
			<br>
			<img src="/wp-content/uploads/2020/06/IMG_8916-2.jpg" id='img4'>
			<h3>"Ya kidding aren't ya?! McGarry, we need to brew more beer!"</h3>
			<br>
			<img src="/wp-content/uploads/2020/06/gbgmgts.jpg" id="img5">
			<h3>It's all about drinking good beers with good mates having a good time</h3>
		</div>
		<div class="col-md-6" style="text-align:justify;">
		<?php 
			$content = the_content(); 
			$content = apply_filters( 'the_content', $content );
			$content = str_replace( ']]>', ']]&gt;', $content );
			echo $content;
		?>
		</div>
</div>
<hr>
<div class="row" style="width:80%; margin-left:auto; margin-right:auto; text-align:center;">
		<div class="col-md-5" style="text-align:center;">
				<div class="slantysquaresub" style="background-color:#56b8ad; height:6em;" id='ourvision'>
						<h1 class="slantytextsub" style="padding-top:0.5em;">Our Vision</h1>
				</div>
				<p style='height:50px;'></p>
				<p style='text-align:left;'>
Our vision is simple. We believe in mateship, inclusiveness and sustainability.
<br>
<br>
These core values have guided our journey from the beginning and will continue to do so as we grow. In the last 12 months we have worked with over 14 charities and community groups and have raised over $25,000. 
<br>
<br>
Growing up on the Sunshine Coast, we have been lucky enough to enjoy its unique natural environment and the lifestyle that it provides. We continually strive to minimise our impact to ensure future generations can enjoy our amazing natural backyard the same way we have.
				</p>
		</div>
		<div class="col-md-2"></div>
		<div class="col-md-5" style="text-align:justify;">
				<div class="slantysquaresub" style="background-color:#56b8ad; height:6em;" id='commandments'>
						<h1 class="slantytextsub" style="padding-top:0.5em;">10 Commandments</h1>
				</div>
				<p style='height:50px;'></p>
				<ul>
					<li>We exist to drink good beer, with good mates and have a good time.</li>
					<li>We froth on what we do, otherwise it’s not worth doing.</li>
					<li>We work hard, we player harder!</li>
					<li>Our actions speak louder than our words.</li>
					<li>We have an open door policy. Treat everyone like your mate.</li>
					<li>We get shit done!</li>
					<li>What comes around goes around, don’t be a dick.</li>
					<li>We treasure our natural playground.</li>
					<li>Our word is our bond.</li>
					<li>We don’t just sell beer, we’re living the bloody dream!</li>
				</ul>
		</div>
</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
