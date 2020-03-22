<?php

use Illuminate\Support\Facades\Route;


/*
 * Главный роут
 */
Route::get('/', 'HomeController@index')->name('home.index');

/*
 * Роуты для новостей
 */
Route::group(
    ['prefix' => 'news',
    'namespace' => 'News',
    'as' => 'news.'],
    function () {
        Route::get('/', 'NewsController@index')->name('index');
        Route::get('/categories/{id}', 'NewsController@newsCategories')->name('newsCategories');
        Route::get('/singleNews/{id}', 'NewsController@singleNews')->name('singleNews');
    }
);

/*
 * Роуты к авторизации
 */
Route::get('/auth', 'Auth\AuthController@index')->name('auth.index');

/*
 * Роуты к админке
 */
Route::get('/admin/create', 'Admin\AdminController@create')->name('admin.create');

/*
 * Роут к фидбэку
 */
Route::match(['post','get'],'/feedback', 'Feedback\FeedbackController@index')->name('feedback');
