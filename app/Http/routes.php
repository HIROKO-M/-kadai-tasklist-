<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'WelcomeController@index');


// ユーザ登録　Add hiroko
// ->name() はこのルーティングに名前を付けているだけです。
//　後ほど、 Form や link_to_route() で使用することになる

Route::get('signup', 'Auth\AuthController@getRegister')->name('signup.get');
Route::post('signup', 'Auth\AuthController@postRegister')->name('signup.post');


// ログイン認証　Add hiroko

Route::get('login', 'Auth\AuthController@getLogin')->name('login.get');
Route::post('login', 'Auth\AuthController@postLogin')->name('login.post');
Route::get('logout', 'Auth\AuthController@getLogout')->name('logout.get');


// 機能追加のため、ログイン認証付きルーディング　Add Hiroko

Route::group(['middleware' => 'auth'], function () {
    Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);
    Route::resource('tasklists', 'TasklistController', ['only' => ['create', 'store', 'destroy']]);
});
    /* 'tasklists' はルーティングに設定される
　　=>　URLに利用される
　　=>　index.php 内で他のphpを呼び出す際(例 link_to_route ('tasklists.show'…　）
　　　　と同一になっている必要がある)
*/


