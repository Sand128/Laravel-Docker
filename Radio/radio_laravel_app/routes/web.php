<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/programacion', [ProgramController::class, 'index']);
Route::middleware(['auth'])->group(function () {
    Route::get('/perfil', [UserController::class, 'profile']);
    Route::get('/admin', [AdminController::class, 'dashboard'])->middleware('can:admin');
});
