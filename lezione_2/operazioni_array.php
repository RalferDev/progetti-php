<?php

$numeri = [1, 2, 3, 4, 5];

// 1. MAP: array_map()
// Applica una funzione a tutti gli elementi
$quadrati = array_map(fn($n) => $n * $n, $numeri);
// $quadrati = [1, 4, 9, 16, 25]

echo "Quadrati: " . implode(", ", $quadrati) . "\n";

// 2. FILTER: array_filter()
// Filtra gli elementi (mantiene quelli per cui la callback restituisce true)
$pari = array_filter($numeri, fn($n) => $n % 2 === 0);
// $pari = [2, 4]
echo "Numeri pari: " . implode(", ", $pari) . "\n";

$dispari = array_filter($numeri, fn($n) => $n % 2 !== 0);
// $dispari = [1, 3, 5]
echo "Numeri dispari: " . implode(", ", $dispari) . "\n";

// Iterare chiave e valore su array associativi
// Java: for(Map.Entry<String, Object> entry : utente.entrySet())
foreach ($numeri as $chiave => $valore) {
    // Nota: is_array() controlla il tipo a runtime (come instanceof)
    if (!is_array($valore)) {
        echo $chiave . ": " . $valore .", ";
    } else {
        echo $chiave . ": " . implode(", ", $valore) . ", ";
    }
}