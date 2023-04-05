<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\EmployeeController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(SupervisorController::class)->group(function(){
    Route::get("/supervisor","ListadoSupervisores");
    Route::get("/supervisor/{supervisor}","DatosSupervisor");
});

Route::controller(EmployeeController::class)->group(function(){
    Route::get("/employee","ListadoEmpleados");
    Route::post("/employee","CrearColaborador");
    Route::put("/employee/{colaborador}", "ActualizarColaborador");
});
