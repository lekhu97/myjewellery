@extends('layouts.master')
@section('content')
   <div class="row">
   	<div class="col-3 col-md-3 col-lg-3">
   		<ul class="profile">
   			<li>
   				<div>
   					<div class="row">
   						<div class="col-6">
			   				<div class="profile_img">
								<img src="{{asset('images/user.png')}}" alt="">
			   				</div>
   							
   						</div>
   						<div class="col-6" style="line-height: 4">
   							<a href="{{route('profile.edit',$user->id)}}" class="">Edit Profile</a>
   						</div>
   					</div>
   				</div>
   			</li>
   			<li>{{$user->name}}</li>
   			<li>{{$user->email}}</li>
   			<li>{{$profile->phone}}</li>
   			<li>{{$profile->address}}</li>
   		</ul>

   		
   	</div>
   	<div class="col-9 col-md-9 col-lg-9">
   		<h3>My Orders</h3>
   		<table class="table table-striped">
		    <thead>
		      <tr>
		        <th>SN</th>
		        <th>Customer</th>
		        <th>Product</th>
		        <th>Price</th>
		        <th>Quantity</th>
		        <th>Status</th>
		      </tr>
		    </thead>
		    <tbody>
		<?php foreach ($orders as $order): ?>
			<tr>
				<td>{{$order->id}}</td>
				<td>{{$order->user_name}}</td>
				<td>{{$order->product_name}}</td>
				<td>Rs. {{$order->price}}</td>
				<td>{{$order->qty}}</td>
				<td>{{$order->status}}</td>
			</tr>
		<?php endforeach ?>
   	</div>
   </div>
@endsection