<!--************************************
		Banner Start
*************************************-->
<section class="banner haslayout parallax-window" data-position="center 0" data-parallax="scroll" data-bleed="100" data-speed="0.2" data-image-src="{{ url(dirTemaToko().'fashioner/assets/images/bg-footer.png') }}">
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
		<span class="page-title">{{ ucwords($detailblog->judul) }}</span>
		<ol class="breadcrumb">
			<li><a href="{{ url('home') }}">Home</a></li>
			<li><a href="{{ url('blog') }}">Blog</a></li>
			<li class="active">{{ ucwords($detailblog->judul) }}</li>
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
									<div class="img-thumbnail title-article">
										<div class="post-head">
											<h2><a>{{ $detailblog->judul }}</a></h2>
											<p>
												<span><a><i class="fa fa-clock-o"></i> {{ waktuTgl($detailblog->created_at) }}</a></span>
												@if(!empty($detailblog->kategori->nama))
												<span>Tags: <a href="{{ blog_category_url(@$detailblog->kategori) }}"> {{ @$detailblog->kategori->nama }}</a></span>
												@endif
											</p>
										</div>
									</div>
									<div class="description">
										<p>{{ $detailblog->isi }}</p>
									</div>
									<div class="post-foot">
										<ul class="post-icons">
											{{ sosialShare(blog_url($detailblog)) }}
										</ul>
										<div class="tags">
											<span>Tags: </span>
											@if(!empty($detailblog->kategori->nama))
											<a class="theme-btn-sm" href="{{ blog_category_url(@$detailblog->kategori) }}">{{ @$detailblog->kategori->nama }}</a>
											@endif
										</div>
									</div>
									<div>
										@if(prev_blog($detailblog))
										<div class="pull-left">
											<a class="theme-btn-sm" href="{{ blog_url(prev_blog()) }}"><i class="fa fa-long-arrow-left"></i></a>
										</div>
										@else
										<div class="pull-right"></div>
										@endif
										@if(next_blog($detailblog))
										<div class="pull-right">
											<a class="theme-btn-sm" href="{{ blog_url(next_blog()) }}"><i class="fa fa-long-arrow-right"></i></a>
										</div>
										@else
										<div class="pull-right"></div>
										@endif
									</div>
								</article>
								<hr>
								<section id="comments">
									{{ fbcommentbox(blog_url($detailblog), '100%', '5', 'light') }} 
								</section>
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
						<div class="widget category">
							<h4>Category</h4>
							<ul>
								@foreach(list_blog_category() as $blog_category)
								<li><a href="{{ blog_category_url($blog_category) }}">{{ $blog_category->nama }}</a></li>
								@endforeach
							</ul>
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