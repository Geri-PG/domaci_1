@extends('layout')

@section ('sadrzajStranice')

    @if($time <= 12)
        <p>Good morning</p>
    @else
        <p>Good day</p>
    @endif

    <p>Now is {{ $currentTime }}</p>
    <p>Now is {{  $time }}</p>

    @foreach($lastProducts as $lastProduct)
        {{$lastProduct->name}}
    @endforeach

    <form method="POST" action="/send-contact">
        @if($errors->any)
            <p>Error: {{$errors->first()}}</p>
        @endif
        @csrf
        <input name="email" type="email" placeholder="Enter email">
        <input name="subject" type="text" placeholder="Enter subject">
        <textarea name="description"></textarea>
        <button>Send message</button>
    </form>

@endsection

@section('title')
    Home
@endsection

