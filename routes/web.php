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

Route::get('/', 'IndexController@index');
Route::get('photo/{id}', 'IndexController@photo')->where('id', '[0-9]+');

Route::group(['prefix' => 'api'], function () {
    Route::get('recent', 'IndexController@recent');
    Route::get('photo/{id}', 'IndexController@photoInfo');
});
