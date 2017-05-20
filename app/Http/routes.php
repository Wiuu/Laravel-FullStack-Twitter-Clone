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

Route::get('/', 'NovatecController@index');

Route::get('/ex2', function () {
    return view('pagina2' , [
        'curso' => 'Laravel',
        'local' => 'Novatec',
        'turma' => '1',
        'alunos' => [

        ],
        'codigo_html' => '<h3>Isso veio do banco</h3>'

    ]);
});
