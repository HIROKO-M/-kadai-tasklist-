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


Route::get('/', 'TasklistController@index');

/* 'taslists' はルーティングに設定される
　　=>　URLに利用される
　　=>　index.php 内で他のphpを呼び出す際(例 link_to_route ('tasklists.show'…　）
　　　　と同一になっている必要がある)
*/
Route::resource('tasklists', 'TasklistController');
