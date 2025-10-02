<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP PHP 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $userWithAge = [ 'Jonh' => 27, 'Simon' => 29, 'Mamadou' => 21, 'Karim' => 23];
        foreach($userWithAge as $name => $age) {
            echo "<p>$name a $age ans</p>";
        }
    ?>
</body>
</html>