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
        /* isset on verifie si ça existe  */
        if (isset($lastName)) {
            /* empty on verifie si l'imput est vide */ 
            if (empty($lastName)) {
                ?>
                <p>Nom : champ obligatoire</p>
                <?php
            } else {
                /* Si il est rempli alors on verifie la pattern  avec preg_match */
                if (preg_match($pattern, $lastName)) {
                    ?>
                    <p>Nom : <?= $lastName ?> </p>
                <?php } else { ?>
                    <p>Merci d'entrer un Nom correct <p>
                        <?php
                    }
                }
            }
            if (isset($firstName)) {
                if (empty($firstName)) {
                    ?>
                <p>Prénom : champ obligatoire</p>
                <?php
            } else {
                if (preg_match($pattern, $firstName)) {
                    ?>
                    <p>Prénom : <?= $firstName ?></p>
                <?php } else { ?>
                    <p>Merci d'entrer un Prénom correct<p>
                        <?php
                    }
                }
            }
            ?>
    </body>
</html>