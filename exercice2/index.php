<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 2 partie 7 php</title>
    </head>
    <body>
        <p>Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode post.</p>
        <form action="user.php" method="POST">
            <label for="lastName"> Votre nom : </label><input type="text" name="lastName"required />
            <label for="firstName"> Votre prénom : </label><input type="text" name="firstName" required />
            <input type="submit" value="Envoyer" name="submit"/>
        </form>
    </body>
</html>