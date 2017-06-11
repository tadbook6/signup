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
Route::pattern('id', '[0-9]+');
Route::get('/', 'ActionController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//活動
Route::resource('action', 'ActionController');

//報名
Route::group(['prefix' => 'signup'], function () {
    //建立報名資料
    Route::get('/create/{id}', 'SignupController@create')->name('signup.create');

    //儲存報名資料
    Route::post('/', 'SignupController@store')->name('signup.store');
});
