<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP PHP 1</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1><?php echo "Bienvenue dans mon premier TP PHP !"; ?></h1>

    <?php
        // Exercice 1
        function displayNameAndAge($prenom, $age) {
            echo ("<p>Coucou je m'appelle $prenom j'ai $age ans</p>");
        }

        displayNameAndAge("Jahel", 17);


        // Exercice 2
        function isMajeur($age) {
            if ($age >= 18) {
                echo('<p class="majeur">Je suis majeur(e)</p>');
            } else {
                echo ('<p class="mineur">Je suis mineur(e)</p>');
            }
        }

        isMajeur(13);
        isMajeur(20)
    ?>




</body>
</html>
