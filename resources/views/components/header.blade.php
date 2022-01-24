
<header>
    <!-- contenitore per la centratura -->
    <div class="centratura">
        <!-- logo -->
        <div id="logo">
        <img src="{{ asset('storage/img/dc-logo.png') }}" alt="logo dc">
        </div>

        <!-- nav bar -->
        <nav>
        <ul>
        @foreach ($navBar as $menu)
            <li>  
            <a href="{{ $menu['href'] }}" class=" {{ $menu['focus']? 'active': '' }}"> 
                {{ $menu['text'] }} 
            </a>
        </li>
        @endforeach
        </ul>
        </nav>
    </div>
<!-- <font-awesome-icon icon="user-secret"></font-awesome-icon>  --> <!-- test per fontawesome -->
</header>
