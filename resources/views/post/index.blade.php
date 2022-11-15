@extends('backend.admin_master')
@section('admin_content')
<div class="card-body">
	<h2>All Post</h2>
	<h2 style="text-align: right"><a href="{{ route('create_post')}}" class="btn btn-primary">Add Post</a></h2>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th scope="col">SL NO</th>
				<th scope="col">Category</th>
				<th scope="col">Title</th>
				<th scope="col">Sub Title</th>
				<th scope="col">Image</th>
				<th scope="col">Description</th>
				<th scope="col">Tags</th>
				<th scope="col">Action</th>
				
			</tr>
		</thead>
		<tbody>
			@foreach ($post as $item)
				
			
			<tr>
				<td scope="row">{{ $item->id}}</td>
				<td>{{ $item->category_id}}</td>
				<td>{{ $item->title}}</td>
				<td>{{ $item->subtitle}}</td>
				<td>{{ $item->image}}</td>
				<td>{{ $item->description}}</td>
				<td>{{ $item->tags}}</td>
				<td style="text-align: center">
					<a href="{{ route('edit_post',$item->id)}}" class="btn btn-info">Edit</a>
					<a href="{{ route('delete_post',$item->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
				</td>
				
			</tr>
			@endforeach
			
			
		</tbody>
	</table>
	{{-- {{$category->links()}} --}}
</div>
@endsection