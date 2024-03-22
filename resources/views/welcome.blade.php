@extends('layout')
{{--<p>Trenutno vrijeme je <?= date('h:i:s')  ?></p>--}}
@section ('sadrzajStranice')

    @if($time <= 12)
        <p>Dobro jutro</p>
    @else
        <p>Dobar dan</p>
    @endif

    <p>Trenutno je {{ $currentTime}}</p>
    <p>Trenutno je {{  $time }}</p>

    @foreach($lastProducts as $lastProduct)
        {{$lastProduct->name}}
    @endforeach
@endsection

@section('title')
    Home
@endsection

