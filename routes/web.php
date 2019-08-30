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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register/{id}', 'Auth\RegisterController@showRegistrationForm'); ///bank/update
Route::post('/register/{id}', 'Auth\RegisterController@register');

Route::get('/bank/update', 'BankController@showUpdateForm');
