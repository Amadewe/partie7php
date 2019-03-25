<?php
$gender = array(1 => 'Mr', 2 => 'Mme', 3 => 'Autres');
$pattern = '/^([A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+)([- ]{1}[A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+){0,1}$/m';
/* on crée une variable $lastName pour ne pas rappeller $_POST['lastName'] */
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 6 partie 7 php</title>
    </head>
    <body>
        <p>Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, le formulaire ne doit pas être affiché. </p>
        <p>Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.</p>
        <p>Utiliser qu'une seule page.</p>


        <?php if (empty($_POST['submit'])) { ?>
            <form action="index.php" method="post">
                <select name="choiceGender">
                    <!-- choix déroulant pour le genre -->

                    <?php foreach ($gender as $key => $value) { ?>
                        <option value="<?= $key ?>"> <?= $value ?></option>;
                    <?php } ?>
                </select>
                <label for="lastName"> Votre nom : </label><input type="text" name="lastName" required />
                <label for="firstName"> Votre prénom : </label><input type="text" name="firstName" required />
                <input type="submit" name="submit" value="Envoyer" />
            </form>
        <?php } else { ?>


            <?php
            /* isset on verifie si ça existe  */
            if (isset($_POST['choiceGender'])) {
                $choiceGender = htmlspecialchars($_POST['choiceGender']);
                ?>
                <p>Genre : <?= $gender[$choiceGender] ?></p>
            <?php } ?>

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
                        <!-- il prend la dernière valeur de mon tableau à refaire --> 

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
            }
            ?>
    </body>
</html>