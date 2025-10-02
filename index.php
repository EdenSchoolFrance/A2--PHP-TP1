<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP PHP 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><?php
    $tab = ["Jean", "Marie", "Pierre", "Sophie", "Gary"];
    foreach($tab as $value) {
        echo "Current element of \$array: $value.<br>";
    }
    ?></h1>
</body>
</html>
