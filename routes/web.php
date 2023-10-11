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

Route::get('/reservaraula', function () {
    return view('reservaUser');
});

Route::get('/horariodeaula', function () {
    return view('mostrarHorario');
});

Route::get('/agregaraula', function () {
    return view('agregarAula');
});

Route::get('/', function () {
    return view('homePageUser');
});

Route::get('/homeadmin', function () {
    return view('homePageAdmin');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/horariousuario', function () {
    return view('horarioUsuario');
});
