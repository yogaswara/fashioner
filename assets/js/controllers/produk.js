define(['jquery','nicescroll','jcf_select','jcf_checkbox','jcf_radio','caroufredsel','fancybox'], function()
{
	return new function()
	{
		var self = this;
		
		self.run = function()
		{
			$(document).ready(function() {
				// PRODUCT INCREASE
				$('em.minus').on('click', function () {
					var currentVal = parseInt($('#quantity1').val());
					// If it isn't undefined or its greater than 0
					if (!isNaN(currentVal) && currentVal > 0) {
						// Decrement one
						$('#quantity1').val(currentVal - 1);
					} else {
						// Otherwise put a 0 there
						$('#quantity1').val(0);
					}
				});
				$('em.plus').on('click', function () {
					$('#quantity1').val(parseInt($('#quantity1').val()) + 1, 10);
				});

				// NICE SCROLLING
				$(".theme-tab-content .tab-pane, .scroll").niceScroll({
					cursorcolor:"#313131",
					cursorwidth: "3px",
					cursorborderradius: "0",
					background: "#d8d8d8",
					cursorborder: "0",
					autohidemode: false
				});

				// RECENTLY VIEWED SLIDER
				$("#view-product-slider").owlCarousel({
					autoPlay: false,
					items : 4,
					itemsDesktop : [1199,4],
					itemsDesktopSmall : [979,3],
					paginationSpeed : 400,
					pagination : true,
					navigation : false,
					navigationText: [
						"<i class='fa fa-angle-left'></i>",
						"<i class='fa fa-angle-right'></i>"
					]
				});

				// View List & Grid
				$("#grid-btn").click(function() {
					$(".list-type").hide();
					$(".grid-type").show('fast');
					$(this).parent().addClass('active');
					$('#list-btn').parent().removeClass('active');
				});
				$("#list-btn").click(function() {
					$(".grid-type").hide();
					$(".list-type").show('fast');
					$(this).parent().addClass('active');
					$('#grid-btn').parent().removeClass('active');
				});

				// Image zoom
				$('.fancybox').fancybox({
                    padding: 10,
                    openEffect : 'elastic',
                    openSpeed  : 150,
                    closeEffect : 'elastic',
                    closeSpeed  : 150
                });
			});
		};

	};
});
