<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','WebsiteController@home')->name('web.home');
Route::get('/about','WebsiteController@about')->name('web.about');
Route::get('/contact','WebsiteController@contact')->name('web.contact');
Route::get('/registration', 'WebsiteController@register')->name('registration');
Route::post('store', 'WebsiteController@store')->name('store');

Route::post('/message','WebsiteController@message')->name('message');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
