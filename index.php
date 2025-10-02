<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP PHP 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><?php echo "Bienvenue dans mon premier TP PHP !"; ?></h1>

    <?php $prenom = 'Mark'; $age = 20;?>
    <p><?php echo "Son prénom est " . $prenom . " et il a " . $age . " ans."?></p>

    <?php if ($age >= 18) $color = 'green'; elseif ($age <= 18) $color = 'red';?>
    <p style="color:<?php echo $color; ?>">Je suis majeur(e)</p>
    
    <?php $prenoms = ['Stan', 'Jake', 'Luke', 'Josh', 'Evan'];?>
    <?php foreach ($prenoms as $name) echo 'Le prénom est ' . $name . '. ';?>
</body>
</html>
