<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
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
	margin-bottom:1em;
}
.content-area {
	padding-top:10px
}
#secondary {
	margin-top:3em;
}
.search-form .search-submit .icon {
	background-color: transparent !important;
	display:block !important;
	color:#f17720;
}
.search-form .search-submit { 
	color:#f17720;
	background-color: white !important;
}

</style>
</div></div>
<div class="backgroundimage" style="background-image:url('/wp-content/uploads/2019/08/landcruiser.png'); max-height:250px; margin-top:-10px;"></div>
<div class="site-content-contain">
	<div id="content" class="site-content">
		<div class="wrap">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

<div class="recentheader">
		<div class="slantysquaresub">
		<h1 class="slantytextsub">News</h1>
		</div>
</div>
<div>
<?php
	echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => 'alignleft' ) );
?>
</div>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if ( is_sticky() && is_home() ) :
		echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
	endif;
	?>
	<header class="entry-header">
		<?php
		if ( 'post' === get_post_type() ) {
			echo '<div class="entry-meta">';
				if ( is_single() ) {
					twentyseventeen_posted_on();
				} else {
					echo twentyseventeen_time_link();
					twentyseventeen_edit_link();
				};
			echo '</div><!-- .entry-meta -->';
		};

		if ( is_single() ) {
			the_title( '<h3 class="entry-title">', '</h3>' );
		} elseif ( is_front_page() && is_home() ) {
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		} else {
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		}
		?>
	</header><!-- .entry-header -->

	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php //the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
			</a>
		</div><!-- .post-thumbnail -->
	<?php endif; ?>

	<div class="entry-content">
		<?php
		/* translators: %s: Name of current post */
		the_content( sprintf(
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
			get_the_title()
		) );

		wp_link_pages( array(
			'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
			'after'       => '</div>',
			'link_before' => '<span class="page-number">',
			'link_after'  => '</span>',
		) );
		?>
	</div><!-- .entry-content -->

	<?php
	if ( is_single() ) {
		twentyseventeen_entry_footer();
	}
	?>

</article><!-- #post-## -->
