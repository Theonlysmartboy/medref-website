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

Route::get('/', 'PagesController@index')->name('index');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/services', 'PagesController@service')->name('what_we_do');
Route::get('/testimonies','PagesController@blog')->name('what_people_say');
Route::get('/contact','PagesController@showContactForm')->name('contact_us');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
