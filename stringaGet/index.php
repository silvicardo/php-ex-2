<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style.css">
    <title>stringaGet</title>
  </head>
  <body>

    <?php

    //url --> localhost/percorso/index.php?stringa=test (non valido)
    //url --> localhost/percorso/index.php?stringa=Boolean (valido)

      $output;
      $class;

      if (!empty($_GET['stringa']) && $_GET['stringa'] === "Boolean") {
        $output = 'Valido';
        $class ='green';
      } else {
        $output = 'Non valido';
        $class = 'red';
      }
     ?>

     <h1 class="<?php echo $class;?>"><?php echo $output; ?></h1>

  </body>
</html>
