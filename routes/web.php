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
    return view('home');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/servicos', function () {
    return view('servicos');
});

Route::get('/clinica', function () {
    return view('clinica');
});

Route::get('/galeria', function () {
    return view('galeria');
});

Route::post('/enviaremail', ['as' => 'enviaremail', 'uses' => 'Email\email@enviar']);
Route::get('/emailenviado', ['as' => 'emailenviado', 'uses' => 'Email\email@enviado']);
