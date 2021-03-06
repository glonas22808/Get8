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
Route::post('/changeUser', 'App\Http\Controllers\UserController@createUser');
Route::post('/webhook' , 'App\Http\Controllers\UserController@showUser');
Route::get('/users' , 'App\Http\Controllers\UserController@showUser');
Route::get('/' ,function (){
    return view('welcome');
});

