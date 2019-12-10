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

// UserController(ユーザー)
Route::get('/users', 'UserController@index')->name('users');
Route::get('/users/{id}/stamp', 'UserController@userStamp')->name('userStamp');

// LeaderController(グループユーザー。管理者)
Route::get('/groups', 'LeaderController@index')->name('index');
Route::get('/groups/create', 'LeaderController@create')->name('create');
Route::get('/groups/{id}/showQr', 'LeaderController@showQr')->name('showQr');
Route::get('/groups/stampPush', 'LeaderController@stampPush')->name('stampPush');
Route::get('/groups/{id}/edit', 'LeaderController@edit')->name('userEdit');
Route::post('/groups/{id}/edit', 'LeaderController@update')->name('userUpdate');


// 新規作成
Route::post('groups', 'LeaderController@store')->name('store');
// LaravelのAuthで使うController
Route::get('/home', 'HomeController@index')->name('home');
