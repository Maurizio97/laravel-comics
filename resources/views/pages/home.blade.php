@extends('layout.main-layout')
@section('component')
<section id="home">
    <h1 id="title">
        Home Page
    </h1>
    <div class="anchor">
        <a href="{{ route('comic')}}">COMIC</a>
    </div>
    <div id="container-img"> 
        @foreach($comics as $comic)
            <h2>{{ $comic["name"] }}</h2>
            <div id="img">
                {{-- <img src="{{ asset('img/spiderman.png') }}" alt="cover"> --}}
                <img src="{{ asset($comic["img"]) }}" alt="cover">
            </div>
        @endforeach
    </div>
    <div>
    </div>
</section>
@endsection