<!--************************************
		Main Start
*************************************-->
<main id="main" class="haslayout">
	<!--************************************
			Fashioner Start
	*************************************-->
	<section class="fashioner haslayout section-padding background-size">
		<div class="container">
			<div class="row">
				<div class="col-sm-5 fashioner-img">
					<figure>
						<img src="{{ logo_image_url() }}" alt="Logo {{ Theme::place('title') }}">
					</figure>
				</div>
				<div class="col-lg-7 col-md-7 col-sm-12">
					<div class="heading-pattern">
						<h2>{{ $setting->nama }}</h2>
					</div>
					<div class="description">
						<p>{{ about_us()->isi }}</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--************************************
			Fashioner End
	*************************************-->
	<!--************************************
			Our Gallery Start
	*************************************-->
	<section class="our-gallery haslayout section-padding bg-white">
		<div class="container">
			<div class="theme-margin">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 theme-col-padding">
					<div class="gallery-textbox">
						<div class="heading-pattern">
							<h2>Our Gallery</h2>
						</div>
						<!-- <div class="description">
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusaum dol lia oremque laudantium, totam rem aperiam.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusaum dol.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusaum dol.</p>
						</div> -->
						<ul id="gallery-cats" class="option-set">
							<li class="select">
								<a href="#" class="theme-btn-sm" data-filter="*">All</a>
							</li>
							<li>
								<a href="#" class="theme-btn-sm" data-filter=".featured">Featured Product</a>
							</li>
							<li>
								<a href="#" class="theme-btn-sm" data-filter=".new-product">New Product</a>
							</li>
							<li>
								<a href="#" class="theme-btn-sm" data-filter=".best-seller">Best Seller</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="portfolio-content isotope">
					@foreach(home_product() as $home)
					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 theme-col-padding gallery-product featured">
						<div class="product-box">
							<figure>
								<img src="{{ product_image_url($home->gambar1,'medium') }}" alt="{{ $home->nama }}">
							</figure>
							<div class="img-hover img-hover-border">
								<div class="holder">
									<ul class="product-icons">
										<li>
											<a href="{{ product_image_url($home->gambar1,'medium') }}" data-rel="prettyPhoto[gallery2]"><i class="fa fa-search-plus"></i></a>
										</li>
										<li>
											<a href="{{ product_url($home) }}"><i class="fa fa-cart-plus"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					@endforeach
					@foreach(new_product() as $new)
					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 theme-col-padding gallery-product new-product">
						<div class="product-box">
							<figure>
								<img src="{{ product_image_url($new->gambar1,'medium') }}" alt="{{ $new->nama }}">
							</figure>
							<div class="img-hover img-hover-border">
								<div class="holder">
									<ul class="product-icons">
										<li>
											<a href="{{ product_image_url($new->gambar1,'medium') }}" data-rel="prettyPhoto[gallery2]"><i class="fa fa-search-plus"></i></a>
										</li>
										<li>
											<a href="{{ product_url($new) }}"><i class="fa fa-cart-plus"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					@endforeach
					@foreach(best_seller() as $best)
					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 theme-col-padding gallery-product best-seller">
						<div class="product-box">
							<figure>
								<img src="{{ product_image_url($best->gambar1,'medium') }}" alt="{{ $best->nama }}">
							</figure>
							<div class="img-hover img-hover-border">
								<div class="holder">
									<ul class="product-icons">
										<li>
											<a href="{{ product_image_url($best->gambar1,'medium') }}" data-rel="prettyPhoto[gallery2]"><i class="fa fa-search-plus"></i></a>
										</li>
										<li>
											<a href="{{ product_url($best) }}"><i class="fa fa-cart-plus"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
	<!--************************************
			Our Gallery End
	*************************************-->
	<!--************************************
			Testimonial Start
	*************************************-->
	<section class="events haslayout parallax-window" data-position="center 0" data-parallax="scroll" data-bleed="0" data-speed="0.2" data-image-src="{{ url(dirTemaToko().'fashioner/assets/images/bg-events.jpg') }}">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 section-padding bg-white padding-left-right">
					<div class="heading-pattern">
						<h2>Testimonial</h2>
					</div>
					<div id="event-slider">
						@foreach(list_testimonial() as $testi)
						<div class="item">
							<ul class="event-meta">
								<li>{{ waktuTgl($testi->created_at) }}</li>
								<li>From: <a>{{ $testi->nama }}</a></li>
							</ul>
							<div class="description">
								<p>{{ short_description($testi->isi,185) }}</p>
							</div>
						</div>
						@endforeach
					</div>
					<a class="theme-btn viewall-btn" href="{{ url('testimoni') }}">View all</a>
				</div>
				<div class="col-lg-7 col-md-12 col-sm-12 bg-white artikel">
					<div class="heading-pattern col-xs-9">
						<h2>Article</h2>
					</div>
					<div class="viewall">
						<a href="{{ url('blog') }}">View all</a>
					</div>
					<div class="posts border-left row" id="recent-blog">
						@foreach(list_blog() as $blog)
						<div class="post-width">
							<article class="post">
								<div class="home-blog">
									<p>{{ short_description($blog->isi, 345) }}</p>
								</div>
								<div class="img-hover">
									<div class="heading-leftborder">
										<h3><a href="{{ blog_url($blog) }}">{{ $blog->judul }}</a></h3>
									</div>
									<ul class="post-meta">
										<li>
											<a href="{{ blog_url($blog) }}">
												<i class="fa fa-clock-o"></i>
												<em>{{ date_format($blog->created_at,"d M Y") }}</em>
											</a>
										</li>
									</ul>
									<div class="spacerblog"></div>
								</div>
							</article>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--************************************
			Testimonial End
	*************************************-->
	<!--************************************
			Banner Start
	*************************************-->
	<section class="blog haslayout bg-white section-padding">
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
	@if(count(list_koleksi()) > 0)
	<!--************************************
			Brands Start
	*************************************-->
	<div class="brands haslayout">
		<div class="container">
			<div id="brands" class="row">
				@foreach(list_koleksi() as $koleksi)
				<div class="col-sm-2 col-xs-4">
					<figure class="barand">
						<a class="brand-box" title="{{ $koleksi->nama }}" href="{{ koleksi_url($koleksi) }}">
							<img src="{{ koleksi_image_url($koleksi->gambar) }}" alt="{{ $koleksi->nama }}">
						</a>
					</figure>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<!--************************************
			Brands End
	*************************************-->
	@endif
</main>
<!--************************************
		Main End
*************************************-->