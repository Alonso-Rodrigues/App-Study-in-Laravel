<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/menu.css">
    <link rel="stylesheet" href="/css/content.css">
    <link rel="stylesheet" href="/css/create-events.css">
    <link rel="stylesheet" href="/css/footer.css">
    <script src="/js/script.js"></script>
</head>

<body>
    @include('layouts.menu') {{-- Inclui o menu --}}

    <main>
        @yield('content') {{-- Onde o conteúdo das páginas será inserido --}}
    </main>

    @include('layouts.footer') {{-- Inclui o footer --}}
</body>

</html>