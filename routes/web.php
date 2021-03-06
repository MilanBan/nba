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

Route::get('/', 'TeamsController@index');  //->name('all-teams');
Route::get('/teams/{id}', 'TeamsController@show');  //->name('team');
Route::get('/players/{id}', 'PlayersController@show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
