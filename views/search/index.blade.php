<!--************************************
		Banner Start
*************************************-->
<section class="banner haslayout parallax-window" data-position="center 0" data-parallax="scroll" data-bleed="100" data-speed="0.2" data-image-src="{{ url(dirTemaToko().'fashioner/assets/images/bg-footer.png') }}">
	<div class="container">
		<h1>Search</h1>
	</div>
</section>
<!--************************************
		Banner End
*************************************-->
<!--************************************
		BreadCrumbs End
*************************************-->
<div class="breadcrumbs haslayout">
	<div class="container">
		<span class="page-title">Search</span>
		<ol class="breadcrumb">
			<li><a href="{{ url('home') }}">Home</a></li>
			<li class="active">Search</li>
		</ol>
	</div>
</div>
<!--************************************
		BreadCrumbs Start
*************************************-->
<!--************************************
		Main Start
*************************************-->
<main id="main" class="haslayout">
	<div class="container">
		<div class="row">
			<div id="twocolumns" class="section-padding haslayout">
				<div class="col-lg-9 col-md-9 col-sm-12 pull-right">
					<div id="content">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								@foreach(horizontal_banner() as $key=>$banners)
								@if($key == 0)
								<div class="product-banner">
									<a href="{{ URL::to($banners->url) }}">
										{{ HTML::image(banner_image_url($banners->gambar),'Info Promo',array('class'=>'img-responsive')) }}
									</a>
								</div>
								@endif
								@endforeach
								@if(count($hasilpro) > 0)
								<div class="shop-head">
									<div class="shop-head-filter">
										<ul>
											<li><a href="#">Default</a></li>
											<li><a href="#">Name</a></li>
											<li><a href="#">Lowest Price</a></li>
											<li><a href="#">Highest Price</a></li>
											
										</ul>
										<span class="total-products">Showing products 01-09 of 78</span>
									</div>
									<ul class="page-viewtype">
										<li class="active">
											<a href="product-grid.html">
												<i class="fa fa-th"></i>
											</a>
										</li>
										<li>
											<a href="product-list.html">
												<i class="fa fa-list"></i>
											</a>
										</li>
									</ul>
									<div class="product-perpage">
										<label>Items Per Page:</label>
										<select class="selectpicker">
											<option>12</option>
											<option>24</option>
											<option>48</option>
											<option>1000</option>
										</select>
									</div>
								</div>
								<div class="products">
									<div class="row">
										@foreach($hasilpro as $listproduk)
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 product-width">
											<div class="product">
												@if(is_outstok($listproduk))
												<span class="sale-tag-sm empty">Empty</span>
												@elseif(is_terlaris($listproduk))
												<span class="sale-tag-sm">Best</span>
												@elseif(is_produkbaru($listproduk))
												<span class="sale-tag-sm new">New</span>
												@endif
												<figure><img alt="{{ $listproduk->nama }}" src="{{ product_image_url($listproduk->gambar1,'medium') }}"></figure>
												<div class="img-hover">
													<div class="box">
														<div class="holder">
															<div class="border-center">
																<span class="product-name">{{ $listproduk->nama }}</span>
																<span class="product-price price-tag">{{ price($listproduk->hargaJual) }}</span>
															</div>
															<a class="btn-addtocart" href="{{ product_url($listproduk) }}">
																<i class="fa fa-shopping-cart"></i>
																<em>ADD TO CART</em>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										@endforeach
									</div>
								</div>
								<!--************************************
										Theme Pagination Start
								*************************************-->
								{{ $hasilpro->links() }}
								<!--************************************
										Theme Pagination End
								*************************************-->
								@endif
								@if(count($hasilhal) > 0 || count($hasilblog) > 0)
								<div class="content">
									<div class="row">
										@foreach($hasilblog as $blog_result)
										<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 post-width">
											<article class="post">
												<div class="content-blog">
													<p>{{ short_description($blog_result->isi, 390) }}</p>
												</div>
												<div class="img-hover">
													<div class="heading-leftborder">
														<h3><a href="{{ blog_url($blog_result) }}">{{ $blog_result->judul }}</a></h3>
													</div>
													<ul class="post-meta">
														<li>
															<a href="{{ blog_url($blog_result) }}">
																<i class="fa fa-clock-o"></i>
																<em>{{ date_format($blog_result->created_at, "d M Y") }}</em>
															</a>
														</li>
														@if(!empty($blog_result->kategori->nama))
														<li>
															<a href="{{ blog_category_url(@$blog_result->kategori) }}">
																<i class="fa fa-tags"></i>
																<em>{{ @$blog_result->kategori->nama }}</em>
															</a>
														</li>
														@endif
													</ul>
													<div class="spacerblog"></div>
												</div>
											</article>
										</div>
										@endforeach
										@foreach($hasilhal as $hal)
										<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 post-width">
											<article class="post">
												<div class="content-blog">
													<p>{{ short_description($hal->isi, 390) }}</p>
												</div>
												<div class="img-hover">
													<div class="heading-leftborder">
														<h3><a href="{{ url('halaman/'.$hal->slug) }}">{{ $hal->judul }}</a></h3>
													</div>
													<br>
													<div class="spacerblog"></div>
												</div>
											</article>
										</div>
										@endforeach
									</div>
								</div>
								@endif
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12 pull-left">
					<aside id="sidebar">
						<div class="widget search">
							<form class="form-search" action="{{ url('search') }}" method="post">
								<fieldset>
									<input type="text" class="form-control theme-style" placeholder="Search Here" name="search" required>
									<button class="fa fa-search" type="button"></button>
								</fieldset>
							</form>
						</div>
						<div class="widget filter category">
							<h4>Category</h4>
							<ul>
							@foreach(list_category() as $side_menu)
								@if($side_menu->parent == '0')
								<li><a href="{{ category_url($side_menu) }}">{{ $side_menu->nama }}</a></li>
								@endif
							@endforeach
							</ul>
						</div>
						@if(count(list_koleksi()) > 0)
						<div class="widget related-post">
							<h4>Collection</h4>
							<ul>
								@foreach(list_koleksi(4) as $koleksi)
								<li>
									<div class="post-thumb">
										<a href="{{ koleksi_url($koleksi) }}">
											<img class="img-thumb" alt="{{ $koleksi->nama }}" src="{{ koleksi_image_url($koleksi->gambar,'thumb') }}">
										</a>
									</div>
									<div class="post-data">
										<span class="post-title"><a href="{{ koleksi_url($koleksi) }}">{{ $koleksi->nama }}</a></span>
									</div>
								</li>
								@endforeach
							</ul>
						</div>
						@endif
						@if(count(best_seller()) > 0)
						<div class="widget related-post">
							<h4>Best Sellers</h4>
							<ul>
								@foreach(best_seller(4) as $best)
								<li>
									<div class="post-thumb">
										<a href="{{ product_url($best) }}">
											<img class="img-thumb" alt="{{ $best->nama }}" src="{{ product_image_url($best->gambar1,'thumb') }}">
										</a>
									</div>
									<div class="post-data">
										<span class="post-title"><a href="{{ product_url($best) }}">{{ $best->nama }}</a></span>
										<span>{{ price($best->hargaJual) }}</span>
									</div>
								</li>
								@endforeach
							</ul>
						</div>
						@endif
						@foreach(vertical_banner() as $sidebanner)
						<div class="widget sidebar-banner">
							<figure>
								<a href="{{ url($sidebanner->url) }}">
									<img src="{{ banner_image_url($sidebanner->gambar) }}" alt="side banner {{ Theme::place('title') }}">
								</a>
							</figure>
						</div>
						@endforeach
					</aside>
				</div>
			</div>
		</div>
	</div>
</main>
<!--************************************
		Main End
*************************************-->