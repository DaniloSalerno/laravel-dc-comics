<header>

    <div class="bar">
        <div class="container d-flex justify-content-end text-uppercase text-white gap-4">
            <div>dc power<span>&trade;</span>visa<span>&reg;</span></div>
            <div>additional dc sites <span>&blacktriangledown;</span></div>
        </div>
    </div>

    <div class="header_wrapper container d-flex gap-5 align-items-center w-75">

        <a href="{{route('home')}}">

            <img width="75" src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="">

        </a>

        <div class="h-100">

            <nav class="navbar navbar-expand navbar-light h-100 p-0">

                <ul class="nav navbar-nav h-100">

                    <li class="nav-item h-100 d-flex align-items-center {{ Route::currentRouteName() === 'comics.index' ? 'active' : '' }}">

                        <a class="nav-link" href="{{route('comics.index')}}">Dashboard</a>

                    </li>
                    
                </ul>

            </nav>

        </div>

    </div>

</header>