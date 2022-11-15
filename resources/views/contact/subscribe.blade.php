@extends('backend.admin_master')
@section('admin_content')
<div class="card-body">
	<h2>All Subscriber List</h2>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th scope="col">SL NO</th>
				<th scope="col">Phone</th>
				<th scope="col">Email</th>
				<th scope="col">Action</th>

				
			</tr>
		</thead>
		<tbody>
			@foreach ($subs as $item)
				
			
			<tr>
				<td scope="row">{{ $item->id}}</td>
				<td scope="row">{{ $item->phone}}</td>
				<td scope="row">{{ $item->email}}</td>
				<td style="text-align: center">
					<a href="{{ route('delete_subscriber',$item->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
				</td>
				
			</tr>
			@endforeach
			
			
		</tbody>
	</table>
	{{-- {{$category->links()}} --}}
</div>
@endsection