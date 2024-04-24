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