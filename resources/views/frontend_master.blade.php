<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOFTACOLOR.COM | Best Digital Marketing Agency in Bangladesh</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend') }}/assets/img/icon/favicon.png">
    <!-- Font Awesome Css -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/font-awesome/css/all.min.css">
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/bootstrap/bootstrap.min.css">
    <!-- Circular Progress Bar -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/progress.css">
    <!-- Magnific Popup Css -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/magnific-popup.css">
    <!-- Animate Css -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/animate.css">
    <!-- Slick-Slide-Css -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/slick-slider/slick.css">
    <!-- Style Css -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css">
    <!-- Responsive Css -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/responsive.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>

    <!-- Header Section -->
    <header class="header_aria">
        <nav class="navbar navbar-expand-lg fixed-top bg-transfarent">
            <div class="container-fluid container custom_container">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{ asset('frontend') }}/assets/img/logo_2.png" alt="">
                    <img src="{{ asset('frontend') }}/assets/img/logo_3.png" alt="">
                </a>
                <div class="search d-lg-none">
                    <a class="search-btn" href="javascript:void(0);"><i class="fas fa-search"></i></a>
                    <form action="#" method="get" class="search-form">
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="Search...">
                            <button type="submit"><i class="fas fa-arrow-right"></i></button>
                        </div>
                    </form>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown active">
                            <a class="nav-link active dropdown-toggle" href="{{ url('/') }}">
                                Home
                            </a>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ route('services')}}" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Our Services
                            </a>
                            <i class="fa-solid fa-angle-down mobile_dropdown_icon"></i>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('services')}}">Our Services</a></li>
                                <li><a class="dropdown-item" href="{{ route('seo')}}">Search Engine Optimization [ SEO ]</a></li>
                                <li><a class="dropdown-item" href="{{ route('smm')}}">Social Media
                                        Marketing</a></li>
                                <li><a class="dropdown-item" href="{{ route('email')}}">Email Marketing</a></li>
                                <li><a class="dropdown-item" href="{{ route('webdesign')}}">Web Development</a></li>
                                <li><a class="dropdown-item" href="{{ route('youtube')}}">Youtube Marketing</a></li>
                                <li><a class="dropdown-item" href="{{ route('leadgen')}}">Lead Generation</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('about')}}">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('contact')}}">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('blog')}}">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('login')}}">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('contact')}}">Hotline: 01780466895</a></li>
                    </ul>
                    <!-- <div class="search d-lg-block">
                        <a class="search-btn" href="javascript:void(0);"><i class="fas fa-search"></i></a>
                        <form action="#" method="get" class="search-form">
                            <div class="input-group">
                                <input type="search" class="form-control" placeholder="Search...">
                                <button type="submit"><i class="fas fa-arrow-right"></i></button>
                            </div>
                        </form>
                    </div> -->
                </div>
            </div>
        </nav>
    </header>
    <!-- Header Section -->

    @yield('frontend_content')

    <!-- Subscribe Section -->
    <section class="subscribe_aria about email_marketing">
        <div class="container custom_container">
            <div class="items wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="section_title text-center">
                    <h2 class="text-white">Get A Free Website | একটি বিনামূল্যের ওয়েবসাইট পান</h2>
                </div>
                <form action="{{ route('sub_store')}}" class="form_aria" method="POST">
                    @csrf
                    <div class="fild_btn">
                        <div class="fild">
                            <input type="email" name="email" class="form-control input" placeholder="Email">
                            <input type="text" name="phone" class="form-control input" placeholder="Phone Number">
                        </div>
                        <input type="submit" value="Subscribe" class="min_btn">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Subscribe Section -->
    <!-- Footer Section -->
    <section class="footer_aria wow fadeInUp" data-wow-delay="0.1s">
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="site_info">
                        <img src="{{ asset('frontend') }}/assets/img/footer/logo.png" alt="">
                        <div class="content">
                            <p>Whal have much planned for the future, working with great clients and continued software
                                development. If you'd like to join our team, then we'd also love to hear from you.
                            </p>
                        </div>
                        <div class="social_icons">
                            <a target="_blank" href="https://www.instagram.com/softacolor"><i class="fa-brands fa-instagram"></i></a>
                            <a target="_blank" href="https://www.facebook.com/softacolor"><i class="fa-brands fa-facebook-f"></i></a>
                            <a target="_blank" href="https://www.twitter.com/softacolor"><i class="fa-brands fa-twitter"></i></a>
                            <a target="_blank" href="https://pinterest.com/softacolor"><i class="fa-brands fa-pinterest"></i></a>
                            <a target="_blank" href="https://youtube.com/softacolor"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="site_info">
                        <h4>Services</h4>
                        <ul class="list list-unstyled">
                            <li><a href="{{route('email')}}">Email Marketing</a></li>
                            <li><a href="{{route('seo')}}">Offline SEO</a></li>
                            <li><a href="{{route('leadgen')}}">Lead Generation</a></li>
                            <li><a href="{{route('webdesign')}}">Web Development</a></li>
                            <li><a href="{{route('smm')}}">Social Media Marketing</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="site_info">
                        <h4>Quick Links</h4>
                        <ul class="list list-unstyled">
                            <li><a href="{{ url('/')}}">Home</a></li>
                            <li><a href="{{ route('about')}}">About Us</a></li>
                            <li><a href="{{ route('contact')}}">Contact Us</a></li>
                            <li><a href="{{ route('services')}}">Our Services</a></li>
                            <li><a href="{{ route('services')}}">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer_bottom text-center">
                        <p> &copy; 2022  ALL RIGHTS RESERVED |  <a
                                href="https://www.softacolor.com/">SOFTACOLOR.COM</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape">
            <img data-depth="0.2" src="{{ asset('frontend') }}/assets/img/footer/shape.png" alt="" class="one">
            <img data-depth="0.2" src="{{ asset('frontend') }}/assets/img/footer/shapea_2.png" alt="" class="two">
        </div>
    </section>
    <!-- Footer Section -->



    <!-- jQuery Libraary -->
    <script src="{{ asset('frontend') }}/assets/js/jquery.min.js"></script>
    <!-- Popper - Js For Bootstrap -->
    <script src="{{ asset('frontend') }}/assets/js/popper.min.js"></script>
    <!-- Bootstrap - jS  -->
    <script src="{{ asset('frontend') }}/assets/js/bootstrap.min.js"></script>
    <!-- Counter Up - Js -->
    <script src="{{ asset('frontend') }}/assets/js/jquery.counterup.js"></script>
    <!-- Waypoints Js For Counter Up -->
    <script src="{{ asset('frontend') }}/assets/js/waypoints.min.js"></script>
    <!-- Magnific Popup -Js -->
    <script src="{{ asset('frontend') }}/assets/js/magnific-popup.min.js"></script>
    <!-- Wow - Js -->
    <script src="{{ asset('frontend') }}/assets/js/wow.min.js"></script>
    <!-- Parallax - Js -->
    <script src="{{ asset('frontend') }}/assets/js/parallax.min.js"></script>
    <!-- Easy Pie Chart For Circular Progress Bar -->
    <script src="{{ asset('frontend') }}/assets/js/easypiechart.js"></script>
    <!-- Slick-Slidr-js -->
    <script src="{{ asset('frontend') }}/assets/js/slick.min.js"></script>
    <!-- Main Js -->
    <script src="{{ asset('frontend') }}/assets/js/main.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    
    <script>
      @if(Session::has('message'))
      var type = "{{ Session::get('alert-type','info') }}"
      switch(type){
         case 'info':
         toastr.info(" {{ Session::get('message') }} ");
         break;
     
         case 'success':
         toastr.success(" {{ Session::get('message') }} ");
         break;
     
         case 'warning':
         toastr.warning(" {{ Session::get('message') }} ");
         break;
     
         case 'error':
         toastr.error(" {{ Session::get('message') }} ");
         break; 
      }
      @endif 
     </script>
</body>
</html>