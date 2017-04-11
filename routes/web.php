<?php
Route::get('/', 'PageController@index')->name('home');
//Route::get('/home', 'PageController@index');


Route::get('/products', 'ProductController@index');
Route::get('/products/{id}', 'ProductController@show');
Route::get('/cart/{id}', [
	'uses' =>'ProductController@addToCart',
	'as' => 'pages.addToCart']);

Route::get('/shopping-cart', [
	'uses' =>'ProductController@getCart',
	'as' => 'pages.shopping-cart']);

Route::get('/reduce/{id}', [
	'uses' =>'ProductController@getReduceByOne',
	'as' => 'pages.reduceByOne']);

Route::get('/remove/{id}', [
	'uses' =>'ProductController@getRemoveItem',
	'as' => 'pages.remove']);

Route::get('/checkout', [
	'uses' =>'ProductController@getCheckout',
	'as' => 'checkout',
    'middleware' => 'auth']);

Route::get('/place-order', [
	'uses' =>'OrdersController@newSale',
	'as' => 'placeOrder']);



Route::get('/admin', ['as' =>'pages.cms', 'uses' => 'cmsController@index', 'middleware' => ['auth', 'admin']]);

Route::get('/admin/new-product', ['as' =>'pages.cms_addProduct', 'uses' => 'cmsController@newProduct', 'middleware' => ['auth', 'admin']]);

Route::post('/admin/new-product', ['as' =>'pages.addProduct', 'uses' => 'cmsController@store', 'middleware' => ['auth', 'admin']]);

Route::get('/admin/update/{id}', 'cmsController@adjust');

Route::post('/admin/update/{id}', 'cmsController@update');

Route::get('/admin/delete/{id}', 'cmsController@delete');

Route::get('/about-us', 'PageController@aboutUs');

Route::get('/contact', 'PageController@contact');

Route::get('/logout', 'Auth\LoginController@logout');

//Route::get('/profiel', 'PageController@manage');
Route::get('/profiel/{id}', 'usersController@manage');
Route::post('/profiel/{id}', 'usersController@update');

Auth::routes();
