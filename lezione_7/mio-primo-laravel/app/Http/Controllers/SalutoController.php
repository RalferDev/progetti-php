<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalutoController extends Controller
{
     // Questo è il metodo che abbiamo agganciato in routes/web.php
    public function mostraSaluto() {
        $nome = "Sviluppatore Java";
        
        // Possiamo restituire una stringa, un JSON, o una "View" (file HTML)
        return "Ciao " . $nome . ", benvenuto nel tuo primo Controller Laravel!";
    }
}
