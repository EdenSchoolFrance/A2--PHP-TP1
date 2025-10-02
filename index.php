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
    $name = "Nohan";
    $age = 17;

    function YoungOrOld($age) {
        if ($age >= 18) {
            return "<p style='color: green'>Je suis majeur(e)</p>";
        } else {
            return "<p style='color: red'>Je suis majeur(e)</p>";
        }
    }

    echo YoungOrOld($age);
    ?>

    <?php 
    $arrayName = ["Nathan", "Lola", "Max", "Léo", "Léa"];

        foreach ($arrayName as $name) {
            echo "<p>$name</p>";
        }
        ?>

        <?php 
        $articles = [
            "Apprendre PHP pas à pas",
            "Faire sa premire requète SQL ",
            "Créer sa première page web"
        ];
        ?>

        <div class='card'>
            <h2>Articles</h2>
            <ul>
                <?php 
                foreach ($articles as $article) {
                    echo "<li>$article</li>";
                }
                ?>
            </ul>
        </div>

        <?php
        $arrayAssociatif = [
            'Jonh'=>'27 ans',
            'Simon'=>'29 ans',
            'Mamadou'=>'21 ans',
            'Karim'=>'23 ans'
        ];

        foreach ($arrayAssociatif as $name => $age) {
            echo "<p>$name a $age</p>";
        }
        ?>

</body>
</html>
