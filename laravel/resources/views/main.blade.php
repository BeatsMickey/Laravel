<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@section('title')Главная страница@show</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <div class="container header">
            <a href="/">LOGO</a>
            <ul class="menu">
                <li><a href="{{ route('news.index') }}" class="menu_link">Категории новостей</a></li>
                <li><a href="{{ route('auth.index') }}" class="menu_link">Авторизация</a></li>
                <li><a href="{{ route('feedback') }}" class="menu_link">Форма обратной связи</a></li>
            </ul>
        </div>
    </header>
    <div class="main">
        <div class="content">
            <div class="container">
                @yield('content')
            </div>
        </div>
        <footer>
            <div class="container">Новости 2020</div>
        </footer>
    </div>
</body>
</html>
