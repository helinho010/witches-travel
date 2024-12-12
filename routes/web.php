<?php

use App\Http\Controllers\EnvioCorreoContacto;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('witchesTravelBase');
// });

Route::get('/', function () {
    return view('app.footer');
})->name('home');

Route::post('/formulario-contacto',[EnvioCorreoContacto::class,'envioCorreoFormularioContacto'])->name('formularioContacto');
