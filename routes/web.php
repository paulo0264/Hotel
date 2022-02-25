<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomesController;
use App\Http\Controllers\LuxoController;

use App\Http\Controllers\Add_quartoController;

Route::get('/', [WelcomesController::class, 'index']);
Route::get('/welcome',[WelcomesController::class, 'create']);
Route::post('/welcome',[WelcomesController::class, 'store']);

//Acomodações
Route::get('/luxo', [LuxoController::class, 'index']);
Route::get('/luxo',[LuxoController::class, 'create']);
Route::post('/luxo',[LuxoController::class, 'store']);
//Fim Acomodações









//Routs Admin

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
//Route::middleware(['auth:sanctum', 'verified'])->get('/add_quarto',[Add_quartoController::class, 'index']);
//Route::middleware(['auth:sanctum', 'verified'])->get('/add_quarto',[Add_quartoController::class, 'create']);
Route::middleware(['auth:sanctum', 'verified'])->post('/add_quarto',[Add_quartoController::class, 'store']);
