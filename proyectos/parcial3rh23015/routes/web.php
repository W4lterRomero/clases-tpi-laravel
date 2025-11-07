<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProveedorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('proveedors.index');
});
Route::get('/ejercicio1', [HomeController::class, 'ejercicio1'])->name('ejercicio1');

Route::resource('proveedors', ProveedorController::class);
