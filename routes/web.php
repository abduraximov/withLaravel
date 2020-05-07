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

Route::get('/', 'newController@welcome') -> name('welcome');

Route::get('/about', 'newController@about') -> name('about');

Route::get('/work', 'newController@work') -> name('work');

Route::get('/price', 'newController@price') -> name('price');

Route::get('/example', 'newController@example') -> name('example');

Route::get('/service', 'newController@service') -> name('service');

Route::get('/contact', 'newController@contact') -> name('contact');

Route::get('/more', 'newController@more') -> name('more');