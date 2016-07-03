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

Route::get('/', function () {
    return view('welcome');
});

Route::get('produtos', 'ProdutosController@index');
Route::get('produtos/create', 'ProdutosController@create');
Route::post('produtos/store', 'ProdutosController@store');
Route::get('produtos/{id}/destroy', 'ProdutosController@destroy');
Route::get('produtos/{id}/edit','ProdutosController@edit');
//Route::put('produtos/{id}/update','ProdutosController@update');

Route::auth();

Route::get('/home', 'HomeController@index');
