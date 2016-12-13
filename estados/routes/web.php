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
    return view('layout.principal');
});

Route::get('/estados', 'EstadoController@lista');
Route::get('/produtos/detalhes/{id}', 'ProdutoController@mostra')->where('id','[0-9]+');
Route::get('/estado/novo','EstadoController@novo');
Route::match(array('GET', 'POST'),'/estado/adiciona','EstadoController@adiciona');