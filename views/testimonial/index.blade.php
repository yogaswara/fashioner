<!--************************************
		Banner Start
*************************************-->
<section class="banner haslayout parallax-window" data-position="center 0" data-parallax="scroll" data-bleed="100" data-speed="0.2" data-image-src="{{ url(dirTemaToko().'fashioner/assets/images/bg-footer.png') }}">
	<div class="container">
		<h1>Testimonial</h1>
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
		<span class="page-title">Testimonial</span>
		<ol class="breadcrumb">
			<li><a href="{{ url('home') }}">Home</a></li>
			<li class="active">Testimonial</li>
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
				<div class="col-lg-9 col-md-9 col-sm-12">
					<div id="content">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<article class="post with-border post-list single">
									@foreach(list_testimonial() as $testimonial)
									<blockquote>
										<q>{{ $testimonial->isi }}</q>
										<span class="author"><a>{{ $testimonial->nama }}</a>, {{ date_format($testimonial->created_at,"d M Y") }}</span>
									</blockquote>
									@endforeach
								</article>
								{{ list_testimonial()->links() }}
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12">
					<aside id="sidebar">
						<div class="widget search">
							<form class="form-search" action="{{ url('search') }}" method="post">
								<fieldset>
									<input type="text" class="form-control theme-style" placeholder="Search Here" name="search" required>
									<button class="fa fa-search" type="button"></button>
								</fieldset>
							</form>
						</div>
						@if(count(recentBlog()) > 0)
						<div class="widget related-post">
							<h4>Latest Articles</h4>
							<ul>
								@foreach(recentBlog(null, 4) as $new_blog)
								<li>
									<div class="post-data">
										<span class="post-title"><a href="{{ blog_url($new_blog) }}">{{ $new_blog->judul }}</a></span>
										<time>Posted: {{ date_format($new_blog->created_at, "d M Y") }}</time>
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
	<section id="add-testimonial" class="haslayout">
		<div class="container">
			<div class="heading-pattern">
				<h2>Your Comment</h2>
			</div>
			<form class="comment-form" action="{{ url('testimoni') }}" method="post">
				<fieldset class="row">
					<div class="form-group">
						<div class="col-sm-5">
							<input type="text" name="nama" class="form-control theme-style" placeholder="Name" value="{{Input::old('nama')}}" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-9">
							<textarea name="testimonial" class="form-control theme-style" placeholder="Message" required>{{Input::old('testimonial')}}</textarea>
						</div>
					</div>
					<div class="form-group pull-left">
						<div class="col-sm-9">
							<button class="theme-btn" type="submit">Send</button>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</section>
</main>
<!--************************************
		Main End
*************************************-->