<?php
/**
 * Template Name: Food Menu 
 */
?>
<?php get_header(); ?>
<script>
/*
The MIT License (MIT)

Copyright 2018 takuma miura

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
*/

(function($) {
    $.fn.swichTab = function(options) {
        var elements = this;
        var opts = $.extend({}, $.fn.swichTab.defaults, options);

        elements.each(function() {
            $(this).data('swichTab', new swichTab($(this), opts));
        });

        return this;
    };

    $.fn.swichTab.defaults = {
        cahngePanel: 'toggle',
        swiper: false,
        index: 0,
    };

    function swichTab(elm, opts) {
        var self = this,
            $swichtab = elm,
            $controller = elm.find('[data-swichtab="controller"]'),
            $target = elm.find('[data-swichtab="target"]');

        this.handleEvent = function() {
            // click event
            $controller.on("click", function(e) {
                var i = $(this).index();
                e.preventDefault();
                // cahngePanel
                if (opts.cahngePanel === 'toggle') {
                    $controller.removeClass("is-active");
                    $(this).addClass("is-active");
                    $target.removeClass("is-active").hide().eq(i).addClass("is-active").show();
                } else if (opts.cahngePanel === 'fade') {
                    $controller.removeClass("is-active");
                    $(this).addClass("is-active");
                    $target.removeClass("is-active").hide().eq(i).addClass("is-active").stop().fadeIn();
                }
            });

            // swiper
            if (opts.swiper === true) {
                self.swiper(elm);
            }
        };

        this.swiper = function(elm) {
            var targetLength = $target.length,
                currentIndex = $target.filter('is-active').index(),
                goToIndex = '',
                direction,
                position,
                y1,
                y2;

            function goToPrev() {
                if (currentIndex <= 0) {
                    goToIndex = (targetLength - 1) % targetLength;
                } else {
                    goToIndex = (currentIndex - 1);
                }
                $controller.removeClass('is-active').eq(goToIndex).addClass('is-active');
                $target.removeClass("is-active").hide().eq(goToIndex).addClass("is-active").stop().fadeIn();
                currentIndex = goToIndex;
            }

            function goToNext() {
                goToIndex = (currentIndex + 1) % targetLength;
                $controller.removeClass('is-active').eq(goToIndex).addClass('is-active');
                $target.removeClass("is-active").hide().eq(goToIndex).addClass("is-active").stop().fadeIn();
                currentIndex = goToIndex;
            }

            elm.on('touchstart', onTouchStart);
            elm.on('touchmove', onTouchMove);
            elm.on('touchend', onTouchEnd);

            function onTouchStart(event) {
                y1 = event.originalEvent.touches[0].clientY;
                position = getPositionX(event);
                direction = '';
            }

            function onTouchMove(event) {
                y2 = event.originalEvent.touches[0].clientY;
                if (Math.abs(y1 - y2) < 5) {
                    event.preventDefault();
                }

                if (position - getPositionX(event) > 100) {
                    direction = 'left';
                } else if (position - getPositionX(event) < -100) {
                    direction = 'right';
                }
            }

            function onTouchEnd(event) {
                if (direction == 'right') {
                    goToPrev();
                } else if (direction == 'left') {
                    goToNext();
                }
            }

            function getPositionX(event) {
                return event.originalEvent.touches[0].pageX;
            }
        };

        this.init = function() {
            $controller.eq(opts.index).addClass("is-active").show();
            $target.eq(opts.index).addClass("is-active").show();
            self.handleEvent();
        };

        return self.init();
    }
}(jQuery));
</script>
<script type="text/javascript">
  $('.tabGroup1').swichTab();
</script>
<div class="wrap">
	<div id="primary" class="content-area">
<div class="tabGroup tabGroup1">
  <ul class="swichtab-controller">
    <li data-swichtab="controller"><a href="#Beers">Beers</a></li>
    <li data-swichtab="controller"><a href="#Food">Food</a></li>
    <li data-swichtab="controller"><a href="#Takeaways">Takeaways</a></li>
  </ul>
  <div class="swichtab-contents">
    <div id="Beers" class="swichtab-panel" data-swichtab="target">
		<h3>Beers</h3>	
		Beer Menu goes here
    </div>
 
    <div id="Food" class="swichtab-panel" data-swichtab="target">
		<h1>Food</h1>

		<div class="row">
		<div class="col-md-6">
			<h3>Kids</h3>
			<ul>
				<li>Grilled or battered fish w/ fries or salad</li>
				<li>Crumbed chicken w/ fries or salad</li>
				<li>Vege or Meat Sausage and Mash</li>
			</ul>
			*All options $10
			<h3>Burgers</h3>
			<ul>
					<li>Your Mates Burger - $18.50</li>
					<li>ButterMilk Fried Chicken Burger - $18.00</li>
					<li>Mooloolaba Tuna Burger - $18.00</li>
					<li>Your Vege Burger $17 (v)</li>
			</ul>
			<h2>BURGER ADD ONS</h2>
			<ul>
				<li>Burger pattie $5 Cheese $2 Bacon $3</li>
				<li>Make it Saucy!! $2</li>
			</ul>
		</div>
		<div class="col-md-6">
		<h3>Small Plates</h3>
		<ul>
			<li>Charred Corn with Chilli, Lime and Cheese$8(gf,v)</li>
			<li>Citrus Cured Kingfish,Rice Paper Crisps$ (gf)</li>
			<li>Buffalo Wings with Blue Cheese Sauce$14</li>
			<li>Basket of Prawns with Cocktail Sauce$ (gf,df)</li>
			<li>Sticky Pork Ribs$14 (gf option)</li>
			<li>Cauliflower Bites $9 (gf,df,v)</li>
			<li>Seasoned Vegetables $9 (v)</li>
		</ul>
		</div>
		</div>

		<h3>Large Plates</h3>
		<ul>
		<li>Our Mates Parmy $26</li>
		<li>Herb Crumb/Cheese/Smoked Ham/Tomato/Fries/Slaw</li>
		<li>Larry’s Braised Beef Cheek $28 (gf)</li>
		<li>Mash/Seasoned Greens/Beer Gravy</li>
		<li>Beer Battered Fish $24 (df)</li>
		<li>Thick Cut Chips/Crushed Peas/Tartar Sauce</li>
		Fish of the Day $ MP (gf,df)
		Beer Onions/Cloudy Bay Clams/Kale Leaves

		Classic Sausage and Mash $24
		Mash/Gravy/Onion Rings
		Veg Option Available
		</ul>
		<h3>To Share</h3>
		<p>Charcuterie Board For 2 $27 - Meat/Cheese/Pickles/Bread/Crackers</p>
		<p>Your Mates Share Plate<br>
		Sticky Pork Ribs, Charred Corn, Buffalo Wings, Sausage, Slaw, fries, pickles</p>
		</div>
</div>
    </div>
 
    <div id="Takeaways" class="swichtab-panel" data-swichtab="target">
      <p>piyopiyo</p>
    </div>
  </div>
  <!-- /.swichtab-contents -->
</div>
<!-- /.swichtab -->
<?php get_footer();
