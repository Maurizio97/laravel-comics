@extends('layout.main-layout')
@section('component')
<section id="home">
    <h1 id="title">
        Home Page
    </h1>
    <div class="anchor">
        <a href="{{ route('comic')}}">COMIC</a>
    </div>
    <div class="container-img"> 
        @foreach($comics as $comic)
            <div class="card">
                <div class="img">
                    <img src="{{ asset($comic["img"]) }}" alt="cover">
                    <h2>{{ $comic["name"] }}</h2>
                </div>
            </div>
        @endforeach
    </div>
    <div>
    </div>
</section>
@endsection