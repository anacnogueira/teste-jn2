<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
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


Route::post('/cliente-cadastro', [ClientController::class, 'store']);
Route::put('/cliente/{id}', [ClientController::class, 'update']);
Route::delete('/cliente/{id}', [ClientController::class, 'destroy']);
Route::get('/cliente/{id}', [ClientController::class, 'show']);
Route::get('/consulta/final-placa/{numero}', [ClientController::class, 'index']);