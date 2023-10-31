<header>
    <nav class="navbar navbar-expand navbar-light bg-dark p-0">
        <div class="container">
            <div class="nav navbar-nav align-items-center">
                <a class="nav-link py-4 {{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href=" {{route('home')}} ">Home</a>
                <a class="nav-link py-4 {{ Route::currentRouteName() === 'about' ? 'active' : '' }}" href=" {{route('about')}} ">About</a>
            </div>
        </div>
    </nav>
</header>