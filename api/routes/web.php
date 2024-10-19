<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AirportController;
use App\Http\Controllers\Api\FlyghtController;
use App\Http\Middleware\CorsMiddleware;

Route::get('/', function () {
    return view('welcome');
});


// Rutas de los endpoints
// Ruta de los aeropuertos
Route::middleware([CorsMiddleware::class])->group(function () {
    // Rutas de los endpoints
    Route::get('/airports', [AirportController::class, 'index']);
    Route::get('/airport/{id}', [AirportController::class, 'show']);
});


// Rutas de los endpoints
// Ruta de los vuelos
Route::middleware([CorsMiddleware::class])->group(function () {
    // Rutas de los endpoints
    Route::get('/flyghts', [FlyghtController::class, 'index']);
    Route::get('/flyghts/{id}', [FlyghtController::class, 'show']);
    Route::get('/flyghts/search', [FlyghtController::class, 'search']);
});