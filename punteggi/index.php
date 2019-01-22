
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style.css">
    <title>punteggi</title>
  </head>
  <body>

    <?php
      /*
      Creiamo un array contenente le partite di basket di un'ipotetica tappa del
      calendario. Ogni array avrà una squadra di casa e una squadra ospite.
      Avremo poi sempre per ogni array i punti fatti dalla squadra di casa e i
      punti fatti dalla squadra in trasferta. Stampiamo a schermo tutte le
      partite con questo schema, tenendo conto che il punteggio potrebbe non
      essere disponibile
      Olimpia Milano - Cantù | 55-60
      */

      $tappa = [
        [
          'squadra_casa' => 'Torino',
          'squadra_ospite' => 'Milano',
          'punti_casa' => 80,
          'punti_ospite' => 65
          ],
        [
          'squadra_casa' => 'Roma',
          'squadra_ospite' => 'Padova',
          'punti_casa' => NULL,
          'punti_ospite' => NULL
          ],
        [
          'squadra_casa' => 'Bari',
          'squadra_ospite' => 'Catania',
          'punti_casa' => 90,
          'punti_ospite' => 82
        ],
        [
          'squadra_casa' => 'Napoli',
          'squadra_ospite' => 'Venezia',
          'punti_casa' => NULL,
          'punti_ospite' => NULL
          ]
      ];

      ?>
      <div class="punteggi">
        <h1>Tappa</h1>
        <ul>
          <?php
            foreach ($tappa as $partita) {
              $squadre = " ${partita['squadra_casa']} - ${partita['squadra_ospite']}";
              $haPunteggio = (!empty($partita['punti_casa']) && !empty($partita['punti_ospite']));
              $punteggio = ($haPunteggio) ? "${partita['punti_casa']} : ${partita['punti_ospite']}" : 'punti non disponibili';
          ?>
          <li><span><?php echo $squadre; ?></span> | <?php echo $punteggio; ?></li>
          <?php
            }
          ?>
        </ul>

      </div>


  </body>
</html>
