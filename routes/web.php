<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('rooms', function () {
    return view('rooms');
});

Route::get('/rooms/cottage', function () {
    return view('cottage');
});

Route::get('/rooms/villa', function () {
    return view('villa');
});

Route::get('/rooms/{slug}', function () {
    try {
      $name = request()->slug;
      $rooms = new \stdClass();
      if($name == "deluxe-room-a") {
        $rooms = array(
          'name' => "Deluxe Room A",
          'price' => "480.000",
          'max_person' => 2
        );
      } else if($name == "deluxe-room-b") {
        $rooms = array(
          'name' => "Deluxe Room B",
          'price' => "425.000",
          'max_person' => 2
        );
      } else {
        $rooms = array(
          'name' => "Deluxe Triple Room B",
          'price' => "675.000",
          'max_person' => 3
        );
      }
          
      $rooms = json_decode(json_encode($rooms), false);
      return view('deluxe', compact('rooms'));
    } catch (\Throwable $th) {
      echo $th;
    }
});

Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});
