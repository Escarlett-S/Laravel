<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'inicio'])->name('inicio');
Route::get('/quienes-somos', [PageController::class, 'quienesSomos'])->name('quienes-somos');
Route::get('/nuestros-productos', [PageController::class, 'nuestrosProductos'])->name('nuestros-productos');
Route::get('/donde-estamos', [PageController::class, 'dondeEstamos'])->name('donde-estamos');
Route::get('/nuestros-clientes', [PageController::class, 'nuestrosClientes'])->name('nuestros-clientes');

#Route::get('/', function () {
   # return view('welcome');
#});
