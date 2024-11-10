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
