@extends('frontend_master')
@section('frontend_content')
 <!-- Breadcrumbs Section -->
 <section class="breadcrumbs_aria">
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>SEO Services</h2>
                    <span><a href="{{ url('/')}}">Home</a> <i class="fa-solid fa-chevron-right"></i>SEO Services</span>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumbs Section -->

    <!-- Seo Section -->
    <section class="seo_aria home_2 about service">
        <div class="container custom_container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="content wow fadeInUp" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="section_title">
                            <span class="sub_title">Get the best</span>
                            <h2>Grow your business and <br>
                                get more profit</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do <br> eiusmod tempor
                                incididunt
                                ut labore. There are many variation <br> of passages of Lorem Ipsum available, but the
                                majority haveen <br> suffered alteration in some form <br>
                                <br>
                                By injected humour, or ranma omised words which don't look <br> sing hidden in the
                                middle of
                                text.
                            </p>
                        </div>
                        <a href="{{ route('contact')}}" class="min_btn">Contact us</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section_img wow fadeInLeft" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                        <img src="{{ asset('frontend') }}/assets/img/seo.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Seo Section -->

    <!-- Info Section -->
    <section class="info_box_aria two service">
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center wow fadeInUp" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <span class="sub_title">Our Services</span>
                        <h2>Services We Provide</h2>
                    </div>
                </div>
            </div>
            <div class="info_box_items style_2">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single_item">
                            <img src="{{ asset('frontend') }}/assets/img/icon/info_box/icon_11.svg" alt="">
                            <div class="content">
                                <h4>Seo</h4>
                                <p>Elements blocks from a range of categories to build pages that are rich in visual
                                    style.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_item">
                            <img src="{{ asset('frontend') }}/assets/img/icon/info_box/icon_12.svg" alt="">
                            <div class="content">
                                <h4>Content Optimization</h4>
                                <p>Elements blocks from a range of categories to build pages that are rich in visual
                                    style.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_item">
                            <img src="{{ asset('frontend') }}/assets/img/icon/info_box/icon_13.svg" alt="">
                            <div class="content">
                                <h4>On Page Optimization</h4>
                                <p>Elements blocks from a range of categories to build pages that are rich in visual
                                    style.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_item">
                            <img src="{{ asset('frontend') }}/assets/img/icon/info_box/icon_14.svg" alt="">
                            <div class="content">
                                <h4>Content Optimization</h4>
                                <p>Elements blocks from a range of categories to build pages that are rich in visual
                                    style.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_item">
                            <img src="{{ asset('frontend') }}/assets/img/icon/info_box/icon_15.svg" alt="">
                            <div class="content">
                                <h4>Speed Optimization</h4>
                                <p>Elements blocks from a range of categories to build pages that are rich in visual
                                    style.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_item">
                            <img src="{{ asset('frontend') }}/assets/img/icon/info_box/icon_16.svg" alt="">
                            <div class="content">
                                <h4>SEO Strategy</h4>
                                <p>Elements blocks from a range of categories to build pages that are rich in visual
                                    style.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape">
            <img src="{{ asset('frontend') }}/assets/img/shape/service_2.png" alt="" class="one">
            <img src="{{ asset('frontend') }}/assets/img/shape/service.png" alt="" class="two">
        </div>
    </section>
    <!-- Info Section -->

    <!-- Seo Section -->
    <section class="seo_aria home_3 style_two service_2">
        <div class="container custom_container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6">
                    <div class="section_img wow fadeInLeft" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                        <img src="{{ asset('frontend') }}/assets/img/seo_5.png" alt="">
                        <div class="shape">
                            <img src="{{ asset('frontend') }}/assets/img/shape/seo_mini.png" alt="" class="one">
                            <img src="{{ asset('frontend') }}/assets/img/shape/seo_mini_2.png" alt="" class="two">
                            <img src="{{ asset('frontend') }}/assets/img/shape/seo_mini_3.png" alt="" class="three">
                            <img src="{{ asset('frontend') }}/assets/img/shape/seo_mini_4.png" alt="" class="four">
                            <img src="{{ asset('frontend') }}/assets/img/shape/seo_mini_4.png" alt="" class="five">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content wow fadeInUp" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="section_title">
                            <span class="sub_title">Get the best</span>
                            <h2>Grow your business and <br>
                                get more profit</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do <br> eiusmod tempor
                                incididunt
                                ut labore. There are many variation <br> of passages of Lorem Ipsum available, but the
                                majority haveen <br> suffered alteration in some form <br>
                                <br>
                                By injected humour, or ranma omised words which don't look <br> sing hidden in the
                                middle of
                                text.
                            </p>
                            <div class="line_progress_bar">
                                <div class="single_items">
                                    <div class="progress_content">
                                        <h5>SEO Consultancy</h5>
                                        <span>80%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="80"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="single_items">
                                    <div class="progress_content">
                                        <h5>Market Research</h5>
                                        <span>90%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="single_items">
                                    <div class="progress_content">
                                        <h5>SEO Audit</h5>
                                        <span>60%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="60"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Seo Section -->

    <!-- Counter Section -->
    <section class="counter_aria home_3 text-center wow fadeInUp" data-wow-delay="0.1s"
        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <div class="container custom_container">
            <div class="items">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="item">
                            <span class="counter">200</span><i class="fa-solid fa-plus"></i>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item">
                            <span class="counter">850</span><i class="fa-solid fa-plus"></i>
                            <p>Projects Done</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item">
                            <span class="counter">25</span><i class="fa-solid fa-plus"></i>
                            <p>Expert People</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item">
                            <span class="counter">50</span><i class="fa-solid fa-plus"></i>
                            <p>Award Won</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section -->

    <!-- Price Section -->
    <section class="price_aria home_3">
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center wow fadeInUp" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <span class="sub_title">Best Pricing</span>
                        <h2>Our Pricing Plans</h2>
                    </div>
                </div>
            </div>
            <div class="priceing_plan text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="single_item wow fadeInLeft" data-wow-delay="0.1s"
                            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                            <div class="price_top">
                                <h5>Basic Package</h5>
                                <p>Personal use</p>
                                <img src="{{ asset('frontend') }}/assets/img/price/price_4.png" alt="">
                                <div class="price">
                                    <span class="price_before">$</span>
                                    <span class="amount">49</span>
                                    <span class="period ">/month</span>
                                </div>
                            </div>
                            <div class="price_bottom">
                                <ul class="price_list list-unstyled">
                                    <li>Product Recommendation</li>
                                    <li>Advanced Cart</li>
                                    <li>Facebook and Google Ads</li>
                                    <li>Order Nofications</li>
                                    <li>Landing Pages</li>
                                </ul>
                                <a href="pricing.html" class="min_btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_item wow fadeInUp" data-wow-delay="0.1s"
                            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                            <div class="price_top">
                                <h5>Standard Package</h5>
                                <p>Team use</p>
                                <img src="{{ asset('frontend') }}/assets/img/price/price_5.png" alt="">
                                <div class="price">
                                    <span class="price_before">$</span>
                                    <span class="amount">69</span>
                                    <span class="period ">/month</span>
                                </div>
                            </div>
                            <div class="price_bottom">
                                <ul class="price_list list-unstyled">
                                    <li>Product Recommendation</li>
                                    <li>Advanced Cart</li>
                                    <li>Facebook and Google Ads</li>
                                    <li>Order Nofications</li>
                                    <li>Landing Pages</li>
                                </ul>
                                <a href="pricing.html" class="min_btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_item wow fadeInRight" data-wow-delay="0.1s"
                            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
                            <div class="price_top">
                                <h5>Premium Package</h5>
                                <p>Personal use</p>
                                <img src="{{ asset('frontend') }}/assets/img/price/price_6.png" alt="">
                                <div class="price">
                                    <span class="price_before">$</span>
                                    <span class="amount">99</span>
                                    <span class="period ">/month</span>
                                </div>
                            </div>
                            <div class="price_bottom">
                                <ul class="price_list list-unstyled">
                                    <li>Product Recommendation</li>
                                    <li>Advanced Cart</li>
                                    <li>Facebook and Google Ads</li>
                                    <li>Order Nofications</li>
                                    <li>Landing Pages</li>
                                </ul>
                                <a href="pricing.html" class="min_btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Price Section -->

    <!-- Blog Section -->
    <section class="blog_aria">
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center wow fadeInUp" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <span class="sub_title">News info</span>
                        <h2>Our Latest Media</h2>
                    </div>
                </div>
            </div>
            <div class="blog_post_aria">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="single_blog">
                            <div class="blog_top">
                                <a href="blog-single.html" class="blog_thumb">
                                    <img src="{{ asset('frontend') }}/assets/img/blog/blog.png" alt="">
                                </a>
                                <a href="blog-single.html" class="category">Travel</a>
                            </div>
                            <div class="blog_content">
                                <h3><a href="blog-single.html">Using Backlighting to Enhan Your Images</a></h3>
                                <div class="blog_bottom">
                                    <p class="author"><a href="blog-single.html">By Filip Justić</a></p>
                                    <p class="date">21 Aug, 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_blog">
                            <div class="blog_top">
                                <a href="blog-single.html" class="blog_thumb">
                                    <img src="{{ asset('frontend') }}/assets/img/blog/blog_2.png" alt="">
                                </a>
                                <a href="blog-single.html" class="category">Technology</a>
                            </div>
                            <div class="blog_content">
                                <h3><a href="blog-single.html">Using Backlighting to Enhan Your Images</a></h3>
                                <div class="blog_bottom">
                                    <p class="author"><a href="blog-single.html">By Filip Justić</a></p>
                                    <p class="date">21 Aug, 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_blog">
                            <div class="blog_top">
                                <a href="blog-single.html" class="blog_thumb">
                                    <img src="{{ asset('frontend') }}/assets/img/blog/blog_3.png" alt="">
                                </a>
                                <a href="blog-single.html" class="category">Travel</a>
                            </div>
                            <div class="blog_content">
                                <h3><a href="blog-single.html">Using Backlighting to Enhan Your Images</a></h3>
                                <div class="blog_bottom">
                                    <p class="author"><a href="blog-single.html">By Filip Justić</a></p>
                                    <p class="date">21 Aug, 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section -->

    <!-- Faq Section -->
    <section class="faq_aria">
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center wow fadeInUp" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <span class="sub_title">Faq</span>
                        <h2>Have Any Questions?</h2>
                    </div>
                </div>
            </div>
            <div class="faq_contents">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="collapse_items">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            Register for a course for free
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Choose your training and register for free. If you
                                            are a freelancer, the courses are entirely taken care of, you have nothing
                                            to pay and no money to advance.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            Take your course online
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Choose your training and register for free. If you
                                            are a freelancer, the courses are entirely taken care of, you have nothing
                                            to pay and no money to advance.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                            Ask your questions online
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Choose your training and register for free. If you
                                            are a freelancer, the courses are entirely taken care of, you have nothing
                                            to pay and no money to advance.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                            Validate your obligations
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Choose your training and register for free. If you
                                            are a freelancer, the courses are entirely taken care of, you have nothing
                                            to pay and no money to advance.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section_img wow fadeInLeft" data-wow-delay="0.1s"
                            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                            <img src="{{ asset('frontend') }}/assets/img/faq.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq Section -->
@endsection