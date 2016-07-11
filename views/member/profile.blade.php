<!--************************************
		Banner Start
*************************************-->
<section class="banner haslayout parallax-window hidden-xs" data-position="center 0" data-parallax="scroll" data-bleed="100" data-speed="0.2" data-image-src="{{ url(dirTemaToko().'fashioner/assets/images/bg-footer.png') }}">
	<div class="container">
		<h1>Update Profile</h1>
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
		<span class="page-title">Update Profile</span>
		<ol class="breadcrumb">
			<li><a href="{{ url('home') }}">Home</a></li>
			<li><a href="{{ url('member') }}">Member</a></li>
			<li class="active">Update Profile</li>
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
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							{{ Form::open(array('url'=>'member/update','method'=>'put','class'=>'form-horizontal')) }}
								<div class="form-group">
									<label class="col-md-2 control-label">Name</label>
									<div class="col-md-6">
										<input type="text" class="form-control theme-style" name="nama" value="{{ Input::old('nama') ? Input::old('nama') : $user->nama }}" placeholder="Name" required autofocus>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Email</label>
									<div class="col-md-6">
										<input type="email" class="form-control theme-style" name="email" value="{{ Input::old('email') ? Input::old('email') : $user->email }}" id="inputEmail1" placeholder="Email" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Phone</label>
									<div class="col-md-6">
										<input type="text" class="form-control theme-style" name="telp" value="{{ Input::old('telp') ? Input::old('telp') : $user->telp }}" placeholder="Phone" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Country</label>
									<div class="col-md-6">
										{{ Form::select('negara',array('' => '-- Choose Country --') + $negara, ($user ? $user->negara :(Input::old("negara") ? Input::old("negara") :"")), array('required'=>'', 'id'=>'negara', 'class'=>'form-control theme-style')) }}
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Province</label>
									<div class="col-md-6">
										{{ Form::select('provinsi',array('' => '-- Choose Province --') + $provinsi, ($user ? $user->provinsi :(Input::old("provinsi") ? Input::old("provinsi") :"")), array('required'=>'','id'=>'provinsi', 'class'=>'form-control theme-style')) }}
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">City</label>
									<div class="col-md-6">
										{{ Form::select('kota',array('' => '-- Choose City --') + $kota, ($user ? $user->kota :(Input::old("kota") ? Input::old("kota") :"")), array('required'=>'','id'=>'kota', 'class'=>'form-control theme-style')) }}
									</div>
								</div> 
								<div class="form-group">
									<label class="col-md-2 control-label">Address</label>
									<div class="col-md-6">
									   <textarea class="form-control theme-style" rows="3" placeholder="Address" name="alamat" required>{{ Input::old('alamat') ? Input::old('alamat') : $user->alamat }}</textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Postal Code</label>
									<div class="col-md-6">
										<input type="text" class="form-control theme-style" placeholder="Postal Code" name="kodepos" value="{{ Input::old('kodepos') ? Input::old('kodepos') : $user->kodepos }}" required>
									</div>
								</div>
								<hr>
								<div class="form-group">
									<label class="col-md-2 control-label">Current Password</label>
									<div class="col-md-6">
										<input type="password" class="form-control theme-style" name="oldpassword" placeholder="Current Password">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">New Password</label>
									<div class="col-md-6">
										<input type="password" class="form-control theme-style" name="password" placeholder="New Password">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Confirm Password</label>
									<div class="col-md-6">
										<input type="password" class="form-control theme-style" name="password_confirmation" placeholder="Confirm Password">
									</div>
								</div>
								<hr />
								<div class="form-group">
									<div class="col-md-offset-2 col-md-10">
										<button type="submit" class="theme-btn">Save</button>
									</div>
								</div>
							{{ Form::close() }}
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
						<div class="widget" id="powerup">
							{{ pluginSidePowerup() }}
						</div>
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