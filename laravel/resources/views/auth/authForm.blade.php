@extends('main')

@section('title')
    Авторизация
@endsection

@section('content')
    <form method="post">
        <label>Ваш логин:
            <input type="text" name="login" placeholder="login" class="content_form"></label><br>
        <label>Ваш пароль:
            <input type="text" name="password" placeholder="password" class="content_form"></label><br>
        <label>Запомнить меня:
            <input type="checkbox" name="check" class="content_form"></label><br>
        <input type="submit" class="content_form">
    </form>
@endsection
