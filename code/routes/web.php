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

//Default Route
Route::get('/', function () {
    return view('welcome');
});

//Users form route
Route::get('/users/new', 'App\Http\Controllers\UsersController@create');
Route::post('/users/new', 'App\Http\Controllers\UsersController@store')->name('saveUser');

//Users form route
Route::get('/albuns/new', 'App\Http\Controllers\AlbunsController@create');
Route::post('/albuns/new', 'App\Http\Controllers\AlbunsController@store')->name('saveAlbum');
Route::get('/albuns/show/{id}', 'App\Http\Controllers\AlbunsController@show');
Route::post('/albuns/show/{id}', 'App\Http\Controllers\AlbunsController@change')->name('changeAlbum');

//Artist API routes
Route::get('/artists/list', 'App\Http\Controllers\ArtistController@list');