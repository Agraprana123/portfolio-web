<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'FRAME — Digital Portfolio')</title>

    <meta
        name="description"
        content="@yield('description', 'Portfolio pengembangan web dan teknologi digital.')"
    >

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>
<body>
    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

    @livewireScripts
</body>
</html>