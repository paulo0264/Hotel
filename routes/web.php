<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomesController;

Route::get('/', [WelcomesController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/reserva', function () {
    return view('reserva');
})->name('reserva');

Route::middleware(['auth:sanctum', 'verified'])->get('/funcionario', function () {
    return view('funcionario');
})->name('funcionario');

Route::middleware(['auth:sanctum', 'verified'])->get('/quarto', function () {
    return view('quarto');
})->name('quarto');

Route::middleware(['auth:sanctum', 'verified'])->get('/add_quarto', function () {
    return view('add_quarto');
})->name('add_quarto');
