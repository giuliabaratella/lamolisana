{{-- <div>Header <i class="fa-solid fa-home"></i></div> --}}
<div id="logo">
    <img src="{{ Vite::asset('resources/img/logo.png') }}" alt="logo">
</div>
<ul class="d-flex column-gap-5 ">
    <li>
        <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
        {{-- oppure
             Request::route()->getName() --}}
    </li>
    <li>
        <a class="nav-link {{ Route::currentRouteName() == 'recipes.index' ? 'active' : '' }}"
            href="{{ route('recipes.index') }}">Ricette</a>
    </li>
    <li>
        <a class="nav-link {{ Route::currentRouteName() == 'products.index' ? 'active' : '' }}"
            href="{{ route('products.index') }}">Prodotti</a>
    </li>
    <li>
        <a class="nav-link {{ Route::currentRouteName() == 'pages.about' ? 'active' : '' }}"
            href="{{ route('pages.about') }}">About</a>
    </li>
</ul>
