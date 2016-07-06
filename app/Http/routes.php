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

Route::get('/auth/login', 'AuthController@login');
Route::get('/operations', 'PagesController@index');
Route::get('/message/new', 'ActionsController@newMessageForm');
Route::post('/message/create', 'ActionsController@createMessage');
Route::get('/message/edit/{id}', 'ActionsController@editMessageForm');
Route::post('/message/edit', 'ActionsController@editMessage');
Route::get('/message/delete/{id}', 'ActionsController@deleteMessage');
