<?php

namespace App\Http\Controllers;

use App\Models\ProductsModel;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function addProduct(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'amount' => 'required|numeric',
            'price' => 'required|numeric',
            'image' => 'required'
        ]);

        ProductsModel::create([
            'name'=>$request->get('name'),
            'description'=>$request->get('description'),
            'amount'=>$request->get('amount'),
            'price'=>$request->get('price'),
            'image'=>$request->get('image')
        ]);

        return view('products');

    }
}
