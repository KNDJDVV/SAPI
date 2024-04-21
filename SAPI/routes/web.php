<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

    Route::get('/departamento',[DepartamentoController::class, 'index'])->name('departamento.index');
});
