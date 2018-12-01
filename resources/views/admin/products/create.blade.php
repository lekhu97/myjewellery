@extends('admin.master')

@section('admin_content')
	<form action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
		@csrf
		<div class="form-group row">
			<div class="col-sm-12">
				@if ($errors->any())
				    <div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				@endif
			</div>
		</div>

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
	    <input type="text" class="form-control" id="title" name="title">
	  </div>
	  <div class="form-group">
	    <label for="price">Price</label>
	    <input type="number" class="form-control" id="price" name="price">
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
	   	<textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
	   </div>
	  <div class="form-group">
	    <label for="photo">Photo</label>
	    <input type="file" class="form-control" id="photo" name="photo">
	  </div>
	  <button type="submit" class="btn btn-default">Submit</button>
	</form>
@endsection