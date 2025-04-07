<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\PersonalController;

use App\Http\Middleware\CheckRole; // Asegúrate de importar el middleware

/*
|---------------------------------------------------------------------- 
| Web Routes 
|---------------------------------------------------------------------- 
| 
| Here is where you can register web routes for your application. These 
| routes are loaded by the RouteServiceProvider and all of them will 
| be assigned to the "web" middleware group. Make something great! 
| 
*/

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Rutas protegidas con middleware 'auth'
Route::middleware(['auth'])->group(function () {
    // Ruta para el Dashboard solo para administradores
    Route::get('dashboard', [HomeController::class, 'index'])
        ->middleware('role:admin') // Aplica el middleware para verificar el rol
        ->name('dashboard');

    // Rutas de Medicamentos y Personal, solo accesibles si el usuario tiene permisos
    Route::resource('medicamentos', MedicamentoController::class);
    Route::resource('personal', PersonalController::class);
});

// Ruta de bienvenida
Route::view('/', 'welcome');

// Otras rutas públicas o protegidas
Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

// Requiere las rutas de autenticación
require __DIR__.'/auth.php';

