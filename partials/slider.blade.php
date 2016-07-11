<!--************************************
		Slider Start
*************************************-->
<section id="home-slider" class="home-slider haslayout">
	@foreach(slideshow() as $slide)
	<div class="item">
		<figure>
			<img src="{{ slide_image_url($slide->gambar) }}" alt="{{ $slide->title }}">
		</figure>
		<div class="postion-absolute">
			<div class="container display-table">
				<div class="display-table-cell">
					<div class="slide-caption">
						@if(!empty($slide->title))
						<div class="heading-twopx-border">
							<h1>{{ $slide->title }}</h1>
						</div>
						@endif
						@if(!empty($slide->text))
						<div class="description">
							<p>{{ $slide->text }}</p>
						</div>
						@endif
						@if(!empty($slide->title) && !empty($slide->url) || !empty($slide->text) && !empty($slide->url))
						<a class="theme-btn btn-shopnow" href="{{ filter_link_url($slide->url) }}">shop now</a>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
	@endforeach
</section>
<!--************************************
		Slider End
*************************************-->