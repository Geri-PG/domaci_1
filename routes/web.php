<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('/shop', 'shop');

Route::view('/about', 'about');

Route::view('/contact', 'contact');



//Route::get('/shop', function () {
//    return view('shop');
//});
//
//Route::get('/contact', function () {
//    return view('contact');
//});
