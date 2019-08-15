<?php
/**
 * Template Name: Drinks Menu 
 */
define('WP_DEBUG',true);
?>
<head>
  <title>Your Mates Brew House - Drinks Menu</title>
    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
  <meta property="og:url"           content="https://yourmatesbrewing.com/drink-menu" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Your Mates Brew House - Drink Menu" />
  <meta property="og:description"   content="Check out the drink menu at Your Mates Brew House" />
  <meta property="og:image"         content="/wp-content/uploads/2018/12/16906335_555785184607796_161929179116339200_n.jpg" />
</head>
<?php get_header(); ?>
<style>
.site-content {
	padding-top:0px !important;
}
</style>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3&appId=540998179762123&autoLogAppEvents=1"></script>
<script>
$( document ).ready(function() {
		document.getElementById('share-facebook-btn').onclick = function() {
			FB.ui({
				method: 'share',
				app_id: '540998179762123',
				quote: 'Check out the Drinks at Your Mates Brew House',	
				hashtag: '#yourmates',
				href: 'https://yourmatesbrewing.com/food-menu',
			}, function(response){});
		}
});
</script>
<div class="row" style="width:100%; margin-left:0px; margin-right:0px;">
	<div class="col-md-5 col-sm-12 leftcol mobfull">
			<div class="foodmenutitle">
				<h1>Drinks Menu</h1>
			</div>
	</div>
	<div class="col-md-7 col-sm-12 foodmenuright">
		<p>Our beers are brewed right here in the brew house, you can even watch our brewers hard at work while you sip on your favourite beer or wine</p>
		<a href='/food-menu'>
			<button class="drinkmenubutton">Check out our food menu &nbsp; <i class="fa fa-beer" aria-hidden="true"></i> </button>
		</a>
			<button id='share-facebook-btn' class="sharebutton">
				Share &nbsp; <i class="fa fa-share" aria-hidden="true"></i>
			</button>
		<button class="printbutton" onclick="window.print();">Print &nbsp; <i class="fa fa-print" aria-hidden="true"></i></button>
	</div>
</div>
<div class="row" style="width:80%; margin-left:auto; margin-right:auto;">
	<div class="col-md-3 col-sm-12">
		<div class="logotextcontainer">
				<img class="logotext" src='/wp-content/uploads/2019/07/larry-text.png' style='width:80%;'>
		</div>
		<h5>Larry - Pale Ale</h5>
		<p class="descriptiontext">Everyone knows a Larry. Larry is that mate who instantly makes you
			smile. He's a summer-lovin', party-shirt wearin’ kinda fella who gets
			along with everyone. Larry is your #larrycan mate.</p>
			<ul class="descriptionlist">
				<li><b>Flavours:</b> Tropical Fruit</li>
				<li><b>Body:</b> Light, easy drinking and super seasonable!</li>
				<li><b>IBU:</b> 16 </li>
				<li><b>ABV:</b> 4.5% </li>
			</ul>

	</div>	
	<div class="col-md-3 col-sm-12">
		<div class="logotextcontainer">
				<img class="logotext" src='/wp-content/uploads/2019/07/Macca-Text.png' style='width:80%; margin-top:20px;'>
		</div>
		<h5>Macca - Lager </h5>
		<p class="descriptiontext">Macca is your adventuraholic mate. There’s no secret to his happiness besides 
		a hot summer’s day and a couple of cold beers. He's a tru-blu bloke who won’t #crackamacca until he’s got a 
		fish in the boat. Life is never boring with your mate Macca.
		</p>
			<ul class="descriptionlist">
				<li><b>Flavours:</b> Malt</li>
				<li><b>Body:</b> Light</li>
				<li><b>IBU:</b> 18</li>
				<li><b>ABV:</b> 3.5% </li>
			</ul>
	</div>	
	<div class="col-md-3 col-sm-12">
		<div class="logotextcontainer">
				<img class="logotext" src='/wp-content/uploads/2019/07/sally-text.png' style='width:85%; margin-top:15px;'>
		</div>
		<h5>Sally - IPA</h5>
		<p class="descriptiontext">
			Sally’s passion for Australia’s backyard is no secret. A bold explorer of nature, 
			she is always pushing the horizon for botanical beauties. Rain or Shine, it’s always a good time with your 
			mate #SunshineSally.		
		</p>
			<ul class="descriptionlist">
				<li><b>Flavours:</b> Indian Pale Ale, Hoppy</li>
				<li><b>Body:</b> Medium Bodied</li>
				<li><b>IBU:</b> 4</li>
				<li><b>ABV:</b> 6.0% </li>
			</ul>
	</div>	
	<div class="col-md-3 col-sm-12">
		<div class="logotextcontainer">
				<img class="logotext" src='/wp-content/uploads/2019/07/donnie-text.png' style='width:80%;'>
		</div>
		<h5>Donnie - Dark Ale</h5>
		<p class="descriptiontext">
			Donnie is the dark horse, the strong and silent type. He might seem a bit intimidating at first, but after a 
			good chinwag you’ll find that he’s a smooth operator with a heart of gold.  If you’ve got a mate like #DonnieDarkale, 
			you’ve found a mate for life. 
		</p>
			<ul class="descriptionlist">
				<li><b>Flavours:</b> Smokey, Espresso Coffee, Chocolate</li>
				<li><b>Body:</b> Full Bodied</li>
				<li><b>IBU:</b> 24</li>
				<li><b>ABV:</b> 5.0% </li>
			</ul>
	</div>	
</div>
<div class="row seasonalbeers">
	<div class="col-md-6 col-sm-12">
	<h1 class="menusubhead" style="background-color:#f07722; color:white !important; padding-left:10px; padding-top:2px !important;">Seasonable Beers</h1>
		<h3>Cider</h3>
		<p><b>ABV:</b> 5%</p>
		<p>Don't like beer? Our cloudy apple cider is a delicious alternative. Made with all natural fermented apples from Sutton's Orchad in Stanthorpe.
			Sweet as it hits your lips with a tart finish that keeps you feeling refreshed and wanting more.
		</p>
		<h3>Ginger Beer</h3>
		<p><b>ABV:</b> 4%</p>
		<p>Made with fresh local ginger, which is added to the boil and topped with Fiji ginger juice during fermentation. This creates a nice zingy bang with every sip,
			best served with ice and a slice of lime</p>
		<h3>Shmiddy</h3>
		<p><b>ABV:</b> 3.7%</p>
		<p>Shmiddy is a hoppy alternative to our Macca larger. When we say "Single Hop", it means only one type of hop has been used in the beer. We will be using a 
			different hop with each batch, ask our staff which hop we have used in this one!</p>
	</div>
	<div class="col-md-6 col-sm-12">
		<h1 class="menusubhead" style="background-color:#f07722; color:white !important; padding-left:10px; padding-top:2px !important;">Wines</h1>
		<div class="row" style='border-bottom:2px dotted #f15d22; margin-bottom:5px;'>
			<div  class="col-md-6"><b>SPARKLING</b></div>
			<div  class="col-md-3">Glass</div>
			<div  class="col-md-3">Bottle</div>
		</div>
		<div class="row">
			<div  class="col-md-6">Clovely Estate Sparkling NV Brut, QLD</div>
			<div  class="col-md-3">8</div>
			<div  class="col-md-3">36</div>
		</div>
		<div class="row">
			<div  class="col-md-6">Zonte’s Footsteps Proseco SA</div>
			<div  class="col-md-3">8</div>
			<div  class="col-md-3">45</div>
		</div>
		<div class="row">
			<div  class="col-md-6">Champagne Bernard Remy, FRANCE</div>
			<div  class="col-md-3">8</div>
			<div  class="col-md-3">99</div>
		</div>
		<div class="row">
			<div  class="col-md-6">Clovely Estate Sparkling NV Brut, QLD</div>
			<div  class="col-md-3">8</div>
			<div  class="col-md-3">36</div>
		</div>
		<div class="row" style='border-bottom:2px dotted #f15d22; margin-top:20px; margin-bottom:5px;'>
			<div  class="col-md-6"><b>WHITE</b></div>
			<div  class="col-md-3">Glass</div>
			<div  class="col-md-3">Bottle</div>
		</div>
		<div class="row">
			<div  class="col-md-6">Mackenzie William Riesling, SA</div>
			<div  class="col-md-3">8</div>
			<div  class="col-md-3">50</div>
		</div>
		<div class="row">
			<div  class="col-md-6">Yarran Pinot Grigio, NSW</div>
			<div  class="col-md-3">8</div>
			<div  class="col-md-3">36</div>
		</div>
		<div class="row">
			<div  class="col-md-6">Clovely Estate SSB, QLD</div>
			<div  class="col-md-3">8</div>
			<div  class="col-md-3">36</div>
		</div>
		<div class="row">
			<div  class="col-md-6">Mistaken Identity Sauvignon Blanc, NZ</div>
			<div  class="col-md-3">-</div>
			<div  class="col-md-3">38</div>
		</div>
		<div class="row">
			<div  class="col-md-6">Yarran Chardonnay, NSW</div>
			<div  class="col-md-3">8</div>
			<div  class="col-md-3">36</div>
		</div>
		<div class="row">
			<div  class="col-md-6">Little Gem Chardonnay, NSW</div>
			<div  class="col-md-3">-</div>
			<div  class="col-md-3">60</div>
		</div>
		<div class="row">
			<div  class="col-md-6">Tru Su Rose, SA</div>
			<div  class="col-md-3">10</div>
			<div  class="col-md-3">43</div>
		</div>
		<div class="row" style='border-bottom:2px dotted #f15d22; margin-top:20px; margin-bottom:5px;'>
			<div  class="col-md-6"><b>RED</b></div>
			<div  class="col-md-3">Glass</div>
			<div  class="col-md-3">Bottle</div>
		</div>
		<div class="row">
			<div  class="col-md-6">Singers Lane Pinot Noir, VIC</div>
			<div  class="col-md-3">11</div>
			<div  class="col-md-3">54</div>
		</div>
		<div class="row">
			<div  class="col-md-6">Clovely Estate Cabernet Merlot, QLD</div>
			<div  class="col-md-3">8</div>
			<div  class="col-md-3">36</div>
		</div>
		<div class="row">
			<div  class="col-md-6">Zipline Shiraz, SA</div>
			<div  class="col-md-3">-</div>
			<div  class="col-md-3">52</div>
		</div>
		<div class="row">
			<div  class="col-md-6">Sfera Cabernet Sauvignon, SA</div>
			<div  class="col-md-3">-</div>
			<div  class="col-md-3">44</div>
		</div>
	</div>
	<div class="col-md-6 col-sm-12">
		<h1 class="menusubhead" style="background-color:#f07722; color:white !important; padding-left:10px; padding-top:2px !important;">Non-Alcoholic</h1>
		<div class="row" style='margin-bottom:5px;'>
			<div  class="col-md-9"><b>BUNDABERG</b></div>
			<div  class="col-md-3">4.5</div>
			<div  class="col-md-12">Ginger Beer, Passionfruit, Blood Orange, Lemon Lime &amp; Bitters, Lemonade</div>
		</div>
		<div class="row" style='margin-bottom:5px;'>
			<div  class="col-md-9"><b>SODA WATER</b></div>
			<div  class="col-md-3">3.5</div>
		</div>
		<div class="row" style='margin-bottom:5px;'>
			<div  class="col-md-9"><b>KOMBUCHA</b></div>
			<div  class="col-md-3">4.5</div>
			<div  class="col-md-12">Strawberry, Ginger, Passionfruit</div>
		</div>
		<div class="row" style='margin-bottom:5px;'>
			<div  class="col-md-9"><b>KOMBUCHA</b></div>
			<div  class="col-md-3">4.5</div>
			<div  class="col-md-12">Strawberry, Ginger, Passionfruit</div>
		</div>
		<div class="row" style='margin-bottom:5px;'>
			<div  class="col-md-9"><b>SOFT DRINK</b></div>
			<div  class="col-md-3">3.5</div>
			<div  class="col-md-12">Coke, Diet Coke, Lemonade, Fanta </div>
		</div>
		<div class="row" style='margin-bottom:5px;'>
			<div  class="col-md-9"><b>Juice</b></div>
			<div  class="col-md-3">4.5</div>
			<div  class="col-md-12">Apple, Orange</div>
		</div>
	</div>
</div>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
