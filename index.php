<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP PHP 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><?php echo "Bienvenue dans mon premier TP PHP !"; ?></h1>

    <?php $prénom = 'Mark'; $age = 20;?>
    <p><?php echo "Son prénom est " . $prénom . " et il a " . $age . " ans."?></p>

    <?php if ($age >= 18) $color = 'green'; elseif ($age <= 18) $color = 'red';?>
    <p style="color:<?php echo $color; ?>">Je suis majeur(e)</p>
    
</body>
</html>
