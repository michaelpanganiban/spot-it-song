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
Route::get('/songs', 'SongsController@index')->name('songs');
Route::post('/addSong', 'SongsController@addSong')->name('addSongs');
Route::post('/editSong', 'SongsController@editSong')->name('editSong');
Route::post('/deleteSong', 'SongsController@deleteSong')->name('deleteSong');