<?php
$gender = array(1 => 'Mr', 2 => 'Mme', 3 => 'Autres');
$pattern = '/^([A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+)([- ]{1}[A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+){0,1}$/m';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 7 partie 7 php</title>
    </head>
    <body>
        <p>Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.</p>
        <?php if (empty($_POST['submit'])) { ?>
            <form action="index.php" method="post" enctype="multipart/form-data">
                <select name="choiceGender">
                    <!-- choix déroulant pour le genre -->
                    <?php foreach ($gender as $key => $value) { ?>
                        <option value="<?= $key ?>"> <?= $value ?></option>;
                    <?php } ?>
                </select>
                <label for="lastName"> Votre nom : </label><input type="text" name="lastName" />
                <label for="firstName"> Votre prénom : </label><input type="text" name="firstName" />
                <label for="file"> Fichier à télécharger : </label><input type="file" name="file" />
                <input type="submit" name="submit" value="Envoyer" />
            </form>
            <?php
        } else {
            /* Nous n'avons pas besoin de condition car il prend le 1er choix de la liste déroulante par défaut */
            $choiceGender = htmlspecialchars($_POST['choiceGender']);
            ?>
            <p>Genre : <?= $gender[$choiceGender] ?></p>
            <?php
            if (isset($_POST['lastName'])) {
                $lastName = htmlspecialchars($_POST['lastName']);
                ?>
                <!--empty on verifie si l'imput est vide -->
                <?php if (empty($lastName)) {
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
                if (isset($_POST['firstName'])) {
                    $firstName = htmlspecialchars($_POST['firstName']);
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

                if (empty($_FILES['file'])) {
                    ?>
                <p>Merci de selectionner un fichier.</p>
            <?php } else { ?>
                <?php $file = $_FILES['file']; ?>
                <p>Fichier : <?= $file['name'] ?></p>
                <?php
            }
        }
        ?>
    </body>
</html>