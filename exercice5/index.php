<?php
$gender = array(1 => 'Mr', 2 => 'Mme', 3 => 'Autres');
$pattern = '/^([A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+)([- ]{1}[A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+){0,1}$/m';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 5 partie 7 php</title>
    </head>
    <body>
        <p>Créer un formulaire sur la page index.php avec :</p>
        <ul>
            <li>Une liste déroulante pour la civilité (Mr ou Mme)</li>
            <li>Un champ texte pour le nom</li>
            <li>Un champ texte pour le prénom</li>
        </ul>
        <p>Ce formulaire doit rediriger vers la page index.php.</p>
        <p>Vous avez le choix de la méthode.</p>
        <form action="index.php" method="POST">
            <select name="choiceGender">
                <!-- choix déroulant pour le genre -->
                <?php foreach ($gender as $key => $value) { ?>
                    <option value="<?= $key ?>"> <?= $value ?></option>;
                <?php } ?>
            </select>
            <label for="lastName"> Votre nom : </label><input type="text" name="lastName"/>
            <label for="firstName"> Votre prénom : </label><input type="text" name="firstName"/>
            <input type="submit" value="Envoyer" name="submit"/>
        </form>
        <?php
        /* isset on verifie si ça existe  */
        if (isset($_POST['choiceGender'])) {
            $choiceGender = htmlspecialchars($_POST['choiceGender']);
            ?>
            <p>Genre : <?= $gender[$choiceGender] ?></p>
        <?php
        }
        /* isset on verifie que le formulaire à bien été validé en cliquant sur le boutton envoyé qui contient le name sumbit  */
        if (isset($_POST['submit'])) {
            $lastName = htmlspecialchars($_POST['lastName']);
            $firstName = htmlspecialchars($_POST['firstName']);
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
    </body>
</html>