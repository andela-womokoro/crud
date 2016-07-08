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

//Landing page route...
Route::get('/', 'PagesController@index');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Protected routes using auth middleware...
Route::group(['middleware' => ['auth']], function () {
	Route::get('/home', 'PagesController@operations');
	Route::get('/message/new', 'ActionsController@newMessageForm');
	Route::post('/message/create', 'ActionsController@createMessage');
	Route::get('/message/edit/{id}', 'ActionsController@editMessageForm');
	Route::post('/message/edit', 'ActionsController@editMessage');
	Route::get('/message/delete/{id}', 'ActionsController@deleteMessage');
});