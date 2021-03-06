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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/posts/{slug}', 'App\Http\Controllers\PostController@show');

Route::get('/about', function () {

    return view('about', [
        'articles' => App\Models\Article::take(3)->latest()->get()
    ]);

});

Route::get('articles',
    'App\Http\Controllers\ArticlesController@index')->name('articles.index')->middleware('auth');

Route::post('articles/',
    'App\Http\Controllers\ArticlesController@store');

Route::get('articles/create',
    'App\Http\Controllers\ArticlesController@create');

Route::get('articles/{article}',
    'App\Http\Controllers\ArticlesController@show')->name('articles.show');

Route::get('articles/{article}/edit',
    'App\Http\Controllers\ArticlesController@edit');

Route::put('articles/{article}',
    'App\Http\Controllers\ArticlesController@update');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
