<?php
?>
<div style="width:80%; margin-left:auto; margin-right:auto; margin-top:50px;">
	<div class="row">
		<div class="col-md-6 shopnowcol">
				<div class="slantysquaresub" style="background-color:#f0ea56;">
						<h1 class="slantytextsub">Merch</h1>
				</div>
		</div>
		<div onclick='window.location="/product-category/merch/";' class="col-md-6 shopnowcol" style="text-align:right; pointer:cursor;">
			<div class="shopnowmerchbutton">SHOP NOW ></div>
		</div>
	</div>
</div>
<div class="shopcontainer">
	<div class="row">
<?php
    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => 4,
        'product_cat'    => 'merch'
    );

    $loop = new WP_Query( $args );

    while ( $loop->have_posts() ) : $loop->the_post();
        global $product;
		?>
		<div class="col-md-3" style="text-align:center;">
			<?php $product = wc_get_product( get_the_ID() );?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );  ?>
			<a href="<?php echo get_permalink(); ?>">
					<img src="<?php echo $image[0]; ?>" class="shopthumb">
					<h3 class="merchshoptitle"><?php echo $product->get_name(); ?></h3>
					<h4 class="shopprice">AUD $<?php echo $product->get_price(); ?></h4>
			</a>
		</div>
		<?php
    endwhile;

    wp_reset_query();
?>
	</div>
</div>
