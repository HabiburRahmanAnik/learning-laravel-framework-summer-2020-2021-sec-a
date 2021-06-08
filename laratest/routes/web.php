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

// use App\Http\Controllers\loginController;
// use App\Http\Controllers\HomeController;

Route::get('/', function () {
    // echo "this is laravel framework";
    return view('welcome');
});

// Route::get('/login',['uses'=>'loginController@index']); v 6-7
// Route::get('/login', [loginController::class,'index']);

Route::get('/login','loginController@index');
Route::post('/login','loginController@verify');
Route::get('/home','HomeController@index');
Route::get('/logout','LogoutController@logout');
Route::get('/register','registerController@index');
Route::post('/register','RegisterController@regCheck');
Route::get('/user/addUser','userController@index');
Route::post('/user/addUser','userController@addUser');
Route::get('/user/userlist','userController@userlist');
Route::get('/user/userList/detsils/{id}','userController@details');
Route::get('/user/userList/edit/{id}','userController@editView');
Route::post('/user/userList/edit/{id}','userController@editUser');
Route::get('/user/userList/delete/{id}','userController@deleteUser');
