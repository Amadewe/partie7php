<?php
$genderListing = array(1 => 'Mr', 2 => 'Mme', 3 => 'Autres');
$patternName = '/^([A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+)([- ]{1}[A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+){0,1}$/m';


            /* empty on verifie si l'imput est vide et si il existe */
            if (!empty($lastName)) {
                /* Si il est rempli alors on verifie la patternName  avec preg_match */
                if (preg_match($patternName, $lastName)) {
                    $lastName = htmlspecialchars($_POST['lastName']);
                } else {
                    $errorLastname = 'Veuillez indiquer un nom de famille de la forme "Dupont" ';
                }
            } else {

                $errorLastname = 'Nom : Champ obligatoire';
            } 
        
      

            /* empty on verifie si l'imput est vide et si il existe */
            if (!empty($firstName)) {
                /* Si il est rempli alors on verifie la patternName  avec preg_match */
                if (preg_match($patternName, $firstName)) {

                    $firstName = htmlspecialchars($_POST['firstName']);
                } else {
                    $errorFirstname = 'Veuillez indiquer un prénom de la forme "Henri" ';
                }
            } else {

                $errorFirstname = 'Prénom : Champ obligatoire';
            }
        
        ?>
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
                <?php foreach ($genderListing as $key => $gender) { ?>
                    <option value="<?= $key ?>"> <?= $gender ?></option>;
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
            <p>Genre : <?= $genderListing[$choiceGender] ?></p>
            <?php
        }
?>

        <p class="<?php echo isset($lastName) ? 'success' : 'error' ?>"><?php echo isset($lastName) ? $lastName : $errorLastname ?></p>
        <p class="<?php echo isset($firstName) ? 'success' : 'error' ?>"><?php echo isset($firstName) ? $firstName : $errorFirstname ?></p>

    </body>
</html>