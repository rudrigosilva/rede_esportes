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

Route::get('/', [\App\Http\Controllers\UsuarioController::class,'usuario'])->name('site.usuario');

Route::get('/evento', [\App\Http\Controllers\EventoController::class,'evento'])->name('site.evento');

Route::get('/despesa', [\App\Http\Controllers\DespesaController::class,'despesa'])->name('site.despesa');