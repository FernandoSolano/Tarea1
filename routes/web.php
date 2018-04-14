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
})->name('home');

Route::get('/ejercicio_1', function () {
    return view('formularios/ejercicio_1');
})->name('ejercicio_1');

Route::get('/ejercicio_2', function () {
    return view('formularios/ejercicio_2');
})->name('ejercicio_2');

Route::get('/ejercicio_3', function () {
    return view('formularios/ejercicio_3');
})->name('ejercicio_3');

Route::get('/ejercicio_4', function () {
    return view('formularios/ejercicio_4');
})->name('ejercicio_4');

Route::get('/ejercicio_5', function () {
    return view('formularios/ejercicio_5');
})->name('ejercicio_5');

Route::get('/ejercicio_6', function () {
    return view('formularios/ejercicio_6');
})->name('ejercicio_6');