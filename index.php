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
    
    $users = ['Théo' => "22 ans", 'Raimon' => "22 ans", "Mathéo" => "16 ans"];
    
    foreach ($users as $name => $age) {
        echo "<p>$name a $age</p>";
    }

    ?>
</body>

</html>