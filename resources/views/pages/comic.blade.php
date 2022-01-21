@extends('layout.main-layout')

@section('component')
<section id="comic">
    <h1>
        Page comic
    </h1>
    <div class="anchor">
        <a href="{{ route('home') }}">HOME</a>
    </div>

    <div id="container-info">
        <div id="col-sx">
            <h2>
                Nome fumetto
            </h2>
    
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur, ut perferendis. Eveniet nostrum voluptatibus atque accusamus molestiae ea dolorem? Quia autem placeat aliquid recusandae eveniet porro maiores distinctio. Pariatur, vero?
            </p>
        </div>
        <div id="col-dx">
            <img src="{{ asset('img/spiderman.png')}}" alt="cover"
        </div>
    </div>
</section>
@endsection