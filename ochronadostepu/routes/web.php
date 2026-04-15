<?php

use App\Http\Controllers\CalcController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/login/admin', function() { return view('auth.login-admin'); })->name('login.admin');
Route::post('/login/admin', [CalcController::class, 'loginAdmin'])->name('login.admin.check');

Route::get('/login/guest', [CalcController::class, 'loginGuest'])->name('login.guest');
Route::get('/logout', [CalcController::class, 'logout'])->name('logout');

Route::middleware(['check.role'])->group(function () {
    Route::get('/calc', [CalcController::class, 'index'])->name('calc.index');
    Route::post('/calc', [CalcController::class, 'calculate'])->name('calc.calculate');
});