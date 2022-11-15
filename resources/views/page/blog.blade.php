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
<section class="blog_list_area sec_pad">
    <div class="container custom_container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog_main">
                    <article class="blog_post_item zoom_in_effect">
                        <div class="post_media">
                            <a href="blog-single.html"><img class="zoom_in_img"
                                    src="{{ asset('frontend') }}/assets/img/blog/blog_two/blog-2.webp" alt=""></a>
                            <div class="post_date">
                                01 <span>Jan</span>
                            </div>
                        </div>
                        <div class="media_blog_content">
                            <a href="blog-single.html">
                                <h2 class="blog_title">Why I say old chap that is spiffing jolly good.</h2>
                            </a>
                            <p>Only a quid bobby brilliant buger Jeffrey owt to do with me lurgy blimey cheers well
                                me old muck geeza bodge some dodgy chav. Say me old mucker bobby I a he lost his
                                bottle a load of old tosh cup of char cheers bleeding bugger.!
                            </p>
                            <div class="post_bottom">
                                <a href="blog-single.html" class="learn_btn_two">Read More</a>
                                <a href="blog-single.html" class="post_comments">03 Comments</a>
                            </div>
                        </div>
                    </article>
                    <article class="blog_post_item zoom_in_effect">
                        <div class="post_media">
                            <a href="blog-single.html" class="blog_img_overlay"><img class="zoom_in_img"
                                    src="{{ asset('frontend') }}/assets/img/blog/blog_two/img2.webp" alt=""></a>
                            <div class="post_date">
                                01 <span>Jan</span>
                            </div>
                            <a class="popup-youtube video_icon"
                                href="https://www.youtube.com/watch?v=1QTOpTZRvnU"><i class="fa fa-play"></i></a>
                        </div>
                        <div class="media_blog_content">
                            <a href="blog-single.html">
                                <h2 class="blog_title">Why I say old chap that is spiffing jolly good.</h2>
                            </a>
                            <p>Only a quid bobby brilliant buger Jeffrey owt to do with me lurgy blimey cheers well
                                me old muck geeza bodge some dodgy chav. Say me old mucker bobby I a he lost his
                                bottle a load of old tosh cup of char cheers bleeding bugger.!
                            </p>
                            <div class="post_bottom">
                                <a href="blog-single.html" class="learn_btn_two">Read More</a>
                                <a href="blog-single.html" class="post_comments">03 Comments</a>
                            </div>
                        </div>
                    </article>
                    <blockquote class="blockquote">
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                        <p>Why I say old chap that is spiffing spend penny tosser brolly the little rotter fanny
                            around argy bargy.</p>
                    </blockquote>
                    <article class="blog_post_item zoom_in_effect">
                        <div class="post_media">
                            <a href="blog-single.html"><img class="zoom_in_img"
                                    src="{{ asset('frontend') }}/assets/img/blog/blog_two/img2.webp" alt=""></a>
                            <div class="post_date">
                                01 <span>Jan</span>
                            </div>
                        </div>
                        <div class="media_blog_content">
                            <a href="blog-single.html">
                                <h2 class="blog_title">Why I say old chap that is spiffing jolly good.</h2>
                            </a>
                            <p>Only a quid bobby brilliant buger Jeffrey owt to do with me lurgy blimey cheers well
                                me old muck geeza bodge some dodgy chav. Say me old mucker bobby I a he lost his
                                bottle a load of old tosh cup of char cheers bleeding bugger.!
                            </p>
                            <div class="post_bottom">
                                <a href="blog-single.html" class="learn_btn_two">Read More</a>
                                <a href="blog-single.html" class="post_comments">03 Comments</a>
                            </div>
                        </div>
                    </article>
                    <blockquote class="blockquote blockquote_two">
                        <i class="fa fa-link"></i>
                        <p>You may be losing users if responsive web design Is your only mobile strategy</p>
                    </blockquote>
                    <article class="blog_post_item">
                        <div class="media_blog_content">
                            <a href="blog-single.html">
                                <h2 class="blog_title">Why I say old chap that is spiffing jolly good.</h2>
                            </a>
                            <p>Only a quid bobby brilliant buger Jeffrey owt to do with me lurgy blimey cheers well
                                me old muck geeza bodge some dodgy chav. Say me old mucker bobby I a he lost his
                                bottle a load of old tosh cup of char cheers bleeding bugger.!
                            </p>
                            <div class="post_bottom">
                                <a href="blog-single.html" class="learn_btn_two">Read More</a>
                                <a href="blog-single.html" class="post_comments">03 Comments</a>
                            </div>
                        </div>
                    </article>
                    <article class="blog_post_item zoom_in_effect">
                        <div class="post_media">
                            <a href="blog-single.html"><img class="zoom_in_img"
                                    src="{{ asset('frontend') }}/assets/img/blog/blog_two/img5.webp" alt=""></a>
                            <div class="post_date">
                                14 <span>Aug</span>
                            </div>
                        </div>
                        <div class="media_blog_content">
                            <a href="blog-single.html">
                                <h2 class="blog_title">Why I say old chap that is spiffing jolly good.</h2>
                            </a>
                            <p>Only a quid bobby brilliant buger Jeffrey owt to do with me lurgy blimey cheers well
                                me old muck geeza bodge some dodgy chav. Say me old mucker bobby I a he lost his
                                bottle a load of old tosh cup of char cheers bleeding bugger.!
                            </p>
                            <div class="post_bottom">
                                <a href="blog-single.html" class="learn_btn_two">Read More</a>
                                <a href="blog-single.html" class="post_comments">03 Comments</a>
                            </div>
                        </div>
                    </article>
                    <nav class="navigation pagination" role="navigation">
                        <div class="nav-links">
                            <span aria-current="page" class="page-numbers current">1</span>
                            <a class="page-numbers" href="#">2</a>
                            <a class="next page-numbers" href="#"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </nav>
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
                    <div class="widget widget_recent_entries">
                        <h3 class="widget_title">Recent Posts</h3>
                        <ul class="list-unstyled">
                            <li>
                                <div class="recent_post_item">
                                    <a href="blog-single.html"><img src="{{ asset('frontend') }}/assets/img/blog/blog_two/recent_post1.webp"
                                            alt=""></a>
                                    <div class="recent_post_content">
                                        <a href="blog-single.html">
                                            <h5>Fast App development</h5>
                                        </a>
                                        <a href="blog-single.html" class="post_date">July 06, 2019</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="recent_post_item">
                                    <a href="blog-single.html"><img src="{{ asset('frontend') }}/assets/img/blog/blog_two/recent_post2.webp"
                                            alt=""></a>
                                    <div class="recent_post_content">
                                        <a href="blog-single.html">
                                            <h5>Fast App development</h5>
                                        </a>
                                        <a href="blog-single.html" class="post_date">July 16, 2019</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="recent_post_item">
                                    <a href="blog-single.html"><img src="{{ asset('frontend') }}/assets/img/blog/blog_two/recent_post3.webp"
                                            alt=""></a>
                                    <div class="recent_post_content">
                                        <a href="blog-single.html">
                                            <h5>Fast App development</h5>
                                        </a>
                                        <a href="blog-single.html" class="post_date">Jun 01, 2019</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget_categories">
                        <h3 class="widget_title">Categories</h3>
                        <ul class="list-unstyled">
                            <li class="cat-item">
                                <a href="blog-single.html">Fashion <span>(24)</span></a>
                            </li>
                            <li class="cat-item">
                                <a href="blog-single.html">Food for thought <span>(24)</span></a>
                            </li>
                            <li class="cat-item">
                                <a href="blog-single.html">Gaming <span>(93)</span></a>
                            </li>
                            <li class="cat-item">
                                <a href="blog-single.html">Uncategorized <span>(04)</span></a>
                            </li>
                            <li class="cat-item">
                                <a href="blog-single.html">SaasLand <span>(24)</span></a>
                            </li>
                            <li class="cat-item">
                                <a href="blog-single.html">Project Management <span>(104)</span></a>
                            </li>
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