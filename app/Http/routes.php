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

Route::get('/frame/{id}', 'BaseController@frame');

Route::get('/login', 'BaseController@userlogin');

Route::get('items/search/{id}', 'BaseController@search');

Route::get('api', 'BaseController@api');

Route::get('testapi', 'BaseController@testapi');

Route::get('/cache', 'BaseController@write');

Route::get('products/search', 'ProductController@search');

Route::resource('products','ProductController');

Route::controller('cart','CartController');

Route::controller('articles', 'ArticlesController');

Route::get('/filter/{slug}/{id}', 'BaseController@filter');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Routers::registerRoutes();

//App::make('Helper')->registerRoutes();

//require app_path().'/Http/Routes/routes.php';

//Route::get('role/create_role', 'RolesController@create_role');

//Route::get('role/attach_role', 'RolesController@attach_role');