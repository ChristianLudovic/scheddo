<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
    @vite('resources/js/app.js')
    @livewireStyles
</head>
<body class="bg-gray">
    <header>
        @include('livewire.partials.header-user-connected')
    </header>
    <main class="text-[15px] text-text">
        @yield('content')
    </main>
    
    <footer>
        @include('livewire.partials.footer')
    </footer>
    @livewireScripts
</body>
</html>