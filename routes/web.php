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

Route::get('/', ['as' => 'home', 'uses' => 'Site@home']);
Route::get('/contato', ['as' => 'contato', 'uses' => 'Site@contato']);
Route::get('/servicos', ['as' => 'servicos', 'uses' => 'Site@servicos']);
Route::get('/clinica', ['as' => 'clinica', 'uses' => 'Site@clinica']);
Route::get('/galeria', ['as' => 'galeria', 'uses' => 'Site@galeria']);

Route::post('/enviaremail', ['as' => 'enviaremail', 'uses' => 'Email\email@enviar']);
Route::get('/emailenviado', ['as' => 'emailenviado', 'uses' => 'Email\email@enviado']);
