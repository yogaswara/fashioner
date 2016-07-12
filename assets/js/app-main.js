var dirTema = document.querySelector("meta[name='theme_path']").getAttribute('content');

require.config({
	baseUrl: '/',
	urlArgs: "v=001",
	waitSeconds : 60,
	shim: {
		"bootstrap"	: {
			deps: ['jquery']
		},
		"jq_ui" : {
			deps : ['jquery']
		},
		"noty" : {
			deps : ['jquery']
		},
		"appear" : {
			deps : ['jquery']
		},
		"bridget" : {
			deps : ['jquery']
		},
		"gmap3" : {
			deps : ['gmapApi']
		},
		"jcf" : {
			deps : ['jquery']
		},
		"jcf_checkbox" : {
			deps : ['jquery']
		},
		"jcf_file" : {
			deps : ['jquery']
		},
		"jcf_radio" : {
			deps : ['jquery']
		},
		"jcf_select" : {
			deps : ['jquery']
		},
		"lettering" : {
			deps : ['jquery']
		},
		"owl" : {
			deps : ['jquery']
		},
		"parallax" : {
			deps : ['jquery']
		},
		"fancybox" : {
			deps : ['jquery']
		},
		"prettyphoto" : {
			deps : ['jquery']
		},
	},
	
	paths: {
		// MAIN LIBRARY
		router			: 'js/router',
		jq_ui			: 'js/jquery-ui',
		cart			: 'js/shop_cart',
		noty			: 'js/jquery.noty',

		// Library
		appear			: dirTema+'/assets/js/lib/appear',
		bootstrap		: '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min',
		bridget			: dirTema+'/assets/js/lib/jquery-bridget',
		caroufredsel	: dirTema+'/assets/js/lib/jquery.carouFredSel-6.0.4-packed',
		fancybox		: dirTema+'/assets/js/lib/jquery.fancybox.pack',
		gmap3			: dirTema+'/assets/js/lib/gmap3.min',
		gmapApi			: '//maps.google.com/maps/api/js?sensor=false',
		isotop			: dirTema+'/assets/js/lib/isotop',
		isotope			: dirTema+'/assets/js/lib/isotope.pkgd.min',
		jquery 			: dirTema+'/assets/js/lib/jquery-plugin.min',
		lettering		: dirTema+'/assets/js/lib/jquery.lettering',
		nicescroll		: dirTema+'/assets/js/lib/jquery.nicescroll',
		owl				: dirTema+'/assets/js/lib/owl.carousel.min',
		parallax		: dirTema+'/assets/js/lib/parallax',
		prettyphoto		: dirTema+'/assets/js/lib/jquery.prettyPhoto',

		// Custom Form
		jcf				: dirTema+'/assets/js/lib/custom-form/jcf',
		jcf_checkbox	: dirTema+'/assets/js/lib/custom-form/jcf.checkbox',
		jcf_file		: dirTema+'/assets/js/lib/custom-form/jcf.file',
		jcf_radio		: dirTema+'/assets/js/lib/custom-form/jcf.radio',
		jcf_select		: dirTema+'/assets/js/lib/custom-form/jcf.select',
		
		//SHOP CONTROLLER
		home 			: dirTema+'/assets/js/controllers/home',
		member 			: dirTema+'/assets/js/controllers/member',
		main 			: dirTema+'/assets/js/controllers/default',
		produk 			: dirTema+'/assets/js/controllers/produk',
		category 		: dirTema+'/assets/js/controllers/category',
		search 			: dirTema+'/assets/js/controllers/search',
	}
});
require([
	'router',
	'main',
	'cart',
	'bootstrap',
], function(router,main,cart,b){
	main.run();
	cart.run();
	
	// HOME
	router.define('/','home@run');
	router.define('home', 'home@run');

	// MEMBER
	router.define('member/*', 'member@run');

	// PRODUK
	router.define('produk/*', 'produk@run');

	// CATEGORY
	router.define('category/*', 'category@run');

	// KOLEKSI
	router.define('koleksi/*', 'category@run');

	// SEARCH
	router.define('search/*', 'search@run');


	router.run();
});