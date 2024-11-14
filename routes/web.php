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
    return view('frontend/staff-pengajar/index');
});
Route::get('/staff/detail', function () {
    return view('frontend/staff-pengajar/show');
});
Route::get('/kontak', function () {
    return view('frontend/contact/index');
});
Route::get('/identitas-sekolah', function () {
    return view('frontend/identitas-sekolah/index');
});
Route::get('/profil-sekolah', function () {
    return view('frontend/profil-sekolah/index');
});
