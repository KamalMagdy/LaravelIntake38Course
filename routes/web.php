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


Route::get(
    'posts',
    'PostsController@index'
)->name('posts.index')->middleware('auth');
Route::group(['middleware' => ['web']], function () {
    Route::get('posts/create','PostsController@create');
Route::post('posts','PostsController@store');
Route::get('posts/show/{id}','PostsController@show');
Route::get('/posts/edit/{id}', 'PostsController@edit');
Route::post('/posts/update/{id}', 'PostsController@update')->name('posts.update');
Route::delete('/posts/delete/{id}', 'PostsController@destroy');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
