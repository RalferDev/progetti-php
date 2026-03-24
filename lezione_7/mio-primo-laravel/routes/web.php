<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalutoController;
use App\Http\Controllers\ArticoloController;

Route::get('/', function () {
    return view('welcome');
});

// Rotta che restituisce una semplice stringa
Route::get('/ping', function () {
    return 'Pong!';
});

// Rotta che mappa a un Controller (l'approccio corretto Enterprise)
Route::get('/saluto', [SalutoController::class, 'mostraSaluto']);

// ==========================================
// CREATE (Inserimento)
// ==========================================
Route::get('/crea-articolo', [ArticoloController::class, 'crea']);

// ==========================================
// READ (Lettura)
// ==========================================
Route::get('/articoli', [ArticoloController::class, 'index']);
Route::get('/articoli/pubblicati', [ArticoloController::class, 'pubblicati']);

// ==========================================
// UPDATE (Aggiornamento)
// ==========================================
Route::get('/aggiorna-articolo/{id}', [ArticoloController::class, 'aggiorna']);

// ==========================================
// DELETE (Cancellazione)
// ==========================================
Route::get('/elimina-articolo/{id}', [ArticoloController::class, 'elimina']);