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
Route::get('/index','Minicon\index@getindex');

Route::get('/admin','Minicon\admin@getadmin');

Route::get('/','Minicon\login@getlogin');
Route::post('/Cklogin','Minicon\login@postLogin');

Route::get('/logout','Minicon\login@getLogout');

Route::get('/register','Minicon\register@getregister');
Route::post('/postregister','Minicon\register@postregister');