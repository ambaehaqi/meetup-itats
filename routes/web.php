<?php

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

Route::get('/articles', 'ArticleController@index')->name('articles.index');
Route::get('/articles/add', 'ArticleController@create')->name('articles.add');
Route::post('/articles/add', 'ArticleController@store')->name('articles.store');
Route::get('/articles/{article}/edit', 'ArticleController@edit')->name('articles.edit');
Route::patch('/articles/{article}/edit', 'ArticleController@update')->name('articles.update');
Route::delete('/articles/{article}/delete', 'ArticleController@destroy')->name('articles.destroy');
