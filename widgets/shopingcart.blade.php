<button aria-expanded="true" aria-haspopup="true" data-toggle="dropdown" id="cart" type="button" class="btn-dropdown btn-cartitems">
	<em class="fa fa-shopping-cart"></em>
	<span>cart</span>
	<em class="fa fa-caret-down"></em>
</button>
<div class="dropdown-menu cartitems">
	<div class="top-arrow">
		@if(Shpcart::cart()->total_items() > 0)
		<strong class="title">Recently added item ({{ Shpcart::cart()->total_items() }})</strong>
		<ul class="cart-list">
			@foreach (Shpcart::cart()->contents() as $key => $cart)
			<li>
				<div class="product-img">
					<img alt="image description thumb-cart" src="{{ product_image_url($cart['image'],'thumb') }}" alt="{{ $cart['name'] }}">
				</div>
				<div class="detail">
					<span class="product-title">{{ $cart['name'] }}</span>
					<span class="price">Price: {{ price($cart['price']) }}</span>
					<span class="quantity">Quantity: {{ $cart['qty'] }}</span>
				</div>
				<i class="btn-delete-item remove-item"><a href="{{'javascript:deletecartdialog('."'".$cart['rowid']."'".')'}}">X</a></i>
			</li>
			@endforeach
		</ul>
		<div class="btn-area">
			<a class="theme-btn-sm btn-checkout" href="{{ url('checkout') }}">Checkout</a>
		</div>
		@else
		<p>You have no items in your cart</p>
		@endif
	</div>
</div>