<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\TransaccionesController;

Route::get('/', function () {
    return view('welcome');

});
Route::get('/Clientes',[ClientesController::class, 'index'])->name('Clientes.index');
Route::post('/Clientes',[ClientesController::class, 'store'])->name('Clientes.store');
Route::get('/Clientes/create', [ClientesController::class, 'create'])->name('Clientes.create');



Route::get('/Transacciones',[TransaccionesController::class, 'index'])->name('Transacciones.index');
Route::post('/Transacciones',[TransaccionesController::class, 'store'])->name('Transacciones.store');
Route::get('/Transacciones/create', [TransaccionesController::class, 'create'])->name('Transacciones.create');
Route::put('/Transacciones/{transaccion}',[TransaccionesController::class, 'update'])->name('Transacciones.update');
Route::get('/Transacciones/{transaccion}/edit',[TransaccionesController::class, 'edit'])->name('Transacciones.edit');