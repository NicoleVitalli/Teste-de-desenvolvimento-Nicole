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

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/home',
// ['as' =>'home',
// 'uses'=>'App\Http\Controllers\MenuController@home']);
Route::get('/',
['as' =>'bebidas',
'uses'=>'App\Http\Controllers\BebidaController@bebidasHome']);

Route::get('/cad',
['as' =>'cadastro',
'uses'=>'App\Http\Controllers\MenuController@cadastro']);

Route::get('/bebidas',
['as' =>'listagem',
'uses'=>'App\Http\Controllers\MenuController@bebidas']);



Route::get('/pesquisa',
['as' =>'pesquisa',
'uses'=>'App\Http\Controllers\BebidaController@bebidasPesquisa']);

// rota para salvar bebebidas cadastradas
Route::post('/salvar',
['as' =>'salvar',
'uses'=>'App\Http\Controllers\BebidaController@salvar']);

Route::get('/editar/{id}',
['as' =>'editar',
'uses'=>'App\Http\Controllers\BebidaController@editar']);


Route::put('/atualizar/{id}',
['as' =>'atualizar',
'uses'=>'App\Http\Controllers\BebidaController@atualizar']);


Route::get('/deletar/{id}',
['as' =>'deletar',
'uses'=>'App\Http\Controllers\BebidaController@deletar']);