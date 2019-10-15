<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'ditoweb') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <main id="app">
        @include('inc.navbar')
        <div class="container">
        @include('inc.messages')
        @yield('content')   
       </div>
    </main>         
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
