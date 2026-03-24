<?php
declare(strict_types=1);

function calcolaArea(float $base, float $altezza): float {
    return $base * $altezza;
}

// calcolaArea("10.5", 5.0); // ERRORE FATALE: Argument #1 must be of type float, string given
// echo calcolaArea(10.5, 5.0); // OK

function formatta(string|int $valore): string {
    return "Valore: " . $valore;
}


// Nullable types (equivalente agli Optional in Java o alle reference che possono essere null)
// Il ? indica che può essere string oppure null
function getUserName(?int $id): ?string {
    if ($id === null) return null;
    return "User_" . $id;
}

// ERRORE FATALE: Argument #1 must be of type int or null, string given
// echo getUserName("raffaele") . "L'area di un rettangolo con base 10.5 e altezza 5.0 è: " . calcolaArea(10.5, 5.0) . "\n";

echo getUserName(007) . "\n" . "L'area di un rettangolo con base 10.5 e altezza 5.0 è: " . calcolaArea(10.5, 5.0) . "\n";
?>