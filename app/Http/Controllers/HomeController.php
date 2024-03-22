<?php

namespace App\Http\Controllers;

use App\Models\ProductsModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $currentTime = date('h:i:s');
        $time = date("H");
        $lastProducts = ProductsModel::latest()->take(5)->get();

        return view('welcome', compact('currentTime', 'time', 'lastProducts'));
    }
}
