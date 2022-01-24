<div id="container-main">
    <div id="container-sec-1">
      <!-- jumbotron  -->
      <div id="jumbotron"></div>
      <!-- /jumbotron  -->

      <!-- items comics -->
        @yield('component')
      <!-- /items comics -->
    </div>

    <!-- colore di background section 2-->
    <div id="background-sec-2">
      <div class="centratura">
        <!-- section 2 -->
        <section>
            @foreach ($navMain as $item)
            <div class="item">
              <img src="{{ $item['image']}}" :alt="$item['text']">
              <a href="#">{{ $item['text'] }}</a>
            </div>
                
            @endforeach
        </section>
        <!-- /section 2 -->
      </div>
    </div>
    <!-- /colore di background section 2-->

  </div>