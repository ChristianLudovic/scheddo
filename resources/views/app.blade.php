<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
    @vite('resources/js/app.js')
    @livewireStyles
</head>
<body>
    @include('livewire.partials.header')
    @livewire('components.button', ['btnType' => 'secondary', 'btnName' => 'Click Me'])

    @livewireScripts
</body>
</html>