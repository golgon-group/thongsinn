@extends('layouts.app')
@section('title', $rooms->name)
@section('content')
  <!-- Breadcrumb Area Start -->
  <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{asset('img/bg-img/cottage-double-2.jpg')}});">
    <div class="container h-100">
        <div class="row h-100 align-items-end">
            <div class="col-12">
                <div class="breadcrumb-content d-flex align-items-center justify-content-between pb-5">
                    <h2 class="room-title">{{ $rooms->name }}</h2>
                    <h2 class="room-price">Rp.{{ $rooms->price }} <span>/ Per Night</span></h2>
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
                                    <img src="{{asset('img/bg-img/deluxe-double-2.jpg')}}" class="d-block w-100" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('img/bg-img/deluxe twin-1.jpg')}}" class="d-block w-100" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('img/bg-img/deluxe-facility.jpg')}}" class="d-block w-100" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('img/bg-img/deluxe-bathroom-1.jpg')}}" class="d-block w-100" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('img/bg-img/deluxe-bathroom-2.jpg')}}" class="d-block w-100" alt="">
                                </div>
                            </div>

                            <ol class="carousel-indicators">
                                <li data-target="#room-thumbnail--slide" data-slide-to="0" class="active">
                                    <img src="{{asset('img/bg-img/deluxe-double-2.jpg')}}" class="d-block w-100" alt="">
                                </li>
                                <li data-target="#room-thumbnail--slide" data-slide-to="1">
                                    <img src="{{asset('img/bg-img/deluxe twin-1.jpg')}}" class="d-block w-100" alt="">
                                </li>
                                <li data-target="#room-thumbnail--slide" data-slide-to="2">
                                    <img src="{{asset('img/bg-img/deluxe-facility.jpg')}}" class="d-block w-100" alt="">
                                </li>
                                <li data-target="#room-thumbnail--slide" data-slide-to="3">
                                    <img src="{{asset('img/bg-img/deluxe-bathroom-1.jpg')}}" class="d-block w-100" alt="">
                                </li>
                                <li data-target="#room-thumbnail--slide" data-slide-to="4">
                                    <img src="{{asset('img/bg-img/deluxe-bathroom-2.jpg')}}" class="d-block w-100" alt="">
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

                    <p>We offers 65 tastefully designed rooms feature with one double or twin beds. Each deluxe room combines luxury and comfort for guest memorable stay. All the rooms feature a step out balcony to enjoy the view of hotel surrounding.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Rooms Area End -->
@endsection