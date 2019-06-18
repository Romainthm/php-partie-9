<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>partie 9 exercice 5</title>
  </head>
  <body>
    <main>
            <!--<p>Nombre de jour entre les deux dates : <?= $res ?></p>-->
            <?php
            $nowDate = new DateTime();
            $datePast = new DateTime('16-05-2016');
            echo $nowDate->diff($datePast)->format('il y a %a jours qui sépare les deux date.');
            ?>
    </main>
  </body>
</html>
