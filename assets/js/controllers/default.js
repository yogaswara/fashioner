define(['jquery','lettering','gmap','jcf','owl','parallax'], function($,lettering,gmap3,jcf,owlCarousel)
{
	return new function()
	{
		var self = this;
		
		self.run = function()
		{
			$(document).ready(function() {
				// LETTERING JS FOR PAGE TITLE
				$(".banner h1").lettering();
				
				// FAQ ACCORDION
				$('#faq-accordion').on('hidden.bs.collapse', toggleChevron(this));
				$('#faq-accordion').on('shown.bs.collapse', toggleChevron(this));

				// Google Map
				var temp_alamat = document.getElementsByTagName("address")[0].innerHTML;
				var alamat;
				if (temp_alamat === undefined) {
					alamat = 'Alun - Alun Kota Bandung';
				} else {
					alamat = temp_alamat;
				}
				$("#gmap").gmap3({
					marker:{ address: alamat },
					map:{ options: { zoom: 16} }
				});

				// Custom Form
				jcf.replaceAll();

				// Side Testi
				$(".side-testi").owlCarousel({
					autoPlay: true,
					singleItem:true,
					pagination : false,
					navigation : false
				});
			});
		};

		// FAQ ACCORDION
		var toggleChevron = function(e) {
			$(e.target)
			.prev('.accordion-heading')
			.find("i.indicator")
			.toggleClass('fa-caret-down fa-caret-right');
		}

	};
});
