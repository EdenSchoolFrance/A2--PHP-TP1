<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP PHP 1</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1><?php echo "Bienvenue dans mon premier TP PHP !"; ?></h1>

    <?php
        // Exercice 1
        function displayNameAndAge($prenom, $age) {
            echo ("<p>Coucou je m'appelle $prenom j'ai $age ans</p>");
        }

        displayNameAndAge("Jahel", 17);


        // Exercice 2
        function isMajeur($age) {
            if ($age >= 18) {
                echo('<p class="majeur">Je suis majeur(e)</p>');
            } else {
                echo ('<p class="mineur">Je suis mineur(e)</p>');
            }
        }

        isMajeur(13);
        isMajeur(20);

        // Exercice 3
        $arrayOfNames = ["Thomas", "Jahel", "Evernight", "Burnice", "Nolann"];

        foreach ($arrayOfNames as $name) {
            echo $name . "\n";
        }

        // Exercice 4
        $articles = [
            "Apprendre le PHP pas à pas",
            "Faire sa première requète SQL",
            "Créer sa première page web"
        ];
    ?>

    <div class="card">
        <h2>Mes articles</h2>
        <ul>
            <?php
                foreach ($articles as $article) {
                    echo "<li>$article</li>";
                }
            ?>
        </ul>
    </div>

    <!-- Exercice 5 -->
     <?php
        $usersWithAge = [
            "John" => 13,
            "Simon" => 29,
            "Mamadou" => 21,
            "Karim" => 23,
        ];


        foreach ($usersWithAge as $user => $age) {
            echo ("<p>$user a $age ans</p>");
        }
     ?>




</body>
</html>
