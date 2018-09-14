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
Route::group(['middleware' => 'auth'], function () {

Route::get('/videos', function () {
    return view('videos.index');
});


Route::post('/store', 'VideoController@store');
Route::get('/videos', 'VideoController@index');
Route::get('/', 'HomeController@index')->name('home');
});