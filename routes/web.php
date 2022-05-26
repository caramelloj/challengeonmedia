<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\DatatableController;
use App\Http\Controllers\TablesExpController;

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

Route::get('/', [ApiController::class, 'index'])->name('index');


// Filtros
Route::get('filtros/{tipo?}', [ApiController::class, 'aplicarFiltros'])->name('filtrados');

// Download file
Route::get('tablaselo/exportar/', [TablesExpController::class, 'export'])->name('export.xlsx');