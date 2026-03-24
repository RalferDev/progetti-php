<?php
// index.php

// 1. Includiamo l'autoloader generato da Composer (È L'UNICO REQUIRE CHE FARAI MAI)
require __DIR__ . '/vendor/autoload.php';

// 2. Importiamo le classi della libreria tramite il loro namespace
use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// 3. Usiamo la libreria (esattamente come in Java)
$log = new Logger('AppLog');
$log->pushHandler(new StreamHandler('app.log', Level::Warning));

$log->warning('Questo è un warning! Qualcosa non va.');
$log->error('Errore critico del database!');

echo "Controlla il file app.log appena creato!\n";
