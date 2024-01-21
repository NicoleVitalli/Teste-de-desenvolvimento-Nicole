<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home',
['as' =>'home',
'uses'=>'App\Http\Controllers\MenuController@home']);

Route::get('/cad',
['as' =>'cadastro',
'uses'=>'App\Http\Controllers\MenuController@cadastro']);

Route::get('/bebidas',
['as' =>'bebidas',
'uses'=>'App\Http\Controllers\MenuController@bebidas']);