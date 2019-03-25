<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 3 partie 7 php</title>
    </head>
    <body>
        <p>Avec le formulaire de l'exercice 1, afficher dans la page user.php les données du formulaire transmis.</p>
        <form action="user.php" method="get">
            <label for="lastName"> Votre nom : </label><input type="text" name="lastName"/>
            <label for="firstName"> Votre prénom : </label><input type="text" name="firstName" />
            <input type="submit" value="Envoyer" />
        </form>
    </body>
</html>