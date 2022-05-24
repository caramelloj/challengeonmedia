<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\DatatableController;

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

Route::get('datatable/1v1', [DatatableController::class,'onevsone'])->name('datatable.1v1');

Route::get('datatable/tg',[DatatableController::class,'elotg'])->name('datatable.tg');

// Filtros
Route::get('filtros/{tipo?}', [ApiController::class, 'aplicarFiltros'])->name('filtrados');