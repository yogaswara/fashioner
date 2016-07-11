<!--************************************
		Banner Start
*************************************-->
<section class="banner haslayout parallax-window hidden-xs" data-position="center 0" data-parallax="scroll" data-bleed="100" data-speed="0.2" data-image-src="{{ url(dirTemaToko().'fashioner/assets/images/bg-footer.png') }}">
	<div class="container">
		<h1>{{ $data->judul }}</h1>
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
		<span class="page-title">{{ $data->judul }}</span>
		<ol class="breadcrumb">
			<li><a href="{{ url('home') }}">Home</a></li>
			<li class="active">{{ $data->judul }}</li>
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
	<!--************************************
			Fashioner Start
	*************************************-->
	<section class="fashioner haslayout section-padding background-size">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="heading-pattern">
						<h2>{{ $data->judul }}</h2>
					</div>
					<div class="description">
						<p>{{ $data->isi }}</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--************************************
			Fashioner End
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