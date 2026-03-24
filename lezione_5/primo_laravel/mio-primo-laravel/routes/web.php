<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalutoController;

Route::get('/', function () {
    return view('welcome');
});

// Rotta che restituisce una semplice stringa
Route::get('/ping', function () {
    return 'Pong!';
});

// Rotta che mappa a un Controller (l'approccio corretto Enterprise)
Route::get('/saluto', [SalutoController::class, 'mostraSaluto']);
