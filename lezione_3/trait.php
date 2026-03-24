<?php

trait Timestampable {
    private string $createdAt;

    public function impostaDataCreazione(): void {
        $this->createdAt = date('Y-m-d H:i:s');
    }

    public function getDataCreazione(): string {
        return $this->createdAt;
    }
}

class Articolo{
    use Timestampable;

    public function __construct(public string $titolo) {
        $this->impostaDataCreazione();
    }
}

$articolo = new Articolo("Introduzione a PHP");
echo "Titolo: " . $articolo->titolo . "\n"; // Output: Introduzione a PHP
echo "Data di creazione: " . $articolo->getDataCreazione() . "\n"; // Output: Data di creazione: 2024-06-01 12:34:56 (esempio)