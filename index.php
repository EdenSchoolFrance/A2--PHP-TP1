<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP PHP 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><?php echo "Bienvenue dans mon premier TP PHP !"; ?></h1>

    <?php

        function displayNameAndAge($prenom, $age) {
            echo ("<p>Coucou je m'appelle $prenom j'ai $age ans</p>");
        }

        displayNameAndAge("Jahel", 17)



    ?>




</body>
</html>
