<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?>
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentyseventeen' ); ?>">
<img src="https://yourmatesbrewing.com/wp-content/uploads/2018/10/cropped-Your-Mates-Brewing-Company.png" class="navlogofront">
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
		<?php
		echo twentyseventeen_get_svg( array( 'icon' => 'bars' ) );
		echo twentyseventeen_get_svg( array( 'icon' => 'close' ) );
		_e( 'Menu', 'twentyseventeen' );
		?>
	</button>

	<?php wp_nav_menu( array(
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',
	) ); ?>
	<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
	<?php endif; ?>
	<div class="socialmenu">
<a href='https://www.facebook.com/yourmatesbrewing/' target='_blank'><i style='font-size:1.5em; line-height:0.5em;' class="fab fa-facebook-square"></i></a>
<a href='https://www.instagram.com/yourmatesbrewing/' target='_blank'><i style='font-size:1.5em; line-height:0.5em;' class="fab fa-instagram"></i></a>
<a href='https://www.youtube.com/channel/UCg9qD8LCbtW5ikQYNneRfUw' target='_blank'><i style='font-size:1.5em; line-height:0.5em;' class="fab fa-youtube"></i></a>
<?php
if ( WC()->cart->get_cart_contents_count() > 0 ) {
?>
<a style='color:black; margin-top:5px;' href='/cart'><i style='font-size:1.5em; line-height:0.5em;' class="fa fa-shopping-cart"></i></a> &nbsp;
<a style='color:black; margin-top:5px;' href='/checkout'><i style='font-size:1.5em; line-height:0.5em;' class="fas fa-cash-register"></i></a>
<?php
}
?>
	</div>
</nav><!-- #site-navigation -->
