<?php

interface Loggabile{

    public function log(string $messaggio): void;
}

abstract class Veicolo{
    abstract public function start(): void;
}

class Automobile extends Veicolo implements Loggabile{

    public function start(): void {
      
        echo "Motore acceso!\n";
    }

    public function log(string $messaggio): void {
    
        echo "[LOG]: " . $messaggio . "\n";    
    }
}

$auto = new Automobile();
$auto->start(); // Output: Motore acceso!
$auto->log("Automobile avviata."); // Output: [LOG]: Automobile avviata.