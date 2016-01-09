<?php
Route::get('Men/{slug}/{id}' , 'BaseController@filter');
Route::get('Sweaters/{slug}/{id}' , 'BaseController@single');
Route::get('Shirts/{slug}/{id}' , 'BaseController@single');
Route::get('Jeans/{slug}/{id}' , 'BaseController@single');
Route::get('Blazers/{slug}/{id}' , 'BaseController@single');
Route::get('Outwear/{slug}/{id}' , 'BaseController@single');
Route::get('Jackets/{slug}/{id}' , 'BaseController@single');
Route::get('Women/{slug}/{id}' , 'BaseController@filter');
Route::get('Wrap/{slug}/{id}' , 'BaseController@single');
Route::get('Mini/{slug}/{id}' , 'BaseController@single');
Route::get('Denim/{slug}/{id}' , 'BaseController@single');
Route::get('Pants/{slug}/{id}' , 'BaseController@single');
Route::get('Casual/{slug}/{id}' , 'BaseController@single');
Route::get('Tops/{slug}/{id}' , 'BaseController@single');