<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP PHP 1</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php 
    $prenom = "youssef";
    $age = 18;
    
    echo "
    <h1>Bienvenue dans mon premier TP PHP !</h1>
    <p>bonjour je m'appelle $prenom et j'ai $age ans</p>
    ";
    function color($age){
    if($age >= 18){
        echo '<p class="majeur">je suis majeur</p>';
    }else{
        echo '<p class="mineur">je suis mineur</p>';
    }
    }
    color($age);

    function groupeDePrénom(){
    $LesPrénoms = ["thomas <br / >", "yacine <br / >", "Nolan.D <br / >", "gabriel <br / >","bob lennon <br / >"];

    foreach ($LesPrénoms as $data) {
    echo "$data";
    }
    }
    groupeDePrénom()
    ?>
</body>
</html>
