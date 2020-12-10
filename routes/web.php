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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'MenuController@index');

// Route::post('Menu/create', 'MenuController@create');

Route::resource('Menu', 'MenuController');
// 全てのコントローラのアクションを作ってくれている

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
