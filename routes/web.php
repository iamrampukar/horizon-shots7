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
// Route::resource('post','PostController');
Route::get('post','PostController@index')->name('post.index');
Route::post('post','PostController@store')->name('post.store');
Route::get('post/create','PostController@create')->name('post.create');
Route::get('post/{post}','PostController@show')->name('post.show');
Route::put('post/{post}','PostController@update')->name('post.update');
Route::delete('post/{post}','PostController@destroy')->name('post.destroy');
Route::get('post/{post}/edit','PostController@edit')->name('post.edit');

/* Photo Module */
// Route::get('photo','photoController@index')->name('photo.index');
Route::post('photo','photoController@store')->name('photo.store');
Route::get('photo/create/{id}','photoController@create')->name('photo.create');
// Route::get('photo/{photo}','photoController@show')->name('photo.show');
// Route::put('photo/{photo}','photoController@update')->name('photo.update');
// Route::delete('photo/{photo}','photoController@destroy')->name('photo.destroy');
// Route::get('photo/{photo}/edit','photoController@edit')->name('photo.edit');
Route::get('photo/list/{id}','photoController@list')->name('photo.list');