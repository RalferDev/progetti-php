<?php
declare(strict_types=1);

interface Animale{
    public function verso(): void;
}

trait Volatile{
    public function vola(): void {
         echo "Sbattendo le ali... sto volando!\n";
    }
}

class Uccello implements Animale{
    use Volatile;

    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function verso(): void {
        echo "Cip cip! Mi chiamo " . $this->name . ".\n";
    }
}


$mioUccello = new Uccello("Pippo");
$mioUccello->verso(); // Output: Cip cip! Mi chiamo Pippo.
$mioUccello->vola(); // Output: Sbattendo le ali... sto volando!