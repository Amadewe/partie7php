<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 4 partie 7 php</title>
    </head>
    <body>
        <p>Avec le formulaire de l'exercice 2, afficher dans la page user.php les données du formulaire transmises.</p>
        <form action="user.php" method="POST">
            <label for="lastName"> Votre nom : </label><input type="text" name="lastName"/>
            <label for="firstName"> Votre prénom : </label><input type="text" name="firstName"/>
            <input type="submit" value="Envoyer" />
        </form>
    </body>
</html>