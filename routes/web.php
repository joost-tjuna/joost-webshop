<?php


Route::get('/', 'PageController@index', function () {
    return view('layouts/master');
})->name('home');

Auth::routes();

// Route::get('/home', 'HomeController@index');

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

Route::post('/checkout', [ 
	'uses' =>'ProductController@postCheckout',
	'as' => 'checkout']);

Route::get('/admin', ['as' =>'pages.cms', 'uses' => 'PageController@admin', 'middleware' => ['auth', 'admin']]);

Route::get('/admin/new-product', ['as' =>'pages.cms_addProduct', 'uses' => 'ProductController@newProduct', 'middleware' => ['auth', 'admin']]);

Route::get('/about-us', 'PageController@aboutUs');

Route::get('/contact', 'PageController@contact');

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/profiel', 'PageController@manage');

Auth::routes();
