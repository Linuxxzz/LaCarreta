<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

// Ruta para mostrar el formulario de registro
Route::get('/registro', [
    AuthController::class, 'registerForm'
])->name('registro');

// Ruta para manejar el registro del usuario
Route::post('/registro', [
    AuthController::class, 'register'
])->name('registro.store');


// Ruta para mostrar el formulario de inicio de sesión
Route::get('/acceso', [
    AuthController::class, 'loginForm'
])->name('acceso');

// Ruta para verificar el inicio de sesión
Route::post('/acceso', [
    AuthController::class, 'login'
])->name('acceso.store');

// Ruta para cerrar sesión
Route::post('/cerrar', [
    AuthController::class, 'logout'
])->name('cerrar');