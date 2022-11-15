@extends('backend.admin_master')
@section('admin_content')

<div class="card card-default">
	<div class="card-header card-header-border-bottom">
		<h2>Add Setting</h2>
	</div>
	<div class="card-body">
		<form method="POST" action="{{ route('store_setting')}}">
			@csrf
			<div class="form-group">
				<label for="exampleFormControlInput1">Meta Title</label>
				<input type="text" class="form-control" id="exampleFormControlInput1" name="meta_title" placeholder="Enter title">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">Meta Description</label>
				<input type="text" class="form-control" id="exampleFormControlInput1" name="meta_des" placeholder="Enter meta Description">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">Google Verification</label>
				<input type="text" class="form-control" id="exampleFormControlInput1" name="google_code">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">Bing</label>
				<input type="text" class="form-control" id="exampleFormControlInput1" name="bing">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">Yandex</label>
				<input type="text" class="form-control" id="exampleFormControlInput1" name="yandex">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">Google Tag</label>
				<input type="text" class="form-control" id="exampleFormControlInput1" name="google_tag">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">Google Analytics</label>
				<input type="text" class="form-control" id="exampleFormControlInput1" name="google_analytics">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">Meta Keyword</label>
				<textarea name="meta_keyword" id="exampleFormControlInput1" id="" class="form-control" placeholder="Enter Meta keyword" cols="30" rows="10"></textarea>
			</div>
			<div class="form-footer pt-4 pt-5 mt-4 border-top">
				<button type="submit" class="btn btn-primary btn-default">Submit</button>
			</div>
		</form>
	</div>
</div>

@endsection