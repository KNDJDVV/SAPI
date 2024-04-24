<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\PropiedadesController;
Route::get('/', function () {
    return view('welcome');
});
//rutas clientes
Route::get('/clientes/create', [ClientesController::class, 'create'])->name('clientes.create');
Route::post('/clientes', [ClientesController::class, 'store'])->name('clientes.store');
Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes.index');
Route::get('/clientes/{cliente}', [ClientesController::class, 'show'])->name('clientes.show');
Route::get('/clientes/{cliente}/edit', [ClientesController::class, 'edit'])->name('clientes.edit');
Route::put('/clientes/{cliente}', [ClientesController::class, 'update'])->name('clientes.update');
Route::delete('/clientes/{cliente}', [ClientesController::class, 'destroy'])->name('clientes.destroy');
//rutas propiedades
Route::get('/propiedades/create', [propiedadesController::class, 'create'])->name('propiedades.create');
Route::post('/propiedades', [propiedadesController::class, 'store'])->name('propiedades.store');
Route::get('/propiedades', [PropiedadesController::class, 'index'])->name('propiedades.index');
Route::get('/propiedades/{propiedad}', [propiedadesController::class, 'show'])->name('propiedades.show');
Route::get('/propiedades/{propiedad}/edit', [propiedadesController::class, 'edit'])->name('propiedades.edit');
Route::put('/propiedades/{propiedad}', [propiedadesController::class, 'update'])->name('propiedades.update');
Route::delete('/propiedades/{propiedad}', [propiedadesController::class, 'destroy'])->name('propiedades.destroy');
