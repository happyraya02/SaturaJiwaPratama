@extends('layouts.ecommerce')

@section('content')

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="images/product-1.jpg" class="image-popup"><img src="{{ asset('storage/products/' . $product->image) }}" class="img-fluid" alt="{{ $product->name }}"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3>{{ $product->name }}</h3>
    				<div class="rating d-flex">
							<p class="text-left mr-4">
								<a class="mr-2">5.0</a>
								<a><span class="ion-ios-star-outline"></span></a>
								<a><span class="ion-ios-star-outline"></span></a>
								<a><span class="ion-ios-star-outline"></span></a>
                                <a><span class="ion-ios-star-outline"></span></a>
								<a><span class="ion-ios-star-outline"></span></a>
							</p>
                        </div>
								<a class="active">
                                    <span>Kategori</span> : {{ $product->category->name }}</a>
    				<p class="price"><span>Rp {{ number_format($product->price) }}</span></p>
    				<p>{!! $product->description !!}
						</p>
						<div class="row mt-4">
							<div class="col-md-6">
								<div class="form-group d-flex">
		              <div class="select-wrap">
	                </div>
		            </div>
							</div>
                <div class="w-100"></div>
                <form action="{{ route('front.cart') }}" method="POST">
                        @csrf
				<div class="input-group col-md-6 d-flex mb-3">
	             	<span class="input-group-btn mr-2">
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
                   <a href="cart.html" class="btn btn-black py-3 px-5">Add to Cart</a>

                  </form>
          	        </div>
                </div>
                </form>
            </div>
    	</div>
    </section>

	<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
          	<h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
          	<span>Get e-mail updates about our latest shops and special offers</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
@endsection
