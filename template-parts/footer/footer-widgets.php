<?php
/**
 * Displays footer widgets if assigned
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<?php
if ( is_active_sidebar( 'sidebar-2' ) ||
	 is_active_sidebar( 'sidebar-3' ) ) :
?>

	<aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'twentyseventeen' ); ?>">
		<div class="row">
			<div class="col-md-4">
				<h3 class='footerunderline'> MENU </h3>
				<div class="menufooterlinks">
					<a class='footermenulink' href='/' style="font-family: 'Roboto Mono', monospace;">Home</a><br>
					<a class='footermenulink' href='/our-story' style="font-family: 'Roboto Mono', monospace;">Our Yarn</a><br>
					<a class='footermenulink' href='/our-mates' style="font-family: 'Roboto Mono', monospace;">Our Mates</a><br>
					<a class='footermenulink' href='/blog' style="font-family: 'Roboto Mono', monospace;">Livin'</a><br>
					<a class='footermenulink' href='/larry-locator/' style="font-family: 'Roboto Mono', monospace;">Beer Locator</a><br>
					<a class='footermenulink' href='/contact/' style="font-family: 'Roboto Mono', monospace;">Contact</a><br>
				</div>	
			</div>
			<div class="col-md-4" style='color:white !important;'>
				<h3 class='footerunderline'> FIND US </h3>
				<div class"menufooterlinks">
					<h5 style="color:white; font-family: 'Roboto Mono', monospace;">ADDRESS</h5>
					<p><a href='https://goo.gl/maps/KnZfVfNerHk' target='_blank' style="color:white;font-family: 'Roboto Mono', monospace;">41 Technology Drive, Warana</a></p>
				
					<h5 style="color:white; font-family: 'Roboto Mono', monospace;">PHONE</h5>
					<p style="color:white; font-family: 'Roboto Mono', monospace;"><a style='color:white !important;' href='tel:0753294733'>07 5329 4733</a></p>

					<h5 style="color:white; font-family: 'Roboto Mono', monospace;">HOURS</h5>
					<p style="color:white; font-family: 'Roboto Mono', monospace;">
<ul>
		<li>Wednesday: 11am - 9pm</li>
		<li>Thursday: 11am - 9pm</li>
		<li>Friday: 11am - 11pm</li>
		<li>Saturday: 11am - 11pm</li>
		<li>Sunday: 11am - 9pm</li>
</ul>
					</p>
		
					<h5 style="color:white; font-family: 'Roboto Mono', monospace;">FIND OUR BEER</h5>
					<p><a style="color:white; font-family: 'Roboto Mono', monospace;" href='/larry-locator/'>Beer Locator</a></p>
				</div>
			</div>
		
			<div class="col-md-4">
				<h3 class='footerunderline'> STOCK OUR BEER </h3>
				<p><a style="color:white; font-family: 'Roboto Mono', monospace;" href='mailto:info@yourmatesbrewing.com'>info@yourmatesbrewing.com</a></p>
			
				<h3 class='footerunderline'> DRINK RESPONSIBLY </h3>
				<p style="font-family: 'Roboto Mono', monospace;">Your Mates Brewing Company supports the safe and responsible consumption of alcohol. Look after yourselves out there!</p>
	<br><br>	
				<div class="row">
					<div class="col-md-3"><a href="/"><img src='/wp-content/uploads/2018/10/cropped-Your-Mates-Brewing-Company.png' style='width:75px;'></img></a></div>
					<div class="col-md-3"><a href="https://www.facebook.com/yourmatesbrewing/" target="_blank"><img src='/wp-content/uploads/2018/11/fb.png' style='width:75px;'></img></a></div>
					<div class="col-md-3"><a href="https://www.youtube.com/channel/UCg9qD8LCbtW5ikQYNneRfUw"><img src='/wp-content/uploads/2018/11/youtube.png' style='width:75px;'></img></a></div>
					<div class="col-md-3"><a href="https://www.instagram.com/yourmatesbrewing"><img src='/wp-content/uploads/2018/11/instagram.png' style='width:75px;'></img></a></div>
				</div>
			</div>
		</div>
	</aside><!-- .widget-area -->

<?php endif; ?>
