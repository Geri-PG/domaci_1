@extends('layout')
@section ('sadrzajStranice')
    @foreach($allProducts as $product)
        <p>{{$product->description}}</p>
    @endforeach

@endsection

@section('title')
    All products
@endsection
