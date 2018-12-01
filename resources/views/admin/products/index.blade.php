@extends('admin.master')

@section('admin_content')
	<div>
		<div class="row mt-2">
			<div class="col-md-6">
				Product list
			</div>
			<div class="col-md-6 text-right">
				<a href="{{route('admin.product.create')}}">
					<button class="btn btn-sm">Add Product</button>
				</a>
			</div>
		</div>
		<div>
			<div class="form-group row">
				<div class="col-sm-12">
					@if (session()->has('message'))
					    <div class="alert alert-success">
					        {{session('message')}}
					    </div>
					@endif
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12 col-12">
				<table class="table table-striped">
				    <thead>
				      <tr>
				        <th>SN</th>
				        <th>Name</th>
				        <th>Price</th>
				        <th>Description</th>
				        <th>Created At</th>
				        <th>Preview</th>
				        <th>Action</th>
				      </tr>
				    </thead>
				    <tbody>
				    @if(count($products)>0)
				    @foreach($products as $product)
				      <tr>
				        <td>{{$product->id}}</td>
				        <td>{{$product->title}}</td>
				        <td>{{$product->price}}</td>
				        <td>{{$product->description}}</td>
				        <td>{{$product->created_at}}</td>
				        <td>
				        	<img src="{{$product->photo}}" alt="" width="100px" height="60px">
				        </td>
				        <td>
				        	<a href="{{route('admin.product.edit', $product->id)}}" class="btn btn-warning btn-sm">Edit</a>
				        	<a href="javascript:;" onclick="confirmDelete('{{$product->id}}')" class="btn btn-danger btn-sm">delete</a>

				        	 <form id="delete-form-{{$product->id}}" action="{{ route('admin.product.destroy',$product->id) }}" method="post" style="display: none;">
				        	 	<input type="hidden" name="product" value="{{$product->id}}">
				        	 	@method('DELETE')
							  	@csrf
							</form>
				        </td>
				      </tr>
				      @endforeach
				      @else
				      <tr>
				      	<td>Categories Not found</td>
				      </tr>
				      @endif
				    </tbody>
				  </table>
			</div>
		</div>
	</div>
	<script>
		function confirmDelete(id) {
			let choice  = confirm("are you sure ?");
			if (choice) {
				document.getElementById('delete-form-'+id).submit();
			}
		}
	</script>
@endsection
