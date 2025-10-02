<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP PHP 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $articles = [
"Apprendre PHP pas à pas",
"Faire sa premire requète SQL ",
"Créer sa première page web"
];
?>
        <h2>Mes articles</h2>
        <ul>
            <?php 
            foreach($articles as $article) {
                echo "<li>
                    <div class='card'>
                    $article
                    </div>
                </li>";
            }
            ?>
        </ul>

</body>
</html>