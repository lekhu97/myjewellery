@extends('layouts.master')
@section('content')
   <form action="{{route('profile.update')}}" method="post">
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
	    <label for="title">Name</label>
	    <input type="text" class="form-control" id="title" value="{{$user->name}}" readonly>
	    <input type="text" class="form-control" id="user_id" name="user_id" value="{{$user->id}}" hidden="hidden">
	  </div>
	  <div class="form-group">
	    <label for="title">Address</label>
	    <input type="text" class="form-control" id="title" name="address" value="{{$profile->address}}">
	  </div>
	  <div class="form-group">
	    <label for="title">Phone</label>
	    <input type="number" class="form-control" id="title" name="phone" value="{{$profile->phone}}">
	  </div>
	  <div class="form-group">
	    <label for="title">Slug</label>
	    <input type="text" class="form-control" id="title" name="slug" value="{{$profile->slug}}">
	  </div>
	 
	  <button type="submit" class="btn btn-default">Submit</button>
	  <a href="{{route('profile',$user->id)}}" class="btn btn-default">Back</a>
	</form>

@endsection