<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', config('app.name'))</title>

    <link href="{{ asset('/css/form.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/tailwind.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body class="bg-white text-gray-600 font-sans leading-normal text-base tracking-normal flex min-h-screen flex-col">
    <div class="wrapper flex flex-1 flex-col bg-gray-100">

        @yield('header')

        @yield('content')

        @yield('footer')

        <script src="{{ asset('/js/app.js') }}"></script>
        @stack('scripts')
    </div>
</body>
</html>