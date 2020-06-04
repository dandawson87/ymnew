<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

if(is_front_page()) {
?>
<div class="site-branding">
	<div class="wrapym">
	<div class="wrapyminner">
		<?php the_custom_logo(); ?>
		<div class="site-branding-text">

			<?php
			$description = get_bloginfo( 'description', 'display' );

			if ( $description || is_customize_preview() ) :
			?>
				<p class="site-description"><?php echo $description; ?></p>
			<?php endif; ?>
		</div><!-- .site-branding-text -->

		<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && ! has_nav_menu( 'top' ) ) : ?>
	<?php endif; ?>
	</div><!-- .inner -->
	</div><!-- .wrap -->
</div><!-- .site-branding -->
	<div class='gabsbutton'>
		<div class="row">
			<div class="col-md-2">

			</div>
			<div class="col-md-8" style="display:inline-flex;">
				<div class="bannerbutton1" onclick="window.location='https://yourmatesbrewing.com/ym-shop';">Buy Beer Now</div>	
			</div>
			<div class="col-md-2">

			</div>
		</div>
	</div>
<?php if ( is_front_page() ) : ?>
	<div class="font-page-text">
				<h1 class="site-title"></h1>
<!--				<div class="taglinecontainer">
					<div class='taglineym'>BREWING </div>
					<div class='slantysquare'><div class='slantytext'>GOOD</div></div>
					<div class='taglineym'>TIMES</div>
				</div>-->
				<a href='#content'><button style='color:white; background:none; border:2px solid white; border-radius:20px;
												 padding:10px; position:relative; text-align:center; margin-left:auto; margin-right:auto; display:block;' class='menu-scroll-down'>Scroll for more</button></a>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>
	</div> <!-- Endd front page text -->
<?php } else { 
?>

<?php } ?>
