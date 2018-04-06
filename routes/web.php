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

Route::get('/', 'ProdutoController@lista');
Route::get('/produtos/mostra/{id}','ProdutoController@detalhes')->where('id', '[0-9]+');
Route::get('/produtos/novo', 'ProdutoController@novo');

