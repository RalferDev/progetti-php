<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Articolo;
use Illuminate\Http\Request;
use App\Http\Resources\ArticoloResource;

class ArticoloApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Usiamo collection() per mappare un'intera lista (come stream().map().collect())
        return ArticoloResource::collection(Articolo::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Validazione (Se fallisce, Laravel lancia un'eccezione 
        // e restituisce automaticamente un JSON HTTP 422 con gli errori!)
        $datiValidati = $request->validate([
            'titolo' => 'required|string|max:255',
            'contenuto' => 'required|string',
            'pubblicato' => 'boolean'
        ]);

        // 2. Creazione (Usiamo i dati appena validati, sicuri al 100%)
        $articolo = Articolo::create($datiValidati);

        // 3. Risposta HTTP 201 (Created)
        return response()->json($articolo, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Articolo $articolo)
    {
        // Avvolgiamo il Model nella nostra Resource
        return new ArticoloResource($articolo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Articolo $articolo)
    {
        // Usiamo 'sometimes' così i campi sono richiesti SOLO se inviati nella request
        $datiValidati = $request->validate([
            'titolo' => 'sometimes|required|string|max:255',
            'contenuto' => 'sometimes|required|string',
            'pubblicato' => 'boolean'
        ]);

        $articolo->update($datiValidati);

        return response()->json($articolo, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Articolo $articolo)
    {
        $articolo->delete();
        
        // Risposta HTTP 204 (No Content) per confermare la cancellazione
        return response()->json(null, 204);
    }
}
