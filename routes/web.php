<?php

use Illuminate\Support\Facades\Route;

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
    return view('paginaprincipal');
});
Route::get('login', function () {
    return view('login');
});
Route::get('logout', function () {
    return view('logout');
});
Route::get('productos', function () {
    return view('producto/listaproductos');
});
Route::get('productos/show/{id}', function () {
    return view('producto/mostrarproducto');
});
Route::get('productos/create', function () {
    return view('producto/añadirproducto');
});
Route::get('productos/edit/{id}', function () {
    return view('producto/editarproducto');
});
