<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP PHP 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><?php
    $prenom = "Jean";
    $age = 53;
    if ($age >= 18) {
        echo "<p style='color: lightgreen;'>Bonjour $prenom, vous êtes majeur.</p>";
    } else {
        echo "<p style='color: red;'>Bonjour $prenom, vous êtes mineur.</p>";
    }
    ?></h1>
</body>
</html>
