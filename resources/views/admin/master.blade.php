@extends('layouts.master')

@section('content')

    <div>
        <div class="row">
        	<div class="col-lg-2 col-md-2">
	          @include('admin.inc.sidebar')
	      	</div>
            
            <div class="col-lg-10 col-md-10">
	            @yield('admin_content')
	        </div>
        </div>
    </div>

@endsection
