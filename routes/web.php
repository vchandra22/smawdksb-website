<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend/home/index');
});
Route::get('/berita', function () {
    return view('frontend/berita/index');
});
Route::get('/berita/detail', function () {
    return view('frontend/berita/show');
});
Route::get('/agenda', function () {
    return view('frontend/agenda/index');
});
Route::get('/staff', function () {
    return view('frontend/staff_pengajar/index');
});
Route::get('/staff/detail', function () {
    return view('frontend/staff_pengajar/show');
});
Route::get('/kontak', function () {
    return view('frontend/contact/index');
});
