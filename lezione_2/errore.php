<?php
$messaggio = "Ciao, sono un messaggio di errore!";

// In PHP, le variabili definite fuori da una funzione NON sono visibili dentro la funzione 
// (a meno di non usare la keyword global, che è considerata una pessima pratica).

function saluta(){
    // ERRORE: $messaggio qui dentro non esiste!
    echo $messaggio; 
}

saluta();