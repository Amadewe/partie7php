<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>partie 7 exo 4 php formulaire</title>
  </head>
  <body>
    <form action="user.php" method="POST">
      <label for="firstname">Prénom : </label>
      <input type="text" name="firstname" id="firstname" required placeholder="Simon" />
      <label for="lastname">Nom : </label>
      <input type="text" name="lastname" id="lastname" required placeholder="Lecul" />
      <input type="submit" name="Envoyer" />
    </form>
  </body>
</html>
