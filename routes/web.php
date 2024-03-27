<?php

use Illuminate\Support\Facades\Route;

//Route::view('/', 'welcome');
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

Route::get('/shop', [\App\Http\Controllers\ShopController::class, 'index']);

Route::view('/about', 'about');

Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index']);

Route::get('/admin/all-contacts', [\App\Http\Controllers\ContactController::class, 'getAllContacts']);

Route::post("/send-contact", [\App\Http\Controllers\ContactController::class, 'sendContact']);

Route::post('/admin/add-product', [\App\Http\Controllers\ProductsController::class, 'addProduct']);

Route::get('/admin/products', [\App\Http\Controllers\ProductsController::class, 'getAllProducts']);







//Route::get('/shop', function () {
//    return view('shop');
//});

