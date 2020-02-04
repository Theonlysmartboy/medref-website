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
Route::get('/services', 'PagesController@service')->name('service');
Route::get('/testimonies','PagesController@blog')->name('blog');
Route::get('/events','PagesController@event')->name('event');
Route::get('/contact','PagesController@showContactForm')->name('contact');
Route::get('/register/self','PagesController@showRegisterForm')->name('register_self');
Route::post('/register/self','UsersController@submit')->name('register_self_submit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
