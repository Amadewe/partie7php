<?php
$pattern = '/^([A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+)([- ]{1}[A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+){0,1}$/m';
/* on crée une variable $lastName pour ne pas rappeller $_POST['lastName'] */
$lastName = htmlspecialchars($_POST['lastName']);
$firstName = htmlspecialchars($_POST['firstName']);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 4 partie 7 php</title>
    </head>
    <body>
        <?php
        /* isset on verifie que le formulaire à bien été validé en cliquant sur le boutton envoyé qui contient le name sumbit  */
        if (isset($_POST['submit'])) {
            /* empty on verifie si l'imput est vide et si il existe */
            if (!empty($lastName)) {

                /* Si il est rempli alors on verifie la pattern  avec preg_match */
                if (preg_match($pattern, $lastName)) {
                    ?>
                    <p>Nom : <?= $lastName ?> </p>
                <?php } else { ?>
                    <p>Merci d'entrer un Nom correct <p>
                        <?php
                    }
                } else {
                    ?>
                <p>Nom : champ obligatoire</p>
            <?php
            }
             /* empty on verifie si l'imput est vide et si il existe */
            if (!empty($firstName)) {

                /* Si il est rempli alors on verifie la pattern  avec preg_match */
                if (preg_match($pattern, $firstName)) {
                    ?>
                    <p>Prénom : <?= $firstName ?> </p>
                <?php } else { ?>
                    <p>Merci d'entrer un Prénom correct <p>
                        <?php
                    }
                } else {
                    ?>
                <p>Prénom : champ obligatoire</p>
            <?php
            }
            }
            ?>
                <a href="index.php">Retour au formulaire</a>
    </body>
</html>