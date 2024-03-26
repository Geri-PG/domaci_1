@extends('layout')
@section ('sadrzajStranice')
    @foreach($products as $product)
        <p> {{$product->name}} </p>
    @endforeach

    @foreach($phones as $phone)
        <p> {{$phone}} </p>
    @endforeach
@endsection

@section('title')
    Shop
@endsection
