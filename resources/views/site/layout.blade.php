<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- icones font awaseome --}}
    <script src="https://kit.fontawesome.com/d635fe6f2f.js" crossorigin="anonymous"></script>
    {{-- ICONS --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    {{-- Css e JavaScript --}}
    @vite(['resources/css/app.css','resources/js/app.js'])
    {{-- Materialize CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>@yield('title')</title>
</head>
<body>
    {{-- navbar --}}
    @include('partials.navibar')

    {{-- SLIDE --}}
    @include('partials.banner-slide')

    {{-- conteudo principal --}}
    @yield('content')
    @include('partials.footer')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
