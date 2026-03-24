<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articolo extends Model
{
    protected $table = 'articoli';
    
    // Non devi dichiarare le proprietà ($titolo, $contenuto)!
    // Eloquent legge dinamicamente la struttura della tabella dal DB.
    
    // Unica configurazione utile per la sicurezza (Mass Assignment):
    // Diciamo a Laravel quali campi possono essere riempiti in massa.
    protected $fillable = ['titolo', 'contenuto', 'pubblicato'];
}
