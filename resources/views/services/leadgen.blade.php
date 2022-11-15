@extends('frontend_master')
@section('frontend_content')
<!-- Breadcrumbs Section -->
<section class="breadcrumbs_aria">
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Lead Generation</h2>
                    <span><a href="{{ url('/')}}">Home</a> <i class="fa-solid fa-chevron-right"></i>Lead Generation</span>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumbs Section -->

    <!-- Seo Section -->
    <section class="seo_aria home_2 about service l_gen">
        <div class="container custom_container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="content wow fadeInUp" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="section_title">
                            <span class="sub_title">Get the best</span>
                            <h2>Establish Your Objective <br>
                                with Lead Generation</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore. There are many variation of passages of Lorem Ipsum available.</p>
                        </div>
                        <div class="counter_aria_mini">
                            <div class="items">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                        <div class="item">
                                            <span class="counter">400</span><i class="fa-solid fa-plus"></i>
                                            <p>Active clients</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3">
                                        <div class="item">
                                            <span class="counter">800</span><i class="fa-solid fa-plus"></i>
                                            <p>Projects</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-3">
                                        <div class="item">
                                            <span class="counter">20</span><i class="fa-solid fa-plus"></i>
                                            <p>People Involved</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('contact')}}" class="min_btn">Contact us</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section_img wow fadeInLeft" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                        <img src="{{ asset('frontend') }}/assets/img/seo_13.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Seo Section -->

    <!-- Seo Two Section -->
    <section class="seo_aria home_2 about style_two g_f_ads l_gen">
        <div class="container custom_container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section_img wow fadeInLeft" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                        <img src="{{ asset('frontend') }}/assets/img/seo_14.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content wow fadeInUp" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="section_title">
                            <h2>Our Facebook<br>
                                Marketing Strategy</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do <br> eiusmod tempor
                                incididunt
                                ut labore. There are many variation of passages of Lorem Ipsum available.</p>
                            <div class="service_list_aria">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="service_list">
                                            <h5><span><img src="{{ asset('frontend') }}/assets/img/icon/seo.png" alt=""></span>Ads and
                                                Retargeting
                                            </h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="service_list">
                                            <h5><span><img src="{{ asset('frontend') }}/assets/img/icon/seo_2.png" alt=""></span>Referral
                                                Marketing</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed.</p>
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
    <!-- Seo Two Section -->

    <!-- Info Section -->
    <section class="info_box_aria two service l_gen">
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
                            <img src="{{ asset('frontend') }}/assets/img/icon/info_box/icon_24.png" alt="">
                            <div class="content">
                                <h4>Blogging</h4>
                                <p>Elements blocks from a range of categories to build pages that are rich in visual
                                    style.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_item">
                            <img src="{{ asset('frontend') }}/assets/img/icon/info_box/icon_25.png" alt="">
                            <div class="content">
                                <h4>Email Marketing</h4>
                                <p>Elements blocks from a range of categories to build pages that are rich in visual
                                    style.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_item">
                            <img src="{{ asset('frontend') }}/assets/img/icon/info_box/icon_26.png" alt="">
                            <div class="content">
                                <h4>Social Media Marketing </h4>
                                <p>Elements blocks from a range of categories to build pages that are rich in visual
                                    style.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_item">
                            <img src="{{ asset('frontend') }}/assets/img/icon/info_box/icon_27.png" alt="">
                            <div class="content">
                                <h4>Networking</h4>
                                <p>Elements blocks from a range of categories to build pages that are rich in visual
                                    style.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_item">
                            <img src="{{ asset('frontend') }}/assets/img/icon/info_box/icon_28.png" alt="">
                            <div class="content">
                                <h4>Coupons</h4>
                                <p>Elements blocks from a range of categories to build pages that are rich in visual
                                    style.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_item">
                            <img src="{{ asset('frontend') }}/assets/img/icon/info_box/icon_29.png" alt="">
                            <div class="content">
                                <h4>Live Events</h4>
                                <p>Elements blocks from a range of categories to build pages that are rich in visual
                                    style.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Info Section -->

    <!-- Price Section -->
    <section class="price_aria pircing l_gen">
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
                            <div class="priceing_plan text-center">
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single_item wow fadeInLeft" data-wow-delay="0.1s"
                                            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                                            <div class="price_top">
                                                <h5>Basic Package</h5>
                                                <p>Personal use</p>
                                                <img src="{{ asset('frontend') }}/assets/img/price/price.png" alt="">
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
                                        <div class="single_item">
                                            <div class="price_top">
                                                <h5>Standard Package</h5>
                                                <p>Team use</p>
                                                <img src="{{ asset('frontend') }}/assets/img/price/price_3.png" alt="">
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
                                        <div class="single_item">
                                            <div class="price_top">
                                                <h5>Premium Package</h5>
                                                <p>Personal use</p>
                                                <img src="{{ asset('frontend') }}/assets/img/price/price.png" alt="">
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
                        <div class="tab-pane" id="yearly">
                            <div class="priceing_plan text-center">
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single_item">
                                            <div class="price_top">
                                                <h5>Basic Package</h5>
                                                <p>Personal use</p>
                                                <img src="{{ asset('frontend') }}/assets/img/price/price.png" alt="">
                                                <div class="price">
                                                    <span class="price_before">$</span>
                                                    <span class="amount">69</span>
                                                    <span class="period ">/year</span>
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
                                        <div class="single_item">
                                            <div class="price_top">
                                                <h5>Standard Package</h5>
                                                <p>Team use</p>
                                                <img src="{{ asset('frontend') }}/assets/img/price/price_3.png" alt="">
                                                <div class="price">
                                                    <span class="price_before">$</span>
                                                    <span class="amount">89</span>
                                                    <span class="period ">/year</span>
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
                                        <div class="single_item">
                                            <div class="price_top">
                                                <h5>Premium Package</h5>
                                                <p>Personal use</p>
                                                <img src="{{ asset('frontend') }}/assets/img/price/price.png" alt="">
                                                <div class="price">
                                                    <span class="price_before">$</span>
                                                    <span class="amount">110</span>
                                                    <span class="period ">/year</span>
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
                    </div>
                </div>
            </div>
        </div>
        <div class="shape">
            <img src="{{ asset('frontend') }}/assets/img/shape/seo.png" alt="" class="one">
        </div>
    </section>
    <!-- Price Section -->

    <!-- Team Section -->
    <section class="team_aria about l_gen">
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center wow fadeInUp" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <span class="sub_title">Our Team</span>
                        <h2>Core Team Members</h2>
                    </div>
                </div>
            </div>
            <div class="team_members text-center wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="single_item">
                            <img src="{{ asset('frontend') }}/assets/img/team/team_5.png" alt="">
                            <div class="content">
                                <h4><a href="team-single.html">Brooklyn Simmons</a></h4>
                                <span>Co-Founder & CEO</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_item">
                            <img src="{{ asset('frontend') }}/assets/img/team/team_6.png" alt="">
                            <div class="content">
                                <h4><a href="team-single.html">Brooklyn Simmons</a></h4>
                                <span>Co-Founder & CDO</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_item">
                            <img src="{{ asset('frontend') }}/assets/img/team/team_7.png" alt="">
                            <div class="content">
                                <h4><a href="team-single.html">Brooklyn Simmons</a></h4>
                                <span>VP of Customer Support</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape">
            <img src="{{ asset('frontend') }}/assets/img/shape/case_2.png" alt="" class="one_ov">
        </div>
    </section>
    <!-- Team Section -->
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