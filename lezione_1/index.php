<?php

$titolo = "Mi chiamo Raffaele Corso e questa é la mia prima pagina PHP";
$linguaggi = ["PHP", "Python", "Java"];
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titolo; ?></title>
</head>
<body>
    <h1><?= $titolo ?></h1>
    
    <p>Ecco i linguaggi che conosco:</p>
    <ul>
        <?php foreach ($linguaggi as $linguaggio): ?>
            <li><?= $linguaggio ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>