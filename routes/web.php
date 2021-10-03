<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;

//metodo para entrar a todos los controladores
Route::resource('/', InicioController::class);
Route::get('listaCanales', [InicioController::class, 'canales'])->name('vistaCanalaes');
