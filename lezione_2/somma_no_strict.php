<?php

// Per sviluppare software enterprise (e per non impazzire venendo da Java), devi usare le dichiarazioni di tipo (Type Hinting) e lo Strict Mode.

// Senza Strict Mode (Loose Typing):

function somma($a, $b) {
    return $a + $b;
}

echo "La somma di 5 e 10 è: " . somma(5, 10) . "\n";

?>