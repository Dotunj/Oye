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
    return view('admin.index');
});
Route::post('/login', 'LoginController@login');
Route::get('/dashboard.index', 'LoginController@dashboard')->middleware('auth');
Route::get('/logout', 'LoginController@logout');
Route::resource('products', 'ProductController');
Route::get('/admin', 'LoginController@admin');
Route::post('/add/user', 'LoginController@store');
Route::get('/shop', 'StoreController@shop');
Route::get('/item/{slug}', 'StoreController@show');
Route::get('/shop/{ref}', 'PaymentController@store');
//Route::delete('/products/{id}', 'ProductController@destroy');