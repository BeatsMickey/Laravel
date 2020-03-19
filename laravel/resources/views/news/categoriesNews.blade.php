@extends('main')

@section('title')
    Новости в категории
@endsection

@section('content')
    <h2>Новости в категории {{ $categoriesName }} :</h2>
    @forelse($news as $value)
        <div class="content_block">
            <a href="{{ route('news.singleNews', $value['id']) }}" class="content_link">{{ $value['title'] }}</a>
        </div>
    @empty
        <p>Новостей в данной категории нет</p>
    @endforelse
@endsection
