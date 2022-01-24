@extends('layout.main-layout')

@section('component')
<!-- plate -->
<div id="banner">
    <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="cover">
</div>
<!-- /plate -->
<section id="comic-page">
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
            <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="cover">
        </div>
    </div>
</section>
@endsection