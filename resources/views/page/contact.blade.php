@extends('frontend_master')
@section('frontend_content')
    <!-- Breadcrumbs Section -->
    <section class="breadcrumbs_aria">
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Contact Us</h2>
                    <span><a href="{{ url('/')}}">Home</a> <i class="fa-solid fa-chevron-right"></i> Contact</span>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumbs Section -->

    <!-- Contact Section -->
    <section class="contact_us_aria">
        <div class="container custom_container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact_info_aria">
                        <h5>Contact Information</h5>
                        <div class="contact_info">
                            <div class="single_info">
                                <img src="assets/img/icon/contact/contact.svg" alt="">
                                <p>SOFTACOLOR.COM <br>
                                    BDBL Bhaban, 12 Kazi Nazrul Islam Ave, <br> Dhaka-1215, <br> Bangladesh</p>
                            </div>
                            <div class="single_info">
                                <img src="assets/img/icon/contact/contact_2.svg" alt="">
                                <p>+880 1780 466895<br>
                                +880 1934 328259</p>
                            </div>
                            <div class="single_info">
                               <p>Email: contact@softacolor.com  <br>
                               Web: <a style="color:red;" href="{{url('/')}}">www.softacolor.com</a>
                            </p> 
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact_us_form">
                        <form action="{{ route('contact_massege_store')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" name="first_name" class="form-control input" placeholder="First name">
                                    @error('first_name')
                                      <span class="text-danger"> {{$message}} </span>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="last_name" class="form-control input" placeholder="Last name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="phone" class="form-control input" placeholder="Phone">
                                    @error('phone')
                                      <span class="text-danger"> {{$message}} </span>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" name="email" class="form-control input" placeholder="Email">
                                    @error('email')
                                      <span class="text-danger"> {{$message}} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <input type="text" name="subject" class="form-control input" placeholder="Subject">
                            </div>

                            <textarea name="massege" placeholder="Message" class="form-control input textarea"></textarea>
                            @error('massege')
                                      <span class="text-danger"> {{$message}} </span>
                                    @enderror
                            <input type="submit" value="Submit Now" class="min_btn">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->

    <!-- Map Section -->
    <section class="map">
        <div id="map-container-google-2" class="z-depth-1-half map-container" style="height: 100%">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14607.653562776595!2d90.394688600643!3d23.750467719137255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x524878dad624ebe7!2ssoftacolor.com!5e0!3m2!1sen!2sbd!4v1667230939044!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <!-- Map Section -->

@endsection