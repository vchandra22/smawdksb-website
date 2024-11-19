<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
})->name("home");

Route::get('/berita', function () {
    return Inertia::render('Berita/Index');
})->name("berita");

Route::get('/detail-berita', function () {
    return Inertia::render('Berita/Show');
})->name("detail-berita");

Route::get('/agenda', function () {
    return Inertia::render('Agenda/Index');
})->name("agenda");
