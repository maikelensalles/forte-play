<?php

use Illuminate\Support\Facades\Route;



Route::resource('aplicativos', 'HomeController')->middleware('auth');
Route::resource('mensagens', 'MensagemController')->middleware('auth');

Route::get('/login', function () {
    return 'Login';
})->name('login');



Route::get('/', function () {
    return view('auth.login');
});

Route::post('/register', function () {
    return '';
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

