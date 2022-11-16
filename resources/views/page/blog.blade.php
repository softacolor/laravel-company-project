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
@php
$bpost =DB::table('posts')->orderBy('id','desc')->limit(3)->get();
@endphp
<!-- End medical blog list area -->
<section class="blog_list_area sec_pad">
    <div class="container custom_container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog_main">
                    @foreach ($bpost as $item)
                        
                    
                    <article class="blog_post_item zoom_in_effect">
                        <div class="post_media">
                            <a href="blog-single.html"><img class="zoom_in_img"
                                    src="{{ asset($item->image) }}" alt=""></a>
                            <div class="post_date">
                                <span>{{$item->post_month}}</span>
                            </div>
                        </div>
                        <div class="media_blog_content">
                            <a href="blog-single.html">
                                <h1 class="blog_title">{{$item->title}}</h1>
                            </a>
                            <p>
                                {!! $item->description!!}
                            </p>
                            <div class="post_bottom">
                                <a href="{{URL::to('view/post/'.$item->id)}}" class="learn_btn_two">Read More</a>
                                <a href="blog-single.html" class="post_comments">03 Comments</a>
                            </div>
                        </div>
                    </article>
                    @endforeach
                    
                    <nav class="navigation pagination" role="navigation">
                        <div class="nav-links">
                            <span aria-current="page" class="page-numbers current">1</span>
                            <a class="page-numbers" href="#">2</a>
                            <a class="next page-numbers" href="#"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </nav>
                </div>
            </div>

 @php
$rpost =DB::table('posts')->orderBy('id','asc')->limit(5)->get();
@endphp
            <div class="col-lg-4">
                <div class="blog_sidebar ps-xl-4">
                    <div class="widget widget_search">
                        <form action="#" class="search_form">
                            <input type="search" name="s" class="form-control" placeholder="Search" value="">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget widget_recent_entries">
                        <h3 class="widget_title">Recent Posts</h3>
                        <ul class="list-unstyled">
                            @foreach ($rpost as $item)
                                
                            
                            <li>
                                <div class="recent_post_item">
                                    <a href="blog-single.html"><img src="{{ asset($item->image) }}"
                                            alt=""></a>
                                    <div class="recent_post_content">
                                        <a href="blog-single.html">
                                            <h5>{{$item->title}}</h5>
                                        </a>
                                        <a href="blog-single.html" class="post_date">{{$item->post_date}}</a>
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