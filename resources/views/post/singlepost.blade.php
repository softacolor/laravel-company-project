@extends('frontend_master')
@section('frontend_content')
 <!-- Breadcrumbs Section -->
 <section class="breadcrumbs_aria">
    <div class="container custom_container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Blog</h2>
                <span><a href="{{url('/')}}">Home</a> <i class="fa-solid fa-chevron-right"></i> Blog</span>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumbs Section -->
<!-- End medical blog list area -->
<section class="medical_blog_details_area sec_pad">
	<div class="container custom_container">
		<div class="row">
			<div class="col-lg-8">
				<div class="blog_single_info">
					<img class="mb_50" src="{{ asset($post->image) }}" alt="" width="100%">
					<br>
					<h1>{{$post->title}}</h1>
					<div class="media_blog_content">
						<p>
							{!! $post->description !!}
						</p>
						<blockquote class="blockquote">
							<i class="fas fa-quote-left"></i>
							<p>{{$post->subtitle}}</p>
						</blockquote>
						<p>
							{!! $post->description1 !!}
						</p>
						<div class="post_bottom">
							<div class="social_icon">
								Share
								<ul class="list-unstyled">
									<li><a href="https://www.facebook.com/"><i
												class="fa-brands fa-facebook-f"></i></a></li>
									<li><a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a></li>
									<li><a href="https://www.pinterest.com/"><i
												class="fa-brands fa-pinterest-p"></i></a></li>
									<li><a href="https://www.linkedin.com/"><i
												class="fa-brands fa-linkedin"></i></a></li>
												<li><a href="https://www.instagram.com/"><i
													class="fa-brands fa-instagram"></i></a></li>
								</ul>
							</div>

						</div>
						<div class="tagcloud">
							Tags:
							<p>{{$post->tags}}</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="blog_sidebar ps-xl-4">
					<div class="widget widget_search">
						<form action="#" class="search_form">
							<input type="search" name="s" class="form-control" placeholder="Search" value="">
							<button type="submit"><i class="fa fa-search"></i></button>
						</form>
					</div>

					@php
						$rpost =DB::table('posts')->orderBy('id','desc')->limit(4)->get();
					@endphp
					<div class="widget widget_recent_entries">
						<h3 class="widget_title">Recent Posts</h3>
						<ul class="list-unstyled">
							@foreach ($rpost as $item)
								
							
							<li>
								<div class="recent_post_item">
									<a href="{{URL::to('view/post/'.$item->id)}}"><img src="{{asset($item->image)}}"
											alt=""></a>
									<div class="recent_post_content">
										<a href="{{URL::to('view/post/'.$item->id)}}">
											<h5>{{$item->title}}</h5>
										</a>
										<a href="{{URL::to('view/post/'.$item->id)}}" class="post_date">{{$item->post_date}}</a>
									</div>
								</div>
							</li>
							@endforeach
						</ul>
					</div>

					@php
						$cat = DB::table('categories')->get();
					@endphp
					<div class="widget widget_categories">
						<h3 class="widget_title">Categories</h3>
						<ul class="list-unstyled">
							@foreach ($cat as $item)
								
							
							<li class="cat-item">
								<a href="blog-single.html">{{$item->category}} <span>(24)</span></a>
							</li>
							@endforeach
							
						</ul>
					</div>
					<div class="widget widget_tag_cloud">
						<h3 class="widget_title">Tag Cloud</h3>
						<div class="tagcloud">
							<a href="blog-single.html">SaasLand</a>
							<a href="blog-single.html">Web Design</a>
							<a href="blog-single.html">Saas</a>
							<a href="blog-single.html">Cooling System </a>
							<a href="blog-single.html">Corporate</a>
							<a href="blog-single.html">Software</a>
							<a href="blog-single.html">Landing</a>
							<a href="blog-single.html">Wheels</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End medical blog list area -->
@endsection