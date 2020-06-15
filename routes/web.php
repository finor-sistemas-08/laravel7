<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['guest']], function () {

    Route::get('/','PrincipalController@home')->name('home');
    Route::get('/informacion','PrincipalController@informacion')->name('informacion');
    Route::get('/covid','PrincipalController@covid')->name('covid');
    Route::get('/nosotros','PrincipalController@nosotros')->name('nosotros');
    
    Route::get('/login','Auth\LoginController@showLogin')->name('showLogin');
    Route::post('/sesion','Auth\LoginController@login')->name('login');

    Route::get('/usuario/registro','UserController@create')->name('usuario.create');
    Route::post('/usuario/store','UserController@store')->name('usuario.store');

    Route::get('/users','UserController@index')->name('user');

    Route::get('/usuario','UserController@index')->name('usuario');
    Route::get('/usuario/registro','UserController@create')->name('usuario.create');
    Route::post('/usuario/store','UserController@store')->name('usuario.store');
    Route::post('/usuario/update/{id}','UserController@update')->name('usuario.update');
    Route::delete('/usuario/delete/{id}','UserController@destroy')->name('usuario.delete');


    Route::get('/prueba','BoliviaController@datos');
});

// Route::group(['middleware' => ['auth']], function () {
    
    Route::get('/','PrincipalController@home')->name('home');
    Route::get('/informacion','PrincipalController@informacion')->name('informacion');
    Route::get('/covid','PrincipalController@covid')->name('covid');
    Route::get('/nosotros','PrincipalController@nosotros')->name('nosotros');
    
    Route::get('/login','Auth\LoginController@showLogin')->name('showLogin');
    Route::post('/sesion','Auth\LoginController@login')->name('login');

    Route::get('/usuario/registro','UserController@create')->name('usuario.create');
    Route::post('/usuario/store','UserController@store')->name('usuario.store');

    Route::get('/users','UserController@index')->name('user');



    Route::get('/usuario','UserController@index')->name('usuario');
    Route::get('/usuario/registro','UserController@create')->name('usuario.create');
    Route::post('/usuario/store','UserController@store')->name('usuario.store');
    Route::post('/usuario/update/{id}','UserController@update')->name('usuario.update');
    Route::delete('/usuario/delete/{id}','UserController@destroy')->name('usuario.delete');

    Route::get('/prueba','BoliviaController@datos');


// });









