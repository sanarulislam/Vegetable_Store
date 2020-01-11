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

Route::get('/', function () {
	return view('home');
});

// Route::get('/home', 'HomeController@index');

// Route::get('/announcement', 'AnnouncementController@show');
Route::get('/create', 'AnnouncementController@create')->name('announcements.create');
Route::post('/create', 'AnnouncementController@store')->name('announcements.store');
Route::get('/announcements', 'AnnouncementController@show')->name('announcements.index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@detail')->name('about');

Route::get('/add', 'VegetableController@add')->name('products.add');
Route::post('/add', 'VegetableController@store')->name('products.store');
Route::get('/products', 'VegetableController@index')->name('products.index');

Route::get('/edit/{id}', 'VegetableController@edit')->name('products.edit');
Route::post('/update/{id}', 'VegetableController@update')->name('product.update');
Route::get('/delete/{id}', 'VegetableController@destroy')->name('products.destroy');

Route::get('category/add', 'CategoryController@add')->name('category.add');
Route::post('category/add', 'CategoryController@store')->name('category.store');
Route::get('/categories', 'CategoryController@index')->name('category.index');

Route::get('category/edit/{id}', 'CategoryController@edit')->name('category.edit');
Route::post('category/update/{id}', 'CategoryController@update')->name('category.update');
Route::get('category/delete/{id}', 'CategoryController@destroy')->name('category.destroy');

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/register', 'HomeController@register')->name('register');
Route::post('/register', 'HomeController@store')->name('user.register');

Route::get('/users', 'UserController@index')->name('user.index');
Route::get('/user/delete/{id}', 'UserController@destroy')->name('user.delete');
