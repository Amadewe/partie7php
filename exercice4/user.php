<?php include('regex.php'); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Partie 7 exo 4 php user</title>
  </head>
  <body>
    <!-- empty() renvoie 'true' si la variable est vide OU si elle n'existe pas. -->
    <!-- empty() renvoie 'false' si la variable existe ET n'est pas vide. -->
    <?php
    if(!empty($_POST['firstname'])){
      if(preg_match($regexName, $_POST['firstname'])){
        ?><p><?= $_POST['firstname'] ?></p><?php
      }else{
        ?><p>Merci de renseigner votre prénom correctement: commencer par une majuscule, et peut contenir 2 mots maximum séparés par un espace ou un tiret.</p><?php
      }
    }else{
      ?><p>Merci de renseigner votre prénom.</p><?php
    }

    if(!empty($_POST['lastname'])){
      if(preg_match($regexName, $_POST['lastname'])){
        ?><p><?= $_POST['lastname'] ?></p><?php
      }else{
        ?><p>Merci de renseigner votre nom correctement: commencer par une majuscule, et peut contenir 2 mots maximum séparés par un espace ou un tiret.</p><?php
      }
    }else{
      ?><p>Merci de renseigner votre nom.</p><?php
    }
   ?>
  </body>
</html>
