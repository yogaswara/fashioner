<!--************************************
		Banner Start
*************************************-->
<section class="banner haslayout parallax-window hidden-xs" data-position="center 0" data-parallax="scroll" data-bleed="100" data-speed="0.2" data-image-src="{{ url(dirTemaToko().'fashioner/assets/images/bg-footer.png') }}">
	<div class="container">
		<h1>Order History</h1>
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
		<span class="page-title">Order History</span>
		<ol class="breadcrumb">
			<li><a href="{{ url('home') }}">Home</a></li>
			<li><a href="{{ url('member') }}">Member</a></li>
			<li class="active">Order History</li>
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
							@if(list_order()->count() > 0)
							<div class="table-responsive">
								<table class="table table-hover" id="table-order">
									<thead>
										<tr>
											<th><span>Order Number</span></th>
											<th><span>Order Date</span></th>
											<th><span>Detail Order</span></th>
											<th><span>Total</span></th>
											<th><span>Tracking Number</span></th>
											<th><span>Status</span></th>
											<th><span></span></th>
										</tr>
									</thead>
									<tbody>
										@foreach (list_order() as $item)
										<tr>
											<td>{{ prefixOrder().$item->kodeOrder }}</td>
											<td>{{ waktu($item->tanggalOrder) }}</td>
											<td>
												<ul>
													@foreach ($item->detailorder as $detail)
													<li>{{$detail->produk->nama}} {{$detail->opsiSkuId !=0 ? '('.$detail->opsisku["opsi1"].($detail->opsisku["opsi2"] != '' ? ' / '.$detail->opsisku["opsi2"]:'').($detail->opsisku["opsi3"] !='' ? ' / '.$detail->opsisku["opsi3"]:'').')':''}} - {{$detail->qty}}</li>
													@endforeach 
												</ul>
											</td>
											<td>{{ price($item->total) }}</td>
											<td>{{ $item->noResi!="" ? $item->noResi : "-" }}</td>
											<td>
											@if($pengaturan->checkoutType==1) 
												@if($item->status==0)
												<span class="label label-warning">Pending</span>
												@elseif($item->status==1)
												<span class="label label-warning">Confirmation is Received</span>
												@elseif($item->status==2)
												<span class="label label-success">Payments Accepted</span>
												@elseif($item->status==3)
												<span class="label label-info">Delivered</span>
												@elseif($item->status==4)
												<span class="label label-default">Cancel</span>
												@endif 
											@endif
											</td>
											<td>
											@if($pengaturan->checkoutType==1) 
												@if($item->status < 1)
												<button onclick="window.open('{{url('konfirmasiorder/'.$item->id)}}','_blank')" class="btn btn-small btn-danger"><i class="fa fa-edit"></i></button>
												@endif 
											@endif
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
							{{ list_order()->links() }} 
							@else
							<span class="result">You have not had any transactions.</span>
							@endif
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