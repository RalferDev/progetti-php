<?php
declare(strict_types=1);

function somma(int $a, int $b): int {
    return $a + $b;
}

echo "La somma di 5 e 10 è: " . somma(5, 10) . "\n";
?>