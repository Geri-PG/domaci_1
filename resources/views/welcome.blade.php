@extends('layout')
{{--<p>Trenutno vrijeme je <?= date('h:i:s')  ?></p>--}}
@section ('sadrzajStranice')
<p>Trenutno je {{ date('h:i:s') }}</p>
@endsection

@section('title')
    Home
@endsection

