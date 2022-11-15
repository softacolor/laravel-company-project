@extends('backend.admin_master')
@section('admin_content')

<div class="card card-default">
	<div class="card-header card-header-border-bottom">
		<h2>Add Category</h2>
	</div>
	<div class="card-body">
		<form method="POST" action="{{ route('store_cat')}}">
			@csrf
			<div class="form-group">
				<label for="exampleFormControlInput1">Category Name</label>
				<input type="text" class="form-control" id="exampleFormControlInput1" name="category" placeholder="Enter Category Name">
				@error('category')
					<span class="text-danger">{{ $message}}</span>
				@enderror
			</div>
			<div class="form-footer pt-4 pt-5 mt-4 border-top">
				<button type="submit" class="btn btn-primary btn-default">Submit</button>
			</div>
		</form>
	</div>
</div>

@endsection