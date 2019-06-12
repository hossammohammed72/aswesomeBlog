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

Route::prefix('admin/')->namespace('Admin')->middleware('auth')->name('admin.')->group(function(){
    Route::get('/', function () {
        return view('layouts/dashboard');
    });    
    Auth::routes();
});

Route::get('/home', 'HomeController@index')->name('home');
