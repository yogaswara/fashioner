<!DOCTYPE html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->
<html>
	<head>
		{{ Theme::partial('seostuff') }}    
		{{ Theme::partial('defaultcss') }}
		{{ Theme::asset()->styles() }}  
	</head>
	<body class="home">
		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		<!--************************************
				Wrapper Start
		*************************************-->
		<div id="wrapper">
			{{ Theme::partial('header') }}
			{{ Theme::partial('slider') }} 
			
			<main id="main" class="haslayout">
				{{ Theme::place('content') }}
			</main>
			
			{{-- Theme::partial('subscribe') --}}
			{{ Theme::partial('footer') }}
			{{ Theme::partial('defaultjs') }}
			{{ Theme::partial('analytic') }}
		</div>
		<!--************************************
				Wrapper End
		*************************************-->
	</body>
</html>
