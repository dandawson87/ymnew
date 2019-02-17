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
<script src="https://cdnjs.cloudflare.com/ajax/libs/slideout/1.0.1/slideout.js"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-127978287-1');
</script>
<!-- script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDR8Rlk5ORfVQ4vyTpF0sDdhn1SQNidd0o&callback=initMap"></script-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDR8Rlk5ORfVQ4vyTpF0sDdhn1SQNidd0o"></script>
<!-- Hotjar Tracking Code for yourmatesbrewing.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1128197,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '351523025439483');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=351523025439483&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
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
		$("#navtop").show();
		$("#ageVerify").hide();
		$("#verifymodal").hide();
	}
	var iseighteen = false;
$(document).ready(function() {
    var nameEQ = "ymimeighteen" + "=";
    var ca = document.cookie.split(';');
	var iseighteen = false;
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0)  {
			var iseighteen = true;
			closemodal();
		}
    }

  var slideout = new Slideout({
    'panel': document.getElementById('panel'),
    'menu': document.getElementById('menu'),
    'padding': 256,
    'tolerance': 70
  });

  // Toggle button
  document.querySelector('.toggle-button').addEventListener('click', function() {
    slideout.toggle();
  });
});
</script>
<!-- Begin Modal -->
<!-- The Modal -->
<div id="ageVerify" class="modal">
  <!-- Modal content -->
  <div class="modal-content verifymodal">
		<div class="ageverifycontent">
			<img src='https://yourmatesbrewing.com/wp-content/uploads/2018/10/cropped-Your-Mates-Brewing-Company.png'/>
			<br>
			<br>
			<div style="font-family:'Roboto Mono'; font-size:18px; height:120px;"><p>Are you old enough to shout your mates a beer?</p></div>
			<button style="font-family:'Roboto Mono', monospace" onclick='closemodal()'>Yes</button>
			<button style="font-family:'Roboto Mono', monospace" onclick='gotofacebook()'>No</button>
<br><br>
			<p style="font-family:'Roboto Mono'; font-size:12px;">You must be of legal drinking age or older to enter this site.</p>
		</div>
  </div>
</div>
</head>
<!-- End Modal -->
<body id='thebody' <?php body_class(); ?>>
	<nav id="menu" class="menu slideout-menu slideout-menu-right">
		<section class="menu-section">
			<header class="menu-header">
				<span class="menu-header-title"><a href="/">Home</a></span>
			</header>
			<header class="menu-header">
				<span class="menu-header-title"><a href="/our-mates">Our Mates</a></span>
			</header>
			<header class="menu-header">
				<span class="menu-header-title"><a href="/our-story">Our Yarn</a></span>
			</header>
			<header class="menu-header">
				<span class="menu-header-title"><a href="/your-mates-brewhouse">Brewhouse</a></span>
			</header>
			<ul class="menu-section-list">
					<li><a href="/food-menu">Menu</a></li>
					<li><a href="/book-a-function">Book a Function</a></li>
			</ul>
			<header class="menu-header">
				<span class="menu-header-title"><a href="/blog">Livin'</a></span>
			</header>
			<ul class="menu-section-list">
					<li><a href="/category/good-beer">Good Beer</a></li>
					<li><a href="/category/good-mates">Good Mates</a></li>
					<li><a href="category/goodtimes">Good Times</a></li>
			</ul>
			<header class="menu-header">
				<span class="menu-header-title"><a href="/shop">Shop</a></span>
			</header>
			<ul class="menu-section-list">
					<li><a href="/product-category/shirts/">Shirts</a></li>
					<li><a href="/product-category/tees/">Tees</a></li>
			</ul>
			<header class="menu-header">
				<span class="menu-header-title"><a href="/contact">Contact</a></span>
			</header>
		</section>
	</nav>
<main id="panel" class="panel">
<header class="panel-header">
<button class="toggle-button"><img style="width:40px;" src="/wp-content/uploads/2019/02/burger-1.png"/><br>menu</button>
</header>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>
	<?php if(is_front_page()) { ?>
	<header id="masthead" class="site-header" role="banner">
	<?php } ?>
	<?php
		$menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)
												   // This returns an array of menu locations ([LOCATION_NAME] = MENU_ID);
		$primaryNav = wp_get_nav_menu_items($menuID); // Get the array of wp objects, the nav items for our queried location.
	?>
		<?php get_template_part( 'template-parts/header/header', 'image' ); ?>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div id='navtop' class="navigation-top" style="display:none;">
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
