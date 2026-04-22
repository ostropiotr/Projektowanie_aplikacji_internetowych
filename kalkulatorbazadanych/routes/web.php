<?php

use App\Http\Controllers\CalcController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.check');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.store');
Route::middleware(['check.role'])->group(function () {
    Route::get('/calc', [CalcController::class, 'index'])->name('calc.index');
    Route::post('/calc', [CalcController::class, 'calculate'])->name('calc.calculate');
});