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

use Facades\App\Http\Routes\Register;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Register::seoRoutes();

Route::get('/locale/{locale}', 'BaseController@set_Session');

Route::get('currency/{value}', 'BaseController@set_Session');

Route::get('/home', 'HomeController@index');

Route::get('/aboutus', 'BaseController@aboutus');

Route::get('/cms', 'BaseController@index');

Route::get('/contacts', 'BaseController@contacts');

Route::get('/welcome', 'BaseController@welcome');

Route::get('user/activation/{token}', 'Auth\LoginController@userActivation');

Route::get('/frame/{id}', 'BaseController@frame');

Route::get('items/search/{id}', 'BaseController@search');

Route::get('search/autocomplete', 'BaseController@autocomplete');

Route::group(['middleware' => 'admin:user'], function () {
    Route::get('cart', 'ShoppingController@index');
    Route::post('cart/store', 'ShoppingController@storeItem');
    Route::put('cart/update', 'ShoppingController@updateItem');
    Route::get('cart/remove/{id}', 'ShoppingController@removeItem');
    Route::get('/cart/delete', 'ShoppingController@delete');
});

Route::group(['prefix' => 'checkout', 'middleware' => 'admin:user'], function () {
    Route::get('/shipping', 'ShoppingController@checkout');
    Route::post('/store', 'ShoppingController@customerStore');
    Route::get('/show', 'ShoppingController@checkoutShow');
    Route::get('/create', 'ShoppingController@createOrder');
    Route::get('/order', 'ShoppingController@finalOrder');
});

Route::group(['prefix' => 'backend', 'middleware' => 'admin:user'], function () {
    Route::get('/user', 'BackendController@dashboard');
    Route::get('user-orders', 'BackendController@userOrders');
    Route::any('user-orders/edit', 'BackendController@userOrdersEdit');
    Route::get('profile', 'BackendController@profile');
    Route::group(['middleware' => 'user'], function () {
        Route::any('profile/edit', 'BackendController@profileEdit');
    });
});

Route::group(['prefix' => 'backend', 'middleware' => 'admin:admin'], function () {
    Route::get('products', 'BackendController@products');
    Route::any('products/edit', 'BackendController@productsEdit');
    Route::get('orders', 'BackendController@orders');
    Route::any('orders/edit', 'BackendController@ordersEdit');
    Route::get('/admin', 'BackendController@dashboard');
    Route::get('roles', 'UsersController@role');
    Route::post('roles', 'UsersController@createRole');
    Route::resource('users', 'UsersController');
    Route::get('articles/search', 'ArticlesController@search');
    Route::resource('articles', 'ArticlesController');
});

Route::get('/filter/{slug}/{id}', 'BaseController@filter');

//Route::get('api', 'ApiController@api');

//Route::get('frontpage', 'ApiController@index');

//Route::get('/cache', 'BaseController@write');

//App::make('Helper')->registerRoutes();

//require app_path().'/Http/Routes/routes.php';

//Route::get('role/create_role', 'RolesController@create_role');

//Route::get('role/attach_role', 'RolesController@attach_role');
