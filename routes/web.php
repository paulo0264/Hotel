<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/cadastro_hospede', function () {
    return view('cadastro_hospede');
})->name('cadastro_hospede');

Route::middleware(['auth:sanctum', 'verified'])->get('/cadastro_quarto', function () {
    return view('cadastro_quarto');
})->name('cadastro_quarto');
