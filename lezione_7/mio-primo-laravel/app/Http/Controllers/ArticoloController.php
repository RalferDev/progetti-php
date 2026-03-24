<?php

namespace App\Http\Controllers;

use App\Models\Articolo; // Non dimenticare di importare il Model!
use Illuminate\Http\Request;

class ArticoloController extends Controller
{
      public function crea()
    {
        // Metodo 1
        // $articolo = new Articolo();
        // $articolo->titolo = "Il mio primo post Laravel";
        // $articolo->contenuto = "Laravel è davvero veloce!";
        // $articolo->save(); 

        // Metodo 2
        Articolo::create([
            'titolo' => "Secondo post",
            'contenuto' => "Sto imparando Eloquent",
            'pubblicato' => true
        ]);

        return "Articoli creati con successo nel Database!";
    }

    // Corrisponde a /articoli
    public function index()
    {
        return Articolo::all();
    }

    // Corrisponde a /articoli/pubblicati
    public function pubblicati()
    {
        return Articolo::where('pubblicato', true)
                     ->orderBy('created_at', 'desc')
                     ->take(10)
                     ->get();
    }

    // Corrisponde a /aggiorna-articolo/{id}
    public function aggiorna($id)
    {
        $articolo = Articolo::find($id); 
        
        if (!$articolo) {
            return "Articolo con ID $id non trovato!";
        }

        $articolo->titolo = "Titolo Aggiornato!";
        $articolo->save(); 

        return "Articolo aggiornato con successo!";
    }

    // Corrisponde a /elimina-articolo/{id}
    public function elimina($id)
    {
        $articolo = Articolo::find($id);
        
        if ($articolo) {
            $articolo->delete(); 
            return "Articolo eliminato definitivamente.";
        }

        return "Niente da eliminare, articolo non trovato.";
    }
}
