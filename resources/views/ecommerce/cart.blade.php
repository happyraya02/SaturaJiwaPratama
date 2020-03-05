@extends('layouts.ecommerce')

@section('content')

   <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home</a></span> <a href="{{ route('front.list_cart') }}">Cart</a>
            <h1 class="mb-0 bread">My Cart</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
                        <form action="{{ route('front.update_cart') }}" method="post">
                    @csrf
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Product name</th>
						        <th>Price</th>
						        <th>Quantity</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody>

                                @forelse ($carts as $row)
						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>

						        <td class="image-prod"><div class="img" style="background-image:url({{ asset('storage/products/' . $row['product_image']) }});"></div></td>

						        <td class="product-name">
						        	<h3>{{ $row['product_name'] }}</h3>
						        	<p>{!! $row->description !!}</p>
						        </td>

						        <td class="price">Rp {{ number_format($row['product_price']) }}</td>

						        <td class="quantity">
						        	<div class="input-group mb-3">
                                     <input type="text" name="qty[]" id="sst{{ $row['product_id'] }}" maxlength="12" value="{{ $row['qty'] }}" title="Quantity:" class="quantity form-control input-number">
                                     <input type="hidden" name="product_id[]" value="{{ $row['product_id'] }}" class="form-control">
                                     <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
                                        <i class="ion-ios-remove"></i>
                                            </button>
                                            </span>
                                        <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="form-control input-number" value="1" min="1" max="100">
                                        <input type="hidden" name="product_id" value="{{ $product->id }}" class="form-control">
                                            <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                                            <i class="ion-ios-add"></i>
                                        </button>
					          	</div>
                              </td>
                            </tr>
							<tr class="bottom_button">
								<td>
									<button class="gray_btn">Update Cart</button>
                                </td>
                            </tr>
                                @empty
                            @endforelse
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-end">
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Coupon Code</h3>
    					<p>Enter your coupon code if you have one</p>
  						<form action="#" class="info">
	              <div class="form-group">
	              	<label for="">Coupon code</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	            </form>
    				</div>
    				<p><a href="checkout.html" class="btn btn-primary py-3 px-4">Apply Coupon</a></p>
    			</div>
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Estimate shipping and tax</h3>
    					<p>Enter your destination to get a shipping estimate</p>
  						<form action="#" class="info">
	              <div class="form-group">
	              	<label for="">Country</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	              <div class="form-group">
	              	<label for="country">State/Province</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	              <div class="form-group">
	              	<label for="country">Zip/Postal Code</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	            </form>
    				</div>
    				<p><a href="checkout.html" class="btn btn-primary py-3 px-4">Estimate</a></p>
    			</div>
    		</div>
			</div>
        </section>
        @endsection
