<!--************************************
		Banner Start
*************************************-->
<section class="banner haslayout parallax-window" data-position="center 0" data-parallax="scroll" data-bleed="100" data-speed="0.2" data-image-src="{{ url(dirTemaToko().'fashioner/assets/images/bg-footer.png') }}">
	<div class="container">
		<h1>Shop Detail</h1>
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
		<span class="page-title">{{ $produk->nama }}</span>
		<ol class="breadcrumb">
			<li><a href="{{ url('home') }}">Home</a></li>
			<li><a href="{{ url('produk') }}">Produk</a></li>
			<li class="active">{{ $produk->nama }}</li>
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
		<div class="product-single">
			<div class="row">
				<div class="product-top">
					<div class="col-sm-6">
						<div class="slider-box">
							<div class="product-slider">
								<ul role="tablist">
									@if($produk->gambar1 != '')
									<li role="presentation" class="active">
										<a href="#thumbone" aria-controls="thumbone" role="tab" data-toggle="tab">
											<img src="{{ product_image_url($produk->gambar1,'thumb') }}" alt="Thumb 1">
											<div class="img-hover">
												<div class="holder">
													<span>+</span>
												</div>
											</div>
										</a>
									</li>
									@endif
									@if($produk->gambar2 != '')
									<li role="presentation">
										<a href="#thumbtwo" aria-controls="thumbtwo" role="tab" data-toggle="tab">
											<img src="{{ product_image_url($produk->gambar2,'thumb') }}" alt="Thumb 2">
											<div class="img-hover">
												<div class="holder">
													<span>+</span>
												</div>
											</div>
										</a>
									</li>
									@endif
									@if($produk->gambar3 != '')
									<li role="presentation">
										<a href="#thumbthree" aria-controls="thumbthree" role="tab" data-toggle="tab">
											<img src="{{ product_image_url($produk->gambar3,'thumb') }}" alt="Thumb 3">
											<div class="img-hover">
												<div class="holder">
													<span>+</span>
												</div>
											</div>
										</a>
									</li>
									@endif
									@if($produk->gambar4 != '')
									<li role="presentation">
										<a href="#thumbthree" aria-controls="thumbthree" role="tab" data-toggle="tab">
											<img src="{{ product_image_url($produk->gambar4,'thumb') }}" alt="Thumb 4">
											<div class="img-hover">
												<div class="holder">
													<span>+</span>
												</div>
											</div>
										</a>
									</li>
									@endif
								</ul>
								<div class="tab-content">
									@if($produk->gambar1 != '')
									<div role="tabpanel" class="tab-pane fade in active" id="thumbone">
										<img src="{{ product_image_url($produk->gambar1,'medium') }}" alt="{{ $produk->nama }} 1">
									</div>
									@endif
									@if($produk->gambar2 != '')
									<div role="tabpanel" class="tab-pane fade" id="thumbtwo">
										<img src="{{ product_image_url($produk->gambar2,'medium') }}" alt="{{ $produk->nama }} 2">
									</div>
									@endif
									@if($produk->gambar3 != '')
									<div role="tabpanel" class="tab-pane fade" id="thumbthree">
										<img src="{{ product_image_url($produk->gambar3,'medium') }}" alt="{{ $produk->nama }} 3">
									</div>
									@endif
									@if($produk->gambar4 != '')
									<div role="tabpanel" class="tab-pane fade" id="thumbthree">
										<img src="{{ product_image_url($produk->gambar4,'medium') }}" alt="{{ $produk->nama }} 4">
									</div>
									@endif
								</div>
							</div>
							<p><i class="fa fa-search"></i> Roll over image to zoom in</p>
						</div>
					</div>
					<div class="col-sm-6">
						<form action="#" id="addorder">
							<div class="product-details">
								<div class="heading-pattern">
									<h2>{{ $produk->nama }}</h2>
								</div>
								<div class="review-reference">
									<span class="product-price price-tag">{{ price($produk->hargaJual) }}</span>
									@if(!empty($produk->hargaCoret))
									<span class="product-price discount-price">{{ price($produk->hargaCoret) }}</span>
									@endif
								</div>
								<div class="description">
									<p>{{ short_description($produk->deskripsi,365) }}</p>
								</div>
								<div class="availablity">
									<strong>Stock Availibility: {{ $produk->stok > 0 ? 'In Stock' : 'Out of Stock' }}</strong>
								</div>
								<div class="product-quantity">
									<strong>Quantity:</strong>
									<span class="quantity-sapn">
										<em class="plus">+</em>
										<input type="text" name="qty" id="quantity1" value="1" class="result">
										<em class="minus">-</em>
									</span>
								</div>
								@if($opsiproduk->count() > 0)
								<div class="product-perpage product-options">
									<strong>Options:</strong>
									<div class="size-guide">
										<select class="selectpicker">
											<option value="">-- Select Options Product --</option>
											@foreach ($opsiproduk as $key => $opsi)
											<option value="{{$opsi->id}}" {{ $opsi->stok==0 ? 'disabled':''}}>{{$opsi->opsi1.($opsi->opsi2=='' ? '':' / '.$opsi->opsi2).($opsi->opsi3=='' ? '':' / '.$opsi->opsi3)}} {{price($opsi->harga)}}</option>
											@endforeach
										</select>
									</div>
								</div>
								@endif
								<button class="theme-btn" type="submit">buy now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-7">
					<div class="product-tabs theme-tabs">
						<ul class="theme-nav-tabs" role="tablist">
							<li role="presentation" class="active">
								<a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a>
							</li>
							<li role="presentation">
								<a href="#specification" aria-controls="specification" role="tab" data-toggle="tab">Specification</a>
							</li>
						</ul>
						<div class="theme-tab-content tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="description">
								<div class="description">
									<p>{{ $produk->deskripsi }}</p>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="specification">
								<div class="product-size">
									<strong>Brand:</strong>
									<span class="size-guide">{{ $produk->vendor }}</span>
								</div>
								<div class="product-size">
									<strong>Weight:</strong>
									<span class="size-guide">{{ $produk->berat }} gram</span>
								</div>
								<div class="product-size">
									<strong>Stock:</strong>
									<span class="size-guide">{{ $produk->stok > 0 ? 'In Stock' : 'Out of Stock' }}</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-5">
					<div class="product-reviews">
						<div class="heading-leftborder">
							<h3>Product Reviews</h3>
						</div>
						<div>
							{{ pluginComment(product_url($produk), @$produk) }}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@if(count(other_product($produk)) > 0)
	<section class="view-products">
		<div class="container">
			<div class="heading-leftborder">
				<h2>Related Products:</h2>
			</div>
			<div id="view-product-slider" class="products">
				@foreach(other_product($produk) as $other_product)
				<div class="item">
					<div class="product">
						@if(is_outstok($other_product))
						<span class="sale-tag-sm empty">Empty</span>
						@elseif(is_terlaris($other_product))
						<span class="sale-tag-sm">Best</span>
						@elseif(is_produkbaru($other_product))
						<span class="sale-tag-sm new">New</span>
						@endif
						<figure>
							<img alt="{{ $other_product->nama }}" src="{{ product_image_url($other_product->gambar1, 'medium') }}">
						</figure>
						<div class="img-hover">
							<div class="box">
								<div class="holder">
									<div class="border-center">
										<span class="product-name">{{ $other_product->nama }}</span>
										<span class="product-price price-tag">{{ price($other_product->hargaJual) }}</span>
									</div>
									<a class="btn-addtocart" href="{{ product_url($other_product) }}">
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
	</section>
	@endif
</main>
<!--************************************
		Main End
*************************************-->