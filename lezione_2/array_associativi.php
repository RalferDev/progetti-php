<?php
$utente = [
   "nome" => "Mario",
    "cognome" => "Rossi",
    "eta" => 30,
    "ruoli" => ["Admin", "Editor"]
];

echo "Nome: " . $utente["nome"] . "\n";

// Controllare se una chiave esiste (equivalente a map.containsKey())
if (array_key_exists("eta", $utente)) { 
    echo "l'utente ha " . $utente["eta"] . " anni.\n";
}

// Equivalente a map.getOrDefault() in Java (PHP 7+)
$email = $utente["email"] ?? "email@default.com"; 