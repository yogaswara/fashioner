define(['jquery','isotope','prettyphoto'], function($,Isotope)
{
	return new function()
	{
		var self = this;
		self.run = function()
		{
			$(document).ready(function() {
				// HOME SLIDER
				$("#home-slider").owlCarousel({
					autoPlay : true,
					slideSpeed : 500,
					paginationSpeed : 500,
					pagination : false,
					singleItem : true,
					navigation : true,
					navigationText: [
						"<i class='fa fa-angle-left'></i>",
						"<i class='fa fa-angle-right'></i>"
					]
				});

				// Recent Article
				var blogs = $("#recent-blog");
				blogs.owlCarousel({
					items 					: 2,
					itemsDesktop 			: [1199,2],
					itemsDesktopSmall 		: [979,2],
					itemsTablet 			: [768,2],
					itemsTabletSmall 		: [640,2],
					itemsMobile 			: [479,1],
					pagination 				: false,
					responsiveRefreshRate 	: 100,
					navigation 				: true,
					navigationText: [
						"<i class='fa fa-angle-left'></i>",
						"<i class='fa fa-angle-right'></i>"
					],
				});

				// Testimonial
				$("#event-slider").owlCarousel({
					autoPlay: true,
					singleItem:true,
					pagination : false,
					navigation : true,
					navigationText: [
						"<i class='fa fa-angle-left'></i>",
						"<i class='fa fa-angle-right'></i>"
					]
				});

				// Our Product Gallery
				var isotopeTimer = window.setTimeout(function () {
					window.clearTimeout(isotopeTimer);
					doIsotopeFilter();
				}, 1000);
				var selected = $('#gallery-cats > li > a');
				var $this = $(this);
				selected.on('click', function () {
					if (selected.hasClass('selected')) {
						$(this).parent().addClass('select').siblings().removeClass('select');
					}
				});

				// Pretty Photo Gallery
				$("a[data-rel]").each(function () {
					$(this).attr("rel", $(this).data("rel"));
				});
				$("a[data-rel^='prettyPhoto']").prettyPhoto({
					animation_speed:'normal',
					theme:'dark_square',
					slideshow:3000,
					autoplay_slideshow: true,
					social_tools: false
				});
			});
		};

		var doIsotopeFilter = function() {
			// set selected menu items
			var container = $('.portfolio-content');
			var optionSets = $('.option-set');
			var optionLinks = optionSets.find('a');

			require( [ 'bridget' ],function( jQueryBridget ) {
				jQueryBridget( 'isotope', Isotope, $ );
				if ($().isotope) {
					var isotopeFilter = '';
					optionLinks.each(function () {
						var selector = $(this).attr('data-filter');
						var link = window.location.href;
						var firstIndex = link.indexOf('filter=');
						if (firstIndex > 0) {
							var id = link.substring(firstIndex + 7, link.length);
							if ('.' + id == selector) {
								isotopeFilter = '.' + id;
							}
						}
					});
					if (isotopeFilter.length > 0) {
						container.isotope({
							itemSelector: '.gallery-product',
							filter: isotopeFilter
						});
						optionLinks.each(function () {
							var $this = $(this);
							var selector = $this.attr('data-filter');
							if (selector == isotopeFilter) {
								if (!$this.hasClass('selected')) {
									var optionSet = $this.parents('.option-set');
									optionSet.find('.selected').removeClass('selected');
									$this.addClass('selected');
								}
							}
						});
					}
					optionLinks.on('click', function () {
						var $this = $(this);
						var selector = $this.attr('data-filter');
						container.isotope({itemSelector: '.gallery-product', filter: selector});
						if (!$this.hasClass('selected')) {
							var optionSet = $this.parents('.option-set');
							optionSet.find('.selected').removeClass('selected');
							$this.addClass('selected');
						}
						return false;
					});
				}
			});
		}
	};
});
