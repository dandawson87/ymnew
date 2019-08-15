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
<script>
function showPopup() {
	$("#newsLetter").show().animate({top: (window.innerHeight / 2 - 50) + "px"}, 1000);
}

</script>

<div id="newsLetter" class="modal newsletter-modal" style='display:none;'>
  <!-- Modal content -->
  <div class="modal-content newsLetterModal">
	<div class="newsModalContainer">
		<div class="newsLetterContent" style='background-image:url("/wp-content/uploads/2019/08/newsletter.jpg"); background-repeat:no-repeat; background-size:cover; background-color:white;'>
			<img class="closebutton" src='/wp-content/uploads/2019/08/YMB_HomepageDesignSubscription_03.png'>				
			<img class="agelogo" src='/wp-content/uploads/2018/10/cropped-Your-Mates-Brewing-Company.png'>
			<div class="row">
				<div class="col-md-6">
					<img src='/wp-content/uploads/2019/08/jointheclub.png'>
				</div>
				<div class="col-md-6">
					<?php echo do_shortcode( '[mc4wp_form id="104"]' ); ?>	
				</div>
			</div>
		</div>
	</div>
  </div>
</div>
<div class="yellowcallout">
	<div class="row yellowcalloutinner">
		<div class="col-md-8 col-sm-12">
			Join The Good Mates Club &amp; and keep up to date with News &amp; Events	
		</div>
		<div class="col-md-4 col-sm-12">
				<div class="footerjoinbutton" style="border-color:black; color:black; width:100%; font-size:1em; margin-top:0px !important; cursor:pointer;" onclick='showPopup();'>
					Join Now >
				</div> 
		</div>
	</div>
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

<div class="crfooter">
	<p style='width:80%; margin-left:auto; margin-right:auto; padding:5px; padding-top:10px;'>&copy; Copyright 2019 <b>Your Mates Brewing Company</b> ABN 36 602 634 257 </p>
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

