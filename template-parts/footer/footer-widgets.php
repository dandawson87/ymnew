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
		<div class="row" style="font-family: 'Roboto Condensed'">
			<div class="col-md-4">
				<h3 class='footerunderline'> MENU </h3>
				<div class="menufooterlinks">
					<a class='footermenulink' href='/' style="font-family: 'Roboto Condensed', monospace;">Home</a><br>
					<a class='footermenulink' href='/shop' style="font-family: 'Roboto Condensed', monospace;">Shop</a><br>
					<a class='footermenulink' href='/your-mates-finder' style="font-family: 'Roboto Condensed', monospace;">Watering Holes</a><br>
					<a class='footermenulink' href='/' style="font-family: 'Roboto Condensed', monospace;">The Brew House</a><br>
					<a class='footermenulink' href='/news' style="font-family: 'Roboto Condensed', monospace;">News</a><br>
					<a class='footermenulink' href='/our-story' style="font-family: 'Roboto Condensed', monospace;">Our Yarn</a><br>
					<a class='footermenulink' href='/our-mates' style="font-family: 'Roboto Condensed', monospace;">Our Mates</a><br>
					<a class='footermenulink' href='/contact/' style="font-family: 'Roboto Condensed', monospace;">Say G'Day</a><br>
				</div>	
			</div>
			<div class="col-md-4" style='color:black !important;'>
				<h3 class='footerunderline'> FIND US </h3>
				<div class"menufooterlinks">
					<h5 style="color:black; font-family: 'Arial', monospace; font-weight:bolder;">ADDRESS</h5>
					<p><a href='https://goo.gl/maps/KnZfVfNerHk' target='_blank' style="color:black ;font-family: 'Roboto Condensed', monospace; box-shadow:none !important;">41 Technology Drive, Warana</a></p>
				
					<h5 style="color:black; font-family: 'Arial', monospace; box-shadow:none !important; font-weight:bolder;">PHONE</h5>
					<p style="color:black; font-family: 'Roboto Condensed', monospace; box-shadow:none !important;">
						<a style='color:black !important; box-shadow:none !important;' href='tel:0753294733'>07 5329 4733</a>
					</p>
					<h5 style="color:black; font-family: 'Arial', monospace; font-weight:800; font-weight:bolder;"><b>FIND OUR BEER</b></h5>
					<p><a style="color:black; font-family: 'Roboto Condensed', monospace; box-shadow:none !important;" href='/larry-locator/'>Beer Locator</a></p>
		
				</div>
			</div>
		
			<div class="col-md-4">
				<div class="row">
					<a style="box-shadow:none;" href="/"><img src='/wp-content/uploads/2018/10/cropped-Your-Mates-Brewing-Company.png' style='width:150px;'></img></a></div>
					<h5 style="color:black; font-family: 'Arial', monospace; font-weight:bolder;">HOURS</h5>
					<p style="color:black; font-family: 'Roboto Condensed', monospace;">
						<ul style="color:black;">
								<li>Wednesday: 11am - 9pm</li>
								<li>Thursday: 11am - 9pm</li>
								<li>Friday: 11am - 11pm</li>
								<li>Saturday: 11am - 11pm</li>
								<li>Sunday: 11am - 9pm</li>
						</ul>
					</p>
				</div>
			</div>
		</div>
	</aside><!-- .widget-area -->

<?php endif; ?>
