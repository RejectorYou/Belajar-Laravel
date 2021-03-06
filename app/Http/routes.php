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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hi', function () {
	return "Hi, Selamat Datang";
});

Route::get('/karyawan', 'KaryawanController@index');
Route::get('/karyawan/add', 'KaryawanController@add_from');
Route::post('/karyawan/add/process', 'KaryawanController@add_process');
Route::get('/karyawan/view/{nama}', 'KaryawanController@view');

Route::get('/home', 'BlogController@home');
Route::get('/profile', 'BlogController@profile');
Route::get('/contact', 'BlogController@contact');
