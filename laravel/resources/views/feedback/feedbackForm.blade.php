@extends('main')

@section('title')
    Форма обратной связи
@endsection

@section('content')
    <form action="{{ route('feedback') }}" method="post">
        @csrf
        <label>Ваше имя для обратной связи:
            <input type="text" name="name" class="content_form"></label><br>
        <textarea name="feedback" cols="80" rows="10" placeholder="Поле для ввода комментария / отзыва по работе проекта" class="content_form"></textarea><br>
        <input type="submit" class="content_form">
    </form>
@endsection