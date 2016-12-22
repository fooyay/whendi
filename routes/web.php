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

Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('features', 'PagesController@features');

Route::get('businesses', 'BusinessesController@index');
Route::get('businesses/register', 'BusinessesController@create');
Route::get('businesses/{business}', 'BusinessesController@show');

Route::post('lessons', 'LessonsController@store');
Route::get('lessons/{lesson}/edit', 'LessonsController@edit');
Route::patch('lessons/{lesson}', 'LessonsController@update');
Route::delete('lessons/{lesson}', 'LessonsController@destroy');

Auth::routes(); // user registration, login, and password reset

Route::get('/home', 'HomeController@index');


Route::group(['middleware' => 'admin'], function() {
    Route::get('admin', 'PagesController@admin');
});
