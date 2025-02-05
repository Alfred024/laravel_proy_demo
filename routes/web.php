<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', function () {
    return view('welcome');
});

// Rutas con parámetros obligatorios
Route::get('/user/{name}', function (string $name) {
    return 'Hola ' . $name;
});

// Rutas con parámetros opcionales
Route::get('/usuario/{nombre?}', function (string $name = "Pepe") {
    return 'Hola ' . $name;
});

// Rutas con controladores
Route::get('/site_controller', [SiteController::class, 'index']);
