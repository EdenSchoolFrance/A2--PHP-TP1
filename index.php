<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP PHP 1</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1><?php echo "Bienvenue dans mon premier TP PHP !"; ?></h1>

    <p>
        <?php 
        $prenom = "Nolan";
        $age = 17;

        echo "Je m'appelle $prenom et j'ai $age ans !";
        ?>
    </p>

    <p <?php echo "class='$age >= 18 ? majeur : mineur'" ?>>
        Test
    </p>

    <?php
    if ($age >= 18) {
        echo "<p class='green'>Je suis majeur(e)</p>";
    } else {
        echo "<p class='red'>Je suis mineur(e)</p>";
    }
    ?>
</body>
</html>
