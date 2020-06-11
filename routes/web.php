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


Route::get('/','PrincipalController@inicio_home')->name('home');
Route::get('/login','PrincipalController@login')->name('login');
Route::get('/informacion','PrincipalController@informacion')->name('informacion');
Route::get('/covid','PrincipalController@covid')->name('covid');




// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


