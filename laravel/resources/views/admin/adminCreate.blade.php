@extends('main')

@section('title')
    Создание новости
@endsection

@section('content')
    <form method="post">
        <label>Название новости:
            <input type="text" name="title" class="content_form"></label><br>
        <textarea name="description" cols="80" rows="10" placeholder="Описание новости" class="content_form"></textarea><br>
        <textarea name="miniDescription" cols="80" rows="10" placeholder="Краткое описание" class="content_form"></textarea><br>
        <input type="submit" class="content_form">
    </form>
@endsection
