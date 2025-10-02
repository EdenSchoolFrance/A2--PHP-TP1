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
    $usersWithAge = ['Jonh' => "27 ans", 'Simon' => "29 ans", 'Mamadou' => "21 ans", "Karim" => "23 ans"];
    foreach ($usersWithAge as $name => $age) {
        echo "<p>$name a $age</p>";
    }
    ?>

</body>

</html>