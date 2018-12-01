@extends('admin.master')

@section('admin_content')
	<div>
		<div class="row mt-2">
			<div class="col-md-6">
				Category list
			</div>
			<div class="col-md-6 text-right">
				<a href="{{route('admin.category.create')}}">
					<button class="btn btn-sm">Add Category</button>
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
				        <th>Category Name</th>
				        <th>Description</th>
				        <th>Created At</th>
				        <th>Action</th>
				      </tr>
				    </thead>
				    <tbody>
				    @if(count($categories)>0)
				    @foreach($categories as $category)
				      <tr>
				        <td>{{$category->id}}</td>
				        <td>{{$category->title}}</td>
				        <td>{{$category->description}}</td>
				        <td>{{$category->created_at}}</td>
				        <td>
				        	<a href="{{route('admin.category.edit', $category->id)}}" class="btn btn-warning btn-sm">Edit</a>
				        	<a href="javascript:;" onclick="confirmDelete('{{$category->id}}')" class="btn btn-danger btn-sm">delete</a>

				        	 <form id="delete-form-{{$category->id}}" action="{{ route('admin.category.destroy',$category->id) }}" method="post" style="display: none;">
				        	 	<input type="hidden" name="category" value="{{$category->id}}">
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
