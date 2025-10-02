<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP PHP 1</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>
        <?php
        $prenom = "eloi";
        $age = 17;
        if ($age < 18) {
            echo "<p class=test> je suis majeur $age </p>";
        } else {
            echo "je suis majeur $age";
        }

          ?>

    </h1>
</body>
</html>
