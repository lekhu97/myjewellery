@extends('layouts.master')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-6">
			<div class="card mt-4">
  
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <h3 class="card-title">Contact Person</h3>
                  <hr>
                  <h4>Name : {{Auth::user()->name}}</h3>
                  <h4>Email : {{Auth::user()->email}}</h3>
                  <h4>Phone : 989989889</h4>

                </div>
              </div>
            </div>
          </div>
		</div>
		<div class="col-6">
			<div class="card mt-4">
  
            <div class="card-body">
              <div class="row">
                <div class="col-6">
                  <div class="img_container">
                    <img class="card-img-top" src="{{asset($product->photo)}}" alt="">
                  </div>
                </div>
                <div class="col-6">
                  <h3 class="card-title">{{$product->title}}</h3>
                  <h4>Price : ${{$product->price}}</h4>
                  <p class="card-text">
                    {{$product->description}}
                  </p>
                  
                </div>
              </div>
              <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
              4.0 stars
            </div>
          </div>
		</div>

	</div>
	<div class="row">
		<form action="{{route('order.store')}}" method="post">
			@csrf
			<input type="text" name="product_name" value="{{$product->title}}" hidden="hidden">
			<input type="text" name="user_name" value="{{Auth::user()->name}}" hidden="hidden">
			<input type="text" name="price" value="{{$product->price}}" hidden="hidden">
			<input type="number" name="qty" value="1" class="form-control" min="1" step="1">
			<button type="submit" class="btn btn-success btn-sm mr-auto mt-5">Confirm Order</button>
		</form>
		
	</div>
</div>
@endsection