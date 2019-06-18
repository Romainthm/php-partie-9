<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>partie 9 exercice 2</title>
  </head>
  <body>
    <main>
     <?php
        $heure = date("H:i");
        date_default_timezone_set('Europe/Paris');
        // --- La setlocale() fonctionnne pour strftime mais pas pour DateTime->format()
        setlocale(LC_TIME, 'fr_FR.utf8','fra');// OK
        // strftime("jourEnLettres jour moisEnLettres annee") de la date courante
        echo "Date du jour : ", strftime("%A %d %B %Y");
        ?>
    </main>
  </body>
</html>
