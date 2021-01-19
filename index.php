<?php

  $nome = "Dante";
  $cognome = "Alighieri";
  $badWord = $_GET["badWord"];

  $text = "Nel mezzo del cammin di nostra vita
  mi ritrovai per una selva oscura,
  ché la diritta via era smarrita.
  È da uomo malvagio l’ingannare colla menzogna.
  Amore e cor gentil sono una cosa.
  Tre cose ci sono rimaste del paradiso: le stelle, i fiori e i bambini.";
  //$arrayText = explode(",", $text);

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>
    <!-- nome completo -->
    <h1>Nome completo: <?php echo $nome . " " . $cognome; ?></h1>
    <h2>Nome: <?php echo $nome; ?></h2>
    <h2>Cognome: <?php echo $cognome; ?></h2>
    <h3>Frase Completa</h3>
    <p><?php echo $text; ?></p>
    <!-- sostituire la badword passata in GET con tre * -->
    <h3>Frase Censurata</h3>
    <p><?php echo str_replace($badWord, "***", $text); ?></p>
    <!-- lunghezza stringa -->
    <p>Lunghezza stringa: <?php echo strlen($text); ?></p>
  </body>
</html>
