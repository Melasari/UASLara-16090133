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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function(){
	return view('dashboard');
});

Route::get('absensi',function(){
	return view('pages.admin.absensi');
});

Route::get('dataabsensi',function(){
	return view('pages.admin.dataabsensi');
});

Route::get('login',function(){
	return view('pages.admin.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
