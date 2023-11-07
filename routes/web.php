<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\order_admin;


Route::get('/', function () {
    return view('index');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::any('/basket', function () {
    return view('basket');
});

Route::any('/comparison', function () {
    return view('comparison');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/administrator', function () {
    return view('administrator');
});

Route::any('/characteristics', function () {
    return view('characteristics');
});

Route::any('/order', function () {
    return view('order');
});

Route::get('/purchase-notification', function () {
    return view('purchase-notification');
});

Route::get('/purchase-notification', function () {
    Mail::to('volodymyr.onyshchuk@kpk-lp.com.ua')
            ->send(new order_admin());
    return view('purchase-notification');
});