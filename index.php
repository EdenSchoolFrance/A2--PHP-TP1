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

    <p > <?php echo "Je suis " . $prenom . " et j ai " . $age . " ans"; ?> </p>

    <p class="<?php echo $class; ?>"><?php echo $minorOrMajor; ?></p>

</body>
</html>
