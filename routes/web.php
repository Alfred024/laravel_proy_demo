<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\HomelandController;
use App\Http\Controllers\ServiceController;


// Rutas con controladores
Route::get('/', [HomelandController::class, 'index'])->name('home');
Route::get('/buy', [HomelandController::class, 'buy'])->name('buy');
Route::get('/rent', [HomelandController::class, 'rent'])->name('rent');
Route::get('/properties/{property_type_id}', [HomelandController::class, 'properties/{property_type_id}'])->name('properties_listing_type');
Route::get('/about', [HomelandController::class, 'about'])->name('about');
Route::get('/contact', [HomelandController::class, 'contact'])->name('contact');
Route::get('/login', [HomelandController::class, 'login'])->name('login');
Route::get('/register', [HomelandController::class, 'register'])->name('register');
Route::get('/property-details/{property_detail_id}', [HomelandController::class, 'property_details'])->name('property-details');
