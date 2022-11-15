@extends('frontend_master')
@section('frontend_content')
<!-- Breadcrumbs Section -->
<section class="breadcrumbs_aria">
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Youtube Marketing</h2>
                    <span><a href="{{ url('/')}}">Home</a> <i class="fa-solid fa-chevron-right"></i>Youtube
                        Marketing</span>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumbs Section -->

    <!-- Info Box Section -->
    <section class="info_box_aria two home_4_2 y_marketing">
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content">
                        <div class="section_title text-center wow fadeInUp" data-wow-delay="0.1s"
                            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                            <h2>Grow Your Youtube Marketing Strategy</h2>
                            <p>Burke blow off arse gutted mate what a plonker cup of tea <br> fantastic get stuffed
                                mate.!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="info_box_items style_2">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="single_item left">
                            <div class="icon">
                                <img src="{{ asset('frontend') }}/assets/img/icon/info_box/icon_10.svg" alt="">
                            </div>
                            <div class="content">
                                <h4>Awesome design</h4>
                                <p>Burke blow off arse gutted mate <br> what a plonker cup of fantastic <br> get stuffed
                                    mate.!
                                </p>
                            </div>
                        </div>
                        <div class="single_item left">
                            <div class="icon">
                                <img src="{{ asset('frontend') }}/assets/img/icon/info_box/icon_9.svg" alt="">
                            </div>
                            <div class="content">
                                <h4>Awesome design</h4>
                                <p>Burke blow off arse gutted mate <br> what a plonker cup of fantastic <br> get stuffed
                                    mate.!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-2">
                        <div class="section_img">
                            <img src="{{ asset('frontend') }}/assets/img/info_sec_2.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5">
                        <div class="single_item right">
                            <div class="icon">
                                <img src="{{ asset('frontend') }}/assets/img/icon/info_box/icon_8.svg" alt="">
                            </div>
                            <div class="content">
                                <h4>Awesome design</h4>
                                <p>Burke blow off arse gutted mate <br> what a plonker cup of fantastic <br> get stuffed
                                    mate.!
                                </p>
                            </div>
                        </div>
                        <div class="single_item right">
                            <div class="icon">
                                <img src="{{ asset('frontend') }}/assets/img/icon/info_box/icon_7.svg" alt="">
                            </div>
                            <div class="content">
                                <h4>Awesome design</h4>
                                <p>Burke blow off arse gutted mate <br> what a plonker cup of fantastic <br> get stuffed
                                    mate.!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Info Box Section -->


    <!-- Price Section One -->
    <section class="price_aria home_2 pircing">
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
            <div class="period_tab_aria">
                <div class="tab_style">
                    <ul class="nav nav-tabs justify-content-center text-center" role="tablist">
                        <li class="active">
                            <a class="active" href="#monthly" data-toggle="tab">
                                <h6>Monthly</h6>
                            </a>
                        </li>
                        <li>
                            <a href="#yearly" data-toggle="tab">
                                <h6>Yearly</h6>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="monthly">
                            <div class="priceing_plan">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single_item">
                                            <div class="price_top">
                                                <div class="price">
                                                    <span class="price_before">$</span>
                                                    <span class="amount">49</span>
                                                    <span class="period ">/month</span>
                                                </div>
                                            </div>
                                            <div class="price_bottom">
                                                <h4>Basic package</h4>
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
                                        <div class="single_item">
                                            <div class="price_top">
                                                <div class="popular">
                                                    <span>POPULAR CHOICE</span>
                                                </div>
                                                <div class="price">
                                                    <span class="price_before">$</span>
                                                    <span class="amount">69</span>
                                                    <span class="period ">/month</span>
                                                </div>
                                            </div>
                                            <div class="price_bottom">
                                                <h4>Advanced package</h4>
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
                                        <div class="single_item">
                                            <div class="price_top">
                                                <div class="price">
                                                    <span class="price_before">$</span>
                                                    <span class="amount">99</span>
                                                    <span class="period ">/month</span>
                                                </div>
                                            </div>
                                            <div class="price_bottom">
                                                <h4>Premium package</h4>
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
                        <div class="tab-pane" id="yearly">
                            <div class="priceing_plan">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single_item">
                                            <div class="price_top">
                                                <div class="price">
                                                    <span class="price_before">$</span>
                                                    <span class="amount">69</span>
                                                    <span class="period ">/year</span>
                                                </div>
                                            </div>
                                            <div class="price_bottom">
                                                <h4>Basic package</h4>
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
                                        <div class="single_item">
                                            <div class="price_top">
                                                <div class="popular">
                                                    <span>POPULAR CHOICE</span>
                                                </div>
                                                <div class="price">
                                                    <span class="price_before">$</span>
                                                    <span class="amount">89</span>
                                                    <span class="period ">/year</span>
                                                </div>
                                            </div>
                                            <div class="price_bottom">
                                                <h4>Advanced package</h4>
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
                                        <div class="single_item">
                                            <div class="price_top">
                                                <div class="price">
                                                    <span class="price_before">$</span>
                                                    <span class="amount">110</span>
                                                    <span class="period ">/year</span>
                                                </div>
                                            </div>
                                            <div class="price_bottom">
                                                <h4>Premium package</h4>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Price Section One -->

    <!-- Seo Section -->
    <section class="seo_aria home_3 style_two service_2 y_marketing">
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

    <!-- Work Section -->
    <section class="work_aria y_marketing">
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center wow fadeInUp" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <span class="sub_title">Process</span>
                        <h2>How we work</h2>
                    </div>
                </div>
            </div>
            <div class="work_items wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="work_item text-center">
                            <img src="{{ asset('frontend') }}/assets/img/icon/work/work.svg" alt="">
                            <h6>User Research</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="work_item text-center">
                            <img src="{{ asset('frontend') }}/assets/img/icon/work/work_2.svg" alt="">
                            <h6>Developed App</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="work_item text-center">
                            <img src="{{ asset('frontend') }}/assets/img/icon/work/work_3.svg" alt="">
                            <h6>Testing Project</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="work_item text-center">
                            <img src="{{ asset('frontend') }}/assets/img/icon/work/work_4.svg" alt="">
                            <h6>Update Result</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Work Section -->

    <!-- Case Studies Section -->
    <section class="case_studies_aria home_3">
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center wow fadeInUp" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <span class="sub_title">Case Studies</span>
                        <h2>Our Recent Works</h2>
                    </div>
                </div>
            </div>
            <div class="post_items text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="single_post">
                            <img src="{{ asset('frontend') }}/assets/img/case_studies/case_studies_7.png" alt="">
                            <h4><a href="service.html">Security Managment</a></h4>
                            <p><a href="service.html">Marketing</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_post">
                            <img src="{{ asset('frontend') }}/assets/img/case_studies/case_studies_8.png" alt="">
                            <h4><a href="service.html">Security Managment</a></h4>
                            <p><a href="service.html">Marketing</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_post">
                            <img src="{{ asset('frontend') }}/assets/img/case_studies/case_studies_9.png" alt="">
                            <h4><a href="service.html">Security Managment</a></h4>
                            <p><a href="service.html">Marketing</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Case Studies Section -->

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