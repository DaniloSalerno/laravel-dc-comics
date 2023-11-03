<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DC Comics Admin</title>

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    @include('partials.admin.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')


</body>

</html>