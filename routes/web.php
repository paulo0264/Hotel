<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\QuartoController;
use App\Http\Controllers\ReservaController;
/*
Route::get('/welcome')->name('index');;
Route::get('/welcome',[WelcomesController::class, 'create']);
Route::post('/welcome',[WelcomesController::class, 'store']);

//Acomodações
Route::get('/luxo', [LuxoController::class, 'index']);
Route::get('/luxo',[LuxoController::class, 'create']);
Route::post('/luxo',[LuxoController::class, 'store']);
//Fim Acomodações */

Route::get('/', function () {
    return view('welcome');
})->name('welcome');







//Routs Admin

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->get('/funcionario', function () {
    return view('funcionario');
})->name('funcionario');


Route::middleware(['auth:sanctum', 'verified'])->get('/quarto', function () {
    return view('quarto');
})->name('quarto');
Route::middleware(['auth:sanctum', 'verified'])->get('/quarto',[QuartoController::class, 'show'])->name('quarto');
Route::middleware(['auth:sanctum', 'verified'])->post('/add_quarto',[QuartoController::class, 'store'])->name('add_quarto');
Route::middleware(['auth:sanctum', 'verified'])->get('/quarto/{id}',[QuartoController::class, 'destroy'])->name('quarto');
Route::middleware(['auth:sanctum', 'verified'])->get('/editar_quarto/{id}',[QuartoController::class, 'edit'])->name('editar_quarto');
Route::middleware(['auth:sanctum', 'verified'])->post('/atualizar_quarto/{id}',[QuartoController::class, 'update'])->name('atualizar_quarto');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',[ReservaController::class, 'show'])->name('reserva');
Route::middleware(['auth:sanctum', 'verified'])->get('/reserva',[ReservaController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/reserva/{id}',[ReservaController::class, 'destroy'])->name('reserva');
Route::middleware(['auth:sanctum', 'verified'])->get('/reserva',[ReservaController::class, 'create']);
Route::middleware(['auth:sanctum', 'verified'])->post('/reserva',[ReservaController::class, 'store']);
Route::middleware(['auth:sanctum', 'verified'])->get('/editar_reserva/{id}',[ReservaController::class, 'edit'])->name('editar_reserva');
Route::middleware(['auth:sanctum', 'verified'])->post('/atualizar_reserva/{id}',[ReservaController::class, 'update'])->name('atualizar_reserva');


// Rota Adicionar Acomodações
Route::middleware(['auth:sanctum', 'verified'])->get('/add_quarto',[QuartoController::class, 'index'])->name('add_quarto');
Route::middleware(['auth:sanctum', 'verified'])->get('/add_quarto',[QuartoController::class, 'create']);
//Route::middleware(['auth:sanctum', 'verified'])->post('/add_quarto',[QuartoController::class, 'store'])->name('add_quarto');

