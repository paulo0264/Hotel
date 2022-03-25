<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\QuartoController;
use App\Http\Controllers\ReservaController;


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


Route::middleware(['auth:sanctum', 'verified'])->get('/quarto/ver',[QuartoController::class, 'index'])->name('quarto.ver');
//Route::middleware(['auth:sanctum', 'verified'])->get('/quarto',[QuartoController::class, 'show'])->name('quarto');
Route::middleware(['auth:sanctum', 'verified'])->get('/quarto',[QuartoController::class, 'create']);
Route::middleware(['auth:sanctum', 'verified'])->post('/quarto',[QuartoController::class, 'store'])->name('salvar_quarto');
//Route::middleware(['auth:sanctum', 'verified'])->post('/quarto/destroy/{id}',[QuartoController::class, 'destroy'])->name('quarto.destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('/editar_quarto/{id}',[QuartoController::class, 'edit'])->name('editar_quarto');
Route::middleware(['auth:sanctum', 'verified'])->post('/atualizar_quarto/{id}',[QuartoController::class, 'update'])->name('atualizar_quarto');

Route::middleware(['auth:sanctum', 'verified'])->get('/user/ver/{id}',[ReservaController::class, 'show'])->name('user.ver');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',[ReservaController::class, 'index'])->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/reserva',[ReservaController::class, 'create']);
Route::middleware(['auth:sanctum', 'verified'])->post('/reserva',[ReservaController::class, 'store'])->name('salvar_reserva');
Route::middleware(['auth:sanctum', 'verified'])->post('/dashboard/destroy/{id}',[ReservaController::class, 'destroy'])->name('dashboard.destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('/editar_reserva/{id}',[ReservaController::class, 'edit'])->name('editar_reserva');
Route::middleware(['auth:sanctum', 'verified'])->post('/atualizar_reserva/{id}',[ReservaController::class, 'update'])->name('atualizar_reserva');


