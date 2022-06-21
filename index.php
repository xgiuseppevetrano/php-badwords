<?php
    // Creo una variabile con un paragrafo di testo
    $text = 'Ciao Php ora dico chi cazzo ti ha detto che volevamo imparare ad usarti, tornatene da dove cazzo sei venuto!';

    //Creo la variabile che conterrà la parola che l'utente vuole censurare
    $censoredWord = $_GET['censoredWord'];

    // Creo la variabile che conterrà il testo precedente con le parole censurate
    $censoredText = str_replace($censoredWord, '***', $text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <!-- Stampo a schermo il paragrafo creato -->
    <p><?= $text; ?></p>

    <!-- Stampo a schermo la lunghezza del paragrafo creato -->
    <p>Questa è la lunghezza del paragrafo che ho creato: <?= strlen($text); ?></p>

    <!-- Stampo a schermo il paragrafo censurato -->
    <p><?= $censoredText; ?></p>

    <!-- Stampo a schermo la lunghezza del paragrafo censurato -->
    <p>Questa è la lunghezza del paragrafo censurato: <?= strlen($censoredText); ?></p>
</body>
</html>