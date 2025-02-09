<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ModelDemoController;
use App\Http\Controllers\HomelandController;


// Rutas con controladores
Route::get('/', [HomelandController::class, 'index']);
Route::get('/buy', [HomelandController::class, 'buy']);
Route::get('/rent', [HomelandController::class, 'rent']);
Route::get('/properties/{property_type_id}', [HomelandController::class, 'properties/{property_type_id}']);
Route::get('/about', [HomelandController::class, 'about']);
Route::get('/contact', [HomelandController::class, 'contact']);
Route::get('/login', [HomelandController::class, 'login']);
Route::get('/register', [HomelandController::class, 'register']);

// Rutas con parámetros obligatorios
Route::get('/user/{name}', function (string $name) {
    return 'Hola ' . $name;
});

// Rutas con parámetros opcionales
Route::get('/usuario/{nombre?}', function (string $name = "Pepe") {
    return 'Hola ' . $name;
});
