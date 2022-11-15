@extends('backend.admin_master')
@section('admin_content')
<div class="card-body">
	<h2>All Setting</h2>
	<h2 style="text-align: right"><a href="{{ route('add_setting')}}" class="btn btn-primary">Add Setting</a></h2>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th scope="col">SL NO</th>
				<th scope="col">Meta Title</th>
				<th scope="col">Meta Description</th>
				<th scope="col">Meta Keyword</th>
				<th scope="col">Google Verification</th>
				<th scope="col">Bing</th>
				<th scope="col">Yandex</th>
				<th scope="col">Google Tag</th>
				<th scope="col">Google Analytic</th>
				<th scope="col">Action</th>
				
			</tr>
		</thead>
		<tbody>
			@foreach ($setting as $item)
				
			
			<tr>
				<td scope="row">{{ $item->id}}</td>
				<td>{{ $item->meta_title}}</td>
				<td>{{ $item->meta_des}}</td>
				<td>{{ $item->meta_keyword}}</td>
				<td>{{ $item->google_code}}</td>
				<td>{{ $item->bing}}</td>
				<td>{{ $item->yandex}}</td>
				<td>{{ $item->google_tag}}</td>
				<td>{{ $item->google_analytics}}</td>
				<td style="text-align: center">
					<a href="{{ route('edit_setting',$item->id)}}" class="btn btn-info">Edit</a>
				</td>
				
			</tr>
			@endforeach
			
			
		</tbody>
	</table>
	{{-- {{$category->links()}} --}}
</div>
@endsection