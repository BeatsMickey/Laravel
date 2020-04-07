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
    Route::get('/create', 'NewsController@create')->name('create');
    Route::get('/update/{id}', 'NewsController@update')->name('update');
    Route::post('/save_news/{id}', 'NewsController@saveNews')->name('saveNews');
    Route::get('/delete/{id}', 'NewsController@delete')->name('delete');
    Route::get('/categories', 'NewsController@categories')->name('categories');
    Route::get('/create_categories', 'NewsController@createCategories')->name('createCategories');
    Route::get('/update_categories/{id}', 'NewsController@updateCategories')->name('updateCategories');
    Route::get('/delete_categories/{id}', 'NewsController@deleteCategories')->name('deleteCategories');
    Route::post('/save_categories/{id}', 'NewsController@saveCategories')->name('saveCategories');
});

/*
 * Роуты к фидбэку
 */
Route::get('/feedback', 'Feedback\FeedbackController@index')->name('feedback');
Route::post('/feedback_send', 'Feedback\FeedbackController@feedbackSend')->name('feedbackSend');

//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');


