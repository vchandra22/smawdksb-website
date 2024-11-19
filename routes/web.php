<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
});
Route::get('/berita', function () {
    return Inertia::render('Berita/Index');
});
Route::get('/berita/detail', function () {
    return Inertia::render('Berita/Show');
});
