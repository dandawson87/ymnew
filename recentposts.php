<?php
?>
<div class="recentheader">
		<div class="slantysquaresub">
		<h1 class="slantytextsub">News</h1>
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
