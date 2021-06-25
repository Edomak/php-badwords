<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php

$paragraph = "A Marcellus Wallace non piace farsi fottere da anima viva tranne che dalla signora Wallace! - Jules Winnfield, Pulp Fiction";

$badWord = $_GET["badword"];

$replaceWordPar = str_replace($badWord, "***", $paragraph);

$newLengthString = strlen($replaceWordPar);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    <h1>PHP BADWORDS</h1>

    <h3>Paragrafo da censurare: <?php echo $paragraph ?></h3>
    <h3>Lunghezza del paragrafo: <?php echo strlen($paragraph) ?> caratteri.</h3>

    <h2>Il paragrafo censurato diventa: <?php echo $replaceWordPar ?> </h2>
    <h2>Il nuovo paragrafo è lungo: <?php echo $newLengthString ?> caratteri </h2>
    
</body>
</html>