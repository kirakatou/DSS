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
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
	Route::get('/', 'HomeController@index')->name('home');

	Route::get('/direct-normalisation', 'HomeController@directNormalisation')->name('home.direct');

	Route::get('/usm-normalisation', 'HomeController@usmNormalisation')->name('home.usm');

	Route::resource('cut-off-mark', 'CutOffMarkController');

	Route::resource('student', 'StudentController');
});
