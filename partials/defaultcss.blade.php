<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
{{ generate_theme_css('fashioner/assets/css/prettyPhoto.css') }} 
{{ generate_theme_css('fashioner/assets/css/jcf.css') }} 
{{ generate_theme_css('fashioner/assets/css/owl.carousel.css') }} 
{{ generate_theme_css('fashioner/assets/css/owl.theme.css') }} 
{{ generate_theme_css('fashioner/assets/css/flaticon.css') }} 
{{ generate_theme_css('fashioner/assets/css/icomoon.css') }} 
{{ generate_theme_css('fashioner/assets/css/transitions.css') }} 
{{ generate_theme_css('fashioner/assets/css/main.css') }} 
{{ generate_theme_css('fashioner/assets/css/responsive.css') }} 
@if($tema->isiCss=='')	
{{ generate_theme_css('fashioner/assets/css/color.css') }} 
@else
{{ generate_theme_css('fashioner/assets/css/editcolor.css') }}
@endif
{{ generate_theme_css('fashioner/assets/css/jquery.fancybox.css') }} 