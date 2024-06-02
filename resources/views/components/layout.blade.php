<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecommerce</title>

    @yield('styles')

    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>
    <x-topbar></x-topbar>
    <x-navigation></x-navigation>
    {{$slot}}
    <x-footer></x-footer>
    <x-copyright></x-copyright>
    @yield('scripts')
@livewireScripts
</body>
</html>
