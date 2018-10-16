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
<div class='contactus'>
	<div class="row">
	<div class="col-md-5"></div>
	<div class="col-md-4"><?php echo do_shortcode("[mc4wp_form id='104']"); ?></div>
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
				&copy; Your Mates Brewing Company - ABN 36 602 634 257
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
</body>
</html>
