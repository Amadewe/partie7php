<?php
// Je crée une régex pour securiser les noms saisis dans les inputs.
$patternName = '/^([A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+)([- ]{1}[A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+){0,1}$/m';
//On utilise la fonction isset pour vérifier si les données sont bien transmises.
if(!empty($_POST['lastName'])){
    if(preg_match($patternName,$_POST['lastName'])){
  //
     $lastName = htmlspecialchars($_POST['lastName']);
   }else{
     $errorLastname = 'Veuillez indiquer un nom de famille de la forme "Dupont" ';
   }
  }else{
    $errorLastname = 'Veuillez indiquer un nom de famille';
  }
  if(!empty($_POST['firstName'])){
    if(preg_match($patternName,$_POST['firstName'])){
  //
     $firstName = htmlspecialchars($_POST['firstName']);
   }else{
     $errorFirstname = 'Veuillez indiquer un prénom de la forme "Henri" ';
   }
  }else{
    $errorFirstname = 'Veuillez indiquer un nom prénom';
  }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>phpp7e1&3</title>
  </head>
  <body>
      <p class="<?php echo isset($lastName)? 'success': 'error' ?>"><?php echo isset($lastName)? $lastName : $errorLastname ?></p>
      <p class="<?php echo isset($firstName)? 'success': 'error' ?>"><?php echo isset($firstName)? $firstName : $errorFirstname ?></p>
  </body>
</html>