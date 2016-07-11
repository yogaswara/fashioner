<!--************************************
		Banner Start
*************************************-->
<section class="banner haslayout parallax-window" data-position="center 0" data-parallax="scroll" data-bleed="0" data-speed="0.2" data-image-src="{{ url(dirTemaToko().'fashioner/assets/images/bg-footer.png') }}">
	<div class="container">
		<h1>Contact us</h1>
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
		<span class="page-title">Contact us</span>
		<ol class="breadcrumb">
			<li><a href="{{ url('home') }}">Home</a></li>
			<li class="active">Contact us</li>
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
			Full Map
	*************************************-->
	<div class="full-map">
		<div id="gmap" class="gmap"></div>
	</div>
	<!--************************************
			Full Map End
	*************************************-->
	<!--************************************
			Contact Info Start
	*************************************-->
	<section class="contact-area haslayout section-padding">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="getintuch">
						<div class="heading-pattern">
							<h2>Get In Touch</h2>
						</div>
						<div class="description">
							<p>Whether you’re looking for answers, would like to solve a problem, or just want to let us know how we did, you’ll find many ways to contact us right here. We’ll help you resolve your issues quickly and easily.</p>
						</div>
						<ul class="social-icon theme-social-con">
							@if(!empty($kontak->fb))
							<li><a href="{{ url($kontak->fb) }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
							@endif
							@if(!empty($kontak->tw))
							<li><a href="{{ url($kontak->tw) }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
							@endif
							@if(!empty($kontak->gp))
							<li><a href="{{ url($kontak->gp) }}" target="_blank"><i class="fa fa-google-plus"></i></a></li>
							@endif
							@if(!empty($kontak->pt))
							<li><a href="{{ url($kontak->pt) }}" target="_blank"><i class="fa fa-pinterest"></i></a></li>
							@endif
							@if(!empty($kontak->ig))
							<li><a href="{{ url($kontak->ig) }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
							@endif
							@if(!empty($kontak->tl))
							<li><a href="{{ url($kontak->tl) }}" target="_blank"><i class="fa fa-tumblr"></i></a></li>
							@endif
							@if(!empty($kontak->picmix))
							<li>
								<a href="{{ url($kontak->picmix) }}" target="_blank">
									<img class="picmix-top" src="https://s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/blogs/event/icon-picmix.png">
								</a>
							</li>
							@endif
						</ul>
						<div class="heading-leftborder">
							<h3>Address</h3>
						</div>
						<ul class="col-lg-6 col-md-7 col-sm-8 info-area">
							<li>
								<strong><i class="fa fa-map-marker"></i></strong>
								<address>{{ $kontak->alamat }}</address>
							</li>
							<li>
								<strong><i class="fa fa-phone"></i></strong>
								<em><i>{{ $kontak->telepon }}</i></em>
							</li>
							@if(!empty($kontak->hp))
							<li>
								<strong><i class="fa fa-mobile"></i></strong>
								<em><i>{{ $kontak->hp }}</i></em>
							</li>
							@endif
							@if(!empty($kontak->bb))
							<li>
								<strong><i class="fa fa-comment-o"></i></strong>
								<em><i>{{ $kontak->bb }} (BBM)</i></em>
							</li>
							@endif
							@if(!empty($kontak->email))
							<li>
								<strong><i class="fa fa-envelope-o"></i></strong>
								<em><a href="{{ $kontak->email }}">{{ $kontak->email }}</a></em>
							</li>
							@endif
						</ul>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="heading-pattern">
						<h2>Contact Us</h2>
					</div>
					<form class="contact-form" action="{{ url('kontak') }}" method="post">
						<fieldset>
							<div class="form-group">
								<input type="text" name="namaKontak" placeholder="Name" class="form-control theme-style" required>
							</div>
							<div class="form-group">
								<input type="email" name="emailKontak" placeholder="Email" class="form-control theme-style" required>
							</div>
							<div class="form-group">
								<textarea name="messageKontak" placeholder="Message" class="form-control theme-style" required></textarea>
							</div>
							<div class="form-group pull-left">
								<button type="submit" class="theme-btn">Send</button>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!--************************************
			Contact Info End
	*************************************-->
</main>
<!--************************************
		Main End
*************************************-->