@extends('layouts.app')
@section('title','Rooms')

@section('content')
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/deluxe-double.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Our Room</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Room</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Rooms Area Start -->
    <div class="roberto-rooms-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <!-- Single Room Area -->
                    <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Room Thumbnail -->
                        <div class="room-thumbnail">
                            <img src="img/bg-img/cottage-double-2.jpg" alt="">
                        </div>
                        <!-- Room Content -->
                        <div class="room-content">
                            <h2>Cottage Room</h2>
                            <h4>Rp.550.000 <span>Nett/ Night</span></h4>
                            <div class="room-feature">
                                <h6>Capacity : <span>Max 2 Person</span></h6>
                                <h6>Bed: <span>Twin Bed or Double Bed</span></h6>
                                <h6>Facility: <span>AC, Wi-Fi, Television, Coffee & Water Kettle</span></h6>
                            </div>
                            <a href="/rooms/cottage" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>

                    <!-- Single Room Area -->
                    <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Room Thumbnail -->
                        <div class="room-thumbnail">
                            <img src="img/bg-img/deluxe-double-2.jpg" alt="">
                        </div>
                        <!-- Room Content -->
                        <div class="room-content">
                            <h2>Deluxe Room</h2>
                            <h6>(Temporarily Not Available)</h6>
                            <h4>Rp.700.000 <span>Nett/ Day</span></h4>
                            <div class="room-feature">
                                <h6>Capacity : <span>Max 2 Person</span></h6>
                                <h6>Bed: <span>Deluxe Twin Bed or Double Bed</span></h6>
                                <h6>Facility: <span>AC, Wi-Fi, Television, Coffee & Water Kettle</span></h6>
                                <h6>Exclusive Facility: <span>Work Desk, Cabinet, Veranda</span></h6>
                            </div>
                            <a href="/rooms/deluxe" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>

                    <!-- Single Room Area -->
                    <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="500ms">
                        <!-- Room Thumbnail -->
                        <div class="room-thumbnail">
                            <img src="img/bg-img/villa-double-2.jpg" alt="">
                        </div>
                        <!-- Room Content -->
                        <div class="room-content">
                            <h2>Villa Room</h2>
                            <h4>Rp.950.000 <span>Nett/ Day</span></h4>
                            <div class="room-feature">
                                <h6>Capacity : <span>Max 2 Person</span></h6>
                                <h6>Bed: <span>Deluxe Twin Bed or Double Bed</span></h6>
                                <h6>Facility: <span>AC, Wi-Fi, Television, Coffee & Water Kettle</span></h6>
                                <h6>Exclusive Facility: <span>Sofa, Cabinet, Terrace</span></h6>
                            </div>
                            <a href="/rooms/villa" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
    <!-- Rooms Area End -->
@endsection