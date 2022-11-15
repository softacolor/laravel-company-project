@extends('backend.admin_master')
@section('admin_content')

<div class="card card-default">
	<div class="card-header card-header-border-bottom">
		<h2>Add Post</h2>
	</div>
	<div class="card-body">
		<form method="post" enctype="multipart/form-data" action="{{ route('store_post')}}">
			@csrf
			<div class="form-group">
				<label for="exampleFormControlInput1">Title</label>
				<input type="text" class="form-control" id="exampleFormControlInput1" name="title" placeholder="Enter Title">
			</div>
			<div class="form-group">
				<label for="exampleFormControlPassword">Sub Title</label>
				<input type="text" class="form-control" id="exampleFormControlPassword" name="subtitle" placeholder="Enter Subtitle">
			</div>
			<div class="form-group">
				<label for="exampleFormControlFile1">Image</label>
				<input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
			</div>

			<div class="form-group">
				<label for="exampleFormControlSelect12">Category</label>
				<select class="form-control" id="exampleFormControlSelect12" name="category_id">
					<option disabled="" selected="">Select Category</option>
					@foreach ($cat as $item)
					<option value="{{ $item->id}}">{{ $item->category}}</option>
					@endforeach
				</select>
			</div>

			<div class="form-group">
				<label for="exampleFormControlTextarea1">Description</label>
				<textarea class="form-control" name="description" id="summernote" rows="3"></textarea>
			</div>

			<div class="form-group">
				<label for="exampleFormControlPassword">Tags</label>
				<input type="text" class="form-control" id="exampleFormControlPassword" name="tags" placeholder="Enter Tags">
			</div>
			
			<div class="form-footer pt-4 pt-5 mt-4 border-top">
				<button type="submit" class="btn btn-primary btn-default">Submit</button>
			</div>
		</form>
	</div>
</div>

@endsection