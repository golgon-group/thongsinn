@extends('layouts.app')
@section('title','About')

@section('content')
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{asset('img/bg-img/outdoor-1.jpg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">About Us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- About Us Area Start -->
    <section class="roberto-about-us-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="about-thumbnail pr-lg-5 mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <img src="img/bg-img/outdoor-5.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <!-- Section Heading -->
                    <div class="section-heading wow fadeInUp" data-wow-delay="300ms">
                        <h2>Thong's Inn Hotel Kualanamu</h2>
                    </div>
                    <div class="about-content mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <p>Thong's Inn Hotel Kualanamu is prestige place for transit and businesses as well as convenince travellers. The enchanting for all senses and indeed is the best place to stay in the heart of Deli Serdang, Lubuk Pakam and Kualanamu International Airport.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Area End -->

    <!-- Video Area Start -->
    <div class="roberto--video--area bg-img bg-overlay jarallax section-padding-0-100" style="background-image: url({{asset('img/bg-img/pool1.jpg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-6">
                    <!-- Section Heading -->
                    <div class="section-heading text-center white wow fadeInUp" data-wow-delay="100ms">
                        <h6>Ultimate Solutions</h6>
                        <h2>Our Hotel &amp; Room</h2>
                    </div>
                    <div class="video-content-area mt-100 wow fadeInUp" data-wow-delay="500ms">
                        <a href="https://www.youtube.com/watch?v=VKGOU1ZPL70" class="video-play-btn"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Area End -->

    <section class="roberto-service-area section-padding-30-0" id="facility" style="padding-top: 30px!important;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h2>Our Hotel Facility</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <img src="{{asset('img/bg-img/resto-2.jpg')}}" alt="">
                        <div class="service-title d-flex align-items-center justify-content-center">
                            <h5>Restaurant</h5>
                        </div>
                    </div>
                </div>
                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <img src="{{asset('img/bg-img/meeting-room-1.jpg')}}" alt="">
                        <div class="service-title d-flex align-items-center justify-content-center">
                            <h5>Meeting Room</h5>
                        </div>
                    </div>
                </div>
                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <img src="{{asset('img/bg-img/pool-3.jpg')}}" alt="">
                        <div class="service-title d-flex align-items-center justify-content-center">
                            <h5>Swimming Pool</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection