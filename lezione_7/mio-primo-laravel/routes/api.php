<?php

use App\Http\Controllers\Api\ArticoloApiController;
use Illuminate\Support\Facades\Route;

// Genera automaticamente i 5 endpoint RESTful standard!
//Route::apiResource('articoli', ArticoloApiController::class);

Route::apiResource('articoli', ArticoloApiController::class)->parameters([
    'articoli' => 'articolo' // Insegniamo a Laravel il singolare!
]);