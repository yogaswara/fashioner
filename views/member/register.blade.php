<!--************************************
		Banner Start
*************************************-->
<section class="banner haslayout parallax-window" data-position="center 0" data-parallax="scroll" data-bleed="100" data-speed="0.2" data-image-src="{{ url(dirTemaToko().'fashioner/assets/images/bg-footer.png') }}">
	<div class="container">
		<h1>Register</h1>
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
		<span class="page-title">Register</span>
		<ol class="breadcrumb">
			<li><a href="{{ url('home') }}">Home</a></li>
			<li class="active">Register</li>
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
						<div class="description">
							<h4>Create an Account</h4>
							<p>It's quick and easy to setup an account.</p>
							<form class="contact-form" id="forget" action="{{url('member')}}" method="post">
								<fieldset>
									<div class="form-group">
										<input type="text" name="nama" placeholder="Name" class="form-control theme-style" value="{{Input::old('nama')}}" required autofocus>
									</div>
									<div class="form-group">
										<input type="email" name="email" placeholder="Email Address" class="form-control theme-style" value="{{Input::old('email')}}" required>
									</div>
									<div class="form-group">
										<input type="password" name="password" placeholder="Password" class="form-control theme-style" value="{{Input::old('password')}}" required>
									</div>
									<div class="form-group">
										<input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control theme-style" required>
									</div>
									<div class="form-group">
										<textarea name="alamat" placeholder="Address" class="form-control theme-style" required></textarea>
									</div>
									<div class="form-group">
										{{ Form::select("negara", array("" => "-- Choose Country --") + $negara, Input::old("negara"), array("required", "id"=>"negara", "data-rel"=>"chosen", "class"=>"form-control theme-style")) }}
									</div>
									<div class="form-group">
										{{ Form::select("provinsi", array("" => "-- Choose Province --") + $provinsi, Input::old("provinsi"), array("required", "id"=>"provinsi", "data-rel"=>"chosen", "class"=>"form-control theme-style")) }}
									</div>
									<div class="form-group">
										{{ Form::select("kota", array("" => "-- Choose City --") + $kota, Input::old("kota"), array("required", "id"=>"kota", "data-rel"=>"chosen", "class"=>"form-control theme-style")) }}
									</div>
									<div class="form-group">
										<input type="number" name="kodepos" placeholder="Postal Code" class="form-control theme-style" value="{{ Input::old('kodepos') }}">
									</div>
									<div class="form-group">
										<input type="text" name="telp" placeholder="Telephone" class="form-control theme-style" value="{{ Input::old('telp') }}">
									</div>
									<div class="form-group">
										<div class="col-md-3" id="captcha">
											{{ HTML::image(Captcha::img(), 'Captcha image') }} 
										</div>
										<div class="col-md-9">
											{{ Form::text('captcha','',array('class'=>'form-control theme-style','placeholder'=>'Type the following text')) }} 
										</div>
									</div>
									<div class="form-group">
										<input type="checkbox" name="readme" value="1" required checked> By creating an account, you agree to our <a href="{{url('service')}}" class="link-btn" target="_blank">Terms of Use and Privacy Policy</a>
									</div>
									<div class="form-group">
										<div class="col-lg-6 col-xs-12">
											<button type="submit" class="theme-btn" id="login">Submit</button>
										</div>
									</div>
								</fieldset>
							</form>
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