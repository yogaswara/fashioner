<!--************************************
		Header Start
*************************************-->
<header id="header" class="haslayout">
	<div class="top-bar haslayout">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12 pull-left text-align">
					<span class="phone">
						<i class="glyphicon glyphicon-phone"></i>
						<em>{{ @$kontak->hp }}</em>
					</span>
					<span class="email">
						<i class="glyphicon glyphicon-send"></i>
						<em><a href="{{ @$kontak->email != '' ? 'mailto:'.$kontak->email : '#' }}">{{ @$kontak->email }}</a></em>
					</span>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 pull-right text-right">
					<div class="dropdown languages">
						<button aria-expanded="true" aria-haspopup="true" data-toggle="dropdown" id="languages" type="button" class="btn-dropdown btn-languages">
							<em class="fa fa-globe"></em>
							<span>English</span>
							<em class="fa fa-caret-down"></em>
						</button>
						<div aria-labelledby="languages" class="dropdown-menu languages">
							<ul class="top-arrow">
								<li><a href="#">German</a></li>
								<li><a href="#">Russian</a></li>
								<li><a href="#">French</a></li>
								<li><a href="#">Arabic</a></li>
							</ul>
						</div>
					</div>
					<div class="dropdown cart" id="shoppingcartplace">
						{{ shopping_cart() }} 
					</div>
					<ul class="social-icon">
					    @if(!empty($kontak->fb))
						<li><a href="{{ url($kontak->fb) }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
						@endif
						@if(!empty($kontak->tw))
						<li><a href="{{ url($kontak->tw) }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
						@endif
						@if(!empty($kontak->gp))
						<li><a href="{{ url($kontak->gp) }}" target="_blank"><i class="fa fa-google-plus"></i></a></li>
						@endif
						@if(!empty($kontak->pt))
						<li><a href="{{ url($kontak->pt) }}" target="_blank"><i class="fa fa-pinterest"></i></a></li>
						@endif
						@if(!empty($kontak->ig))
						<li><a href="{{ url($kontak->ig) }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
						@endif
						@if(!empty($kontak->tl))
						<li><a href="{{url($kontak->tl)}}" target="_blank"><i class="fa fa-tumblr icn"></i></a></li>
						@endif
						@if(!empty($kontak->picmix))
						<li><a href="{{url($kontak->picmix)}}" target="_blank"><img class="picmix-top" src="https://s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/blogs/event/icon-picmix.png"></a></li>
						@endif
					</ul>
				</div>
			</div>
		</div>
	</div>
	<nav id="nav" class="haslayout navbar">
		<div class="container">
			<div class="navbar-header">
				<button aria-expanded="false" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<strong class="logo">
					<a href="{{ url("/") }}">
						<img src="{{ logo_image_url() }}" alt="Logo {{ Theme::place('title') }}">
					</a>
				</strong>
			</div>
			<div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse pull-right">
				<div class="row">
					<ul>
						<li class="dropdown active">
							<a href="{{ url('/') }}">Home</a>
						</li>
						<li><a href="about-us.html">About</a></li>
						<li class="dropdown">
							<a href="product-grid.html">shop</a>
							<ul class="dropdown-menu">
								<li><a href="product-grid.html">product grid</a></li>
								<li><a href="product-list.html">product list</a></li>
								<li><a href="product-single.html">product single</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="gallery-filterable.html">gallery</a>
							<ul class="dropdown-menu">
								<li><a href="gallery-filterable.html">gallery filterable</a></li>
								<li><a href="gallery-masonry.html">gallery masonry</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="blog.html">Blog</a>
							<ul class="dropdown-menu">
								<li><a href="blog.html">blog</a></li>
								<li><a href="blog-list.html">blog list</a></li>
								<li><a href="blog-grid.html">blog grid</a></li>
								<li><a href="blog-detail.html">blog detail</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#">Pages</a>
							<ul class="dropdown-menu">
								<li><a href="404.html">404</a></li>
								<li><a href="coming-soon.html">Coming soon</a></li>
							</ul>
						</li>
						<li><a href="contactus.html">Contacts</a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
</header>
<!--************************************
		Header End
*************************************-->