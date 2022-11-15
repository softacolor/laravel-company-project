@extends('backend.admin_master')
@section('admin_content')
<div class="card-body">
	<h2>All Categories</h2>
	<h2 style="text-align: right"><a href="{{ route('add_cat')}}" class="btn btn-primary">Add Category</a></h2>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th scope="col">SL NO</th>
				<th scope="col">Category Name</th>
				<th scope="col">Action</th>
				
			</tr>
		</thead>
		<tbody>
			@foreach ($category as $item)
				
			
			<tr>
				<td scope="row">{{ $item->id}}</td>
				<td>{{ $item->category}}</td>
				<td style="text-align: center">
					<a href="{{ route('edit_cat',$item->id)}}" class="btn btn-info">Edit</a>
					<a href="{{ route('delete_cat',$item->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
				</td>
				
			</tr>
			@endforeach
			
			
		</tbody>
	</table>
	{{-- {{$category->links()}} --}}
</div>
@endsection