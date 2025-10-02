<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP PHP 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

    echo "<h1>Bienvenue dans mon premier TP PHP !</h1>";

    $name = "Nohan";
    $age = 17;

    function YoungOrOld($age) {
        if ($age >= 18) {
            return "<p style='color: green'>Je suis majeur(e)</p>";
        } else {
            return "<p style='color: red'>Je suis majeur(e)</p>";
        }
    }

    echo YoungOrOld($age);

    ?>
</body>
</html>
