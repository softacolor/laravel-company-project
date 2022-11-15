@extends('frontend_master')
@section('frontend_content')
<!-- Breadcrumbs Section -->
<section class="breadcrumbs_aria">
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Web Development</h2>
                    <span><a href="{{ url('/')}}">Home</a> <i class="fa-solid fa-chevron-right"></i> Web Development</span>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumbs Section -->

    <!-- Seo Section -->
    <section class="seo_aria home_2 about service email_marketing">
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
                        <img src="{{ asset('frontend') }}/assets/img/seo_9.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Seo Section -->

    <!-- Info Section -->
    <section class="info_box_aria about email_marketing">
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center wow fadeInUp" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <span class="sub_title">We are best</span>
                        <h2>Why Choose Us</h2>
                    </div>
                </div>
            </div>
            <div class="info_box_items text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="single_item">
                            <img src="{{ asset('frontend') }}/assets/img/icon/info_box/icon_17.png" alt="">
                            <div class="content">
                                <h4>Web Development</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt
                                    ut labore </p>
                                <a href="service.html" class="btn_2">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_item">
                            <img src="{{ asset('frontend') }}/assets/img/icon/info_box/icon_18.png" alt="">
                            <div class="content">
                                <h4>Web Development</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt
                                    ut labore </p>
                                <a href="service.html" class="btn_2">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_item">
                            <img src="{{ asset('frontend') }}/assets/img/icon/info_box/icon_19.png" alt="">
                            <div class="content">
                                <h4>Web Development</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt
                                    ut labore </p>
                                <a href="service.html" class="btn_2">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Info Section -->

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

    <!-- Seo Style Two -->
    <section class="seo_aria home_2 about style_two">
        <div class="container custom_container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section_img wow fadeInLeft" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                        <img src="{{ asset('frontend') }}/assets/img/seo_10.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content wow fadeInUp" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="section_title">
                            <span class="sub_title">Our Services</span>
                            <h2>We Provided Best <br>
                                Email Marketing Services</h2>
                            <div class="service_list">
                                <h5><span>01.</span>Email campaign tips</h5>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                </p>
                            </div>
                            <div class="service_list">
                                <h5><span>02.</span>Email templates</h5>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                </p>
                            </div>
                            <div class="service_list">
                                <h5><span>03.</span>Direct mail marketing</h5>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Seo Style Two -->

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