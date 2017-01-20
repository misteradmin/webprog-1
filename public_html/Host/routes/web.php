<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dota2', function () {
    return view('gaming');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/sport', function () {
    return view('sport');
});

Route::get('/eatery', function () {
    return view('eatery');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
