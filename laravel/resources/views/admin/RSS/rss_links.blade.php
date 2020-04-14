@extends('layouts.main')

@section('title')
    RSS ссылки
@endsection

@section('content')
    @forelse ($links as $link)
        <div class="content_block">
            <h2>{{ $link->link }}</h2>
            @if($link->is_active)
                <p>Активна</p>
            @else
                <p>Не активна</p>
            @endif
            <a class="content_link btn" href="{{ route('admin.rss.update', ['id' => $link->id]) }}">
                Изменить
            </a>
            <a class="content_link btn" href="{{ route('admin.rss.delete', ['id' => $link->id]) }}">
                <p>Активировать/Деактивировать</p>
            </a>
        </div>
    @empty
        RSS ссылок нет!
    @endforelse
    {{ $links->links() }}
@endsection
