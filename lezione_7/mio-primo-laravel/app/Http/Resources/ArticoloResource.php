<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ArticoloResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // Rimodelliamo il JSON in uscita
        return [
            'id_articolo' => $this->id, // Possiamo cambiare nome alla chiave
            'titolo_post' => strtoupper($this->titolo), // Possiamo manipolare i dati
            'dettagli' => $this->contenuto,
            'stato' => $this->pubblicato ? 'Pubblico' : 'Bozza',
            'data_creazione' => $this->created_at->format('Y-m-d')
        ];
    }
}
