<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
<!-- drawer.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Mono" rel="stylesheet">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127978287-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-127978287-1');
</script>
<!-- script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDR8Rlk5ORfVQ4vyTpF0sDdhn1SQNidd0o&callback=initMap"></script-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDR8Rlk5ORfVQ4vyTpF0sDdhn1SQNidd0o"></script>
<!-- jquery & iScroll -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
<!-- drawer.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
<script>
		window.addEventListener('scroll', function(e) {
		  if ($(window).scrollTop() > 489) {
				$("#navtop").addClass("fix-search");
		  } else {
				$("#navtop").removeClass("fix-search");
		  }
		  
		});

	function gotofacebook() {
		window.location.href = "https://www.facebook.com/yourmatesbrewing/";	
	}

	function closemodal() {
		document.cookie ='ymimeighteen=yes';
		$("#ageVerify").hide();
	}
    var nameEQ = "ymimeighteen" + "=";
    var ca = document.cookie.split(';');
	var iseighteen = false;
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0)  {
			var iseighteen = true;

		}
    }
</script>
</head>
<!-- Begin Modal -->
<!-- The Modal -->
<div id="ageVerify" class="modal">
  <!-- Modal content -->
  <div class="modal-content verifymodal">
		<div class="ageverifycontent">
			<p>This website contains references to Alcohol. Are you over 18? </p>
			<button onclick='closemodal()'>Yes</button>
			<button onclick='gotofacebook()'>No</button>
		</div>
  </div>
</div>
<!-- End Modal -->
<body id='thebody' <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>
	<?php if(is_front_page()) { ?>
	<header id="masthead" class="site-header" role="banner">
	<?php } ?>
	<?php
		$menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)
												   // This returns an array of menu locations ([LOCATION_NAME] = MENU_ID);
		$menuID = $menuLocations['top']; // Get the *primary* menu ID
		$primaryNav = wp_get_nav_menu_items($menuID); // Get the array of wp objects, the nav items for our queried location.
	?>

		    <button id='menubutton' type="button" class="drawer-toggle drawer-hamburger">
			  <span class="sr-only">toggle navigation</span>
			  <span class="drawer-hamburger-icon"></span>
			</button>
			<nav class="drawer-nav" role="navigation">
			  <ul class="drawer-menu">
				<li><a class="drawer-brand" href="/">Your Mates</a></li>
				<?php
				foreach ( $primaryNav as $navItem ) {

					echo '<li><a class="drawer-menu-item" href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a></li>';

				}
				?>
			  </ul>
			</nav>

		<?php get_template_part( 'template-parts/header/header', 'image' ); ?>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div id='navtop' class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>

	</header><!-- #masthead -->
	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>
	<div class="site-content-contain">
		<div id="content" class="site-content">
