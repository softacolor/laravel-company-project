@extends('frontend_master')
@section('frontend_content')

<!-- Breadcrumbs Section -->
<section class="breadcrumbs_aria">
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Our Services</h2>
                    <span><a href="{{ url('/')}}">Home</a> <i class="fa-solid fa-chevron-right"></i>Our Services</span>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumbs Section -->
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
                                <h4>SEO</h4>
                                <p>Elements blocks from a range of categories to build pages that are rich in visual
                                    style. <a href="{{ route('seo')}}">Read More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_item">
                            <img src="{{ asset('frontend') }}/assets/img/icon/info_box/icon_12.svg" alt="">
                            <div class="content">
                                <h4>SMM</h4>
                                <p>Elements blocks from a range of categories to build pages that are rich in visual
                                    style.
                                    <a href="{{ route('smm')}}">Read More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_item">
                            <img src="{{ asset('frontend') }}/assets/img/icon/info_box/icon_13.svg" alt="">
                            <div class="content">
                                <h4>Email Marketing</h4>
                                <p>Elements blocks from a range of categories to build pages that are rich in visual
                                    style.
                                    <a href="{{ route('email')}}">Read More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_item">
                            <img src="{{ asset('frontend') }}/assets/img/icon/info_box/icon_14.svg" alt="">
                            <div class="content">
                                <h4>Web Development</h4>
                                <p>Elements blocks from a range of categories to build pages that are rich in visual
                                    style.
                                    <a href="{{ route('webdesign')}}">Read More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_item">
                            <img src="{{ asset('frontend') }}/assets/img/icon/info_box/icon_15.svg" alt="">
                            <div class="content">
                                <h4>Youtube Marketing</h4>
                                <p>Elements blocks from a range of categories to build pages that are rich in visual
                                    style.
                                    <a href="{{ route('youtube')}}">Read More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_item">
                            <img src="{{ asset('frontend') }}/assets/img/icon/info_box/icon_16.svg" alt="">
                            <div class="content">
                                <h4>Lead Generation</h4>
                                <p>Elements blocks from a range of categories to build pages that are rich in visual
                                    style.
                                    <a href="{{ route('leadgen')}}">Read More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_item">
                            <img src="{{ asset('frontend') }}/assets/img/icon/info_box/icon_11.svg" alt="">
                            <div class="content">
                                <h4>Affiliate Marketing</h4>
                                <p>Elements blocks from a range of categories to build pages that are rich in visual
                                    style. <a href="{{ route('seo')}}">Read More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_item">
                            <img src="{{ asset('frontend') }}/assets/img/icon/info_box/icon_12.svg" alt="">
                            <div class="content">
                                <h4>CPA Marketing</h4>
                                <p>Elements blocks from a range of categories to build pages that are rich in visual
                                    style.
                                    <a href="{{ route('seo')}}">Read More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_item">
                            <img src="{{ asset('frontend') }}/assets/img/icon/info_box/icon_13.svg" alt="">
                            <div class="content">
                                <h4>On Page Optimization</h4>
                                <p>Elements blocks from a range of categories to build pages that are rich in visual
                                    style.
                                    <a href="{{ route('seo')}}">Read More</a></p>
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
@endsection