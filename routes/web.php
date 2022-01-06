<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/',['as'=>'site.home','uses'=>'Site\HomeController@index']);

Route::get('/login',['as'=>'site.login','uses'=>'Site\LoginController@index']);
Route::get('/login/sair',['as'=>'site.login.sair','uses'=>'Site\LoginController@sair']);
Route::post('/login/entrar',['as'=>'site.login.entrar','uses'=>'Site\LoginController@entrar']);

Route::group(['middleware'=>'auth'],function(){
    Route::get('/admin/veiculos',['as'=>'admin.veiculos','uses'=>'Admin\VeiculoController@index']);
    Route::get('/admin/veiculos/adicionar',['as'=>'admin.veiculos.adicionar','uses'=>'Admin\VeiculoController@adicionar']);
    Route::post('/admin/veiculos/salvar',['as'=>'admin.veiculos.salvar','uses'=>'Admin\VeiculoController@salvar']);
    Route::get('/admin/veiculos/editar/{id}',['as'=>'admin.veiculos.editar','uses'=>'Admin\VeiculoController@editar']);
    Route::put('/admin/veiculos/atualizar/{id}',['as'=>'admin.veiculos.atualizar','uses'=>'Admin\VeiculoController@atualizar']);
    Route::get('/admin/veiculos/deletar/{id}',['as'=>'admin.veiculos.deletar','uses'=>'Admin\VeiculoController@deletar']);
});    