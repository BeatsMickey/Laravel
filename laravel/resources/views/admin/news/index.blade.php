@extends('admin.main_admin')

@section('title')
    Новости
@endsection

@section('content')
    <a class="content_link" href="{{ route('admin.news.create') }}">
        Создать
    </a>
    @forelse ($news as $item)
        <div class="content_block">
            <h2>{{$item->title}}</h2>
            <a class="content_link" href="{{ route('admin.news.update', ['id' => $item->id]) }}">
                Изменить
            </a>
            <a class="content_link" href="{{ route('admin.news.delete', ['id' => $item->id]) }}">
                Удалить
            </a>
        </div>
    @empty
        Новостей в нет!
    @endforelse
   {{$news->links()}}
@endsection


