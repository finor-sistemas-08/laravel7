<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/','PrincipalController@inicio_home')->name('inicio');
Route::get('/login','PrincipalController@login')->name('login');
Route::get('/registrar','PrincipalController@registrar')->name('registrar');
Route::get('/informacion','PrincipalController@informacion')->name('informacion');
Route::get('/covid19','PrincipalController@covid19')->name('covid19');
Route::get('/nosotros','PrincipalController@nostros')->name('nosotros');




// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


