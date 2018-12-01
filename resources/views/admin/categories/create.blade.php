@extends('admin.master')

@section('admin_content')
	
	<form action="{{route('admin.category.store')}}" method="post">
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
	    <label for="description">Description</label>
	   	<textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
	   </div>
	  <button type="submit" class="btn btn-default">Submit</button>
	</form>

@endsection