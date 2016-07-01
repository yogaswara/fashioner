var dirTema = document.getElementsByTagName('link')[1].getAttribute('href');

require.config({
	baseUrl: '/',
	shim: {
		
	},
    "waitSeconds" : 60,
    urlArgs: "v=002",

	paths: {
		// MAIN LIBRARY
		cart			: 'js/shop_cart',
		jq_ui			: 'js/jquery-ui',
		noty			: 'js/jquery.noty',
		noty_util		: 'js/utils/noty',
		router          : 'js/router',
		

		//SHOP CONTROLLER
		home            : dirTema+'assets/js/pages/home',
		member          : dirTema+'assets/js/pages/member',
		main            : dirTema+'assets/js/pages/default',
		produk          : dirTema+'assets/js/pages/produk',
		category        : dirTema+'assets/js/pages/category',
		search        	: dirTema+'assets/js/pages/search',
	}
});
require([
	'router',
	'noty_util'
], function(router,b,main,noty)
{
	main.run();
	noty.run();
	
	// HOME
	router.define('/','home@run');
	router.define('home', 'home@run');

	// MEMBER
	router.define('member/*', 'member@run');

	// PRODUK
	// router.define('produk', 'cart@run');
	router.define('produk/*', 'produk@run');

	// CATEGORY
	router.define('category/*', 'category@run');

	// KOLEKSI
	router.define('koleksi/*', 'category@run');

	// SEARCH
	router.define('search/*', 'search@run');


	router.run();
});
