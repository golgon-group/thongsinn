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

Route::get('/rooms/deluxe', function () {
    return view('deluxe');
});

Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});
