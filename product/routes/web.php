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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login','LoginController@index');
Route::post('/login','LoginController@verify');
Route::get('/logout', 'LogoutController@index');

Route::group(['middleware'=>['sess']], function(){
    Route::get('/home','HomeController@index');
    Route::resource('/user','ProductController');

    Route::resource('/product','ProductController');
    Route::get('/product/productList',"ProductController@productList")->name('product.productList');
    Route::get('/product/delete/{id}',"ProductController@delete")->name('product.delete');
    Route::post('/product/{id}/edit','ProductController@update');
});
