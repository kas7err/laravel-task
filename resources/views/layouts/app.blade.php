<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Meta description goes here">
    <title>Laravel Task</title>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="flex h-screen pt-10">
        <div class=" m-auto" id="app">
            @yield('content')
        </div>
    </div>


    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
