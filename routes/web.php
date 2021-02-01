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


//frontend

Route::get('/','frontendController@index')->name('index');
Route::get('orderhistory','frontendController@orderhistory')->name('orderhistorypage');
Route::get('menu/{id}','frontendController@menu')->name('menu');
Route::get('shopping','frontendController@shopping')->name('shopping');
Route::get('about','frontendController@about')->name('about');
Route::get('contact','frontendController@contact')->name('contact');

Route::resource('orders', 'OrderController');
//backend
Route::middleware('role:admin')->group(function () {
    Route::get('backend.dashboard','BackendController@dashboard')->name('dashboard');
	Route::resource('categories', 'CategoryController');
	Route::resource('brands', 'BrandController');
	Route::resource('subcategories', 'SubcategoryController');
	Route::resource('items', 'ItemController');
	
});
	
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
