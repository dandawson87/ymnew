<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

defined( 'ABSPATH' ) || exit;
the_post();
global $product;

?>
<head>
  <title>Your Mates Brewing - Online Store</title>
    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
  <meta property="og:url"           content="https://yourmatesbrewing.com/product/<?php echo $product->get_slug(); ?>" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="<?php $product->get_name(); ?>" />
  <meta property="og:description"   content="<?php $product->get_description(); ?>" />
  <meta property="og:image"         content="<?php echo get_the_post_thumbnail_url($product->ID); ?>" />
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

<style>
#secondary {
display:none !important;
}
</style>
<div id="content" class="site-content" style='padding-top:0px; font-family:"roboto mono";'>
<div class="wrap">
	<?php
		wc_get_template_part( 'content', 'single-product' ); 
		do_action( 'woocommerce_after_main_content' );
		do_action( 'woocommerce_sidebar' );
	?>
</div>
</div>

<?php get_footer( 'shop' );
?>
<?php
/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
