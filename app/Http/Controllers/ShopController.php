<?php

namespace App\Http\Controllers;

use App\Models\ProductsModel;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $phones = ['Samsung', 'Iphone', 'Ericsson', 'Nokia'];
        $products = ProductsModel::all();
        return view('shop', compact('products', 'phones'));
    }
}
