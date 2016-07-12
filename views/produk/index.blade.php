<!--************************************
		Banner Start
*************************************-->
<section class="banner haslayout parallax-window" data-position="center 0" data-parallax="scroll" data-bleed="100" data-speed="0.2" data-image-src="{{ url(dirTemaToko().'fashioner/assets/images/bg-footer.png') }}">
	<div class="container">
		<h1>Product</h1>
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
		<span class="page-title">Product</span>
		<ol class="breadcrumb">
			<li><a href="{{ url('home') }}">Home</a></li>
			<li class="active">Product</li>
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
								<div class="shop-head">
									<div class="shop-head-filter">
										<!-- <ul>
											<li><a href="#">Default</a></li>
											<li><a href="#">Name</a></li>
											<li><a href="#">Lowest Price</a></li>
											<li><a href="#">Highest Price</a></li>
										</ul>
										<span class="total-products">Showing products 01-09 of 78</span> -->
									</div>
									<ul class="page-viewtype">
										<li class="active">
											<a id="grid-btn">
												<i class="fa fa-th"></i>
											</a>
										</li>
										<li>
											<a id="list-btn">
												<i class="fa fa-list"></i>
											</a>
										</li>
									</ul>
									<div class="product-perpage">
										<label>Items Per Page:</label>
										<select class="selectpicker" id="show" data-rel="{{ URL::current() }}">
											<option value="9" {{ Input::get('show')==9 ? 'selected="selected"' : '' }}>9</option>
											<option value="18" {{ Input::get('show')==18 ? 'selected="selected"' : '' }}>18</option>
										</select>
									</div>
								</div>
								<div class="products grid-type">
									<div class="row">
										@foreach(list_product(Input::get('show'), @$category, @$collection, null, Input::get('sort')) as $grid_produk)
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 product-width">
											<div class="product">
												@if(is_outstok($grid_produk))
												<span class="sale-tag-sm empty">Empty</span>
												@elseif(is_terlaris($grid_produk))
												<span class="sale-tag-sm">Best</span>
												@elseif(is_produkbaru($grid_produk))
												<span class="sale-tag-sm new">New</span>
												@endif
												<figure>
													<img alt="{{ $grid_produk->nama }}" src="{{ product_image_url($grid_produk->gambar1,'medium') }}">
												</figure>
												<div class="img-hover">
													<div class="box">
														<div class="holder">
															<div class="border-center">
																<span class="product-name">{{ $grid_produk->nama }}</span>
																<span class="product-price price-tag">{{ price($grid_produk->hargaJual) }}</span>
															</div>
															<a class="btn-addtocart" href="{{ product_url($grid_produk) }}">
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

								<div class="products list-type" style="display: none">
									@foreach(list_product(Input::get('show'), @$category, @$collection, null, Input::get('sort')) as $list_produk)
									<div class="product">
										<figure>
											<img alt="{{ $list_produk->nama }}" src="{{ product_image_url($list_produk->gambar1,'medium') }}">
											<div class="img-hover">
												<div class="holder">
													<a href="{{ product_url($list_produk) }}">
														<i class="flaticon-magnifyingglass13"></i>
													</a>
												</div>
											</div>
										</figure>
										<div class="product-info">
											<div class="heading-leftborder">
												<span class="product-name">{{ $list_produk->nama }}</span>
												<span class="product-price">Price: {{ price($list_produk->hargaJual) }}</span>
											</div>
											@if($list_produk->vendor != "")
											<div class="product-brand"><p><strong>Brand:</strong> {{ $list_produk->vendor }}</p></div>
											@endif
											<div class="availablity"><p><strong>Availability:</strong> {{ $list_produk->stok > 0 ? 'In Stock' : 'Out of Stock' }}</p></div>
											<div class="description">
												<p>{{ short_description($list_produk->deskripsi,130) }}</p>
											</div>
											<a class="theme-btn pull-right" href="{{ product_url($list_produk) }}">Buy Now</a>
										</div>
									</div>
									@endforeach
								</div>
								<!--************************************
										Theme Pagination Start
								*************************************-->
								{{ list_product(null, @$category, @$collection, null, Input::get('sort'))->appends(array('show' => Input::get('show'), 'sort'=>Input::get('sort')))->links() }}
								<!--************************************
										Theme Pagination End
								*************************************-->
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