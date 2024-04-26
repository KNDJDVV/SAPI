<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\TransaccionesController;
use App\Http\Controllers\PropiedadesController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
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


Route::get('/Transacciones',[TransaccionesController::class, 'index'])->name('Transacciones.index');
Route::post('/Transacciones',[TransaccionesController::class, 'store'])->name('Transacciones.store');
Route::get('/Transacciones/create', [TransaccionesController::class, 'create'])->name('Transacciones.create');
Route::put('/Transacciones/{transaccion}',[TransaccionesController::class, 'update'])->name('Transacciones.update');
Route::get('/Transacciones/{transaccion}/edit',[TransaccionesController::class, 'edit'])->name('Transacciones.edit');
Route::delete('/Transacciones/{transaccion}',[TransaccionesController::class, 'destroy'])->name('Transacciones.destroy');
});

require __DIR__.'/auth.php';
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
