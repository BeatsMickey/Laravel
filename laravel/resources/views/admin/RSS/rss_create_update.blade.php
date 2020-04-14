@extends('layouts.main')

@section('title')
    RSS ссылка
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="
        @if($rss->id)
    {{ route('admin.rss.save' , ['id' => $rss->id])}}
    @else
    {{ route('admin.rss.save', ['id' => 0])}}
    @endif
        ">
        @csrf
        <label>RSS ссылка:
            <input type="text" name="link" class="content_form" value="{{ $rss->link ?? old('link') }}"></label><br>

        <label>Выберете категорию новости:
            <select class="content_form" name="categories_id">
                @if($rss->categories_id)
                    <option value="{{ $categories->id }}">{{ $categories->title }}</option>
                @else
                    @foreach($categories as $value)
                        <option value="{{ $value->id }}"
                                @if ($value->id == old('categories_id'))
                                selected
                            @endif
                        >{{ $value->title }}</option>
                    @endforeach
                @endif
            </select></label><br>
        <label>Активная ли RSS ссылка:
            <input type="checkbox" name="is_active" value="1" class="content_form"
                   @if ($rss->is_active ?? old('is_active'))
                   checked
                @endif
            ></label><br>
        <input type="submit" class="btn">
    </form>


@endsection
