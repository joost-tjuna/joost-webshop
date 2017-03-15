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

Route::get('/about-us', 'PageController@aboutUs');

Route::get('/contact', 'PageController@contact');

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/profiel', 'PageController@manage');

Auth::routes();
