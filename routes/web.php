<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    Artisan::call("view:clear");
    return view('home');
})->name("home");

Route::get('/About', function () {
    return view('about');
})->name("about");

Route::get('/Collage', function () {
    return view('collage');
})->name("collage");

Route::get('/Opportunities', function () {
    return view('jobs');
})->name("jobs");

Route::get('/ContactUs', function () {
    return view('contact');
})->name("contact");
