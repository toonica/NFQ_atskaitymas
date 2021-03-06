<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('layout');
});

Route::group(["before" => "guest"], function()
{
    Route::any("/login", [
        "as"   => "user/login",
        "uses" => "UserController@loginAction"
    ]);
});

Route::group(["before" => "auth"], function()
{
    Route::any("/logout", [
        "as"   => "user/logout",
        "uses" => "UserController@logoutAction",
    ]);

    Route::any("/create", [
        "as"   => "albums/create",
        "uses" => "AlbumsController@createAction"
    ]);
});

Route::resource('/albums', 'AlbumsController');

