<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservaAulaController;
use App\Http\Controllers\AulaController;
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


/*Route::get('/homeadmin', function () {
    return view('homePageAdmin');
});*/

Route::get('/login', function () {
    return view('login');
});

Route::get('/horariousuario', function () {
    return view('horarioUsuario');
});

Route::get('/peticiones', function(){
    return view('peticiones');
});

Route::get('/editaraula', function(){
    return view('editarAula');
});

Route::resource('reservaAula', ReservaAulaController::class);

Route::resource('homeadmin', AulaController::class);

Route::resource('peticionesUs', peticionesController::class);

Route::resource('homeadmin', AulaController::class);

Route::get('/', [AulaController::class,'index']);

Route::get('/homeadmin', [AulaController::class,'create']);





