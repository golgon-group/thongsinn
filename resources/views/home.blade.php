@extends('layouts.app')


@section('content')
    <!-- Welcome Area Start -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url({{asset('img/bg-img/pool1.jpg')}});" data-img-url="{{asset('img/bg-img/pool1.jpg')}}">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h6 data-animation="fadeInLeft" data-delay="200ms">Hotel &amp; Convention</h6>
                                    <h2 data-animation="fadeInLeft" data-delay="200ms">Welcome To Thong's Inn</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url({{asset('img/bg-img/deluxe-double.jpg')}});" data-img-url="{{asset('img/bg-img/deluxe-double-2.jpg')}}">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h6 data-animation="fadeInUp" data-delay="200ms">Hotel &amp; Convention</h6>
                                    <h2 data-animation="fadeInUp" data-delay="200ms">Welcome To Thong's Inn</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url({{asset('img/bg-img/outdoor-1.jpg')}});" data-img-url="{{asset('img/bg-img/outdoor-1.jpg')}}">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h6 data-animation="fadeInDown" data-delay="200ms">Hotel &amp; Convention</h6>
                                    <h2 data-animation="fadeInDown" data-delay="200ms">Welcome To Thong's Inn</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Area End -->
    <!-- About Us Area -->
    <div class="container mt-100"  id="about">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <!-- Section Heading -->
                <div class="section-heading wow fadeInUp" data-wow-delay="100ms">
                    <h6>About Us</h6>
                    <h2>Welcome to <br>Thong's Inn Hotel Kualanamu</h2>
                </div>
                <div class="about-us-content mb-100">
                    <h5 class="wow fadeInUp" data-wow-delay="300ms">Thong's Inn Hotel Kualanamu is prestige place for transit and businesses as well as convenince travellers.
                        The enchanting for all senses and indeed is the best place to stay in the heart of Deli Serdang, Lubuk Pakam and Kualanamu International Airport.</h5>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="about-us-thumbnail mb-100 wow fadeInUp" data-wow-delay="700ms">
                    <div class="row no-gutters">
                        <div class="col-6">
                            <div class="single-thumb">
                                <img src="{{asset('img/bg-img/outdoor-2.jpg')}}" alt="">
                            </div>
                            <div class="single-thumb">
                                <img src="{{asset('img/bg-img/outdoor-1-res.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="single-thumb">
                                <img src="{{asset('img/bg-img/pool-2.jpg')}}" alt="">
                            </div>
                            <div class="single-thumb">
                                <img src="{{asset('img/bg-img/resto-1.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Area End -->

    <!-- Service Area Start -->
    <div class="roberto-service-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="service-content d-flex align-items-center justify-content-between">
                        <!-- Single Service Area -->
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="100ms">
                            <img src="{{asset('img/core-img/icon-1.png')}}" alt="">
                            <h5>Airport Shuttle</h5>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <img src="{{asset('img/core-img/pool-01.png')}}" alt="">
                            <h5>Swimming Pool</h5>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="500ms">
                            <img src="{{asset('img/core-img/icon-4.png')}}" alt="">
                            <h5>Restaurant</h5>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="700ms">
                            <img src="{{asset('img/core-img/meeting-room-01.png')}}" alt="">
                            <h5>Meeting Room</h5>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="900ms">
                            <img src="{{asset('img/core-img/hall-01.png')}}" alt="">
                            <h5>Convention Hall</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Area End -->

    <!-- Our Room Area Start -->
    <section class="roberto-rooms-area" id="room">
        <div class="rooms-slides owl-carousel">
            <!-- Single Room Slide -->
            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url({{asset('img/bg-img/cottage-double-2.jpg')}});"></div>

                <!-- Content -->
                <div class="room-content">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Cottage Room</h2>
                    <h3 data-animation="fadeInUp" data-delay="100ms">Start from IDR 495.000,- Nett <span>/ Night</span></h3>
                    <ul class="room-feature" data-animation="fadeInUp" data-delay="100ms">
                        <li><span><i class="fa fa-check"></i> Bed</span> <span>: Twin Beds</span></li>
                        <li><span><i class="fa fa-check"></i> Capacity</span> <span>: Max person 2</span></li>
                        <li><span><i class="fa fa-check"></i> Services</span> <span>: AC, Wifi, TV</span></li>
                    </ul>
                </div>
            </div>

            <!-- Single Room Slide -->
            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url({{asset('img/bg-img/deluxe-double-2.jpg')}});"></div>

                <!-- Content -->
                <div class="room-content">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Deluxe Room A</h2>
                    <h3 data-animation="fadeInUp" data-delay="100ms">Start from IDR 480.000,- Nett <span>/ Night</span></h3>
                    <ul class="room-feature" data-animation="fadeInUp" data-delay="100ms">
                        <li><span><i class="fa fa-check"></i> Bed</span> <span>: Twin Beds</span></li>
                        <li><span><i class="fa fa-check"></i> Capacity</span> <span>: Max person 2</span></li>
                        <li><span><i class="fa fa-check"></i> Services</span> <span>: AC, Wifi, TV, Work Desk</span></li>
                    </ul>
                </div>
            </div>

            <!-- Single Room Slide -->
            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url({{asset('img/bg-img/deluxe-double-2.jpg')}});"></div>

                <!-- Content -->
                <div class="room-content">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Deluxe Room B</h2>
                    <h3 data-animation="fadeInUp" data-delay="100ms">Start from IDR 425.000,- Nett <span>/ Night</span></h3>
                    <ul class="room-feature" data-animation="fadeInUp" data-delay="100ms">
                        <li><span><i class="fa fa-check"></i> Bed</span> <span>: Twin Beds</span></li>
                        <li><span><i class="fa fa-check"></i> Capacity</span> <span>: Max person 2</span></li>
                        <li><span><i class="fa fa-check"></i> Services</span> <span>: AC, Wifi, TV, Work Desk</span></li>
                    </ul>
                </div>
            </div>

            <!-- Single Room Slide -->
            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url({{asset('img/bg-img/deluxe-double-2.jpg')}});"></div>

                <!-- Content -->
                <div class="room-content">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Deluxe Triple Room B</h2>
                    <h3 data-animation="fadeInUp" data-delay="100ms">Start from IDR 675.000,- Nett <span>/ Night</span></h3>
                    <ul class="room-feature" data-animation="fadeInUp" data-delay="100ms">
                        <li><span><i class="fa fa-check"></i> Bed</span> <span>: Triple Beds</span></li>
                        <li><span><i class="fa fa-check"></i> Capacity</span> <span>: Max person 3</span></li>
                        <li><span><i class="fa fa-check"></i> Services</span> <span>: AC, Wifi, TV, Work Desk</span></li>
                    </ul>
                </div>
            </div>

            <!-- Single Room Slide -->
            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url({{asset('img/bg-img/villa-double-2.jpg')}});"></div>

                <!-- Content -->
                <div class="room-content">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Villa Room</h2>
                    <h3 data-animation="fadeInUp" data-delay="100ms">Start from IDR 1.000.000,- Nett <span>/ Night</span></h3>
                    <ul class="room-feature" data-animation="fadeInUp" data-delay="100ms">
                        <li><span><i class="fa fa-check"></i> Bed</span> <span>: Twin Beds</span></li>
                        <li><span><i class="fa fa-check"></i> Capacity</span> <span>: Max person 2</span></li>
                        <li><span><i class="fa fa-check"></i> Services</span> <span>: Big Room, AC, Wifi, TV, Sofa</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Room Area End -->

    <!-- Testimonials Area Start -->
    <section class="roberto-testimonials-area section-padding-100-0" id="testimony">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="testimonial-thumbnail owl-carousel mb-100">
                        <img src="{{asset('img/bg-img/outdoor-3.jpg')}}" alt="">
                        <img src="img/bg-img/outdoor-4.jpg" alt="">
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h6>Testimonials</h6>
                        <h2>Our Guests Love Us</h2>
                    </div>
                    <!-- Testimonial Slide -->
                    <div class="testimonial-slides owl-carousel mb-100">

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <h4>“Perfectly clean and beautiful”</h4>
                            <h5>“Big pool, beautiful bungalow with a huge garden! Free shuttle to airport, breakfast is really good!
                                Restaurant at five minutes walk as also very good! I do a haircut on marco’s hair dresser and he is really good! Fantastic!”</h5>
                            <div class="rating-title">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <h6>Marco</h6>
                            </div>
                        </div>

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <h4>“Very nice place for very good price”</h4>
                            <h5>“Everything is new and working. Hot water, AC, good bed, nice surrounding. The hotel offers free transfer to the airport. It is perfect place to stay before or after a flight. Would recommend to skip Medan if you can and stay in this place.”</h5>
                            <div class="rating-title">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <h6>Ugnė</h6>
                            </div>
                        </div>

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <h4>“Very nice Transit Hotel”</h4>
                            <h5>“Stayed in Thong's Inn five times, every time we were pleased by friendly staff, clean rooms, reliable wake-up calls, fast airport transfers and affordable prices. the big garden is a real eye-catcher, as will be the big swimming pool, when finished next year or earlier. Will be back for sure.”</h5>
                            <div class="rating-title">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <h6>Klaus</h6>
                            </div>
                        </div>

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <h4>Nice and cozy</h4>
                            <h5>“We stay for 1 night here for early morning flight. The staff are very helping and they provide breakfast. So far, we enjoy staying here.”</h5>
                            <div class="rating-title">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <h6>Jessy</h6>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Area End -->

    <section class="roberto-service-area section-padding-30-0" id="facility" >
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
