@extends('admin.master')

@section('admin_content')
	<div>
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
@endsection