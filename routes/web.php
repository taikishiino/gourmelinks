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


/* top */
Route::get('/','HomeController@index');

/* regist */
Route::get('regist','HomeController@regist');
/* regist */
Route::get('new','HomeController@new');
/* login */
Route::get('login','HomeController@login');

/* reporterCRUDのルーティング */
Route::resource('reporters', 'ReporterController');
/* gourmetCRUDのルーティング */
Route::resource('gourmets', 'GourmetController');

/* signin後のアカウントページ */
Route::get('reporters/{reporter}','ReporterController@account');
