<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>partie 9 exercice 6</title>
  </head>
  <body>
    <main>
      <?php
      $numberOfDay = cal_days_in_month(CAL_GREGORIAN, 2, 2016); 
      ?>
      <?= 'il y a ' .$numberOfDay .' jours dans le mois de fevier 2016' ?>
    </main>
  </body>
</html>
