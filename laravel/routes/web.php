<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home.index');

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

Route::get('/auth', 'Auth\AuthController@index')->name('auth.index');

Route::get('/admin/create', 'Admin\AdminController@create')->name('admin.create');
