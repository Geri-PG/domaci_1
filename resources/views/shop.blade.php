@extends('layout')
@section ('sadrzajStranice')
    @foreach($products as $product)
        {{$product->name}}
        {{$product->amount}}
    @endforeach
@endsection

@section('title')
    Shop
@endsection
