<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;

// Rutas públicas
Route::get('/eventos', [EventoController::class, 'index']);
Route::get('/eventos/{id}', [EventoController::class, 'show']);

// Rutas protegidas
Route::middleware('auth:api')->group(function () {

    Route::post('/eventos', [EventoController::class, 'store']);

    Route::put('/eventos/{id}', [EventoController::class, 'update']);

    Route::delete('/eventos/{id}', [EventoController::class, 'destroy']);
});