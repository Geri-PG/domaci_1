<?php

use Illuminate\Support\Facades\Route;

//Route::view('/', 'welcome');
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

Route::get('/shop', [\App\Http\Controllers\ShopController::class, 'index']);

Route::view('/about', 'about');

//Route::view('/contact', 'contact');
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index']);

Route::get('/admin/all-contacts', [\App\Http\Controllers\ContactController::class, 'getAllContacts']);




//Route::get('/shop', function () {
//    return view('shop');
//});
//
//Route::get('/contact', function () {
//    return view('contact');
//});
