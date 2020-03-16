<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@section('title')Главная страница@show</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <ul class="menu">
            <li><a href="{{ route('news.index') }}" class="menu_link">Категории новостей</a></li>
            <li><a href="{{ route('auth.index') }}" class="menu_link">Авторизация</a></li>
            <li><a href="{{ route('admin.create') }}" class="menu_link">Добавление новостей</a></li>
        </ul>
    </header>
    <div class="container">
        <div class="content">
            @yield('content')
        </div>
        <footer>Новости 2020</footer>
    </div>
</body>
</html>
