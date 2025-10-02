<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP PHP 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $prenoms = ["Alice", "Bob", "Chloé", "David", "Emma"];
        foreach($prenoms as $prenom) {
            echo "<p>$prenom</p>";
        }
    ?>
</body>
</html>