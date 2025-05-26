<?php

use App\Http\Controllers\SaludoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('saludo',[SaludoController::class, 'index'])->name ('Saludo');
Route::post('/login', [AuthController::class, 'login']);