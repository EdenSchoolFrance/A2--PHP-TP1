<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>TP PHP 1</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <h1><?php echo "Bienvenue dans mon premier TP PHP !"; ?></h1>

    <?php
    $array = ['David' => "18ans", 'Maxime' => "17ans" , 'Sophie' => "19ans" , 'Emma' => "16ans" , 'Léa' => "20ans"];
    foreach ($array as $name => $age) {
        echo "<p>{$name} a {$age}</p>";
    }
    ?>

</body>

</html>