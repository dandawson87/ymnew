<?php
/**
 * Template Name: News 
 */
define('WP_DEBUG',true);
?>
<head>
  <title>Your Mates Brew House - News </title>
    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
  <meta property="og:url"           content="https://yourmatesbrewing.com/news" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Your Mates Brew House - News" />
  <meta property="og:description"   content="Check out the Latest News at Your Mates " />
  <meta property="og:image"         content="/wp-content/uploads/2018/12/16906335_555785184607796_161929179116339200_n.jpg" />
</head>
<?php get_header(); ?>
<?php the_post(); ?>
<style>
.site-content {
	padding-top:0px !important;
	padding-bottom:0px !important;
}
</style>
<div class="backgroundimage" style="background-image:url('/wp-content/uploads/2019/08/landcruiser.png'); max-height:250px;"></div>
<div class="recentheader" style='margin-bottom:30px; margin-top:2em;'>
		<div class="slantysquaresub" id="ouryarnheader">
		<h1 class="slantytextsub" id="beertext">News</h1>
		</div>
</div>
<div class="row recentpostscontainer">
	<div class="col-md-6 col-sm-12 recentpostinner">
		<?php
			//Get most recent post
			$recent_posts = wp_get_recent_posts();	
			$most_recent = $recent_posts[0];
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $most_recent["ID"] ), 'single-post-thumbnail' ); 
		?>		
		<a href='<?php echo get_permalink($most_recent['ID']);?>'>
				<div class="featuredpost" style="background-image:url('<?php echo $image[0]; ?>');">
					<div class="featuredsquare">FEATURED</div>	
					<div class="featuredfooter"><?php echo $most_recent["post_title"];?> <p class="datestamp"><?php echo date("F jS, Y", strtotime( $most_recent['post_date']) ); ?></p></div>
				</div>
		</a>
	</div>
	<div class="col-md-3 col-sm-12 recentpostinner">
		<?php 
			$second_post = $recent_posts[1];
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $second_post["ID"] ), 'single-post-thumbnail' ); 
		?>
		<a href='<?php echo get_permalink($second_post['ID']);?>'>
				<div class="secondarypost" style="background-image:url('<?php echo $image[0]; ?>');">
					<div class="secondarypostfooter"><?php echo $second_post["post_title"];?> <p class="datestamp"><?php echo date("F jS, Y", strtotime( $second_post['post_date']) ); ?></p></div>
				</div>
		</a>
		<?php 
			$forth_post = $recent_posts[3];
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $forth_post["ID"] ), 'single-post-thumbnail' ); 
		?>
		<a href='<?php echo get_permalink($forth_post['ID']);?>'>
				<div class="secondarypost" style="background-image:url('<?php echo $image[0]; ?>');">
					<div class="secondarypostfooter"><?php echo $forth_post["post_title"];?> <p class="datestamp"><?php echo date("F jS, Y", strtotime( $forth_post['post_date']) ); ?></p></div>
				</div>
		</a>
	</div>
	<div class="col-md-3 col-sm-12 recentpostinner">
		<?php 
			$third_post = $recent_posts[2];
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $third_post["ID"] ), 'single-post-thumbnail' ); 
		?>
		<a href='<?php echo get_permalink($third_post['ID']);?>'>
				<div class="secondarypost" style="background-image:url('<?php echo $image[0]; ?>');">
					<div class="secondarypostfooter"><?php echo $third_post["post_title"];?> <p class="datestamp"><?php echo date("F jS, Y", strtotime( $third_post['post_date']) ); ?></p></div>
				</div>
		</a>
		<?php 
			$fifth_post= $recent_posts[4];
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $fifth_post["ID"] ), 'single-post-thumbnail' ); 
		?>
		<a href='<?php echo get_permalink($fifth_post['ID']);?>'>
				<div class="secondarypost" style="background-image:url('<?php echo $image[0]; ?>');">
					<div class="secondarypostfooter"><?php echo $fifth_post["post_title"];?> <p class="datestamp"><?php echo date("F jS, Y", strtotime( $fifth_post['post_date']) ); ?></p></div>
				</div>
		</a>
	</div>
</div>
<div class="row recentpostscontainer" style="margin-top:10px;">
	<div class="col-md-6 col-sm-12 recentpostinner">
		<?php
			//Get most recent post
			$recent_posts = wp_get_recent_posts();	
			$most_recent = $recent_posts[5];
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $most_recent["ID"] ), 'single-post-thumbnail' ); 
		?>		
		<a href='<?php echo get_permalink($most_recent['ID']);?>'>
				<div class="featuredpost" style="background-image:url('<?php echo $image[0]; ?>');">
					<div class="featuredfooter"><?php echo $most_recent["post_title"];?> <p class="datestamp"><?php echo date("F jS, Y", strtotime( $most_recent['post_date']) ); ?></p></div>
				</div>
		</a>
	</div>
	<div class="col-md-6 col-sm-12 recentpostinner">
		<?php
			//Get most recent post
			$recent_posts = wp_get_recent_posts();	
			$most_recent = $recent_posts[6];
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $most_recent["ID"] ), 'single-post-thumbnail' ); 
		?>		
		<a href='<?php echo get_permalink($most_recent['ID']);?>'>
				<div class="featuredpost" style="background-image:url('<?php echo $image[0]; ?>');">
					<div class="featuredfooter"><?php echo $most_recent["post_title"];?> <p class="datestamp"><?php echo date("F jS, Y", strtotime( $most_recent['post_date']) ); ?></p></div>
				</div>
		</a>
	</div>
</div>
<div class="row recentpostscontainer">
	<div class="col-md-6 col-sm-12 recentpostinner">
		<?php
			//Get most recent post
			$recent_posts = wp_get_recent_posts();	
			$most_recent = $recent_posts[6];
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $most_recent["ID"] ), 'single-post-thumbnail' ); 
		?>		
		<a href='<?php echo get_permalink($most_recent['ID']);?>'>
				<div class="featuredpost" style="background-image:url('<?php echo $image[0]; ?>');">
					<div class="featuredfooter"><?php echo $most_recent["post_title"];?> <p class="datestamp"><?php echo date("F jS, Y", strtotime( $most_recent['post_date']) ); ?></p></div>
				</div>
		</a>
	</div>
	<div class="col-md-6 col-sm-12 recentpostinner">
		<?php
			//Get most recent post
			$recent_posts = wp_get_recent_posts();	
			$most_recent = $recent_posts[7];
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $most_recent["ID"] ), 'single-post-thumbnail' ); 
		?>		
		<a href='<?php echo get_permalink($most_recent['ID']);?>'>
				<div class="featuredpost" style="background-image:url('<?php echo $image[0]; ?>');">
					<div class="featuredfooter"><?php echo $most_recent["post_title"];?> <p class="datestamp"><?php echo date("F jS, Y", strtotime( $most_recent['post_date']) ); ?></p></div>
				</div>
		</a>
	</div>
</div>
<br><br>
<?php get_footer();
