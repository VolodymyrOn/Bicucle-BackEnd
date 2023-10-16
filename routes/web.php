<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/basket', function () {
    return view('basket');
});

Route::get('/comparison', function () {
    return view('comparison');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/administrator', function () {
    return view('administrator');
});