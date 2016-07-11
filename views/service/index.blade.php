<!--************************************
		Banner Start
*************************************-->
<section class="banner haslayout parallax-window hidden-xs" data-position="center 0" data-parallax="scroll" data-bleed="100" data-speed="0.2" data-image-src="{{ url(dirTemaToko().'fashioner/assets/images/bg-footer.png') }}">
	<div class="container">
		<h1>Term of Service</h1>
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
		<span class="page-title">Term of Service</span>
		<ol class="breadcrumb">
			<li><a href="{{ url('home') }}">Home</a></li>
			<li class="active">Term of Service</li>
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
	<div class="sorry haslayout bg-grey left">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="leftbox">
						<div class="heading-pattern">
							<h2>Term of Service</h2>
						</div>
						<div class="panel-group faq-accordion theme-accordion" id="faq-accordion">
							<div class="panel accordion-pannel">
								<div class="accordion-heading">
									<h4>
										<a data-toggle="collapse" data-parent="#faq-accordion" href="#collapseOne">
											<em>Term of Service</em>
											<i class="indicator fa fa-caret-down pull-right"></i>
										</a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in">
									<div class="panel-body">
										<p>{{ $service->tos }}</p>
									</div>
								</div>
							</div>
							<div class="panel accordion-pannel">
								<div class="accordion-heading">
									<h4>
										<a data-toggle="collapse" data-parent="#faq-accordion" href="#collapseTwo">
											<em>Refund</em>
											<i class="indicator fa fa-caret-right pull-right"></i>
										</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse">
									<div class="panel-body">
										<p>{{ $service->refund }}</p>
									</div>
								</div>
							</div>
							<div class="panel accordion-pannel">
								<div class="accordion-heading">
									<h4>
										<a data-toggle="collapse" data-parent="#faq-accordion" href="#collapseThree">
											<em>Privacy Policy</em>
											<i class="indicator fa fa-caret-right pull-right"></i>
										</a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse">
									<div class="panel-body">
										<p>{{ $service->privacy }}</p>
									</div>
								</div>
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