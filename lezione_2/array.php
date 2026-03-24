<?php

$colori = ["rosso", "verde", "blu"];

$colori[] = "giallo"; // Aggiunge un elemento alla fine dell'array

echo "I colori sono: " . implode(", ", $colori) . "\n";

echo count($colori) . " colori in totale.\n";
?>