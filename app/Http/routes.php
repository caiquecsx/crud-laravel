<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*Route::get('/', 'ProdutosController@index');
Route::get('produtos', 'ProdutosController@index');

Route::get('produtos/create', 'ProdutosController@create');
Route::post('produtos/store', 'ProdutosController@store');
Route::get('produtos/{id}/destroy', 'ProdutosController@destroy');
Route::get('produtos/{id}/edit','ProdutosController@edit');
Route::put('produtos/{id}/update','ProdutosController@update');
*/
Route::group(['prefix'=>'produtos', 'where'=>['id'=>'[0-9]+']], function() {
  Route::get('', ['as' => 'produtos', 'uses' => 'ProdutosController@index']);
  Route::get('create', ['as' => 'produtos.create', 'uses' => 'ProdutosController@create']);
  Route::post('store', ['as' => 'produtos.store', 'uses' => 'ProdutosController@store']);
  Route::get('{id}/destroy', ['as' => 'produtos.destroy', 'uses' => 'ProdutosController@destroy']);
  Route::get('{id}/edit', ['as' => 'produtos.edit', 'uses' => 'ProdutosController@edit']);
  Route::put('{id}/update', ['as' => 'produtos.update', 'uses' => 'ProdutosController@update']);
});

Route::auth();

Route::get('/home', 'HomeController@index');
