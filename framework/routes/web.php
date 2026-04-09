<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalcController;

Route::get('/', [CalcController::class, 'index'])->name('calc.index');
Route::post('/', [CalcController::class, 'calculate'])->name('calc.calculate');
