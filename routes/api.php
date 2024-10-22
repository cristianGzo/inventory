<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\empleadosController;
use App\Http\Controllers\BrandController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
//Rutas tabla Reportes
Route::get('/report', [empleadosController::class, 'index'])->name("index");
Route::get('/reports/{salary?}', [empleadosController::class, 'reports'])->name("api.reports");
Route::get('/salaries', [empleadosController::class, 'salaries'])->name("api.salaries");
Route::get('/employees', [empleadosController::class, 'employees'])->name("employees");



//Rutas dispositivos
Route::post('addBrand', [BrandController::class, 'create'])-> name("addBrand");
Route::post('addModelo', [Modelo::class, 'create'])->name("addModelo");
Route::post('addDevice', [device::class, 'create'])->name("addDevice");

