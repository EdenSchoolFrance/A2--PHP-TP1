<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP PHP 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $prenom = "Raphael";
    $age = 1;
    echo "<h1>$prenom a $age ans</h1>";
    if($age >= 18) {
        echo "<h2 style='color: green';>Je suis majeur(e)</h2>";
    }else {
        echo "<h2 style='color: red';>Je suis mineur(e)</h2>";
    }
    ?>
</body>
</html>