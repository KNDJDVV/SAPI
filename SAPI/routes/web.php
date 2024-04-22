<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;

Route::get('/', function () {
    return view('welcome');

});
Route::get('/Clientes',[ClientesController::class, 'index'])->name('Clientes.index');
