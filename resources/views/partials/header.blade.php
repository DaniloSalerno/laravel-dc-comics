{{-- <header>
    <nav class="navbar navbar-expand navbar-light bg-dark p-0">
        <div class="container">
            <div class="nav navbar-nav align-items-center">
                <a class="nav-link py-4 {{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href=" {{route('home')}} ">Home</a>
                <a class="nav-link py-4 {{ Route::currentRouteName() === 'comics' ? 'active' : '' }}" href=" {{route('comics')}} ">Comics</a>

                <a class="nav-link py-4 ms-5 {{ Route::currentRouteName() === 'comics.index' ? 'active' : '' }}" href="  {{ route('comics.index') }} ">Admin</a>

            </div>
        </div>
    </nav>
</header> --}}

<header>

    <div class="bar">
        <div class="container d-flex justify-content-end text-uppercase text-white gap-4">
            <div>dc power<span>&trade;</span>visa<span>&reg;</span></div>
            <div>additional dc sites <span>&blacktriangledown;</span></div>
        </div>
    </div>

    <div class="header_wrapper container d-flex justify-content-between align-items-center w-75">

        <a href="{{route('home')}}">

            <img width="75" src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="">

        </a>

        <div class="h-100">

            <nav class="navbar navbar-expand navbar-light h-100 p-0">

                <ul class="nav navbar-nav h-100">

                    <li class="nav-item h-100 d-flex align-items-center {{ Route::currentRouteName() === 'home' ? 'active' : '' }}">

                        <a class="nav-link" href="{{route('home')}}">characters</a>

                    </li>

                    <li class="nav-item h-100 d-flex align-items-center {{ Route::currentRouteName() === 'comics' ? 'active' : '' }}">

                        <a class="nav-link" href="{{route('comics')}}">comics</a>

                    </li>

                    <li class="nav-item h-100 d-flex align-items-center {{ Route::currentRouteName() === 'movies' ? 'active' : '' }}">

                        <a class="nav-link" href="#">movies</a>

                    </li>

                    <li class="nav-item h-100 d-flex align-items-center {{ Route::currentRouteName() === 'tv' ? 'active' : '' }}">

                        <a class="nav-link" href="#">tv</a>

                    </li>

                    <li class="nav-item h-100 d-flex align-items-center {{ Route::currentRouteName() === 'games' ? 'active' : '' }}">

                        <a class="nav-link" href="#">games</a>

                    </li>

                    <li class="nav-item h-100 d-flex align-items-center {{ Route::currentRouteName() === 'collectibles' ? 'active' : '' }}">

                        <a class="nav-link" href="#">collectibles</a>

                    </li>

                    <li class="nav-item h-100 d-flex align-items-center {{ Route::currentRouteName() === 'videos' ? 'active' : '' }}">

                        <a class="nav-link" href="#">videos</a>

                    </li>

                    <li class="nav-item h-100 d-flex align-items-center {{ Route::currentRouteName() === 'fans' ? 'active' : '' }}">

                        <a class="nav-link" href="#">fans</a>

                    </li>

                    <li class="nav-item h-100 d-flex align-items-center {{ Route::currentRouteName() === 'news' ? 'active' : '' }}">

                        <a class="nav-link" href="#">news</a>

                    </li>

                    <li class="nav-item h-100 d-flex align-items-center {{ Route::currentRouteName() === 'shop' ? 'active' : '' }}">

                        <a class="nav-link" href="#">shop</a><span class="active">&blacktriangledown;</span>

                    </li>

                    <li  class="nav-item h-100 d-flex align-items-center {{ Route::currentRouteName() === 'comics.index' ? 'active' : '' }}">
                        <a class="nav-link " href="  {{ route('comics.index') }} ">Admin</a>
                    </li>
                </ul>

            </nav>

        </div>

        {{-- <form action="#">
            <div class="search_wrapper d-flex gap-1">
                <input type="search" name="search" id="search" class="border-0 text-end" placeholder="Search">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </span>
            </div>
        </form> --}}

    </div>

</header>