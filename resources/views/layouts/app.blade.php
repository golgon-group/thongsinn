<!DOCTYPE html>
<html lang="en">

<head>
    <meta harset="UTF-8">
    <meta name="description" content="Thong's Inn Hotel Kualanamu Offers a comfortable stay with 3 types of rooms equipped with the best facilities.">
    <meta name="author" content="Thong's Inn">
    <meta name="keywords" content="Kualanamu,Hotel Kualanamu,Transit Hotel,Transit Hotel Kualanamu"> 
    <meta property="og:image" content="www.thongsinn.com/img/bg-img/outdoor-2.jpg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @if (View::hasSection('title'))
      <title>@yield('title') - {{ config('app.name', 'Thongs Inn Hotel &amp; Convention Kualanamu') }}</title>
    @else
      <title>{{ config('app.name', 'Thongs Inn Hotel &amp; Convention Kualanamu') }}</title>
    @endif
    <!-- Title -->
    <title>Thongs Inn Hotel &amp; Convention Kualanamu</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('/img/core-img/favicon.png')}}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('style.css')}}">

</head>

<body>

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="robertoNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="/"><img  src="{{asset('img/core-img/logo-thongsinn.png')}}" alt="" class="img-responsive" ></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler" data-toggle="collapse" data-target="">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu" id="navbarResponsive">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav" id="mynav">
                                <ul>
                                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/">Home</a></li>
                                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/rooms">Rooms</a></li>
                                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/about">About Us</a></li>
                                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/contact">Contact</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    @yield('content')

     <!-- Call To Action Area Start -->
     <section class="roberto-cta-area" id="contact">
        <div class="container">
            <div class="cta-content bg-img bg-overlay jarallax" style="background-image: url({{asset('img/bg-img/outdoor-1.jpg')}});">
                <div class="row align-items-center">
                    <div class="col-12 col-md-7">
                        <div class="cta-text mb-50">
                            <h2>Contact us now!</h2>
                            <h6>Contact (+62) 812 1211 1081 to book directly or for advice</h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 text-right">
                        <a href="https://wa.me/6281212111081" class="btn roberto-btn mb-50">Contact Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Area End -->

    <!-- Footer Area Start -->
    <footer class="footer-area" style="padding-top:30px; padding-bottom:30px;">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row align-items-baseline justify-content-between">
                    <!-- Single Footer Widget Area -->
                    <div class="col-12">
                        <div class="single-footer-widget mb-80">
                            <!-- Footer Logo -->
                            <a class="footer-logo"><h1 style="color:white;">Thong's Inn <br><h4>+62 812 1211 1081</h4></h1></a>
                            
                            <span>reservation@thongsinn.com</span>
                            <span>Jl. Pasar V Kebun Kelapa Kualanamu, Kec. Beringin - 20522 Lubuk Pakam, Deli Serdang - Sumatera Utara</span>
                            <ul class="footer-nav">
                                <li><a class="nav-link js-scroll-trigger" href="/">Home</a></li>
                                <li><a class="nav-link js-scroll-trigger" href="/rooms">Our Room</a></li>
                                <li><a class="nav-link js-scroll-trigger" href="/about">About Us</a></li>
                                <li><a class="nav-link js-scroll-trigger" href="/contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="container">
            <div class="copywrite-content">
                <div class="row align-items-center">
                    <div class="col-12 col-md-8">
                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="https://www.facebook.com/kualanamuhotel/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="https://www.instagram.com/thongsinn/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- Popper -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- All Plugins -->
    <script src="{{asset('js/roberto.bundle.js')}}"></script>
    <!-- Active -->
    <script src="{{asset('js/default-assets/active.js')}}"></script>
    <script src="{{asset('js/thongsinn.js')}}"></script>

</body>

</html>
