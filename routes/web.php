<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

// ruta principal para que muestre la página de inicio de sesión
Route::get('/', function () {
    return view('login');
})->name('home');

// Mantén la ruta POST para el procesamiento del formulario de inicio de sesión
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/crear', function () {
    return view('clientes.crear');
})->name('crear');
