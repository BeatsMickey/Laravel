<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $categories = route('news.index');
        $auth = route('auth.index');
        $createNews = route('admin.create');
        return <<<php
        <h3>Это главная страница агрегатора новостей</h3>
        <p></p>
        <a href="$categories">Категории новостей</a><br>
        <a href="$auth">Авторизация</a><br>
        <a href="$createNews">Добавление новостей</a><br>
php;
    }
}
