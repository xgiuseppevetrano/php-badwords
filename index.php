<?php
    // Creo una variabile con un paragrafo di testo
    $text = 'Ciao Php sei molto bello';

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
    <p><?php echo $text; ?></p>

    <!-- Stampo a schermo la lunghezza del paragrafo creato -->
    <p>Questa è la lunghezza del paragrafo che ho creato: <?php echo strlen($text); ?></p>
</body>
</html>