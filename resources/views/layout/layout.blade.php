<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    <script src=" {{ asset('js/app.js') }} "></script>
    <title>@yield('title')</title>
</head>

<body>
    {{-- HEADER --}}
    @include('layout.header')

    {{-- MAIN --}}
    @yield('content')

    {{-- FOOTER --}}
    @include('layout.footer')
</body>

</html>
