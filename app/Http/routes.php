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

Route::get('/login/', function () {
    return view('login');
});

Route::post('/novapost/', function () {
    return view('welcome');
});

Route::delete('/novadel', function () {
    return view('welcome');
});

Route::put('/novaput', function () {
    return view('welcome');
});

Route::options('/novaoptions', function () {
    return view('welcome');
});