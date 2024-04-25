<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\TransaccionesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/Clientes',[ClientesController::class, 'index'])->name('Clientes.index');
Route::post('/Clientes',[ClientesController::class, 'store'])->name('Clientes.store');
Route::get('/Clientes/create', [ClientesController::class, 'create'])->name('Clientes.create');



Route::get('/Transacciones',[TransaccionesController::class, 'index'])->name('Transacciones.index');
Route::post('/Transacciones',[TransaccionesController::class, 'store'])->name('Transacciones.store');
Route::get('/Transacciones/create', [TransaccionesController::class, 'create'])->name('Transacciones.create');
Route::put('/Transacciones/{transaccion}',[TransaccionesController::class, 'update'])->name('Transacciones.update');
Route::get('/Transacciones/{transaccion}/edit',[TransaccionesController::class, 'edit'])->name('Transacciones.edit');
Route::delete('/Transacciones/{transaccion}',[TransaccionesController::class, 'destroy'])->name('Transacciones.destroy');
});

require __DIR__.'/auth.php';
