@extends('layouts.master')
@section('content')
<div class="container">
	<div class="row">
    <div class="form-group row">
      <div class="col-sm-12">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif
      </div>
    </div>
    <h3>Thank You !!</h3>
	</div>
</div>
@endsection