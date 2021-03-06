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

Route::get('/', 'VideosController@location');

Route::group(['middleware' => ['web']], function(){
	// Route::get('/videos', 'VideosController@index');
	// Route::post('/videos', 'VideosController@store');
	// Route::get('/videos/create', 'VideosController@create');
	// Route::get('/videos/{id}', 'VideosController@show');
	Route::resource('videos', 'VideosController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
