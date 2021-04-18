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

/* Training 2 */
Route::get('/hi', function () {
	return "Hi, Selamat Datang";
});

Route::get('/blog', function(){
	return view('blog');
});
/* End */

/* training 3 */

Route::get('/karyawan', 'KaryawanController@index');