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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/sql', function () {
// 	$modelRec = DB::table('posts')
//             ->join('post_images', 'posts.id', '=', 'post_images.post_id')
//             ->select('posts.id', 'post_images.img_url')
//             ->orderByDesc('posts.id')
//         	->limit(3)
//             ->get();
//     echo "<pre>";
//     print_r($modelRec);
//     return;
// });
Route::get('/','WelcomeController@index')->name('welcome.index');
// Route::resource('post','PostController');
Route::get('post','PostController@index')->name('post.index');
Route::post('post','PostController@store')->name('post.store');
Route::get('post/create','PostController@create')->name('post.create');
Route::get('post/{post}','PostController@show')->name('post.show');
Route::put('post/{post}','PostController@update')->name('post.update');
Route::delete('post/{post}','PostController@destroy')->name('post.destroy');
Route::get('post/{post}/edit','PostController@edit')->name('post.edit');

// PostImageController
// Route::get('post/image/{id}','PostController@image')->name('post.image');
// Route::post('post/image-upload','PostController@imageUpload')->name('post.image-upload');
// Route::get('post/list/{id}','PostController@list')->name('post.list');
// Route::delete('post/image/{image}','PostController@destroyImage')->name('post.destroy-image');

Route::post('post-image','PostImageController@store')->name('post.image.store');
Route::get('post-image/create/{id}','PostImageController@create')->name('post.image.create');
Route::delete('post-image/{postImage}','PostImageController@destroy')->name('post.image.destroy');
Route::get('post-image/list/{id}','PostImageController@list')->name('post.image.list');
// Route::delete('post-image/delete/{postImage}','PostImageController@delete')->name('post.image.delete');


/* Photo Module */
// Route::get('photo','photoController@index')->name('photo.index');
Route::post('photo','photoController@store')->name('photo.store');
Route::get('photo/create/{id}','photoController@create')->name('photo.create');
// Route::get('photo/{photo}','photoController@show')->name('photo.show');
// Route::put('photo/{photo}','photoController@update')->name('photo.update');
Route::delete('photo/{photo}','photoController@destroy')->name('photo.destroy');
// Route::get('photo/{photo}/edit','photoController@edit')->name('photo.edit');
Route::get('photo/list/{id}','photoController@list')->name('photo.list');
Route::delete('photo/delete/{photo}','photoController@delete')->name('photo.delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
