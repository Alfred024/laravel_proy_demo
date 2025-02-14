<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ModelDemoController;
use App\Http\Controllers\HomelandController;
use App\Http\Controllers\ServiceController;


// Rutas con controladores
Route::get('/', [HomelandController::class, 'index'])->name('home');
Route::get('/buy', [HomelandController::class, 'buy'])->name('buy');
Route::get('/rent', [HomelandController::class, 'rent'])->name('rent');
Route::get('/properties/{property_type_id}', [HomelandController::class, 'properties/{property_type_id}'])->name('properties');
Route::get('/about', [HomelandController::class, 'about'])->name('about');
Route::get('/contact', [HomelandController::class, 'contact'])->name('contact');
Route::get('/login', [HomelandController::class, 'login'])->name('login');
Route::get('/register', [HomelandController::class, 'register'])->name('register');
Route::get('/property-details', [HomelandController::class, 'property-details/{property-detail_id}']);

// Rutas con parámetros obligatorios
Route::get('/user/{name}', function (string $name) {
    return 'Hola ' . $name;
});

// Rutas con parámetros opcionales
Route::get('/usuario/{nombre?}', function (string $name = "Pepe") {
    return 'Hola ' . $name;
});

Route::get('/cities', [ServiceController::class, 'cities']);

Route::get('/services', [ServiceController::class, 'index']);
