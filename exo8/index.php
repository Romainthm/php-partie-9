<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Partie 9 Exercice 8</title>
</head>
<body>
  <main>
      <?php 
      $time = new DateTime();
      
      $time->sub(new DateInterval('P22D'));
      ?>
        <?= 'tu a suprimé 22 jours a la date cela fait '. $time->format('d/m/Y'); ?>
  </main>
</body>
</html>