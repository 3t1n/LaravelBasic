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
    return view('welcome');
});
Route::resource('usuarios', 'Usuario\UsuarioCtrl');
Route::group(['middleware' => 'auth'], function () {
Route::get('/home', 'HomeController@index')->name('home');
Route::delete("sair", ['as'=>'sair', 'uses'=>'Controller@sair']);
});

Route::group(['middleware' => 'guest'], function () {

    Route::get('/', 'Visitante\LoginCtrl@index');

    Route::resource('login', 'Visitante\LoginCtrl');
    Route::resource('esqueceu-senha', 'Visitante\NovaSenhaCtrl');

});