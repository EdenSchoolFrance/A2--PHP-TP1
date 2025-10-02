<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>TP PHP 1</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1><?php echo "Bienvenue dans mon premier TP PHP !"; ?></h1>
    <p><?php $prenom = "Abel";
    $age = 16;
    echo "Je m'appelle $prenom et j'ai $age ans." ?></p>
    <p <?php if ($age >= 18) {
        echo "style=\"color: green\"";
    } else {
        echo "style=\"color: red\"";
    } ?>>Je suis majeur
    </p>
</body>

</html>