@extends('layout.main-layout')
@section('component')
    <h1 id="title">
        Home Page
    </h1>
    <div class="anchor">
        <a href="{{ route('comic')}}">COMIC</a>
    </div>
    <div id="container-img"> 
        <div id="img">
            <img src="{{ asset('img/spiderman.png') }}" alt="">
        </div>
    </div>
@endsection