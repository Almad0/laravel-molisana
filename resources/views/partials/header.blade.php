<header>
  <div class="headerWrap">
    <div class="logo">
      <img src="{{asset('img/logo.png')}}" alt="">
    </div>
    <div class="navbar">
      <nav>
        <a href="{{ route('home') }}" class="{{ Route::currentRouteName() === 'home' ? 'active' : ''}}">home</a>
        <a href="{{ route('products') }}" class="{{ Route::currentRouteName() === 'products' ? 'active' : ''}}">prodotti</a>
        <a href="{{ route('contacts') }}" class="{{ Route::currentRouteName() === 'contacts' ? 'active' : ''}}">contatti</a>
      </nav>
    </div>
  </div>
</header>
