@extends('main')

@section('title')
    Категории новостей
@endsection

@section('content')
    <h2>Категории новостей:</h2>
    @forelse($categories as $value)
        <div class="content_block">
            <a href="{{ route('news.newsCategories', $value['id']) }}" class="content_link">{{ $value['name'] }}</a>
        </div>
    @empty
        <p>Новостей нет</p>
    @endforelse
@endsection
