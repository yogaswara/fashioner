var dirTema = document.querySelector("meta[name='theme_path']").getAttribute('content');

require.config({
	baseUrl: '/',
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
		"gmap" : {
			deps : ['maps']
		},
		"lettering" : {
			deps : ['jquery']
		},
		"parallax" : {
			deps : ['jquery']
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
		"appear" : {
			deps : ['jquery']
		},
		"owl" : {
			deps : ['jquery']
		},
	},
	"waitSeconds" : 60,
	urlArgs: "v=001",

	paths: {
		// MAIN LIBRARY
		router          : 'js/router',
		jq_ui			: 'js/jquery-ui',
		cart			: 'js/shop_cart',
		noty			: 'js/jquery.noty',

		// Library
		bootstrap		: '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min',
		gmap			: dirTema+'/assets/js/lib/gmap3.min',
		maps			: '//maps.google.com/maps/api/js?sensor=false',
		caroufredsel	: dirTema+'/assets/js/lib/jquery.carouFredSel-6.0.4-packed',
		isotop			: dirTema+'/assets/js/lib/isotop',
		isotope			: dirTema+'/assets/js/lib/isotope.pkgd.min',
		jquery 			: dirTema+'/assets/js/lib/jquery-plugin.min',
		owl				: dirTema+'/assets/js/lib/owl.carousel.min',
		parallax		: dirTema+'/assets/js/lib/parallax',
		lettering		: dirTema+'/assets/js/lib/jquery.lettering',
		nicescroll		: dirTema+'/assets/js/lib/jquery.nicescroll',

		// Custom Form
		jcf				: dirTema+'/assets/js/lib/custom-form/jcf',
		jcf_checkbox	: dirTema+'/assets/js/lib/custom-form/jcf.checkbox',
		jcf_file		: dirTema+'/assets/js/lib/custom-form/jcf.file',
		jcf_radio		: dirTema+'/assets/js/lib/custom-form/jcf.radio',
		jcf_select		: dirTema+'/assets/js/lib/custom-form/jcf.select',
		
		//SHOP CONTROLLER
		home            : dirTema+'/assets/js/controllers/home',
		member          : dirTema+'/assets/js/controllers/member',
		main            : dirTema+'/assets/js/controllers/default',
		produk          : dirTema+'/assets/js/controllers/produk',
		category        : dirTema+'/assets/js/controllers/category',
		search        	: dirTema+'/assets/js/controllers/search',
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
