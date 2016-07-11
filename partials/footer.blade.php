<!--************************************
		Footer Start
*************************************-->
<footer id="footer" class="haslayout">
	<div class="quick-info background-size section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 footer-col">
					<div class="heading-leftborder">
						<h2>About {{ $kontak->nama }}</h2>
					</div>
					<div class="description">
						<p>{{ short_description(about_us()->isi,400) }}</p>
					</div>
					<ul class="social-icon theme-social-con pull-left">
						@if(!empty($kontak->fb))
						<li><a href="{{ url($kontak->fb) }}" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						@endif
						@if(!empty($kontak->tw))
						<li><a href="{{ url($kontak->tw) }}" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						@endif
						@if(!empty($kontak->pt))
						<li><a href="{{ url($kontak->pt) }}" target="_blank" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						@endif
						@if(!empty($kontak->gp))
						<li><a href="{{ url($kontak->gp) }}" target="_blank" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
						@endif
						@if(!empty($kontak->tl))
						<li><a href="{{ url($kontak->tl) }}" target="_blank" title="Tumblr"><i class="fa fa-tumblr"></i></a></li>
						@endif
						@if(!empty($kontak->ig))
						<li><a href="{{ url($kontak->ig) }}" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
						@endif
						@if(!empty($kontak->picmix))
						<li>
							<a href="{{ url($kontak->picmix) }}" target="_blank" title="Picmix">
								<img class="picmix-bottom" src="https://s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/blogs/event/icon-picmix.png">
							</a>
						</li>
						@endif
					</ul>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 footer-col">
					<div class="heading-leftborder">
						<h2>Quick Link</h2>
					</div>
					<ul class="quicklink">
					@foreach(all_menu() as $key=>$menu)
						@if($key == 1 || $key == 2)
							@foreach($menu->link as $link_menu)
							@if($menu->id == $link_menu->tautanId)
							<li>
								<a href="{{ menu_url($link_menu) }}">{{ $link_menu->nama }}</a>
							</li>
							@endif
							@endforeach
						@endif
					@endforeach
					</ul>
				</div>
				<div class="clearfix visible-xs"></div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 footer-col">
					<div class="heading-leftborder">
						<h2>News Letter</h2>
					</div>
					<p>Be the first to know about new arrivals, exclusive offers and trend news</p>
					<form class="newsletter-form" action="{{@$mailing->action}}" method="post">
						<fieldset>
							<div class="form-group">
								<input type="email" placeholder="Email" class="form-control theme-style" name="email" required {{ @$mailing->action==''? 'disabled=""' : ''}}>
							</div>
							<div class="form-group pull-left">
								<button type="submit" class="theme-btn" {{ @$mailing->action==''?'disabled="disabled" style="opacity: 0.5; cursor: default;"':'' }}>Send</button>
							</div>
						</fieldset>
					</form>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 footer-col">
					<div class="heading-leftborder">
						<h2>Get In Touch</h2>
					</div>
					<ul class="info-area">
						<li>
							<strong>Address:</strong>
							<address>{{ $kontak->alamat }}</address>
						</li>
						<li>
							<strong>Phone:</strong>
							<em>
								@if(!empty($kontak->telepon))
								<i>{{ $kontak->telepon }}</i>
								@endif
								@if(!empty($kontak->hp))
								<i>{{ $kontak->hp }} - mobile</i>
								@endif
								@if(!empty($kontak->bb))
								<i>{{ $kontak->bb }} - BBM</i>
								@endif
							</em>
						</li>
						@if(!empty($kontak->email))
						<li>
							<strong>Email:</strong>
							<em><a href="mailto:{{ $kontak->email }}">{{ $kontak->email }}</a></em>
						</li>
						@endif
						@if(!empty($kontak->ym))
						<li>
							<strong>Chat:</strong>
							<em>
								<i>{{ ymyahoo($kontak->ym) }}</i>
							</em>
						</li>
						@endif
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bar haslayout">
		<div class="container">
			<div class="pull-left left">
				<p>&copy; <a href="{{url('home')}}">{{ short_description(Theme::place('title'),80) }} {{ date('Y') }}</a> | All Rights Reserved. Powered by <a class="title-copyright" href="//jarvis-store.com" target="_blank"> Jarvis Store</a></p>
			</div>
			<div class="pull-right right">
				@foreach(list_banks() as $bank)
				@if($bank->status == 1)
				<img src="{{ bank_logo($bank) }}" alt="{{ $bank->bankdefault->nama }}" title="{{ $bank->bankdefault->nama }}">
				@endif
				@endforeach
				@foreach(list_payments() as $pay)
					@if($pay->nama == 'ipaymu' && $pay->aktif == 1)
					<img src="{{ url('img/bank/ipaymu.jpg') }}" alt="ipaymu" title="Ipaymu">
					@endif
					@if($pay->nama == 'bitcoin' && $pay->aktif == 1)
					<img src="{{ url('img/bitcoin.png') }}" alt="bitcoin" title="Bitcoin">
					@endif
				@endforeach
				@if(count(list_dokus()) > 0 && list_dokus()->status == 1)
				<img src="{{ url('img/bank/doku.jpg') }}" alt="doku myshortcart" title="Doku">
				@endif
				@if(count(list_veritrans()) > 0 && list_veritrans()->status == 1 && list_veritrans()->type == 1)
				<img src="{{ url('img/bank/veritrans.png') }}" alt="Veritrans" title="Veritrans">
				@endif
			</div>
		</div>
	</div>
</footer>
<!--************************************
		Footer End
*************************************-->
{{ pluginPowerup() }} 