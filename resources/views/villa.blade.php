@extends('layouts.app')
@section('title','Villa Rooms')
@section('content')
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{asset('img/bg-img/villa-double-2.jpg')}});">
    <div class="container h-100">
        <div class="row h-100 align-items-end">
            <div class="col-12">
                <div class="breadcrumb-content d-flex align-items-center justify-content-between pb-5">
                    <h2 class="room-title">Villa Room</h2>
                    <h2 class="room-price">Rp.650.000 <span>/ Per Night</span></h2>
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
            <div class="col-12">
                <!-- Single Room Details Area -->
                <div class="single-room-details-area mb-50">
                    <!-- Room Thumbnail Slides -->
                    <div class="room-thumbnail-slides mb-50">
                        <div id="room-thumbnail--slide" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{asset('img/bg-img/villa-double-2.jpg')}}" class="d-block w-100" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('img/bg-img/villa-double-3.jpg')}}" class="d-block w-100" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('img/bg-img/villa-twin-1.jpg')}}" class="d-block w-100" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('img/bg-img/villa-furniture.jpg')}}" class="d-block w-100" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('img/bg-img/villa-bathroom-1.jpg')}}" class="d-block w-100" alt="">
                                </div>
                            </div>

                            <ol class="carousel-indicators">
                                <li data-target="#room-thumbnail--slide" data-slide-to="0" class="active">
                                    <img src="{{asset('img/bg-img/villa-double-2.jpg')}}" class="d-block w-100" alt="">
                                </li>
                                <li data-target="#room-thumbnail--slide" data-slide-to="1">
                                    <img src="{{asset('img/bg-img/villa-double-3.jpg')}}" class="d-block w-100" alt="">
                                </li>
                                <li data-target="#room-thumbnail--slide" data-slide-to="2">
                                    <img src="{{asset('img/bg-img/villa-twin-1.jpg')}}" class="d-block w-100" alt="">
                                </li>
                                <li data-target="#room-thumbnail--slide" data-slide-to="3">
                                    <img src="{{asset('img/bg-img/villa-furniture.jpg')}}" class="d-block w-100" alt="">
                                </li>
                                <li data-target="#room-thumbnail--slide" data-slide-to="4">
                                    <img src="{{asset('img/bg-img/villa-bathroom-1.jpg')}}" class="d-block w-100" alt="">
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- Room Service -->
                    <div class="room-service mb-50">
                        <h4>Room Services</h4>
                        <ul>
                            <li><img src="{{asset('img/core-img/icon1.png')}}" alt=""> Air Conditioning</li>
                            <li><img src="{{asset('img/core-img/icon2.png')}}" alt=""> Free drinks</li>
                            <li><img src="{{asset('img/core-img/icon3.png')}}" alt=""> Restaurant Order</li>
                            <li><img src="{{asset('img/core-img/icon4.png')}}" alt=""> Cable TV</li>
                            <li><img src="{{asset('img/core-img/icon5.png')}}" alt=""> Unlimited Wifi</li>
                            <li><img src="{{asset('img/core-img/icon6.png')}}" alt=""> Service 24/24</li>
                        </ul>
                    </div>

                    <p>We offers 16 spacious rooms with warm vintage design are distintive in character, offering remarkable comfort and tranqulity to assure unrivalled relaxation. Additionally, terrace space equipped with garden chairs and table infront of each villa room.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Rooms Area End -->
@endsection