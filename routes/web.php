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

Route::get('/home', 'HomeController@index')->name('home');

//首頁
Route::get('/', function () {
    return view('welcome');
});

//建立活動的表單
Route::get('/action/create', function () {
    return view('create');
})->name('action.create');

//儲存
Route::post('/action', function () {
    return view('welcome')->with('content', '儲存完成');
})->name('action.store');
