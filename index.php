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
        $tableau = ["nolann1", "nolan2", "nolan3", "nolanimaginaire", "undefind"];

        foreach ($tableau as $value) {
            echo "$value ";
        }

           ?>

    </h1>
</body>
</html>
