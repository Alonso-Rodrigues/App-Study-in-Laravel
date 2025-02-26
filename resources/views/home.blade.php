<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/menu.css">
    <link rel="stylesheet" href="/css/msg.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/create.css">
    <link rel="stylesheet" href="/css/contact.css">
    <link rel="stylesheet" href="/css/content.css">
    <link rel="stylesheet" href="/css/events.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/buttons/btn-menu.css">
    <link rel="stylesheet" href="/css/buttons/btn-content.css">
    <link rel="stylesheet" href="/css/buttons/btn-events.css">
    <link rel="stylesheet" href="/css/buttons/btn-create.css">
    <script src="/js/script.js"></script>
</head>

<body>
    @include('layouts.menu')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')
</body>

</html>