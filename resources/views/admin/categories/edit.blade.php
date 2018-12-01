@extends('admin.master')

@section('admin_content')
	<div class="mt-20">
	<form action="{{url('category_update')}}" method="post">
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
		    <input type="text" class="form-control" id="title" name="title" value="{{$category->title}}">
		    <input type="text" name="id" value="{{$category->id}}" hidden="hidden">
		  </div>
		  <div class="form-group">
		    <label for="description">Description</label>
		   	<textarea name="description" id="description" cols="30" rows="5" class="form-control">{!! $category->description !!}</textarea>
		   </div>
	  <button type="submit" class="btn btn-default">Update</button>
	</form>
</div>
@endsection