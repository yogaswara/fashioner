<!--************************************
		Banner Start
*************************************-->
<section class="banner haslayout parallax-window hidden-xs" data-position="center 0" data-parallax="scroll" data-bleed="100" data-speed="0.2" data-image-src="{{ url(dirTemaToko().'fashioner/assets/images/bg-footer.png') }}">
	<div class="container">
		<h1>Order Confirmation</h1>
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
		<span class="page-title">Order Confirmation</span>
		<ol class="breadcrumb">
			<li><a href="{{ url('home') }}">Home</a></li>
			<li class="active">Order Confirmation</li>
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
							<h4 class="form-title">Please enter your order number.</h4>
							<form class="contact-form" action="{{url('konfirmasiorder')}}" method="post">
								<fieldset>
									<div class="form-group">
										<input type="text" name="kodeorder" placeholder="Order Number" class="form-control theme-style" value="{{Input::old('kodeorder')}}" required autofocus>
									</div>
									<div class="form-group">
										<div class="col-lg-6 col-xs-12">
											<button type="submit" class="theme-btn" id="login">Confirm</button>
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