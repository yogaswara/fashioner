<!--************************************
		Banner Start
*************************************-->
<section class="banner haslayout parallax-window hidden-xs" data-position="center 0" data-parallax="scroll" data-bleed="100" data-speed="0.2" data-image-src="{{ url(dirTemaToko().'fashioner/assets/images/bg-footer.png') }}">
	<div class="container">
		<h1>Order Detail</h1>
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
		<span class="page-title">Order Detail</span>
		<ol class="breadcrumb">
			<li><a href="{{ url('home') }}">Home</a></li>
			<li class="active">Order Detail</li>
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
				<div class="col-sm-12">
					<div id="content">
						<div class="row">
							<div class="table-responsive">
								<table class="table table-hover">
									<thead>
										<tr>
											<th><span>Order Number</span></th>
											<th><span>Order Date</span></th>
											<th><span>Detail Order</span></th>
											<th><span>Total</span></th>
											<th><span>Tracking Number</span></th>
											<th><span>Status</span></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>{{ $checkouttype==1 ? prefixOrder().$order->kodeOrder : '-' }}</td>
											<td>{{ $checkouttype==1 ? waktu($order->tanggalOrder) : '-' }}</td>
											<td>
												<ul>
												@if ($checkouttype==1)
													@foreach ($order->detailorder as $detail)
													<li class="items">{{$detail->produk->nama}} {{$detail->opsiSkuId !=0 ? '('.$detail->opsisku->opsi1.($detail->opsisku->opsi2 != '' ? ' / '.$detail->opsisku->opsi2:'').($detail->opsisku->opsi3 !='' ? ' / '.$detail->opsisku->opsi3:'').')':''}} - {{ $detail->qty }}</li>
													@endforeach
												@else
													<li class="items">-</li>
												@endif
												</ul>
											</td>
											<td class="quantity">
												@if($checkouttype==1)
												{{ price($order->total) }}
												
												@else 
													@if($order->status < 2)
														{{ price($order->total) }}
													@elseif(($order->status > 1 && $order->status < 4) || $order->status==7)
														{{ price($order->total - $order->dp) }}
													@else
														0
													@endif
												@endif
											</td>
											<td class="sub-price">{{ $order->noResi != "" ? $order-noResi : "-"}}</td>
											<td class="total-price">
											@if($checkouttype==1)
												@if($order->status==0)
												<span class="label label-warning">Pending</span>
												@elseif($order->status==1)
												<span class="label label-warning">Confirmation is Received</span>
												@elseif($order->status==2)
												<span class="label label-success">Payments Accepted</span>
												@elseif($order->status==3)
												<span class="label label-info">Delivered</span>
												@elseif($order->status==4)
												<span class="label label-default">Cancel</span>
												@endif
											@endif  
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section id="add-testimonial" class="haslayout payment">
		<div class="container">
			@if($order->jenisPembayaran == 1 && $order->status == 0)
			<div class="heading-pattern">
				<h2>{{ trans('content.step5.confirm_btn') }}</h2>
			</div>
			{{-- */ $checkouttype==1 ? $konfirmasi = url('konfirmasiorder/'.$order->id) : '' /* --}}
			<form class="comment-form" action="{{ $konfirmasi }}" method="post">
				<fieldset class="row">
					<div class="form-group">
						<div class="col-sm-6">
							<input type="text" name="nama" class="form-control theme-style" placeholder="Bank Account Name" value="{{Input::old('nama')}}" required autofocus>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-6">
							<input type="text" name="noRekPengirim" class="form-control theme-style" placeholder="Bank Account Number" value="{{Input::old('noRekPengirim')}}" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-6">
							<select name="bank" class="form-control theme-style">
								<option value="">-- Select Payment --</option>
								@foreach ($banktrans as $bank)
								<option value="{{ $bank->id }}">{{ $bank->bankdefault->nama }} - {{ $bank->noRekening }} - A/n {{ $bank->atasNama }}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-6">
							@if($checkouttype==1) 
							<input type="number" name="jumlah" class="form-control theme-style" placeholder="Amount Paid" value="{{ $order->status==0 ? $order->total : '' }}" required>
							@else
								@if($order->status < 2)
								<input type="number" name="jumlah" class="form-control theme-style" placeholder="Amount Paid" value="{{ $order->dp }}" required>
								@elseif(($order->status > 1 && $order->status < 4) || $order->status==7)
								<input type="number" name="jumlah" class="form-control theme-style" placeholder="Amount Paid" value="{{ $order->total - $order->dp }}" required>
								@endif
							@endif
						</div>
					</div>
					<div class="form-group pull-left">
						<div class="col-sm-9">
							<button class="theme-btn" type="submit">Send</button>
						</div>
					</div>
				</fieldset>
			</form>
			@endif
			@if($paymentinfo!=null)
			<div class="heading-pattern">
				<h2>Paypal Payment Details</h2>
			</div>
			<hr>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr><td>Payment Status</td><td>:</td><td>{{$paymentinfo['payment_status']}}</td></tr>
					<tr><td>Payment Date</td><td>:</td><td>{{$paymentinfo['payment_date']}}</td></tr>
					<tr><td>Address Name</td><td>:</td><td>{{$paymentinfo['address_name']}}</td></tr>
					<tr><td>Payer Email</td><td>:</td><td>{{$paymentinfo['payer_email']}}</td></tr>
					<tr><td>Item Name</td><td>:</td><td>{{$paymentinfo['item_name1']}}</td></tr>
					<tr><td>Receiver Email</td><td>:</td><td>{{$paymentinfo['receiver_email']}}</td></tr>
					<tr><td>Total Payment</td><td>:</td><td>{{$paymentinfo['payment_gross']}} {{$paymentinfo['mc_currency']}}</td></tr>
				</table>
			</div>
			<p>Thanks you for your order.</p><br>
			@endif
			@if($order->jenisPembayaran==2)
				<div id="paypal">
					<div class="heading-pattern">
						<h2>{{ trans('content.step5.confirm_btn') }} Paypal</h2>
					</div>
					<p>{{ trans('content.step5.paypal') }}</p>
					{{ $paypalbutton }}
				</div>
			@elseif($order->jenisPembayaran==4) 
				@if(($checkouttype==1 && $order->status < 2) || ($checkouttype==3 && ($order->status!=6)))
				<div class="heading-pattern">
					<h2>{{ trans('content.step5.confirm_btn') }} iPaymu</h2>
				</div>
				<p>{{ trans('content.step5.ipaymu') }}</p>
				<a class="theme-btn ipaymu-btn" href="{{ url('ipaymu/'.$order->id) }}" target="_blank">{{ trans('content.step5.ipaymu_btn') }}</a>
				@endif
			@elseif($order->jenisPembayaran==5 && $order->status == 0)
				<div class="doku">
					<div class="heading-pattern">
						<h2>{{ trans('content.step5.confirm_btn') }} DOKU MyShortCart</h2>
					</div>
					<p>{{ trans('content.step5.doku') }}</p>
					{{ $doku_button }}
				</div>
			@elseif($order->jenisPembayaran == 6 && $order->status == 0)
				<div class="heading-pattern">
					<h2>{{ trans('content.step5.confirm_btn') }} Bitcoin</h2>
				</div>
				<p>{{ trans('content.step5.bitcoin') }}</p>
				{{ $bitcoinbutton }}
			@elseif($order->jenisPembayaran == 8 && $order->status == 0)
				<div class="heading-pattern">
					<h2>{{ trans('content.step5.confirm_btn') }} Veritrans</h2>
				</div>
				<p>{{ trans('content.step5.veritrans') }}</p>
				<button class="veritrans-btn" onclick="location.href='{{ $veritrans_payment_url }}'">
					{{ trans('content.step5.veritrans_btn') }}
				</button>
			@endif
		</div>
	</section>
</main>
<!--************************************
		Main End
*************************************-->