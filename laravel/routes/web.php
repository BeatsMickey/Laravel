<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
 * Роуты к админке новостей
 */
Route::group([
    'prefix' => 'admin/news',
    'namespace' => 'Admin',
    'as' => 'admin.news.'],
    function() {
    Route::get('/', "NewsController@index")->name('index');
    Route::match(['get', 'post'],'/create', 'NewsController@create')->name('create');
    Route::match(['get', 'post/{id}'],'/update', 'NewsController@update')->name('update');
    Route::get('/delete/{id}', 'NewsController@delete')->name('delete');

});

/*
 * Роут к фидбэку
 */
Route::match(['post','get'],'/feedback', 'Feedback\FeedbackController@index')->name('feedback');

//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');


