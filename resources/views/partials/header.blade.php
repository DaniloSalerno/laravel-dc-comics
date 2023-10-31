<header>
    <nav class="navbar navbar-expand navbar-light bg-dark p-0">
        <div class="container">
            <div class="nav navbar-nav align-items-center">
                <a class="nav-link py-4 {{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href=" {{route('home')}} ">Home</a>
                <a class="nav-link py-4 {{ Route::currentRouteName() === 'comics' ? 'active' : '' }}" href=" {{route('comics')}} ">Comics</a>

                <a class="nav-link py-4 ms-5" href="  {{ route('comics.index') }} ">Admin</a>

            </div>
        </div>
    </nav>
</header>