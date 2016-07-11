<!--************************************
		Banner Start
*************************************-->
<section class="banner haslayout parallax-window" data-position="center 0" data-parallax="scroll" data-bleed="100" data-speed="0.2" data-image-src="{{ url(dirTemaToko().'fashioner/assets/images/bg-footer.png') }}">
	<div class="container">
		<h1>Login</h1>
	</div>
</section>
<!--************************************
		Banner End
*************************************-->
<!--************************************
		BreadCrumbs Start
*************************************-->
<div class="breadcrumbs haslayout">
	<div class="container">
		<span class="page-title">Login</span>
		<ol class="breadcrumb">
			<li><a href="{{ url('home') }}">Home</a></li>
			<li class="active">Login</li>
		</ol>
	</div>
</div>
<!--************************************
		BreadCrumbs End
*************************************-->
<!--************************************
		Main Start
*************************************-->
<main id="main" class="haslayout">
	<!--************************************
			Login Start
	*************************************-->
	<div class="sorry haslayout bg-grey">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="leftbox">
						<div class="border-center">
							<div class="description">
								<h4 class="form-title">Please login if you are already registered and have an account.</h4>
								<form class="contact-form" action="{{url('member/login')}}" method="post">
									<fieldset>
										<div class="form-group">
											<input type="email" name="email" placeholder="Email Address" class="form-control theme-style" value="{{Input::old('email')}}" required autofocus>
										</div>
										<div class="form-group">
											<input type="password" name="password" placeholder="Password" class="form-control theme-style" required>
										</div>
										<div class="form-group">
											<div class="col-lg-6 col-xs-12">
												<button type="submit" class="theme-btn" id="login">Login</button>
											</div>
											<div class="col-lg-6 col-xs-12">
												<small>
													<a href="{{ url('member/forget-password') }}" class="link-btn">Forgot your password?</a>
												</small>
											</div>
										</div>
									</fieldset>
								</form>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="row">
								<h4>Don't Have An Account?</h4>
								<p>It's quick and easy to setup an account.</p>
								<a class="register-btn" href="{{ url('member/create') }}">Create Account</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--************************************
			Login End
	*************************************-->
	<!--************************************
			Banner Start
	*************************************-->
	<section class="blog haslayout">
		<div class="container">
			<div class="row">
				@foreach(horizontal_banner() as $banners)
				<div class="col-xs-12 banners">
					<a href="{{ URL::to($banners->url) }}">
						{{ HTML::image(banner_image_url($banners->gambar),'Info Promo',array('class'=>'img-responsive')) }}
					</a>
				</div>
				@endforeach
			</div>
		</div>
	</section>
	<!--************************************
			Banner End
	*************************************-->
</main>
<!--************************************
		Main End
*************************************-->