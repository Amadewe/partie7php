<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 1 partie 7 php</title>
    </head>
    <body>
        <p>Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode GET.</p>
        <form action="user.php" method="get">
            <label for="lastName"> Votre nom : </label><input type="text" name="lastName" />
            <label for="firstName"> Votre prénom : </label><input type="text" name="firstName" />
            <input type="submit" value="Envoyer" name="submit" />
        </form>
    </body>
</html>