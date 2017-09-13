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
/*
Route::get('/', function () {
    return view('templates.news');
});
*/
Route::get('/', ['uses' => 'HomeController@news', 'as' => 'news']);
Route::get('/news/{id}/show', ['uses' => 'HomeController@show']);
