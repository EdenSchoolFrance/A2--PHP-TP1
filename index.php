<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>TP PHP 1</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1><?php echo "Bienvenue dans mon premier TP PHP !"; ?></h1>

    <?php
    $names = ["Abel", "Raphael", "Warren", "Davide", "Yacine"];
    foreach ($names as $name) {
        echo "<p>$name</p>";
    }
    ?>
</body>

</html>