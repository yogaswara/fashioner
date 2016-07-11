<!--************************************
		Banner Start
*************************************-->
<section class="banner haslayout parallax-window" data-parallax="scroll" data-bleed="100" data-speed="0.2" data-image-src="{{ url(dirTemaToko().'fashioner/assets/images/bg-footer.png') }}">
	<div class="container">
		<h1>Blog</h1>
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
		<span class="page-title">Blog</span>
		<ol class="breadcrumb">
			<li><a href="{{ url('home') }}">Home</a></li>
			<li class="active">Blog</li>
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
							@foreach(list_blog(null,@$blog_category) as $blog)
							<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 post-width">
								<article class="post">
									<div class="content-blog">
										<p>{{ short_description($blog->isi, 390) }}</p>
									</div>
									<div class="img-hover">
										<div class="heading-leftborder">
											<h3><a href="{{ blog_url($blog) }}">{{ $blog->judul }}</a></h3>
										</div>
										<ul class="post-meta">
											<li>
												<a href="{{ blog_url($blog) }}">
													<i class="fa fa-clock-o"></i>
													<em>{{ date_format($blog->created_at, "d M Y") }}</em>
												</a>
											</li>
											@if(!empty($blog->kategori->nama))
											<li>
												<a href="{{ blog_category_url(@$blog->kategori) }}">
													<i class="fa fa-tags"></i>
													<em>{{ @$blog->kategori->nama }}</em>
												</a>
											</li>
											@endif
										</ul>
										<div class="spacerblog"></div>
									</div>
								</article>
							</div>
							@endforeach
						</div>
                		{{ list_blog(null,@$blog_category)->links() }}
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
						@if(count(list_blog_category()) > 0)
						<div class="widget category">
							<h4>Category</h4>
							<ul>
								@foreach(list_blog_category() as $blog_category)
								<li><a href="{{ blog_category_url($blog_category) }}">{{ $blog_category->nama }}</a></li>
								@endforeach
							</ul>
						</div>
						@endif
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
						@if(count(list_testimonial()) > 0)
						<div class="widget comments">
							<h4><a href="{{ url('testimoni') }}">Latest Testimonials</a></h4>
							<ul class="side-testi">
								@foreach(list_testimonial() as $testi)
								<li>
									<blockquote>
										<q>{{ short_description($testi->isi,100) }}</q>
									</blockquote>
									<div class="post-thumb">
										<span class="post-title"><i class="fa fa-pencil-square-o"></i></span>
										<span class="post-title"><i class="fa fa-clock-o"></i></span>
									</div>
									<div class="post-data">
										<span class="post-title">{{ $testi->nama }}</span>
										<span class="post-title">{{ date_format($testi->created_at, "d M Y") }}</span>
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