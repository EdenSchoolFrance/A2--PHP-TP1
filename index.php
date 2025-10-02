<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php echo "TP PHP 1"; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php 
    $prenom = "Nolann";
    $age = 16;

    if ($age >= 18) {
        $class = "major";
        $minorOrMajor = "jesuis majeur";
    } else {
        $class = "minor";
        $minorOrMajor = "je suis mineur";
    }
    ?>

    <h1><?php echo "salut"; ?></h1>

    <p> <?php echo "Je suis " . $prenom . " et j ai " . $age . " ans"; ?> </p>

    <p class="<?php echo $class; ?>"><?php echo $minorOrMajor; ?></p>

    <?php 
    $prenoms = ["PafMan", "Asteflix", "Asterion", "George", "Norman"];

    foreach ($prenoms as $prenoms) {
        echo "<h3>$prenoms</h3>";
    }
    ?>

    <?php
    $articles = [
        "Apprendre PHP pas à pas",
        "Faire sa premire requète SQL ",
        "Créer sa première page web"
    ];
    ?>

    <div class="card">
        <ul>
            <?php
            foreach ($articles as $article) {
                echo "<li>$article</li>";
            }
            ?>
        </ul>
    </div>

    <?php

    $usersWithAge = [
        'Jonh' => "27 ans",
        'Simon' => "29 ans",
        'Mamadou' => "21 ans",
        'Karim' => "23 ans"
    ];

    foreach ($usersWithAge as $name => $age) {
        echo "<div class='card'>";
        echo "<p>$name a $age</p>";

        echo "carte de  $name";
        echo "</div>";
    }

    ?>

</body>
</html>
