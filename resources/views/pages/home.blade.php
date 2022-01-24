@extends('layout.main-layout')
@section('component')
{{-- <section id="home">
    <h1 id="title">
        Home Page
    </h1>
    <div class="anchor">
        <a href="{{ route('comic')}}">COMIC</a>
    </div>
    <div class="container-img"> 
        @foreach($comicsCop as $comic)
            <div class="card">
                <div class="img">
                    <img src="{{ asset($comic["thumb"]) }}" alt="cover">
                    <h2>{{ $comic["series"] }}</h2>
                </div>
            </div>
        @endforeach
    </div>
    <div>
    </div>
</section> --}}

<!-- items comics -->
<div id="container-comics-items">
    <div class="centratura" id="cont-item-comic">
        @foreach ($comicsCop as $comic)
        <div class="item-comics">
            <div class="cont-img">
                <a href="{{ route('comic')}}">
                    <img src="{{ asset($comic['thumb']) }}" alt="{{ $comic['series'] }}">
                </a>
            </div>
              <h3>
                <a href="{{ route('comic')}}">
                    {{ $comic['series'] }}
                </a>

              </h3>
        </div>
        @endforeach
    </div>
    <div class="btn">Load More</div>
  </div>
  <!-- /items comics -->
@endsection