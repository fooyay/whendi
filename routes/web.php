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
    $hour = date("H");
    $day_mode = $hour > 5 && $hour < 18;
    $lesson_types = ['horse riding', 'piano', 'yoga'];
    return view('welcome', compact('day_mode', 'lesson_types'));
});

Route::get('about', function () {
    return view('pages.about');
});
