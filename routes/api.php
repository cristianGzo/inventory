<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\empleadosController;

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

Route::get('/report', [empleadosController::class, 'index'])->name("index");
Route::get('/reports/{salary?}', [empleadosController::class, 'reports'])->name("api.reports");
//Route::get('/reports/{salary}', [empleadosController::class, 'getEmployeesBySalary']);

Route::get('/salaries', [empleadosController::class, 'salaries'])->name("api.salaries");
Route::get('/employees', [empleadosController::class, 'employees'])->name("employees");
