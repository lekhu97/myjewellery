@extends('admin.master')

@section('admin_content')
	<form action="{{url('product_update')}}" method="post" enctype="multipart/form-data">
		@csrf

		<div class="form-group row">
			<div class="col-sm-12">
				@if (session()->has('message'))
				    <div class="alert alert-success">
				        {{session('message')}}
				    </div>
				@endif
			</div>
		</div>
	  <div class="form-group">
	    <label for="title">Title</label>
	    <input type="text" class="form-control" id="title" name="title" value="{{$product->title}}">
	  </div>
	  <div class="form-group">
	    <label for="price">Price</label>
	    <input type="number" class="form-control" id="price" name="price" value="{{$product->price}}">
	  </div>
	  <div class="form-group">
	    <label for="price">Category</label>
	    <select name="category_id" id="" class="form-control">
	    	@foreach($categories as $cat)
	    	<option value="{{$cat->id}}" class="form-control">{{$cat->title}}</option>
	    	@endforeach
	    </select>
	  </div>
	  <div class="form-group">
	    <label for="description">Description</label>
	   	<textarea name="description" id="description" cols="30" rows="5" class="form-control">{!! $product->description !!}</textarea>
	   </div>
	  <div class="form-group">
	    <label for="photo">Photo</label>
	    <input type="file" class="form-control" id="photo" name="photo" value="{{$product->photo}}">

	    <input type="text" name="id" value="{{$product->id}}" hidden="">
	  </div>
	  <button type="submit" class="btn btn-default">Update</button>
	</form>
@endsection