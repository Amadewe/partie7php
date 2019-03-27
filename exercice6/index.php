<?php
$genderListing = array(1 => 'Mr', 2 => 'Mme', 3 => 'Autres');
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


        <?php if (empty($_POST['LastName']) && empty($_POST['firstName'])) { ?>
        
            <form action="index.php" method="POST">
                <select name="choiceGender">
                    <!-- choix déroulant pour le genre -->
                    <?php foreach ($genderListing as $key => $gender) { ?>
                        <option value="<?= $key ?>"> <?= $gender ?></option>;
                    <?php } ?>
                </select>
                <label for="lastName"> Votre nom : </label><input type="text" name="lastName"/>
                <label for="firstName"> Votre prénom : </label><input type="text" name="firstName"/>
                <input type="submit" value="Envoyer" name="submit"/>
            </form>
    
        <?php } else {
            
            
            /* isset on verifie si ça existe  */
            if (isset($_POST['choiceGender'])) {
                $choiceGender = htmlspecialchars($_POST['choiceGender']);
                ?>
                <p>Genre : <?= $genderListing[$choiceGender] ?></p>
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
        }
        ?>
    </body>
</html>