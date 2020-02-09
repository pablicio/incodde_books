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

Auth::routes();

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('/', 'LivroController@index');
    Route::get('/livros', 'LivroController@index');

    Route::post('/livros', 'LivroController@store')->name('livros.store');
    Route::get('/livros/create', 'LivroController@create');
    Route::get('/livros/meusLivros', 'LivroController@meusLivros');
    Route::get('/livros/meusEmprestimos', 'LivroController@meusEmprestimos');

    Route::get('/livros/novoEmprestimo', 'LivroController@novoEmprestimo');
    Route::get('/livros/devolverEmprestimo', 'LivroController@devolverEmprestimo');

});




