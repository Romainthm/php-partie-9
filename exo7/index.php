<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Partie 9 Exercice 7</title>
</head>
<body>
  <main>
      <?php 
      $time = new DateTime();
      
      $time->add(new DateInterval('P20D'));
      ?>
        <?= 'tu a ajouté 20 jours a la date cela fait '. $time->format('d/m/Y'); ?>
  </main>
</body>
</html>
