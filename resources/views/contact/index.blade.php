@extends('backend.admin_master')
@section('admin_content')
<div class="card-body">
	<h2>Contact Massege</h2>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th scope="col">SL NO</th>
				<th scope="col">First Name</th>
				<th scope="col">Last Name</th>
				<th scope="col">Phone</th>
				<th scope="col">Email</th>
				<th scope="col">Subject</th>
				<th scope="col">Massege</th>
				<th scope="col">Action</th>
				
			</tr>
		</thead>
		<tbody>
			@foreach ($contact as $item)
				
			
			<tr>
				<td scope="row">{{ $item->id}}</td>
				<td scope="row">{{ $item->first_name}}</td>
				<td scope="row">{{ $item->last_name}}</td>
				<td scope="row">{{ $item->phone}}</td>
				<td scope="row">{{ $item->email}}</td>
				<td scope="row">{{ $item->subject}}</td>
				<td scope="row">{{ $item->massege}}</td>
				<td style="text-align: center">
					<a href="{{ route('delete_massege',$item->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
				</td>
				
			</tr>
			@endforeach
			
			
		</tbody>
	</table>
	{{-- {{$category->links()}} --}}
</div>
@endsection