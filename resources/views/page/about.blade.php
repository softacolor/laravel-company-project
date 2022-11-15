@extends('frontend_master')
@section('frontend_content')
<!-- Breadcrumbs Section -->
<section class="breadcrumbs_aria">
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>About Us</h2>
                    <span><a href="{{url('/')}}">Home</a> <i class="fa-solid fa-chevron-right"></i> About</span>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumbs Section -->

    <!-- Seo Section -->
    <section class="seo_aria home_2 about">
        <div class="container custom_container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section_img wow fadeInLeft" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                        <img src="{{ asset('frontend') }}/assets/img/seo_2.png" alt="">
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
                        </div>
                        <a href="{{ route('contact')}}" class="min_btn">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Seo Section -->

    <!-- Info Section -->
    <section class="info_box_aria about">
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
                            <img src="{{ asset('frontend') }}/assets/img/icon/icon_box_1.svg" alt="">
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
                            <img src="{{ asset('frontend') }}/assets/img/icon/icon_box_2.svg" alt="">
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
                            <img src="{{ asset('frontend') }}/assets/img/icon/icon_box_3.svg" alt="">
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
        <div class="shape">
            <img src="../{{ asset('frontend') }}/assets/img/shape/info_box_3.html" alt="" class="one_op2">
        </div>
    </section>
    <!-- Info Section -->

    <!-- Counter Section -->
    <section class="counter_aria about text-center wow fadeInUp" data-wow-delay="0.1s">
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

    <!-- Team Section -->
    <section class="team_aria about">
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
            <img src="{{ asset('frontend') }}/assets/img/shape/team.png" alt="" class="one">
        </div>
    </section>
    <!-- Team Section -->

    <!-- Testimonial Section -->
    <section class="testimonial_grid about">
        <div class="grid_items_aria">
            <div class="single_item">
                <div class="container custom_container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section_img">
                                <img src="{{ asset('frontend') }}/assets/img/testimonial_grid.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="testimonial_content">
                                <span class="sub_title">Testimonials</span>
                                <p>Droit Addons presents your services with flexible, convenient multipurpose layouts.
                                    You
                                    can
                                    select your favorite section easily </p>
                            </div>
                            <div class="aurthor_info">
                                <img src="{{ asset('frontend') }}/assets/img/icon/testimonial_icon_2.png" alt="">
                                <div class="min_content">
                                    <h5>Filip Justić</h5>
                                    <p>CTO, Droitthemes</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_item">
                <div class="container custom_container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section_img">
                                <img src="{{ asset('frontend') }}/assets/img/testimonial_grid.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="testimonial_content">
                                <span class="sub_title">Testimonials</span>
                                <p>Droit Addons presents your services with flexible, convenient multipurpose layouts.
                                    You
                                    can
                                    select your favorite section easily </p>
                            </div>
                            <div class="aurthor_info">
                                <img src="{{ asset('frontend') }}/assets/img/icon/testimonial_icon_2.png" alt="">
                                <div class="min_content">
                                    <h5>Filip Justić</h5>
                                    <p>CTO, Droitthemes</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section -->
@endsection