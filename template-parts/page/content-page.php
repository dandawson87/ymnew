<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<style>
#masthead {
	padding-top:20px !important;
}
#content {
	padding-top:0px !important;
	text-align:justify !important;
}
.top-menu {
	margin-left:8%;
}
</style>
<?php
	if(has_post_thumbnail()) {
?>
	</div></div>
<?php
if ( has_post_thumbnail() ) {
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
	?>
	<div class="backgroundimage" style="background-image:url('<?php echo $large_image_url[0]; ?>');"></div>
<?php
}
?>
		<div id="content" class="site-content">
			<div class="wrap">
<?php
	}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
