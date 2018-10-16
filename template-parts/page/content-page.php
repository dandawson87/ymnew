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
#page {
	margin-top:50px !important;
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
		the_post_thumbnail( 'full', ['class' => 'smallbannerimg']);  
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
