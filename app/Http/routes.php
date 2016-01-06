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
Route::get('home', 'HomeController@index');

Route::get('/aboutus', 'BaseController@aboutus');

Route::get('/cms', 'BaseController@index');

Route::get('/contacts', 'BaseController@contacts');

Route::get('/login', 'BaseController@userlogin');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('role/create_role', 'RolesController@create_role');

Route::get('role/attach_role', 'RolesController@attach_role');

Route::get('{parent}/{slug}/{cat}', 'BaseController@filter');

//Route::get('{parent}/{slug}/{id}/{cat}', 'BaseController@filter');